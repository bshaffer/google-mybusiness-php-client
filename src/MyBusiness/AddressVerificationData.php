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

class Google_Service_MyBusiness_AddressVerificationData extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $addressType = 'Google_Service_MyBusiness_PostalAddress';
  protected $addressDataType = '';
  public $businessName;


  public function setAddress(Google_Service_MyBusiness_PostalAddress $address)
  {
    $this->address = $address;
  }
  public function getAddress()
  {
    return $this->address;
  }
  public function setBusinessName($businessName)
  {
    $this->businessName = $businessName;
  }
  public function getBusinessName()
  {
    return $this->businessName;
  }
}
