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

class Google_Service_MyBusiness_AttributeMetadata extends Google_Collection
{
  protected $collection_key = 'valueMetadata';
  protected $internal_gapi_mappings = array(
  );
  public $attributeId;
  public $displayName;
  public $groupDisplayName;
  public $isDeprecated;
  public $isRepeatable;
  protected $valueMetadataType = 'Google_Service_MyBusiness_AttributeValueMetadata';
  protected $valueMetadataDataType = 'array';
  public $valueType;


  public function setAttributeId($attributeId)
  {
    $this->attributeId = $attributeId;
  }
  public function getAttributeId()
  {
    return $this->attributeId;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setGroupDisplayName($groupDisplayName)
  {
    $this->groupDisplayName = $groupDisplayName;
  }
  public function getGroupDisplayName()
  {
    return $this->groupDisplayName;
  }
  public function setIsDeprecated($isDeprecated)
  {
    $this->isDeprecated = $isDeprecated;
  }
  public function getIsDeprecated()
  {
    return $this->isDeprecated;
  }
  public function setIsRepeatable($isRepeatable)
  {
    $this->isRepeatable = $isRepeatable;
  }
  public function getIsRepeatable()
  {
    return $this->isRepeatable;
  }
  public function setValueMetadata($valueMetadata)
  {
    $this->valueMetadata = $valueMetadata;
  }
  public function getValueMetadata()
  {
    return $this->valueMetadata;
  }
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  public function getValueType()
  {
    return $this->valueType;
  }
}
