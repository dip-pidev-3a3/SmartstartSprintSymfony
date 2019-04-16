<?php


namespace QandABundle\Menu;


use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class MyQuestionsMenu
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {

        $qmenu = $factory->createItem('Qroot');

       $qmenu->addChild('Answered', ['route' => 'display_qas', 'routeParameters' => ['as' => 11]]);
       $qmenu->addChild('Not Answered', ['route' => 'display_qas', 'routeParameters' => ['as' => 12]]);
       $qmenu->addChild('Not Replied', ['route' => 'display_qas', 'routeParameters' => ['as' => 13]]);


        return $qmenu;
    }

}