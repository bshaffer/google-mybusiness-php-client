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

class Google_Service_MyBusiness_Invitation extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $name;
  public $role;
  protected $targetAccountType = 'Google_Service_MyBusiness_Account';
  protected $targetAccountDataType = '';
  protected $targetLocationType = 'Google_Service_MyBusiness_TargetLocation';
  protected $targetLocationDataType = '';


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setRole($role)
  {
    $this->role = $role;
  }
  public function getRole()
  {
    return $this->role;
  }
  public function setTargetAccount(Google_Service_MyBusiness_Account $targetAccount)
  {
    $this->targetAccount = $targetAccount;
  }
  public function getTargetAccount()
  {
    return $this->targetAccount;
  }
  public function setTargetLocation(Google_Service_MyBusiness_TargetLocation $targetLocation)
  {
    $this->targetLocation = $targetLocation;
  }
  public function getTargetLocation()
  {
    return $this->targetLocation;
  }
}
