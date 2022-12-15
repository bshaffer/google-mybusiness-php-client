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

class Google_Service_MyBusiness_Location extends Google_Collection
{
  protected $collection_key = 'priceLists';
  protected $internal_gapi_mappings = array(
  );
  protected $adWordsLocationExtensionsType = 'Google_Service_MyBusiness_AdWordsLocationExtensions';
  protected $adWordsLocationExtensionsDataType = '';
  protected $additionalCategoriesType = 'Google_Service_MyBusiness_Category';
  protected $additionalCategoriesDataType = 'array';
  public $additionalPhones;
  protected $addressType = 'Google_Service_MyBusiness_PostalAddress';
  protected $addressDataType = '';
  protected $attributesType = 'Google_Service_MyBusiness_Attribute';
  protected $attributesDataType = 'array';
  public $labels;
  public $languageCode;
  protected $latlngType = 'Google_Service_MyBusiness_LatLng';
  protected $latlngDataType = '';
  protected $locationKeyType = 'Google_Service_MyBusiness_LocationKey';
  protected $locationKeyDataType = '';
  public $locationName;
  protected $locationStateType = 'Google_Service_MyBusiness_LocationState';
  protected $locationStateDataType = '';
  protected $metadataType = 'Google_Service_MyBusiness_Metadata';
  protected $metadataDataType = '';
  protected $moreHoursType = 'Google_Service_MyBusiness_MoreHours';
  protected $moreHoursDataType = 'array';
  public $name;
  protected $openInfoType = 'Google_Service_MyBusiness_OpenInfo';
  protected $openInfoDataType = '';
  protected $priceListsType = 'Google_Service_MyBusiness_PriceList';
  protected $priceListsDataType = 'array';
  protected $primaryCategoryType = 'Google_Service_MyBusiness_Category';
  protected $primaryCategoryDataType = '';
  public $primaryPhone;
  protected $profileType = 'Google_Service_MyBusiness_Profile';
  protected $profileDataType = '';
  protected $regularHoursType = 'Google_Service_MyBusiness_BusinessHours';
  protected $regularHoursDataType = '';
  protected $relationshipDataType = 'Google_Service_MyBusiness_RelationshipData';
  protected $relationshipDataDataType = '';
  protected $serviceAreaType = 'Google_Service_MyBusiness_ServiceAreaBusiness';
  protected $serviceAreaDataType = '';
  protected $specialHoursType = 'Google_Service_MyBusiness_SpecialHours';
  protected $specialHoursDataType = '';
  public $storeCode;
  public $websiteUrl;


  public function setAdWordsLocationExtensions(Google_Service_MyBusiness_AdWordsLocationExtensions $adWordsLocationExtensions)
  {
    $this->adWordsLocationExtensions = $adWordsLocationExtensions;
  }
  public function getAdWordsLocationExtensions()
  {
    return $this->adWordsLocationExtensions;
  }
  public function setAdditionalCategories($additionalCategories)
  {
    $this->additionalCategories = $additionalCategories;
  }
  public function getAdditionalCategories()
  {
    return $this->additionalCategories;
  }
  public function setAdditionalPhones($additionalPhones)
  {
    $this->additionalPhones = $additionalPhones;
  }
  public function getAdditionalPhones()
  {
    return $this->additionalPhones;
  }
  public function setAddress(Google_Service_MyBusiness_PostalAddress $address)
  {
    $this->address = $address;
  }
  public function getAddress()
  {
    return $this->address;
  }
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  public function getAttributes()
  {
    return $this->attributes;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  public function setLatlng(Google_Service_MyBusiness_LatLng $latlng)
  {
    $this->latlng = $latlng;
  }
  public function getLatlng()
  {
    return $this->latlng;
  }
  public function setLocationKey(Google_Service_MyBusiness_LocationKey $locationKey)
  {
    $this->locationKey = $locationKey;
  }
  public function getLocationKey()
  {
    return $this->locationKey;
  }
  public function setLocationName($locationName)
  {
    $this->locationName = $locationName;
  }
  public function getLocationName()
  {
    return $this->locationName;
  }
  public function setLocationState(Google_Service_MyBusiness_LocationState $locationState)
  {
    $this->locationState = $locationState;
  }
  public function getLocationState()
  {
    return $this->locationState;
  }
  public function setMetadata(Google_Service_MyBusiness_Metadata $metadata)
  {
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setMoreHours($moreHours)
  {
    $this->moreHours = $moreHours;
  }
  public function getMoreHours()
  {
    return $this->moreHours;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setOpenInfo(Google_Service_MyBusiness_OpenInfo $openInfo)
  {
    $this->openInfo = $openInfo;
  }
  public function getOpenInfo()
  {
    return $this->openInfo;
  }
  public function setPriceLists($priceLists)
  {
    $this->priceLists = $priceLists;
  }
  public function getPriceLists()
  {
    return $this->priceLists;
  }
  public function setPrimaryCategory(Google_Service_MyBusiness_Category $primaryCategory)
  {
    $this->primaryCategory = $primaryCategory;
  }
  public function getPrimaryCategory()
  {
    return $this->primaryCategory;
  }
  public function setPrimaryPhone($primaryPhone)
  {
    $this->primaryPhone = $primaryPhone;
  }
  public function getPrimaryPhone()
  {
    return $this->primaryPhone;
  }
  public function setProfile(Google_Service_MyBusiness_Profile $profile)
  {
    $this->profile = $profile;
  }
  public function getProfile()
  {
    return $this->profile;
  }
  public function setRegularHours(Google_Service_MyBusiness_BusinessHours $regularHours)
  {
    $this->regularHours = $regularHours;
  }
  public function getRegularHours()
  {
    return $this->regularHours;
  }
  public function setRelationshipData(Google_Service_MyBusiness_RelationshipData $relationshipData)
  {
    $this->relationshipData = $relationshipData;
  }
  public function getRelationshipData()
  {
    return $this->relationshipData;
  }
  public function setServiceArea(Google_Service_MyBusiness_ServiceAreaBusiness $serviceArea)
  {
    $this->serviceArea = $serviceArea;
  }
  public function getServiceArea()
  {
    return $this->serviceArea;
  }
  public function setSpecialHours(Google_Service_MyBusiness_SpecialHours $specialHours)
  {
    $this->specialHours = $specialHours;
  }
  public function getSpecialHours()
  {
    return $this->specialHours;
  }
  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }
  public function getStoreCode()
  {
    return $this->storeCode;
  }
  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }
  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }
}
