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

class Google_Service_MyBusiness_Attribution extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $profileName;
  public $profilePhotoUrl;
  public $profileUrl;
  public $takedownUrl;


  public function setProfileName($profileName)
  {
    $this->profileName = $profileName;
  }
  public function getProfileName()
  {
    return $this->profileName;
  }
  public function setProfilePhotoUrl($profilePhotoUrl)
  {
    $this->profilePhotoUrl = $profilePhotoUrl;
  }
  public function getProfilePhotoUrl()
  {
    return $this->profilePhotoUrl;
  }
  public function setProfileUrl($profileUrl)
  {
    $this->profileUrl = $profileUrl;
  }
  public function getProfileUrl()
  {
    return $this->profileUrl;
  }
  public function setTakedownUrl($takedownUrl)
  {
    $this->takedownUrl = $takedownUrl;
  }
  public function getTakedownUrl()
  {
    return $this->takedownUrl;
  }
}
