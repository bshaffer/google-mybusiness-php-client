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
 * The "customers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $customers = $mybusinessService->customers;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsMediaCustomers_Resource extends Google_Service_Resource
{

  /**
   * Returns metadata for the requested customer media item. (customers.get)
   *
   * @param string $name The resource name of the requested customer media item.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MediaItem
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_MyBusiness_MediaItem");
  }

  /**
   * Returns a list of media items associated with a location that have been
   * contributed by customers. (customers.listAccountsLocationsMediaCustomers)
   *
   * @param string $parent The name of the location whose customer media items
   * will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many media items to return per page. The default
   * value is 100, the maximum supported page size is 200.
   * @opt_param string pageToken If specified, returns the next page of media
   * items.
   * @return Google_Service_MyBusiness_ListCustomerMediaItemsResponse
   */
  public function listAccountsLocationsMediaCustomers($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListCustomerMediaItemsResponse");
  }
}