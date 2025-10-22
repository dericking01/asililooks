<?php

namespace Botble\Blog\Widgets\Fronts;

class RecentPosts extends Posts
{
    public function __construct()
    {
        parent::__construct();

        $this->setConfigs([
            'name' => trans('plugins/blog::posts.widget_posts_recent'),
            'description' => trans('plugins/blog::posts.widget_posts_recent_description'),
            'type' => 'recent',
        ]);
    }
}
