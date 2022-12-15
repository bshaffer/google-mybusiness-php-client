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

class Google_Service_MyBusiness_VerificationOption extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $addressDataType = 'Google_Service_MyBusiness_AddressVerificationData';
  protected $addressDataDataType = '';
  protected $emailDataType = 'Google_Service_MyBusiness_EmailVerificationData';
  protected $emailDataDataType = '';
  protected $phoneDataType = 'Google_Service_MyBusiness_PhoneVerificationData';
  protected $phoneDataDataType = '';
  public $verificationMethod;


  public function setAddressData(Google_Service_MyBusiness_AddressVerificationData $addressData)
  {
    $this->addressData = $addressData;
  }
  public function getAddressData()
  {
    return $this->addressData;
  }
  public function setEmailData(Google_Service_MyBusiness_EmailVerificationData $emailData)
  {
    $this->emailData = $emailData;
  }
  public function getEmailData()
  {
    return $this->emailData;
  }
  public function setPhoneData(Google_Service_MyBusiness_PhoneVerificationData $phoneData)
  {
    $this->phoneData = $phoneData;
  }
  public function getPhoneData()
  {
    return $this->phoneData;
  }
  public function setVerificationMethod($verificationMethod)
  {
    $this->verificationMethod = $verificationMethod;
  }
  public function getVerificationMethod()
  {
    return $this->verificationMethod;
  }
}
