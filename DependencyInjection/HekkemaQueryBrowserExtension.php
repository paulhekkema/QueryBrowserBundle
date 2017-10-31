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

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class HekkemaQueryBrowserExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        //$container->setParameter('hekkema_querybrowser.pagesize', $config['pagesize']);
        //$container->setParameter('hekkema_querybrowser.pagesize2', $config['pagesize']);
        $container->setParameter('hekkema_querybrowser', [
        	'a' => 10,
        	'fggd' => 'fdsfsdf'
        ]);

        //$loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        //$loader->load('services.yml');
    }
}