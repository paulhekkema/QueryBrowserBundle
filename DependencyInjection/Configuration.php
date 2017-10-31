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

namespace Hekkema\QueryBrowserBundle\DependencyInjection;

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
        $rootNode = $treeBuilder->root('hekkema_querybrowser');
        $rootNode
            ->children()
                ->scalarNode('pagesize')->defaultNull()->end()
            ->end();

        return $treeBuilder;
    }
}