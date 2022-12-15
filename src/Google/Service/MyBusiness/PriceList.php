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

class Google_Service_MyBusiness_PriceList extends Google_Collection
{
  protected $collection_key = 'sections';
  protected $internal_gapi_mappings = array(
  );
  protected $labelsType = 'Google_Service_MyBusiness_Label';
  protected $labelsDataType = 'array';
  public $priceListId;
  protected $sectionsType = 'Google_Service_MyBusiness_Section';
  protected $sectionsDataType = 'array';
  public $sourceUrl;


  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setPriceListId($priceListId)
  {
    $this->priceListId = $priceListId;
  }
  public function getPriceListId()
  {
    return $this->priceListId;
  }
  public function setSections($sections)
  {
    $this->sections = $sections;
  }
  public function getSections()
  {
    return $this->sections;
  }
  public function setSourceUrl($sourceUrl)
  {
    $this->sourceUrl = $sourceUrl;
  }
  public function getSourceUrl()
  {
    return $this->sourceUrl;
  }
}
