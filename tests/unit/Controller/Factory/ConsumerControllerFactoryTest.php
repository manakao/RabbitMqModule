<?php

namespace RabbitMqModule\Controller\Factory;

class ConsumerControllerFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testFactory()
    {
        $container = $this->getMockBuilder(\Interop\Container\ContainerInterface::class)
            ->getMock();

        $factory = new ConsumerControllerFactory();
        $controller = $factory($container, 'service-name');

        static::assertInstanceOf('RabbitMqModule\Controller\ConsumerController', $controller);
    }
}
