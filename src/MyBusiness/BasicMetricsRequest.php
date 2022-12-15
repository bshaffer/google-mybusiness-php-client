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

class Google_Service_MyBusiness_BasicMetricsRequest extends Google_Collection
{
  protected $collection_key = 'metricRequests';
  protected $internal_gapi_mappings = array(
  );
  protected $metricRequestsType = 'Google_Service_MyBusiness_MetricRequest';
  protected $metricRequestsDataType = 'array';
  protected $timeRangeType = 'Google_Service_MyBusiness_TimeRange';
  protected $timeRangeDataType = '';


  public function setMetricRequests($metricRequests)
  {
    $this->metricRequests = $metricRequests;
  }
  public function getMetricRequests()
  {
    return $this->metricRequests;
  }
  public function setTimeRange(Google_Service_MyBusiness_TimeRange $timeRange)
  {
    $this->timeRange = $timeRange;
  }
  public function getTimeRange()
  {
    return $this->timeRange;
  }
}
