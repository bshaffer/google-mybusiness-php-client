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

class Google_Service_MyBusiness_Account extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $accountName;
  public $accountNumber;
  public $name;
  protected $organizationInfoType = 'Google_Service_MyBusiness_OrganizationInfo';
  protected $organizationInfoDataType = '';
  public $permissionLevel;
  public $role;
  protected $stateType = 'Google_Service_MyBusiness_AccountState';
  protected $stateDataType = '';
  public $type;


  public function setAccountName($accountName)
  {
    $this->accountName = $accountName;
  }
  public function getAccountName()
  {
    return $this->accountName;
  }
  public function setAccountNumber($accountNumber)
  {
    $this->accountNumber = $accountNumber;
  }
  public function getAccountNumber()
  {
    return $this->accountNumber;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setOrganizationInfo(Google_Service_MyBusiness_OrganizationInfo $organizationInfo)
  {
    $this->organizationInfo = $organizationInfo;
  }
  public function getOrganizationInfo()
  {
    return $this->organizationInfo;
  }
  public function setPermissionLevel($permissionLevel)
  {
    $this->permissionLevel = $permissionLevel;
  }
  public function getPermissionLevel()
  {
    return $this->permissionLevel;
  }
  public function setRole($role)
  {
    $this->role = $role;
  }
  public function getRole()
  {
    return $this->role;
  }
  public function setState(Google_Service_MyBusiness_AccountState $state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}
