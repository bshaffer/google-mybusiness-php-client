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

class Google_Service_MyBusiness_HealthAndSafety extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $enhancedCleaningType = 'Google_Service_MyBusiness_EnhancedCleaning';
  protected $enhancedCleaningDataType = '';
  protected $increasedFoodSafetyType = 'Google_Service_MyBusiness_IncreasedFoodSafety';
  protected $increasedFoodSafetyDataType = '';
  protected $minimizedContactType = 'Google_Service_MyBusiness_MinimizedContact';
  protected $minimizedContactDataType = '';
  protected $personalProtectionType = 'Google_Service_MyBusiness_PersonalProtection';
  protected $personalProtectionDataType = '';
  protected $physicalDistancingType = 'Google_Service_MyBusiness_PhysicalDistancing';
  protected $physicalDistancingDataType = '';


  public function setEnhancedCleaning(Google_Service_MyBusiness_EnhancedCleaning $enhancedCleaning)
  {
    $this->enhancedCleaning = $enhancedCleaning;
  }
  public function getEnhancedCleaning()
  {
    return $this->enhancedCleaning;
  }
  public function setIncreasedFoodSafety(Google_Service_MyBusiness_IncreasedFoodSafety $increasedFoodSafety)
  {
    $this->increasedFoodSafety = $increasedFoodSafety;
  }
  public function getIncreasedFoodSafety()
  {
    return $this->increasedFoodSafety;
  }
  public function setMinimizedContact(Google_Service_MyBusiness_MinimizedContact $minimizedContact)
  {
    $this->minimizedContact = $minimizedContact;
  }
  public function getMinimizedContact()
  {
    return $this->minimizedContact;
  }
  public function setPersonalProtection(Google_Service_MyBusiness_PersonalProtection $personalProtection)
  {
    $this->personalProtection = $personalProtection;
  }
  public function getPersonalProtection()
  {
    return $this->personalProtection;
  }
  public function setPhysicalDistancing(Google_Service_MyBusiness_PhysicalDistancing $physicalDistancing)
  {
    $this->physicalDistancing = $physicalDistancing;
  }
  public function getPhysicalDistancing()
  {
    return $this->physicalDistancing;
  }
}
