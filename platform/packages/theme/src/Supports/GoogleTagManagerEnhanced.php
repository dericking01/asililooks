<?php

namespace Botble\Theme\Supports;

use Illuminate\Support\Facades\Log;

class GoogleTagManagerEnhanced
{
    public static function renderGoogleTagManagerScript(): string
    {
        try {
            $debugMode = (bool) setting('gtm_debug_mode', false);
            $renderType = setting('google_tag_manager_type');

            if ($renderType === 'code') {
                $renderType = 'custom';
            }

            $script = match ($renderType) {
                'custom' => self::renderCustomTracking($debugMode),
                'gtm' => self::renderGtmContainer($debugMode),
                'id' => self::renderGoogleAnalytics($debugMode),
                default => self::renderAutoDetect($debugMode),
            };

            if ($debugMode && $script) {
                $script = self::wrapWithDebugMode($script);
            }

            return $script;
        } catch (\Throwable $e) {
            Log::error('GTM Script Rendering Error: ' . $e->getMessage());

            if (app()->hasDebugModeEnabled()) {
                return '';
            }

            return '';
        }
    }

    protected static function renderCustomTracking(bool $debugMode): string
    {
        $customTrackingHeaderJs = setting('custom_tracking_header_js') ?: setting('google_tag_manager_code');

        if (! $customTrackingHeaderJs) {
            return '';
        }

        if ($debugMode) {
            Log::info('GTM: Loading custom tracking code');
        }

        return trim($customTrackingHeaderJs);
    }

