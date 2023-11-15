<?php

namespace hachirobei\LaravelRabbitMQ;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RabbitMQService {
    protected $connection;
    protected $channel;

    public function __construct($config) {
        $this->connection = new AMQPStreamConnection(
            $config['host'],
            $config['port'],
            $config['user'],
            $config['password']
        );
        $this->channel = $this->connection->channel();
    }

    public function publish($messageBody, $queueName) {
        $this->channel->queue_declare($queueName, false, true, false, false);
        $msg = new AMQPMessage($messageBody);
        $this->channel->basic_publish($msg, '', $queueName);
    }

    public function close() {
        $this->channel->close();
        $this->connection->close();
    }
}