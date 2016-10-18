<?php

namespace RabbitMqModule\Controller\Factory;

class ConsumerControllerFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testFactory()
    {
        $serviceLocator = $this->getMockBuilder('Zend\ServiceManager\ServiceManager')
            ->getMock();
        $pluginManager = $this->getMockBuilder('Zend\ServiceManager\AbstractPluginManager')
            ->disableOriginalConstructor()
            ->getMock();

        $pluginManager->method('getServiceLocator')->willReturn($serviceLocator);

        $factory = new ConsumerControllerFactory();
        $controller = $factory->createService($pluginManager);

        static::assertInstanceOf('RabbitMqModule\Controller\ConsumerController', $controller);
    }
}