    protected static function renderGtmContainer(bool $debugMode): string
    {
        $gtmContainerId = setting('gtm_container_id');

        if (! $gtmContainerId) {
            return '';
        }

        if ($debugMode) {
            Log::info("GTM: Loading container ID: {$gtmContainerId}");
        }

        $debugParam = $debugMode ? '&gtm_debug=x&gtm_auth=&gtm_preview=env-1&gtm_cookies_win=x' : '';

        $errorHandler = $debugMode ? "
                j.onerror = function() {
                    console.warn('GTM container could not be loaded: $gtmContainerId. This may be normal if the container ID is for testing or not yet published.');
                    if (window.gtmErrorCallback) {
                        window.gtmErrorCallback('$gtmContainerId');
                    }
                };
                j.onload = function() {
                    console.log('GTM container loaded successfully: $gtmContainerId');
                    window.gtmLoaded = true;
                };" : '';

        return trim(
            <<<HTML
            <!-- Google Tag Manager -->
            <script>
            (function(w,d,s,l,i){
                w[l]=w[l]||[];
                w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
                var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
                j.async=true;
                j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl+'$debugParam';$errorHandler
                f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','$gtmContainerId');
            </script>
            <!-- End Google Tag Manager -->
            HTML
        );
    }

    protected static function renderGoogleAnalytics(bool $debugMode): string
    {
        $googleTagManagerId = setting('google_tag_manager_id', setting('google_analytics'));

        if (! $googleTagManagerId) {
            return '';
        }

        if ($debugMode) {
            Log::info("GTM: Loading Google Analytics ID: {$googleTagManagerId}");
        }

        $debugConfig = $debugMode ? "gtag('config', '{$googleTagManagerId}', { 'debug_mode': true });" : "gtag('config', '{$googleTagManagerId}');";

        $errorHandler = $debugMode ?
            "onerror=\"console.warn('Google Analytics could not be loaded: $googleTagManagerId')\"
                onload=\"console.log('Google Analytics loaded successfully: $googleTagManagerId')\"" : '';

        return trim(
            <<<HTML
            <!-- Google Analytics -->
            <script async defer src='https://www.googletagmanager.com/gtag/js?id=$googleTagManagerId'
                $errorHandler>
            </script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){
                  if (window.gtmDebugMode) {
                      console.log('GTM Event:', arguments);
                  }
                  dataLayer.push(arguments);
              }
              gtag('js', new Date());
              $debugConfig
            </script>
            <!-- End Google Analytics -->
            HTML
        );
    }

    protected static function renderAutoDetect(bool $debugMode): string
    {
        $gtmContainerId = setting('gtm_container_id');
        if ($gtmContainerId) {
            return self::renderGtmContainer($debugMode);
        }

        $customCode = setting('custom_tracking_header_js') ?: setting('google_tag_manager_code');
        if ($customCode) {
            return self::renderCustomTracking($debugMode);
        }

        $googleTagManagerId = setting('google_tag_manager_id', setting('google_analytics'));
        if ($googleTagManagerId) {
            return self::renderGoogleAnalytics($debugMode);
        }

        return '';
    }

    protected static function wrapWithDebugMode(string $script): string
    {
        return <<<HTML
        <script>
            window.gtmDebugMode = true;
            console.log('%c GTM Debug Mode Enabled ', 'background: #4CAF50; color: white; padding: 2px 5px; border-radius: 3px;');
            
            (function() {
                var originalPush = Array.prototype.push;
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push = function() {
                    console.log('%c GTM Event ', 'background: #2196F3; color: white; padding: 2px 5px; border-radius: 3px;', arguments);
                    return originalPush.apply(this, arguments);
                };
            })();
            
            window.addEventListener('load', function() {
                setTimeout(function() {
                    if (window.gtmLoaded || typeof google_tag_manager !== 'undefined') {
                        console.log('%c ✓ GTM Loaded Successfully ', 'background: #4CAF50; color: white; padding: 2px 5px; border-radius: 3px;');
                    } else if (typeof gtag === 'function') {
                        console.log('%c ✓ Google Analytics Loaded Successfully ', 'background: #4CAF50; color: white; padding: 2px 5px; border-radius: 3px;');
                    } else if (window.dataLayer && window.dataLayer.length > 0) {
                        console.info('%c ℹ DataLayer is active but GTM/Analytics script may still be loading ', 'background: #2196F3; color: white; padding: 2px 5px; border-radius: 3px;');
                    } else {
                        console.info('%c ℹ No tracking scripts detected. This is normal if tracking is disabled. ', 'background: #9E9E9E; color: white; padding: 2px 5px; border-radius: 3px;');
                    }
                }, 2000);
            });
        </script>
        $script
        HTML;
    }

    public static function renderGoogleTagManagerNoscript(): string
    {
        try {
            $renderType = setting('google_tag_manager_type');

            if ($renderType === 'code') {
                $renderType = 'custom';
            }

            return match ($renderType) {
                'custom' => self::renderCustomNoscript(),
                'gtm' => self::renderGtmNoscript(),
                default => self::renderAutoDetectNoscript(),
            };
        } catch (\Throwable $e) {
            Log::error('GTM Noscript Rendering Error: ' . $e->getMessage());

            return '';
        }
    }

    protected static function renderCustomNoscript(): string
    {
        $customTrackingBodyHtml = setting('custom_tracking_body_html');

        return $customTrackingBodyHtml ? trim($customTrackingBodyHtml) : '';
    }

    protected static function renderGtmNoscript(): string
    {
        $gtmContainerId = setting('gtm_container_id');

        if (! $gtmContainerId) {
            return '';
        }

        return trim(
            <<<HTML
            <!-- Google Tag Manager (noscript) -->
            <noscript>
                <iframe src="https://www.googletagmanager.com/ns.html?id=$gtmContainerId"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe>
            </noscript>
            <!-- End Google Tag Manager (noscript) -->
            HTML
        );
    }

    protected static function renderAutoDetectNoscript(): string
    {
        $gtmContainerId = setting('gtm_container_id');
        if ($gtmContainerId) {
            return self::renderGtmNoscript();
        }

        $customTrackingBodyHtml = setting('custom_tracking_body_html');
        if ($customTrackingBodyHtml) {
            return self::renderCustomNoscript();
        }

        return '';
    }
}
