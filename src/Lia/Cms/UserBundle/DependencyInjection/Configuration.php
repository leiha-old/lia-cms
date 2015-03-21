<?php

namespace Lia\Cms\UserBundle\DependencyInjection;

use Lia\KernelBundle\DependencyInjection\ConfigurationBase;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration
    extends ConfigurationBase
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('lia_cms_user');

        $rootNode
            ->children()
            ->arrayNode('form')
            ->children()
            ->arrayNode('registration')
            ->children()
            ->scalarNode('class')
            ->isRequired()->cannotBeEmpty()
            ->end()
            ->end()
            ->end()
            ->arrayNode('invitation')
            ->children()
            ->scalarNode('class')->cannotBeEmpty()
            ->isRequired()
            ->end()
            ->scalarNode('transformer')->cannotBeEmpty()
            ->isRequired()
            ->end()
            ->end()
            ->end()
            ->end()
            ->end()
            ->end()
        ;

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}
