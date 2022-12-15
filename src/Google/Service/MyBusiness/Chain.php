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

class Google_Service_MyBusiness_Chain extends Google_Collection
{
  protected $collection_key = 'websites';
  protected $internal_gapi_mappings = array(
  );
  protected $chainNamesType = 'Google_Service_MyBusiness_ChainName';
  protected $chainNamesDataType = 'array';
  public $locationCount;
  public $name;
  protected $websitesType = 'Google_Service_MyBusiness_ChainUrl';
  protected $websitesDataType = 'array';


  public function setChainNames($chainNames)
  {
    $this->chainNames = $chainNames;
  }
  public function getChainNames()
  {
    return $this->chainNames;
  }
  public function setLocationCount($locationCount)
  {
    $this->locationCount = $locationCount;
  }
  public function getLocationCount()
  {
    return $this->locationCount;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setWebsites($websites)
  {
    $this->websites = $websites;
  }
  public function getWebsites()
  {
    return $this->websites;
  }
}
