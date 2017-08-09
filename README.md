# ChartjsBundle
Chart.js using charts with the canvas element in Symfony

Symfony 2 Bundle that allow us to add charts in our projects, using [Chart.js](http://www.chartjs.org/) library.

## How to use it

Install
-------

```
Coming next php composer.phar require fados/ChartjsBundle
```

register he bundle inthe appKernel.php

```php
   new fados\ChartjsBundle\ChartjsBundle(),
```

Usage
-----

Configure you config.yml

```
chartjs:
    animation:
        duration: 1000
        easing: easeOutQuart
```

In the config.yml you need to put mappings by this way

Register the routing in `app/config/routing.yml`:

``` yml
# app/config/routing.yml

fados_chartjs:
    resource: "@ChartjsBundle/Resources/Config/routing.xml"
```
The routing file only have Charts tests
http://localhost/xxx/web/app_dev.php/testchart/bar
http://localhost/xxx/web/app_dev.php/testchart/horizontalBar
http://localhost/xxx/web/app_dev.php/testchart/pie
http://localhost/xxx/web/app_dev.php/testchart/line
http://localhost/xxx/web/app_dev.php/testchart/doughnut
http://localhost/xxx/web/app_dev.php/testchart/polarArea

Publish the assets:

    $ php app/console assets:install web
Add the required stylesheet and javascripts to your layout:

Javascript on top:    
```
    <script src="{{ asset('js/jquery.min.js') }}"></script>
```    
Javascript:
```
    <script src="{{ asset('bundles/charjsbundle/js/Chart.min.js') }}"></script>
```    
Then, in the template where you wish to display the calendar, add the following twig:

```
{{ chartjs_canvas('myPieChart',graphica.width,graphica.height,graphica) }}
```   
Where graphica is an array like this:
```
 $grafica = new ChartBuiderData();
        $graphica->setType(TypeCharjs::CHARJS_BAR);
        $graphica->setLabels(array('Barcelona','New York','Londres','Paris','Berlin','Tokio','El Cairo'));
        $graphica->setData(
          array(
              'Profit' => array(23,45,65,12,34,45,88),
              'Cost' => array(13,34,54,11,34,35,48),
          ));
          $graphica->setBackgroundcolor(
              array(
                  TypeColors::aqua,
                  TypeColors::dark_green
              )
          );
          $graphica->setBordercolor(
                array(
                    TypeColors::aqua,
                    TypeColors::dark_green

                )
          );
          $graphica->getHeight('150px');
          $graphica->getWidth('500px');
```  

You Could build this array by hand or using a service transformer, this service transform database data to an Array data prepared to be rendered by Chart.js:

```
public function transform($type,$data,$fieldLabels,$fieldKpi,$options,$fieldData);
```
Sample:

```
$grafica = $this->get('app.chartjs.transformer_char')->transform(TypeCharjs::CHARJS_PIE,$data,'indicador_id','username',$options,'average')->toArray();
```
This service define needs:

Type of char: 
$type => TypeCharjs::CHARJS_BAR (use fados\ChartjsBundle\Utils\TypeCharjs;)

Databse Data 
$data=>
       0 = {array} [4]
           zone = "Europe"
           kpi = "Number of NIUs"
           average = "1250"
       1 = {array} [4]
           zone = "Asia"
           kpi = "Number of NIUs"
           average = "1225"
       2 = {array} [4]
           zone = "Africa"
           kpi = "Number of NIUs"
           average = "1235"
       }

Labels in the Chrart:
$fieldLabels => 'zone'

Indicator field:
$fieldKpi => 'kpi'

Value Field:
$fieldData => 'average'

$options => graphic options

 This transform will converto to this structure of array:

```
         $result {array} [2]
              labels = {array}[3]
                         [0] = Europe
                         [1] = Asia
                         [2] = Africa
              data  = {array}[1]
                   Number of NIUs = {array}[3]
                          [0] = 1250
                          [1] = 1225
                          [2] = 1235

```
