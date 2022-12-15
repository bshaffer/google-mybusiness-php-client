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

class Google_Service_MyBusiness_LivingArea extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $accessibilityType = 'Google_Service_MyBusiness_LivingAreaAccessibility';
  protected $accessibilityDataType = '';
  protected $eatingType = 'Google_Service_MyBusiness_LivingAreaEating';
  protected $eatingDataType = '';
  protected $featuresType = 'Google_Service_MyBusiness_LivingAreaFeatures';
  protected $featuresDataType = '';
  protected $layoutType = 'Google_Service_MyBusiness_LivingAreaLayout';
  protected $layoutDataType = '';
  protected $sleepingType = 'Google_Service_MyBusiness_LivingAreaSleeping';
  protected $sleepingDataType = '';


  public function setAccessibility(Google_Service_MyBusiness_LivingAreaAccessibility $accessibility)
  {
    $this->accessibility = $accessibility;
  }
  public function getAccessibility()
  {
    return $this->accessibility;
  }
  public function setEating(Google_Service_MyBusiness_LivingAreaEating $eating)
  {
    $this->eating = $eating;
  }
  public function getEating()
  {
    return $this->eating;
  }
  public function setFeatures(Google_Service_MyBusiness_LivingAreaFeatures $features)
  {
    $this->features = $features;
  }
  public function getFeatures()
  {
    return $this->features;
  }
  public function setLayout(Google_Service_MyBusiness_LivingAreaLayout $layout)
  {
    $this->layout = $layout;
  }
  public function getLayout()
  {
    return $this->layout;
  }
  public function setSleeping(Google_Service_MyBusiness_LivingAreaSleeping $sleeping)
  {
    $this->sleeping = $sleeping;
  }
  public function getSleeping()
  {
    return $this->sleeping;
  }
}
