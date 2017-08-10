<?php

namespace fados\ChartjsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Persistence\ManagerRegistry;
use fados\ChartjsBundle\Model\ChartBuiderData;
use fados\ChartjsBundle\Utils\TypeCharjs;
use fados\ChartjsBundle\Utils\TypeColors;

class ChartjsController extends Controller
{

    public function barAction()
    {

        $grafica = new ChartBuiderData();
        $grafica->setType(TypeCharjs::CHARJS_BAR);
        $grafica->setLabels(array('Barcelona','New York','Londres','Paris','Berlin','Tokio','El Cairo'));
        $grafica->setData(
          array(
              'Profit' => array(23,45,65,12,34,45,88),
              'Cost' => array(13,34,54,11,34,35,48),
          ));
          $grafica->setBackgroundcolor(
              array(
                  TypeColors::aqua,
                  TypeColors::dark_green
              )
          );
          $grafica->setBordercolor(
                array(
                    TypeColors::aqua,
                    TypeColors::dark_green

                )
          );
          $grafica->getHeight('150px');
          $grafica->getWidth('500px');


        return $this->render('ChartjsBundle:test:testPie.html.twig',array('grafica'=>$grafica,'title'=>'Bar Chart'));
    }

    public function horizontalBarAction()
    {
        $grafica = new ChartBuiderData();
        $grafica->setType(TypeCharjs::CHARJS_HORIZONTALBAR);
        $grafica->setLabels(array('Barcelona','New York','Londres','Paris','Berlin','Tokio','El Cairo'));
        $grafica->setData(
            array(
                'Profit' => array(23,45,65,12,34,45,88),
                'Cost' => array(13,34,54,11,34,35,48),
            ));
        $grafica->setBackgroundcolor(
            array(
                TypeColors::aqua,
                TypeColors::dark_green
            )
        );
        $grafica->setBordercolor(
            array(
                TypeColors::aqua,
                TypeColors::dark_green

            )
        );
        $grafica->getHeight('150px');
        $grafica->getWidth('500px');


        return $this->render('ChartjsBundle:test:testPie.html.twig',array('grafica'=>$grafica,'title'=>'Horizontal bar Chart'));
    }

    public function pieAction()
    {
        $grafica = new ChartBuiderData();
        $grafica->setType(TypeCharjs::CHARJS_PIE);
        $grafica->setLabels(array('Barcelona','New York','Londres','Paris','Berlin','Tokio','El Cairo'));
        $grafica->setData(
            array(
                'Profit' => array(23,45,65,12,34,45,88),
            ));
        $grafica->setBackgroundcolor(
            array(
                TypeColors::dark_violet,
                TypeColors::dark_green,
                TypeColors::dark_blue,
                TypeColors::dark_golden_rod,
                TypeColors::dark_magenta,
                TypeColors::dark_olive_green,
                TypeColors::dark_orange
            )
        );
        $grafica->setBordercolor(
            array(
                TypeColors::dark_violet,
                TypeColors::dark_green,
                TypeColors::dark_blue,
                TypeColors::dark_golden_rod,
                TypeColors::dark_magenta,
                TypeColors::dark_olive_green,
                TypeColors::dark_orange
            )
        );
        $grafica->getHeight('150px');
        $grafica->getWidth('500px');


        return $this->render('ChartjsBundle:test:testPie.html.twig',array('grafica'=>$grafica,'title'=>'PIE Chart'));
    }

    public function radarAction()
    {
        $grafica = new ChartBuiderData();
        $grafica->setType(TypeCharjs::CHARJS_RADAR);
        $grafica->setLabels(array('Barcelona','New York','Londres','Paris','Berlin','Tokio','El Cairo'));
        $grafica->setData(
            array(
                'Profit' => array(23,45,65,12,34,45,88),
                'Cost' => array(13,34,54,11,34,35,48),
            ));
        $grafica->setBackgroundcolor(
            array(
                TypeColors::aqua,
                TypeColors::red
            )
        );
        $grafica->setBordercolor(
            array(
                TypeColors::aqua,
                TypeColors::red

            )
        );
        $grafica->getHeight('150px');
        $grafica->getWidth('500px');


        return $this->render('ChartjsBundle:test:testPie.html.twig',array('grafica'=>$grafica,'title'=>'Radar Chart'));
    }

    public function doughnutAction()
    {
        $grafica = new ChartBuiderData();
        $grafica->setType(TypeCharjs::CHARJS_DOUGHNUT);
        $grafica->setLabels(array('Barcelona','New York','Londres','Paris','Berlin','Tokio','El Cairo'));
        $grafica->setData(
            array(
                'Profit' => array(23,45,65,12,34,45,88),
            ));
        $grafica->setBackgroundcolor(
            array(
                TypeColors::dark_violet,
                TypeColors::dark_green,
                TypeColors::dark_blue,
                TypeColors::dark_golden_rod,
                TypeColors::dark_magenta,
                TypeColors::dark_olive_green,
                TypeColors::dark_orange
            )
        );
        $grafica->setBordercolor(
            array(
                TypeColors::dark_violet,
                TypeColors::dark_green,
                TypeColors::dark_blue,
                TypeColors::dark_golden_rod,
                TypeColors::dark_magenta,
                TypeColors::dark_olive_green,
                TypeColors::dark_orange
            )
        );
        $grafica->getHeight('150px');
        $grafica->getWidth('500px');


        return $this->render('ChartjsBundle:test:testPie.html.twig',array('grafica'=>$grafica,'title'=>'DOUGHNUT Chart'));
    }

    public function lineAction()
    {
        $grafica = new ChartBuiderData();
        $grafica->setType(TypeCharjs::CHARJS_LINE);
        $grafica->setLabels(array('Gener','Febrer','Mar','Abril','Maig','Juny','Juliol'));
        $grafica->setData(
            array(
                'Profit' => array(23,45,65,12,34,45,88),
             ));
        $grafica->setBackgroundcolor(
            array(
                TypeColors::red,
            )
        );
        $grafica->setBordercolor(
            array(
                TypeColors::red,
            )
        );
        $grafica->getHeight('150px');
        $grafica->getWidth('500px');


        return $this->render('ChartjsBundle:test:testPie.html.twig',array('grafica'=>$grafica,'title'=>'Line Chart'));
    }

    public function polarAreaAction()
    {
        $grafica = new ChartBuiderData();
        $grafica->setType(TypeCharjs::CHARJS_POLAR_AREA);
        $grafica->setLabels(array('Barcelona','New York','Londres','Paris','Berlin','Tokio','El Cairo'));
        $grafica->setData(
            array(
                'Profit' => array(23,45,65,12,34,45,88),
            ));
        $grafica->setBackgroundcolor(
            array(
                TypeColors::dark_violet,
                TypeColors::dark_green,
                TypeColors::dark_blue,
                TypeColors::dark_golden_rod,
                TypeColors::dark_magenta,
                TypeColors::dark_olive_green,
                TypeColors::dark_orange
            )
        );
        $grafica->setBordercolor(
            array(
                TypeColors::dark_violet,
                TypeColors::dark_green,
                TypeColors::dark_blue,
                TypeColors::dark_golden_rod,
                TypeColors::dark_magenta,
                TypeColors::dark_olive_green,
                TypeColors::dark_orange
            )
        );
        $grafica->getHeight('150px');
        $grafica->getWidth('500px');


        return $this->render('ChartjsBundle:test:testPie.html.twig',array('grafica'=>$grafica,'title'=>'PIE Chart'));
    }

}