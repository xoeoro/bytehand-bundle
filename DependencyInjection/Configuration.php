<?php
namespace Xoeoro\BytehandBundle\DependencyInjection;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('xoeoro_bytehand');

        $rootNode
            ->children()
                ->scalarNode('id')->defaultValue(null)->end()
                ->scalarNode('key')->defaultValue(null)->end()
                ->scalarNode('from')->defaultValue('SMS-INFO')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}