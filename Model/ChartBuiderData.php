<?php
/**
 * Created by PhpStorm.
 * User: Albert
 * Date: 9/8/2017
 * Time: 12:53
 */

namespace fados\ChartjsBundle\Model;

use fados\ChartjsBundle\Utils\TypeCharjs;

class ChartBuiderData
{

    const HEIGHT = '150px';
    const WIDTH  = '400px';

    /**
     * @var TypeCharjs
     */
    protected $type;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var array
     */
    protected $labels;

    /**
     * @var array
     */
    protected $config;

    /**
     * @var json
     */
    protected $options;

    /**
     * @var json
     */
    protected $datasetConfig;

    /**
     * @var string
     */
    protected $label;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var int
     */
    protected $backgroundOpacity;

    /**
     * @var string
     */
    protected $bordercolor;

    /**
     * @var array
     */
    protected $backgroundcolor;

    /**
     * @var array
     */
    protected $width;

    /**
     * @var array
     */
    protected $height;

    /**
     * ChartBuiderData constructor.
     */
    public function __construct()
    {
        $this->height = ChartBuiderData::HEIGHT;
        $this->width= ChartBuiderData::WIDTH;
        $this->backgroundOpacity = 0.2;
    }


    /**
     * @return TypeCharjs
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param TypeCharjs $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param array $labels
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
    }

     /**
     * @return json
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param json $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getBordercolor()
    {
        return $this->bordercolor;
    }

    /**
     * @param string $bordercolor
     */
    public function setBordercolor($bordercolor)
    {
        $this->bordercolor = $bordercolor;
    }

    /**
     * @return array
     */
    public function getBackgroundcolor()
    {
        return $this->backgroundcolor;
    }

    /**
     * @param array $backgroundcolor
     */
    public function setBackgroundcolor($backgroundcolor)
    {
        $this->backgroundcolor = $backgroundcolor;
    }

    /**
     * @return array
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param array $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return array
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param array $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getBackgroundOpacity()
    {
        return $this->backgroundOpacity;
    }

    /**
     * @param int $backgroundOpacity
     */
    public function setBackgroundOpacity($backgroundOpacity)
    {
        $this->backgroundOpacity = $backgroundOpacity;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return json
     */
    public function getDatasetConfig()
    {
        return $this->datasetConfig;
    }

    /**
     * @param json $datasetConfig
     */
    public function setDatasetConfig($datasetConfig)
    {
        $this->datasetConfig = $datasetConfig;
    }

    public function toArray() {
        return array(
            'type'              =>$this->type,
            'title'             =>$this->title,
            'data'              => $this->data,
            'labels'            => $this->labels,
            'label'             => $this->label,
            'bordercolor'       =>  $this->bordercolor,
            'backgroundcolor'   => $this->backgroundcolor,
            'options'           => $this->options,
            'height'            => $this->height,
            'width'             => $this->width,
            'backgroundOpacity' => $this->backgroundOpacity,
            'datasetConfig'     => $this->datasetConfig
        );
    }



}