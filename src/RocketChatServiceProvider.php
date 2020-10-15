<?php

namespace Erdinhrmwn\RocketChat;

use Illuminate\Support\ServiceProvider;

class RocketChatServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/rocket_chat.php' => config_path('rocket_chat.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("rocket-chat", \Erdinhrmwn\RocketChat\Entities\RocketChat::class);
        $this->app->bind("rc-user", \Erdinhrmwn\RocketChat\Entities\User::class);
        $this->app->bind("rc-setting", \Erdinhrmwn\RocketChat\Entities\Setting::class);
        $this->app->bind("rc-channel", \Erdinhrmwn\RocketChat\Entities\Channel::class);
        $this->app->bind("rc-group", \Erdinhrmwn\RocketChat\Entities\Group::class);
        $this->app->bind("rc-im", \Erdinhrmwn\RocketChat\Entities\Im::class);
        $this->app->bind("rc-chat", \Erdinhrmwn\RocketChat\Entities\Chat::class);
        $this->app->bind("rc-integration", \Erdinhrmwn\RocketChat\Entities\Integration::class);
        $this->app->bind("rc-livechat", \Erdinhrmwn\RocketChat\Entities\Livechat::class);
    }
}
