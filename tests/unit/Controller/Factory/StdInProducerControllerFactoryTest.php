<?php

namespace RabbitMqModule\Controller\Factory;

class StdInProducerControllerFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testFactory()
    {
        $container = $this->getMockBuilder('Interop\Container\ContainerInterface')
            ->getMock();

        $factory = new StdInProducerControllerFactory();
        $controller = $factory($container, 'service-name');

        static::assertInstanceOf('RabbitMqModule\Controller\StdInProducerController', $controller);
    }
}
