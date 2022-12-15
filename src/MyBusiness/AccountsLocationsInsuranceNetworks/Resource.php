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
 * The "insuranceNetworks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $insuranceNetworks = $mybusinessService->insuranceNetworks;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsInsuranceNetworks_Resource extends Google_Service_Resource
{

  /**
   * Returns a list of all insurance networks supported by Google.
   * (insuranceNetworks.listAccountsLocationsInsuranceNetworks)
   *
   * @param string $parent Required. The name of the location whose insurance
   * networks will be listed. The name is in the form:
   * accounts/{account_id}/locations/{location_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode Optional. The BCP 47 code for the language. If
   * a language code is not provided, it defaults to English. Right now only 'en'
   * is supported.
   * @opt_param int pageSize How many insurance networks to return per page. The
   * default value is 5000. Maximum page size is 10000.
   * @opt_param string pageToken If specified, returns the next page of insurance
   * networks.
   * @return Google_Service_MyBusiness_ListInsuranceNetworksResponse
   */
  public function listAccountsLocationsInsuranceNetworks($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListInsuranceNetworksResponse");
  }
}