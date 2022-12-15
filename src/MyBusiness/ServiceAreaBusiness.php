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

class Google_Service_MyBusiness_ServiceAreaBusiness extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $businessType;
  protected $placesType = 'Google_Service_MyBusiness_Places';
  protected $placesDataType = '';
  protected $radiusType = 'Google_Service_MyBusiness_PointRadius';
  protected $radiusDataType = '';


  public function setBusinessType($businessType)
  {
    $this->businessType = $businessType;
  }
  public function getBusinessType()
  {
    return $this->businessType;
  }
  public function setPlaces(Google_Service_MyBusiness_Places $places)
  {
    $this->places = $places;
  }
  public function getPlaces()
  {
    return $this->places;
  }
  public function setRadius(Google_Service_MyBusiness_PointRadius $radius)
  {
    $this->radius = $radius;
  }
  public function getRadius()
  {
    return $this->radius;
  }
}
