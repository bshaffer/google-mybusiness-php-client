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

class Google_Service_MyBusiness_MediaItem extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $attributionType = 'Google_Service_MyBusiness_Attribution';
  protected $attributionDataType = '';
  public $createTime;
  protected $dataRefType = 'Google_Service_MyBusiness_MediaItemDataRef';
  protected $dataRefDataType = '';
  public $description;
  protected $dimensionsType = 'Google_Service_MyBusiness_Dimensions';
  protected $dimensionsDataType = '';
  public $googleUrl;
  protected $insightsType = 'Google_Service_MyBusiness_MediaInsights';
  protected $insightsDataType = '';
  protected $locationAssociationType = 'Google_Service_MyBusiness_LocationAssociation';
  protected $locationAssociationDataType = '';
  public $mediaFormat;
  public $name;
  public $sourceUrl;
  public $thumbnailUrl;


  public function setAttribution(Google_Service_MyBusiness_Attribution $attribution)
  {
    $this->attribution = $attribution;
  }
  public function getAttribution()
  {
    return $this->attribution;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setDataRef(Google_Service_MyBusiness_MediaItemDataRef $dataRef)
  {
    $this->dataRef = $dataRef;
  }
  public function getDataRef()
  {
    return $this->dataRef;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDimensions(Google_Service_MyBusiness_Dimensions $dimensions)
  {
    $this->dimensions = $dimensions;
  }
  public function getDimensions()
  {
    return $this->dimensions;
  }
  public function setGoogleUrl($googleUrl)
  {
    $this->googleUrl = $googleUrl;
  }
  public function getGoogleUrl()
  {
    return $this->googleUrl;
  }
  public function setInsights(Google_Service_MyBusiness_MediaInsights $insights)
  {
    $this->insights = $insights;
  }
  public function getInsights()
  {
    return $this->insights;
  }
  public function setLocationAssociation(Google_Service_MyBusiness_LocationAssociation $locationAssociation)
  {
    $this->locationAssociation = $locationAssociation;
  }
  public function getLocationAssociation()
  {
    return $this->locationAssociation;
  }
  public function setMediaFormat($mediaFormat)
  {
    $this->mediaFormat = $mediaFormat;
  }
  public function getMediaFormat()
  {
    return $this->mediaFormat;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setSourceUrl($sourceUrl)
  {
    $this->sourceUrl = $sourceUrl;
  }
  public function getSourceUrl()
  {
    return $this->sourceUrl;
  }
  public function setThumbnailUrl($thumbnailUrl)
  {
    $this->thumbnailUrl = $thumbnailUrl;
  }
  public function getThumbnailUrl()
  {
    return $this->thumbnailUrl;
  }
}
