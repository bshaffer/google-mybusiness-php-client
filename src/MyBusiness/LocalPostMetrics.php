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

class Google_Service_MyBusiness_LocalPostMetrics extends Google_Collection
{
  protected $collection_key = 'metricValues';
  protected $internal_gapi_mappings = array(
  );
  public $localPostName;
  protected $metricValuesType = 'Google_Service_MyBusiness_MetricValue';
  protected $metricValuesDataType = 'array';


  public function setLocalPostName($localPostName)
  {
    $this->localPostName = $localPostName;
  }
  public function getLocalPostName()
  {
    return $this->localPostName;
  }
  public function setMetricValues($metricValues)
  {
    $this->metricValues = $metricValues;
  }
  public function getMetricValues()
  {
    return $this->metricValues;
  }
}
