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

class Google_Service_MyBusiness_RegionCount extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $count;
  public $label;
  protected $latlngType = 'Google_Service_MyBusiness_LatLng';
  protected $latlngDataType = '';


  public function setCount($count)
  {
    $this->count = $count;
  }
  public function getCount()
  {
    return $this->count;
  }
  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setLatlng(Google_Service_MyBusiness_LatLng $latlng)
  {
    $this->latlng = $latlng;
  }
  public function getLatlng()
  {
    return $this->latlng;
  }
}
