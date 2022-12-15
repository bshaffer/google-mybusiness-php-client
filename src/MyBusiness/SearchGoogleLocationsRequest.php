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

class Google_Service_MyBusiness_SearchGoogleLocationsRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $locationType = 'Google_Service_MyBusiness_Location';
  protected $locationDataType = '';
  public $query;
  public $resultCount;


  public function setLocation(Google_Service_MyBusiness_Location $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setQuery($query)
  {
    $this->query = $query;
  }
  public function getQuery()
  {
    return $this->query;
  }
  public function setResultCount($resultCount)
  {
    $this->resultCount = $resultCount;
  }
  public function getResultCount()
  {
    return $this->resultCount;
  }
}