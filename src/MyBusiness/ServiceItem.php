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

class Google_Service_MyBusiness_ServiceItem extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $freeFormServiceItemType = 'Google_Service_MyBusiness_FreeFormServiceItem';
  protected $freeFormServiceItemDataType = '';
  public $isOffered;
  protected $priceType = 'Google_Service_MyBusiness_Money';
  protected $priceDataType = '';
  protected $structuredServiceItemType = 'Google_Service_MyBusiness_StructuredServiceItem';
  protected $structuredServiceItemDataType = '';


  public function setFreeFormServiceItem(Google_Service_MyBusiness_FreeFormServiceItem $freeFormServiceItem)
  {
    $this->freeFormServiceItem = $freeFormServiceItem;
  }
  public function getFreeFormServiceItem()
  {
    return $this->freeFormServiceItem;
  }
  public function setIsOffered($isOffered)
  {
    $this->isOffered = $isOffered;
  }
  public function getIsOffered()
  {
    return $this->isOffered;
  }
  public function setPrice(Google_Service_MyBusiness_Money $price)
  {
    $this->price = $price;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function setStructuredServiceItem(Google_Service_MyBusiness_StructuredServiceItem $structuredServiceItem)
  {
    $this->structuredServiceItem = $structuredServiceItem;
  }
  public function getStructuredServiceItem()
  {
    return $this->structuredServiceItem;
  }
}
