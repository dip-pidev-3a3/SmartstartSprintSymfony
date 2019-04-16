<?php


namespace QandABundle\Menu;


use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class MyResponsesMenu
{

    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {

        $rmenu = $factory->createItem('Rroot');

        $rmenu->addChild('Top', ['route' => 'display_ras', 'routeParameters' => ['as' => 21]]);
        $rmenu->addChild('No Votes', ['route' => 'display_ras', 'routeParameters' => ['as' => 22]]);


        return $rmenu;
    }

}