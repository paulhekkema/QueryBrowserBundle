<?php

/**
 * QueryBrowser
 *
 * @link      https://gitlab.kapma.nl/paulhekkema/QueryBrowserBundle
 * @license   MIT (see LICENSE for details)
 * @author    Paul Hekkema <paul@hekkema.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Hekkema\QueryBrowserBundle;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Factory for creating a new QueryBrowser.
 */
class Factory
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function create($sourceObject)
    {

        //print_r($this->container->getParameter('hekkema_querybrowser'));



        return \Hekkema\QueryBrowser\Factory::create($sourceObject);
    }
}
