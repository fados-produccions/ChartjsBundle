<?php

namespace fados\ChartjsBundle\Model\Transformer;

/**
 * Transform data to chart specific format
 * @param TypeCharjs $type
 * @param array $data
 * @param string $fieldLabels
 * @param $fieldKpi
 * @param $options
 * @param $fieldData
 *
 * Sample:
 * $type => TypeCharjs::CHARJS_BAR
 * Transform Database registry => $data
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
 * $fieldLabels => 'zone'
 * $fieldKpi => 'kpi'
 * $fieldData => 'average'
 * $options => graphic options

  To:

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

  ChartGraph Structure:

          data: {
              labels: {{ labels | json_encode() | raw  }},  => ["Europe","Asia","Africa"]
              datasets: [
                {% for key,data in data %}
                {
                  label: '{{  key }}', => "Number of NIUs"
                  data: {{data | json_encode() | raw  }}, => [1250,1225,1235]
                  ...
                  borderWidth: 1
                },
              {% endfor %}
          ]
      },
 *
 * @return array $result

  *
  */
interface TransformerInterface
{
    public function transform($type,$data,$fieldLabels,$fieldKpi,$options,$fieldData);
}