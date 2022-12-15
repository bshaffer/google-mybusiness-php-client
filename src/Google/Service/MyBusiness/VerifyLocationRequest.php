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

class Google_Service_MyBusiness_VerifyLocationRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $addressInputType = 'Google_Service_MyBusiness_AddressInput';
  protected $addressInputDataType = '';
  protected $contextType = 'Google_Service_MyBusiness_ServiceBusinessContext';
  protected $contextDataType = '';
  protected $emailInputType = 'Google_Service_MyBusiness_EmailInput';
  protected $emailInputDataType = '';
  public $languageCode;
  public $method;
  protected $phoneInputType = 'Google_Service_MyBusiness_PhoneInput';
  protected $phoneInputDataType = '';


  public function setAddressInput(Google_Service_MyBusiness_AddressInput $addressInput)
  {
    $this->addressInput = $addressInput;
  }
  public function getAddressInput()
  {
    return $this->addressInput;
  }
  public function setContext(Google_Service_MyBusiness_ServiceBusinessContext $context)
  {
    $this->context = $context;
  }
  public function getContext()
  {
    return $this->context;
  }
  public function setEmailInput(Google_Service_MyBusiness_EmailInput $emailInput)
  {
    $this->emailInput = $emailInput;
  }
  public function getEmailInput()
  {
    return $this->emailInput;
  }
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  public function setMethod($method)
  {
    $this->method = $method;
  }
  public function getMethod()
  {
    return $this->method;
  }
  public function setPhoneInput(Google_Service_MyBusiness_PhoneInput $phoneInput)
  {
    $this->phoneInput = $phoneInput;
  }
  public function getPhoneInput()
  {
    return $this->phoneInput;
  }
}
