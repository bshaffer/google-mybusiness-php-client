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

/**
 * The "attributes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $attributes = $mybusinessService->attributes;
 *  </code>
 */
class Google_Service_MyBusiness_Attributes_Resource extends Google_Service_Resource
{

  /**
   * Returns the list of available attributes that would be available for a
   * location with the given primary category and country.
   * (attributes.listAttributes)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string name Resource name of the location to look up available
   * attributes.
   * @opt_param string categoryId The primary category stable ID to find available
   * attributes.
   * @opt_param string country The ISO 3166-1 alpha-2 country code to find
   * available attributes.
   * @opt_param string languageCode The BCP 47 code of language to get attribute
   * display names in. If this language is not available, they will be provided in
   * English.
   * @opt_param int pageSize How many attributes to include per page. Default is
   * 200, minimum is 1.
   * @opt_param string pageToken If specified, the next page of attribute metadata
   * is retrieved. The `pageToken` is returned when a call to `attributes.list`
   * returns more results than can fit into the requested page size.
   * @return Google_Service_MyBusiness_ListAttributeMetadataResponse
   */
  public function listAttributes($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListAttributeMetadataResponse");
  }
}
