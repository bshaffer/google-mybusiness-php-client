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

class Google_Service_MyBusiness_Category extends Google_Collection
{
  protected $collection_key = 'serviceTypes';
  protected $internal_gapi_mappings = array(
  );
  public $categoryId;
  public $displayName;
  protected $moreHoursTypesType = 'Google_Service_MyBusiness_MoreHoursType';
  protected $moreHoursTypesDataType = 'array';
  protected $serviceTypesType = 'Google_Service_MyBusiness_ServiceType';
  protected $serviceTypesDataType = 'array';


  public function setCategoryId($categoryId)
  {
    $this->categoryId = $categoryId;
  }
  public function getCategoryId()
  {
    return $this->categoryId;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setMoreHoursTypes($moreHoursTypes)
  {
    $this->moreHoursTypes = $moreHoursTypes;
  }
  public function getMoreHoursTypes()
  {
    return $this->moreHoursTypes;
  }
  public function setServiceTypes($serviceTypes)
  {
    $this->serviceTypes = $serviceTypes;
  }
  public function getServiceTypes()
  {
    return $this->serviceTypes;
  }
}
