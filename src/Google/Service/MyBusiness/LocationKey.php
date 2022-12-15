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

class Google_Service_MyBusiness_LocationKey extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $explicitNoPlaceId;
  public $placeId;
  public $plusPageId;
  public $requestId;


  public function setExplicitNoPlaceId($explicitNoPlaceId)
  {
    $this->explicitNoPlaceId = $explicitNoPlaceId;
  }
  public function getExplicitNoPlaceId()
  {
    return $this->explicitNoPlaceId;
  }
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  public function getPlaceId()
  {
    return $this->placeId;
  }
  public function setPlusPageId($plusPageId)
  {
    $this->plusPageId = $plusPageId;
  }
  public function getPlusPageId()
  {
    return $this->plusPageId;
  }
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  public function getRequestId()
  {
    return $this->requestId;
  }
}
