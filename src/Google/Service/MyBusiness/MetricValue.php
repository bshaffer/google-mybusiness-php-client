<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_MyBusiness_MetricValue extends Google_Collection
{
  protected $collection_key = 'dimensionalValues';
  protected $internal_gapi_mappings = array(
  );
  protected $dimensionalValuesType = 'Google_Service_MyBusiness_DimensionalMetricValue';
  protected $dimensionalValuesDataType = 'array';
  public $metric;
  protected $totalValueType = 'Google_Service_MyBusiness_DimensionalMetricValue';
  protected $totalValueDataType = '';


  public function setDimensionalValues($dimensionalValues)
  {
    $this->dimensionalValues = $dimensionalValues;
  }
  public function getDimensionalValues()
  {
    return $this->dimensionalValues;
  }
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  public function getMetric()
  {
    return $this->metric;
  }
  public function setTotalValue(Google_Service_MyBusiness_DimensionalMetricValue $totalValue)
  {
    $this->totalValue = $totalValue;
  }
  public function getTotalValue()
  {
    return $this->totalValue;
  }
}
