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

class Google_Service_MyBusiness_ReportLocationInsightsResponse extends Google_Collection
{
  protected $collection_key = 'locationMetrics';
  protected $internal_gapi_mappings = array(
  );
  protected $locationDrivingDirectionMetricsType = 'Google_Service_MyBusiness_LocationDrivingDirectionMetrics';
  protected $locationDrivingDirectionMetricsDataType = 'array';
  protected $locationMetricsType = 'Google_Service_MyBusiness_LocationMetrics';
  protected $locationMetricsDataType = 'array';


  public function setLocationDrivingDirectionMetrics($locationDrivingDirectionMetrics)
  {
    $this->locationDrivingDirectionMetrics = $locationDrivingDirectionMetrics;
  }
  public function getLocationDrivingDirectionMetrics()
  {
    return $this->locationDrivingDirectionMetrics;
  }
  public function setLocationMetrics($locationMetrics)
  {
    $this->locationMetrics = $locationMetrics;
  }
  public function getLocationMetrics()
  {
    return $this->locationMetrics;
  }
}
