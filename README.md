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


To ensure the Laravel RabbitMQ package works correctly, your PHP environment must meet the following requirements:

PHP Sockets Extension: This extension is necessary for network communication with RabbitMQ. To enable it, ensure the following line is present and uncommented in your php.ini file:

extension=sockets

If you're unsure whether this extension is enabled, create a PHP file with <?php phpinfo(); ?> and access it through your web server to check your PHP configuration.

PHP BCMath Extension: Required for precise floating-point arithmetic operations. To enable it, ensure this line is in your php.ini file:

extension=bcmath

You can verify if it's enabled through the phpinfo() output as well.

After making any changes to php.ini, remember to restart your web server for the changes to take effect.


Usage

Here is a basic example of how to use the package:

use hachirobei\NPPRabbitMQPublisher\RabbitMQFacade as RabbitMQ;

$message = 'Your message here';
$queueName = 'your_queue_name';

RabbitMQ::publish($message, $queueName);

Make sure to replace $message and $queueName with your actual message and queue name.

Contributing

Contributions to the package are welcome! Please feel free to submit pull requests or create issues for bugs and feature requests.

