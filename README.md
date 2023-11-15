# Laravel RabbitMQ Package

This package provides a simple and effective way to integrate RabbitMQ into Laravel applications. It offers easy setup for RabbitMQ connections and allows you to publish messages to RabbitMQ queues directly from Laravel.

## Features

- Easy setup and configuration of RabbitMQ with Laravel.
- Facilitates publishing messages to RabbitMQ queues.
- Supports dynamic queue configuration.
- Utilizes Laravel's built-in features for seamless integration.

## Installation

To install the package, run the following command in your Laravel project:

```bash
composer require hachirobei/npp-rabbitmq-publisher

Configuration

After installation, publish the configuration file with:

php artisan vendor:publish --provider="hachirobei\NPPRabbitMQPublisher\RabbitMQServiceProvider"

This will publish a rabbitmq.php config file in your config directory. You can adjust the configuration as needed.

Environment Setup

Ensure your .env file contains the necessary settings for RabbitMQ:

RABBITMQ_HOST=your-rabbitmq-host
RABBITMQ_PORT=5672
RABBITMQ_USER=your-username
RABBITMQ_PASSWORD=your-password

Usage

Here is a basic example of how to use the package:

use hachirobei\NPPRabbitMQPublisher\RabbitMQFacade as RabbitMQ;

$message = 'Your message here';
$queueName = 'your_queue_name';

RabbitMQ::publish($message, $queueName);

Make sure to replace $message and $queueName with your actual message and queue name.

Contributing

Contributions to the package are welcome! Please feel free to submit pull requests or create issues for bugs and feature requests.