<?php

namespace fados\ChartjsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $rootNode = $treeBuilder->root('chartjs');
        $rootNode
            ->children()
                ->arrayNode('animation')
                      ->children()
                          ->scalarNode('duration')
                                ->defaultValue('1000')
                          ->end()
                          ->scalarNode('easing')
                                ->defaultValue('easeOutQuart')
                          ->end()
                      ->end()
                ->end()
            ->end()
        ->end();

        return $treeBuilder;
    }
}