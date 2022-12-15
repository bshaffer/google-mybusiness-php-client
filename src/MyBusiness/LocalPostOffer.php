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

class Google_Service_MyBusiness_LocalPostOffer extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $couponCode;
  public $redeemOnlineUrl;
  public $termsConditions;


  public function setCouponCode($couponCode)
  {
    $this->couponCode = $couponCode;
  }
  public function getCouponCode()
  {
    return $this->couponCode;
  }
  public function setRedeemOnlineUrl($redeemOnlineUrl)
  {
    $this->redeemOnlineUrl = $redeemOnlineUrl;
  }
  public function getRedeemOnlineUrl()
  {
    return $this->redeemOnlineUrl;
  }
  public function setTermsConditions($termsConditions)
  {
    $this->termsConditions = $termsConditions;
  }
  public function getTermsConditions()
  {
    return $this->termsConditions;
  }
}
