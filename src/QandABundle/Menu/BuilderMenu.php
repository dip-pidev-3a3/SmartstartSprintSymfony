<?php


namespace QandABundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class BuilderMenu implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $userId= $this->container->get('security.token_storage')->getToken()->getUser()->getId();
        $menu->addChild('Q & A', ['route' => 'qand_a_homepage']);

        // access services from the container!
        $em = $this->container->get('doctrine')->getManager();
        // findMostRecent and Blog are just imaginary examples
        $blog = $em->getRepository('AppBundle:QQuestions')->getNBRQuestions($userId);

        $menu->addChild('My questions', [
            'route' => 'display_as',
            'routeParameters' => ['as' => 11]
        ],[
            'label' => $blog,
            'button_text' => 'Browse photos',
            'button_attr' => [
                'class' => 'my-fancy-class'
            ]
        ]);
        $menu['My questions']->setLabelAttribute('value', $blog);
       // $menu['My questions']->setChildrenAttribute('class', 'label label-primary pull-right');

        // create another menu item
        $menu->addChild('About Me', ['route' => 'qand_a_homepage']);
        // you can also add sub levels to your menus as follows
        $menu['About Me']->addChild('Edit profile', ['route' => 'qand_a_homepage']);

        // ... add more children

        return $menu;
    }
}