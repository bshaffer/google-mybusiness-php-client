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

class Google_Service_MyBusiness_InsuranceNetwork extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $networkId;
  public $networkNames;
  public $payerNames;
  public $state;


  public function setNetworkId($networkId)
  {
    $this->networkId = $networkId;
  }
  public function getNetworkId()
  {
    return $this->networkId;
  }
  public function setNetworkNames($networkNames)
  {
    $this->networkNames = $networkNames;
  }
  public function getNetworkNames()
  {
    return $this->networkNames;
  }
  public function setPayerNames($payerNames)
  {
    $this->payerNames = $payerNames;
  }
  public function getPayerNames()
  {
    return $this->payerNames;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
}
