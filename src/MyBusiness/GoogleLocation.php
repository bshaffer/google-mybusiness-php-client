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

class Google_Service_MyBusiness_GoogleLocation extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $locationType = 'Google_Service_MyBusiness_Location';
  protected $locationDataType = '';
  public $name;
  public $requestAdminRightsUrl;


  public function setLocation(Google_Service_MyBusiness_Location $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setRequestAdminRightsUrl($requestAdminRightsUrl)
  {
    $this->requestAdminRightsUrl = $requestAdminRightsUrl;
  }
  public function getRequestAdminRightsUrl()
  {
    return $this->requestAdminRightsUrl;
  }
}
