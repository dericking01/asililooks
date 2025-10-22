<?php

namespace Botble\Base\Services;

use Botble\Base\Events\CacheCleared;
use Botble\Media\Facades\RvMedia;
use Closure;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ClearCacheService
{
    public function __construct(protected Application $app, protected Filesystem $files)
    {
    }

    public static function make(): self
    {
        return app(self::class);
    }

    public function clearFrameworkCache(): void
    {
        Event::dispatch('cache:clearing');

        Cache::flush();

        Event::dispatch('cache:cleared');
        Event::dispatch(new CacheCleared('framework'));
    }

    public function clearGoogleFontsCache(): void
    {
        if (! config('core.base.general.google_fonts_enabled_cache')) {
            return;
        }

        if ($this->files->isDirectory($fontPath = Storage::path('fonts'))) {
            $this->files->deleteDirectory($fontPath);
        }
    }

    public function clearBootstrapCache(): void
    {
        foreach ($this->files->glob($this->app->bootstrapPath('cache/*.php')) as $view) {
            $this->files->delete($view);
        }
    }

    public function clearCompiledViews(): void
    {
        foreach ($this->files->glob(config('view.compiled') . '/*.php') as $view) {
            $this->files->delete($view);
        }
    }

    public function clearConfig(): void
    {
        $this->files->delete($this->app->getCachedConfigPath());
    }

    public function clearRoutesCache(): void
    {
        foreach ($this->files->glob($this->app->bootstrapPath('cache/*')) as $cacheFile) {
            if (Str::contains($cacheFile, 'cache/routes-v7')) {
                $this->files->delete($cacheFile);
            }
        }
    }

    public function clearLogs(): void
    {
        if (! $this->files->isDirectory($logPath = storage_path('logs'))) {
            return;
        }

        foreach ($this->files->glob($logPath . '/*.log') as $file) {
            $this->files->delete($file);
        }
    }

    public function clearPackagesCache(): void
    {
        $this->files->delete($this->app->getCachedPackagesPath());
    }

    public function clearServicesCache(): void
    {
        $this->files->delete($this->app->getCachedServicesPath());
    }

    public function clearPurifier(): void
    {
        $purifierPath = config('purifier.cachePath');

        if (! $purifierPath || ! $this->files->isDirectory($purifierPath)) {
            return;
        }

        $this->files->deleteDirectories($purifierPath);
    }

    public function clearDebugbar(): void
    {
        $debugbarPath = config('debugbar.storage.path');

        if (! $debugbarPath || ! $this->files->isDirectory($debugbarPath)) {
            return;
        }

        $this->files->deleteDirectories($debugbarPath);
    }

    public function purgeAll(): void
    {
        $this->clearFrameworkCache();
        $this->clearCompiledViews();
        $this->clearBootstrapCache();
        $this->clearRoutesCache();
        $this->clearConfig();
        $this->clearLogs();
        $this->clearPurifier();
        $this->clearDebugbar();

        RvMedia::refreshCache();

        Event::dispatch(new CacheCleared('all'));
    }

    public function cacheConfig(): void
    {
        $configPath = $this->app->getCachedConfigPath();

        $this->files->delete($configPath);

        $config = $this->app['config']->all();

        $config = $this->removeSensitiveConfigData($config);

        $this->files->put(
            $configPath,
            '<?php return ' . var_export($config, true) . ';' . PHP_EOL
        );
    }

    protected function removeSensitiveConfigData(array $config): array
    {
        array_walk_recursive($config, function (&$value): void {
            if ($value instanceof Closure) {
                $value = null;
            }
        });

        return $config;
    }

    public function cacheRoutes(): void
    {
        $this->clearRoutesCache();
    }

    public function cacheEvents(): void
    {
        $eventsPath = $this->app->bootstrapPath('cache/events.php');

        $this->files->delete($eventsPath);
    }

    public function cacheViews(): void
    {
        $this->clearCompiledViews();

        $viewPaths = config('view.paths');

        foreach ($viewPaths as $path) {
            if ($this->files->isDirectory($path)) {
                $this->compileViewsIn($path);
            }
        }
    }

    protected function compileViewsIn(string $path): void
    {
        $compiler = $this->app['blade.compiler'];

        foreach ($this->files->allFiles($path) as $file) {
            if (Str::endsWith($file->getFilename(), '.blade.php')) {
                $compiler->compile($file->getRealPath());
            }
        }
    }

    public function runOptimization(): array
    {
        $results = [];
        $optimized = [];

        try {
            $this->clearConfig();
            $this->clearRoutesCache();
            $this->clearCompiledViews();

            try {
                $this->cacheConfig();
                $optimized[] = trans('core/base::cache.optimization.messages.config_cached');
                $results['config_cached'] = true;
            } catch (Exception $e) {
                $results['config_error'] = $e->getMessage();
            }

            $optimized[] = trans('core/base::cache.optimization.messages.routes_cleared');

            try {
                $this->cacheViews();
                $optimized[] = trans('core/base::cache.optimization.messages.views_compiled');
                $results['views_cached'] = true;
            } catch (Exception $e) {
                $results['views_error'] = $e->getMessage();
            }

            $this->clearFrameworkCache();
            $optimized[] = trans('core/base::cache.optimization.messages.framework_cache_cleared');

            $results['success'] = true;
            $results['message'] = trans('core/base::cache.optimization.messages.optimization_completed', ['details' => implode(', ', $optimized)]);
        } catch (Exception $e) {
            $results['success'] = false;
            $results['message'] = trans('core/base::cache.optimization.messages.optimization_failed', ['error' => $e->getMessage()]);
        }

        return $results;
    }

    public function clearOptimization(): array
    {
        $results = [];

        try {
            $this->clearConfig();
            $results['config_cleared'] = true;

            $this->clearRoutesCache();
            $results['routes_cleared'] = true;

            $this->clearCompiledViews();
            $results['views_cleared'] = true;

            $results['success'] = true;
            $results['message'] = trans('core/base::cache.optimization.clear.success_msg');
        } catch (Exception $e) {
            $results['success'] = false;
            $results['message'] = trans('core/base::cache.optimization.messages.clear_failed', ['error' => $e->getMessage()]);
        }

        return $results;
    }
}
