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

class Google_Service_MyBusiness_ReportLocationInsightsRequest extends Google_Collection
{
  protected $collection_key = 'locationNames';
  protected $internal_gapi_mappings = array(
  );
  protected $basicRequestType = 'Google_Service_MyBusiness_BasicMetricsRequest';
  protected $basicRequestDataType = '';
  protected $drivingDirectionsRequestType = 'Google_Service_MyBusiness_DrivingDirectionMetricsRequest';
  protected $drivingDirectionsRequestDataType = '';
  public $locationNames;


  public function setBasicRequest(Google_Service_MyBusiness_BasicMetricsRequest $basicRequest)
  {
    $this->basicRequest = $basicRequest;
  }
  public function getBasicRequest()
  {
    return $this->basicRequest;
  }
  public function setDrivingDirectionsRequest(Google_Service_MyBusiness_DrivingDirectionMetricsRequest $drivingDirectionsRequest)
  {
    $this->drivingDirectionsRequest = $drivingDirectionsRequest;
  }
  public function getDrivingDirectionsRequest()
  {
    return $this->drivingDirectionsRequest;
  }
  public function setLocationNames($locationNames)
  {
    $this->locationNames = $locationNames;
  }
  public function getLocationNames()
  {
    return $this->locationNames;
  }
}
