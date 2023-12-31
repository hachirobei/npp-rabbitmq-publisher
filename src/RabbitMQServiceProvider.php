<?php

namespace hachirobei\NPPRabbitMQPublisher;

use Illuminate\Support\ServiceProvider;

class RabbitMQServiceProvider extends ServiceProvider {
    public function register() {

        $this->mergeConfigFrom(
            __DIR__.'/../config/rabbitmq.php', 'rabbitmq'
        );
        
        $this->app->singleton('rabbitmq', function ($app) {
            return new RabbitMQService(config('rabbitmq'));
        });
    }

    public function boot() {
        $this->publishes([
            __DIR__.'/../config/rabbitmq.php' => config_path('rabbitmq.php'),
        ]);
    }
}