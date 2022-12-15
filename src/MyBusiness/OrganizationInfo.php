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

class Google_Service_MyBusiness_OrganizationInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $phoneNumber;
  protected $postalAddressType = 'Google_Service_MyBusiness_PostalAddress';
  protected $postalAddressDataType = '';
  public $registeredDomain;


  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  public function setPostalAddress(Google_Service_MyBusiness_PostalAddress $postalAddress)
  {
    $this->postalAddress = $postalAddress;
  }
  public function getPostalAddress()
  {
    return $this->postalAddress;
  }
  public function setRegisteredDomain($registeredDomain)
  {
    $this->registeredDomain = $registeredDomain;
  }
  public function getRegisteredDomain()
  {
    return $this->registeredDomain;
  }
}
