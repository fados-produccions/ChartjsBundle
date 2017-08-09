<?php

namespace fados\ChartjsBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;

class chartjsExtension extends \Twig_Extension
{

    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

    }

    public function getName() {
        return 'chartjs_extensions';
    }

    public function getFunctions()
    {

        return array(
              'chartjs_canvas' => new \Twig_SimpleFunction('chartjs_canvas', array($this, 'chartjs_canvas'),array('is_safe' => array('html'),'needs_environment' => true)
            ),
        );
    }

    //we could define more than one map in a page
    public function chartjs_canvas(\Twig_Environment $twig,$id='myChart',$width='500px',$height='500px',$graphic)
    {
        return $twig->render('ChartjsBundle:default:chartjsRender.html.twig',array('id' => $id,'width'=>$width,'height'=>$height,'graphic'=>$graphic));
    }

}