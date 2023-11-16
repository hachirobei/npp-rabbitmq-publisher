<?php

namespace hachirobei\NPPRabbitMQPublisher;

use Illuminate\Support\Facades\Facade;

class RabbitMQFacade extends Facade {
    protected static function getFacadeAccessor() {
        return 'rabbitmq';
    }
}