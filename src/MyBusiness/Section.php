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

class Google_Service_MyBusiness_Section extends Google_Collection
{
  protected $collection_key = 'labels';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_MyBusiness_Item';
  protected $itemsDataType = 'array';
  protected $labelsType = 'Google_Service_MyBusiness_Label';
  protected $labelsDataType = 'array';
  public $sectionId;
  public $sectionType;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setSectionId($sectionId)
  {
    $this->sectionId = $sectionId;
  }
  public function getSectionId()
  {
    return $this->sectionId;
  }
  public function setSectionType($sectionType)
  {
    $this->sectionType = $sectionType;
  }
  public function getSectionType()
  {
    return $this->sectionType;
  }
}
