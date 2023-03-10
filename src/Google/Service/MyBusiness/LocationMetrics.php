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

class Google_Service_MyBusiness_LocationMetrics extends Google_Collection
{
  protected $collection_key = 'metricValues';
  protected $internal_gapi_mappings = array(
  );
  public $locationName;
  protected $metricValuesType = 'Google_Service_MyBusiness_MetricValue';
  protected $metricValuesDataType = 'array';
  public $timeZone;


  public function setLocationName($locationName)
  {
    $this->locationName = $locationName;
  }
  public function getLocationName()
  {
    return $this->locationName;
  }
  public function setMetricValues($metricValues)
  {
    $this->metricValues = $metricValues;
  }
  public function getMetricValues()
  {
    return $this->metricValues;
  }
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  public function getTimeZone()
  {
    return $this->timeZone;
  }
}
