<?php

namespace EmanueleMinotto\EmbedlyBundle\Tests\DependencyInjection;

use EmanueleMinotto\EmbedlyBundle\DependencyInjection\EmbedlyExtension;
use PHPUnit_Framework_TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @coversDefaultClass \EmanueleMinotto\EmbedlyBundle\DependencyInjection\EmbedlyExtension
 */
class EmbedlyExtensionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \Symfony\Component\DependencyInjection\ContainerBuilder
     */
    private $container;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->container = new ContainerBuilder();
        $extension = new EmbedlyExtension();

        $this->container->setParameter('embedly.api_key', $_ENV['api_key']);

        $this->container->registerExtension($extension);
        $this->container->loadFromExtension($extension->getAlias());
        $this->container->compile();
    }

    /**
     * @covers ::load
     */
    public function testParameters()
    {
        $this->assertTrue($this->container->hasParameter('embedly.api_key'));
    }

    /**
     * @covers ::load
     */
    public function testService()
    {
        $this->assertTrue($this->container->has('embedly'));
        $this->assertInstanceOf('EmanueleMinotto\\Embedly\\Client', $this->container->get('embedly'));
    }
}
