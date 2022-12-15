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

class Google_Service_MyBusiness_Lodging extends Google_Collection
{
  protected $collection_key = 'guestUnits';
  protected $internal_gapi_mappings = array(
  );
  protected $accessibilityType = 'Google_Service_MyBusiness_Accessibility';
  protected $accessibilityDataType = '';
  protected $activitiesType = 'Google_Service_MyBusiness_Activities';
  protected $activitiesDataType = '';
  protected $allUnitsType = 'Google_Service_MyBusiness_GuestUnitFeatures';
  protected $allUnitsDataType = '';
  protected $businessType = 'Google_Service_MyBusiness_Business';
  protected $businessDataType = '';
  protected $commonLivingAreaType = 'Google_Service_MyBusiness_LivingArea';
  protected $commonLivingAreaDataType = '';
  protected $connectivityType = 'Google_Service_MyBusiness_Connectivity';
  protected $connectivityDataType = '';
  protected $familiesType = 'Google_Service_MyBusiness_Families';
  protected $familiesDataType = '';
  protected $foodAndDrinkType = 'Google_Service_MyBusiness_FoodAndDrink';
  protected $foodAndDrinkDataType = '';
  protected $guestUnitsType = 'Google_Service_MyBusiness_GuestUnitType';
  protected $guestUnitsDataType = 'array';
  protected $healthAndSafetyType = 'Google_Service_MyBusiness_HealthAndSafety';
  protected $healthAndSafetyDataType = '';
  protected $housekeepingType = 'Google_Service_MyBusiness_Housekeeping';
  protected $housekeepingDataType = '';
  protected $metadataType = 'Google_Service_MyBusiness_LodgingMetadata';
  protected $metadataDataType = '';
  public $name;
  protected $parkingType = 'Google_Service_MyBusiness_Parking';
  protected $parkingDataType = '';
  protected $petsType = 'Google_Service_MyBusiness_Pets';
  protected $petsDataType = '';
  protected $policiesType = 'Google_Service_MyBusiness_Policies';
  protected $policiesDataType = '';
  protected $poolsType = 'Google_Service_MyBusiness_Pools';
  protected $poolsDataType = '';
  protected $propertyType = 'Google_Service_MyBusiness_Property';
  protected $propertyDataType = '';
  protected $servicesType = 'Google_Service_MyBusiness_Services';
  protected $servicesDataType = '';
  protected $someUnitsType = 'Google_Service_MyBusiness_GuestUnitFeatures';
  protected $someUnitsDataType = '';
  protected $transportationType = 'Google_Service_MyBusiness_Transportation';
  protected $transportationDataType = '';
  protected $wellnessType = 'Google_Service_MyBusiness_Wellness';
  protected $wellnessDataType = '';


  public function setAccessibility(Google_Service_MyBusiness_Accessibility $accessibility)
  {
    $this->accessibility = $accessibility;
  }
  public function getAccessibility()
  {
    return $this->accessibility;
  }
  public function setActivities(Google_Service_MyBusiness_Activities $activities)
  {
    $this->activities = $activities;
  }
  public function getActivities()
  {
    return $this->activities;
  }
  public function setAllUnits(Google_Service_MyBusiness_GuestUnitFeatures $allUnits)
  {
    $this->allUnits = $allUnits;
  }
  public function getAllUnits()
  {
    return $this->allUnits;
  }
  public function setBusiness(Google_Service_MyBusiness_Business $business)
  {
    $this->business = $business;
  }
  public function getBusiness()
  {
    return $this->business;
  }
  public function setCommonLivingArea(Google_Service_MyBusiness_LivingArea $commonLivingArea)
  {
    $this->commonLivingArea = $commonLivingArea;
  }
  public function getCommonLivingArea()
  {
    return $this->commonLivingArea;
  }
  public function setConnectivity(Google_Service_MyBusiness_Connectivity $connectivity)
  {
    $this->connectivity = $connectivity;
  }
  public function getConnectivity()
  {
    return $this->connectivity;
  }
  public function setFamilies(Google_Service_MyBusiness_Families $families)
  {
    $this->families = $families;
  }
  public function getFamilies()
  {
    return $this->families;
  }
  public function setFoodAndDrink(Google_Service_MyBusiness_FoodAndDrink $foodAndDrink)
  {
    $this->foodAndDrink = $foodAndDrink;
  }
  public function getFoodAndDrink()
  {
    return $this->foodAndDrink;
  }
  public function setGuestUnits($guestUnits)
  {
    $this->guestUnits = $guestUnits;
  }
  public function getGuestUnits()
  {
    return $this->guestUnits;
  }
  public function setHealthAndSafety(Google_Service_MyBusiness_HealthAndSafety $healthAndSafety)
  {
    $this->healthAndSafety = $healthAndSafety;
  }
  public function getHealthAndSafety()
  {
    return $this->healthAndSafety;
  }
  public function setHousekeeping(Google_Service_MyBusiness_Housekeeping $housekeeping)
  {
    $this->housekeeping = $housekeeping;
  }
  public function getHousekeeping()
  {
    return $this->housekeeping;
  }
  public function setMetadata(Google_Service_MyBusiness_LodgingMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setParking(Google_Service_MyBusiness_Parking $parking)
  {
    $this->parking = $parking;
  }
  public function getParking()
  {
    return $this->parking;
  }
  public function setPets(Google_Service_MyBusiness_Pets $pets)
  {
    $this->pets = $pets;
  }
  public function getPets()
  {
    return $this->pets;
  }
  public function setPolicies(Google_Service_MyBusiness_Policies $policies)
  {
    $this->policies = $policies;
  }
  public function getPolicies()
  {
    return $this->policies;
  }
  public function setPools(Google_Service_MyBusiness_Pools $pools)
  {
    $this->pools = $pools;
  }
  public function getPools()
  {
    return $this->pools;
  }
  public function setProperty(Google_Service_MyBusiness_Property $property)
  {
    $this->property = $property;
  }
  public function getProperty()
  {
    return $this->property;
  }
  public function setServices(Google_Service_MyBusiness_Services $services)
  {
    $this->services = $services;
  }
  public function getServices()
  {
    return $this->services;
  }
  public function setSomeUnits(Google_Service_MyBusiness_GuestUnitFeatures $someUnits)
  {
    $this->someUnits = $someUnits;
  }
  public function getSomeUnits()
  {
    return $this->someUnits;
  }
  public function setTransportation(Google_Service_MyBusiness_Transportation $transportation)
  {
    $this->transportation = $transportation;
  }
  public function getTransportation()
  {
    return $this->transportation;
  }
  public function setWellness(Google_Service_MyBusiness_Wellness $wellness)
  {
    $this->wellness = $wellness;
  }
  public function getWellness()
  {
    return $this->wellness;
  }
}
