<?php


namespace fados\ChartjsBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;

class ChartjsExtension  extends Extension
{
    /*
     * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
     * Chapter 12 How to Load Service Configuration inside a Bundle
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        //Get parameters from config.yml
        $container->setParameter('chartjs.animation', $config['animation']);
        $container->setParameter('chartjs.layout', $config['layout']);

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}