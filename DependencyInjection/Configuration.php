<?php

/**
 * QueryBrowserBundle
 *
 * @link      https://gitlab.kapma.nl/paulhekkema/QueryBrowserBundle
 * @license   MIT (see LICENSE for details)
 * @author    Paul Hekkema <paul@hekkema.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace PaulHekkema\QueryBrowserBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('paulhekkema_querybrowser');
        $rootNode
            ->children()
                ->arrayNode('default')
                    ->isRequired()
                    ->children()
                        ->scalarNode('sender')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('sender_name')->defaultNull()->end()
                        ->scalarNode('subaccount')->defaultNull()->end()
                    ->end()
                ->end()
                ->scalarNode('api_key')->defaultNull()->end()
                ->scalarNode('disable_delivery')->defaultFalse()->end()
                ->scalarNode('debug')->defaultFalse()->end()
                ->arrayNode('proxy')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->booleanNode('use')->defaultFalse()->end()
                        ->scalarNode('host')->defaultNull()->end()
                        ->scalarNode('port')->defaultNull()->end()
                        ->scalarNode('user')->defaultNull()->end()
                        ->scalarNode('password')->defaultNull()->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}