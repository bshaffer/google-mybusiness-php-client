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
 * The "locations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $locations = $mybusinessService->locations;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocations_Resource extends Google_Service_Resource
{

  /**
   * Associates a location to a place ID. Any previous association is overwritten.
   * This operation is only valid if the location is unverified. The association
   * must be valid, that is, it appears in the list of `FindMatchingLocations`.
   * (locations.associate)
   *
   * @param string $name The resource name of the location to associate.
   * @param Google_AssociateLocationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function associate($name, Google_Service_MyBusiness_AssociateLocationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('associate', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Gets all of the specified locations in the given account.
   * (locations.batchGet)
   *
   * @param string $name The name of the account from which to fetch locations.
   * @param Google_BatchGetLocationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_BatchGetLocationsResponse
   */
  public function batchGet($name, Google_Service_MyBusiness_BatchGetLocationsRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchGet', array($params), "Google_Service_MyBusiness_BatchGetLocationsResponse");
  }

  /**
   * Returns the paginated list of reviews for all specified locations. This
   * operation is only valid if the specified locations are verified. *Note:*
   * Reviews are limited to a batch size of 200 `location_names` per call.
   * (locations.batchGetReviews)
   *
   * @param string $name The name of the account from which to retrieve a list of
   * reviews across multiple locations.
   * @param Google_BatchGetReviewsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_BatchGetReviewsResponse
   */
  public function batchGetReviews($name, Google_Service_MyBusiness_BatchGetReviewsRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchGetReviews', array($params), "Google_Service_MyBusiness_BatchGetReviewsResponse");
  }

  /**
   * Clears an association between a location and its place ID. This operation is
   * only valid if the location is unverified. (locations.clearAssociation)
   *
   * @param string $name The resource name of the location to disassociate.
   * @param Google_ClearLocationAssociationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function clearAssociation($name, Google_Service_MyBusiness_ClearLocationAssociationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('clearAssociation', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Creates a new location owned by the specified account, and returns it.
   * (locations.create)
   *
   * @param string $parent The name of the account in which to create this
   * location.
   * @param Google_Location $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool validateOnly If true, the request is validated without
   * actually creating the location.
   * @opt_param string requestId A unique request ID for the server to detect
   * duplicated requests. We recommend using UUIDs. Max length is 50 characters.
   * @return Google_Service_MyBusiness_Location
   */
  public function create($parent, Google_Service_MyBusiness_Location $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_MyBusiness_Location");
  }

  /**
   * Deletes a location. *Note:* If this location cannot be deleted using the API
   * as marked in the LocationState, use the [Google My
   * Business](https://business.google.com/manage/) website. Returns `NOT_FOUND`
   * if the location does not exist. (locations.delete)
   *
   * @param string $name The name of the location to delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Reports all eligible verification options for a location in a specific
   * language. (locations.fetchVerificationOptions)
   *
   * @param string $name Resource name of the location to verify.
   * @param Google_FetchVerificationOptionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_FetchVerificationOptionsResponse
   */
  public function fetchVerificationOptions($name, Google_Service_MyBusiness_FetchVerificationOptionsRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('fetchVerificationOptions', array($params), "Google_Service_MyBusiness_FetchVerificationOptionsResponse");
  }

  /**
   * Finds all of the possible locations that are a match to the specified
   * location. This operation is only valid if the location is unverified.
   * (locations.findMatches)
   *
   * @param string $name The resource name of the location to find matches for.
   * @param Google_FindMatchingLocationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_FindMatchingLocationsResponse
   */
  public function findMatches($name, Google_Service_MyBusiness_FindMatchingLocationsRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('findMatches', array($params), "Google_Service_MyBusiness_FindMatchingLocationsResponse");
  }

  /**
   * Gets the specified location. Returns `NOT_FOUND` if the location does not
   * exist. (locations.get)
   *
   * @param string $name The name of the location to fetch.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Location
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_MyBusiness_Location");
  }

  /**
   * Returns the food menus of a specific location. Only call this if
   * location.location_state.can_have_food_menu is true. (locations.getFoodMenus)
   *
   * @param string $name Required. Google identifier for this location in the
   * form: `accounts/{account_id}/locations/{location_id}/foodMenus`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string readMask Optional. The specific fields to return. If no
   * mask is specified, then it returns the full FoodMenu (same as "*"). Repeated
   * field items can not be individually specified. For example: "name" and
   * "menus" are valid masks, while "menus.sections" is invalid.
   * @return Google_Service_MyBusiness_FoodMenus
   */
  public function getFoodMenus($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getFoodMenus', array($params), "Google_Service_MyBusiness_FoodMenus");
  }

  /**
   * Gets the Google-updated version of the specified location. Returns
   * `NOT_FOUND` if the location does not exist. (locations.getGoogleUpdated)
   *
   * @param string $name The name of the location to fetch.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_GoogleUpdatedLocation
   */
  public function getGoogleUpdated($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getGoogleUpdated', array($params), "Google_Service_MyBusiness_GoogleUpdatedLocation");
  }

  /**
   * Returns the Health provider attributes of a specific location.
   * (locations.getHealthProviderAttributes)
   *
   * @param string $name Required. Google identifier for this location in the
   * form: accounts/{account_id}/locations/{location_id}/healthProviderAttributes
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode Optional. The BCP 47 code for the language. If
   * a language code is not provided, it defaults to English. Right now only 'en'
   * is supported.
   * @return Google_Service_MyBusiness_HealthProviderAttributes
   */
  public function getHealthProviderAttributes($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getHealthProviderAttributes', array($params), "Google_Service_MyBusiness_HealthProviderAttributes");
  }

  /**
   * Returns the Lodging of a specific location. (locations.getLodging)
   *
   * @param string $name Required. Google identifier for this location in the
   * form: `accounts/{account_id}/locations/{location_id}/lodging`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string readMask Optional. The specific fields to return. If no
   * mask is specified, then it returns the full Lodging (same as "*"). Repeated
   * field items cannot be individually specified.
   * @return Google_Service_MyBusiness_Lodging
   */
  public function getLodging($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getLodging', array($params), "Google_Service_MyBusiness_Lodging");
  }

  /**
   * Get the specified service list of a location. (locations.getServiceList)
   *
   * @param string $name Required. Google identifier for this location in the
   * form: `accounts/{account_id}/locations/{location_id}/servicelist`
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_ServiceList
   */
  public function getServiceList($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getServiceList', array($params), "Google_Service_MyBusiness_ServiceList");
  }

  /**
   * Lists the locations for the specified account.
   * (locations.listAccountsLocations)
   *
   * @param string $parent The name of the account to fetch locations from. If the
   * Account is of AccountType PERSONAL, only Locations that are directly owned by
   * the Account are returned, otherwise it will return all accessible locations
   * from the Account, either directly or indirectly.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many locations to fetch per page. Default is 100,
   * minimum is 1, and maximum page size is 100.
   * @opt_param string pageToken If specified, it fetches the next `page` of
   * locations. The page token is returned by previous calls to `ListLocations`
   * when there were more locations than could fit in the requested page size.
   * @opt_param string filter A filter constraining the locations to return. The
   * response includes only entries that match the filter. If `filter` is empty,
   * then constraints are applied and all locations (paginated) are retrieved for
   * the requested account. For more information about valid fields and example
   * usage, see [Work with Location Data Guide](https://developers.google.com/my-
   * business/content/location-data#filter_results_when_you_list_locations).
   * @opt_param string languageCode The BCP 47 code of language to get display
   * location properties in. If this language is not available, they will be
   * provided in the language of the location. If neither is available, they will
   * be provided in English. Deprecated. After August 15th, 2020, this field will
   * no longer be applied. Instead, the language of the location will always be
   * used.
   * @opt_param string orderBy Sorting order for the request. Multiple fields
   * should be comma-separated, following SQL syntax. The default sorting order is
   * ascending. To specify descending order, a suffix " desc" should be added.
   * Valid fields to order_by are location_name and store_code. For example:
   * "location_name, store_code desc" or "location_name" or "store_code desc"
   * @return Google_Service_MyBusiness_ListLocationsResponse
   */
  public function listAccountsLocations($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListLocationsResponse");
  }

  /**
   * Updates the specified location. Photos are only allowed on a location that
   * has a Google+ page. Returns `NOT_FOUND` if the location does not exist.
   * (locations.patch)
   *
   * @param string $name The name of the location to update.
   * @param Google_Location $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask The specific fields to update. If no mask is
   * specified, then this is treated as a full update and all fields are set to
   * the values passed in, which may include unsetting empty fields in the
   * request.
   * @opt_param bool validateOnly If true, the request is validated without
   * actually updating the location.
   * @opt_param string attributeMask The IDs of the attributes to update. Only
   * attributes noted in the mask will be updated. If an attribute is present in
   * the mask and not in the location, it will be removed. An empty mask will
   * update all attributes. Whenever this field is set, the update_mask should
   * include attributes as one of the fields to update.
   * @return Google_Service_MyBusiness_Location
   */
  public function patch($name, Google_Service_MyBusiness_Location $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_MyBusiness_Location");
  }

  /**
   * Returns a report containing insights on one or more metrics by location.
   * *Note:* Insight reports are limited to a batch size of 10 `location_names`
   * per call. (locations.reportInsights)
   *
   * @param string $name The account resource name.
   * @param Google_ReportLocationInsightsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_ReportLocationInsightsResponse
   */
  public function reportInsights($name, Google_Service_MyBusiness_ReportLocationInsightsRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('reportInsights', array($params), "Google_Service_MyBusiness_ReportLocationInsightsResponse");
  }

  /**
   * Moves a location from an account that the user owns to another account that
   * the same user administers. The user must be an owner of the account the
   * location is currently associated with and must also be at least a manager of
   * the destination account. Returns the Location with its new resource name.
   * (locations.transfer)
   *
   * @param string $name The name of the location to transfer.
   * @param Google_TransferLocationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Location
   */
  public function transfer($name, Google_Service_MyBusiness_TransferLocationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('transfer', array($params), "Google_Service_MyBusiness_Location");
  }

  /**
   * Updates the food menus of a specific location. Only call this if
   * location.location_state.can_have_food_menu is true.
   * (locations.updateFoodMenus)
   *
   * @param string $name Required. Google identifier for this location in the
   * form: `accounts/{account_id}/locations/{location_id}/foodMenus`
   * @param Google_FoodMenus $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The specific fields to update. If no
   * mask is specified, then this is treated as a full update and all fields are
   * set to the values passed in, which may include unsetting empty fields in the
   * request. Repeated field items can not be individually updated. Note: "name"
   * of FoodMenus is the resource identifier which is not updatable.
   * @return Google_Service_MyBusiness_FoodMenus
   */
  public function updateFoodMenus($name, Google_Service_MyBusiness_FoodMenus $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateFoodMenus', array($params), "Google_Service_MyBusiness_FoodMenus");
  }

  /**
   * Updates the Health provider attributes of a specific location.
   * (locations.updateHealthProviderAttributes)
   *
   * @param string $name Required. Google identifier for this location in the
   * form:
   * `accounts/{account_id}/locations/{location_id}/healthProviderAttributes`
   * @param Google_HealthProviderAttributes $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The specific fields to update. If no
   * mask is specified, then this is treated as a full update and all fields are
   * set to the values passed in, which may include unsetting empty fields in the
   * request. In V1, there is only the insurance_networks field to update. More
   * attributes will be supported later.
   * @return Google_Service_MyBusiness_HealthProviderAttributes
   */
  public function updateHealthProviderAttributes($name, Google_Service_MyBusiness_HealthProviderAttributes $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateHealthProviderAttributes', array($params), "Google_Service_MyBusiness_HealthProviderAttributes");
  }

  /**
   * Updates the Lodging of a specific location. (locations.updateLodging)
   *
   * @param string $name Required. Google identifier for this location in the
   * form: `accounts/{account_id}/locations/{location_id}/lodging`
   * @param Google_Lodging $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The specific fields to update. If no
   * mask is specified, then this is treated as a full update (same as "*") and
   * all fields are set to the values passed in, which may include unsetting empty
   * fields in the request. Repeated field items cannot be individually updated.
   * @return Google_Service_MyBusiness_Lodging
   */
  public function updateLodging($name, Google_Service_MyBusiness_Lodging $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateLodging', array($params), "Google_Service_MyBusiness_Lodging");
  }

  /**
   * Updates the specified service list of a location.
   * (locations.updateServiceList)
   *
   * @param string $name Required. Google identifier for this location in the
   * form: `accounts/{account_id}/locations/{location_id}/serviceList`
   * @param Google_ServiceList $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The specific fields to update. If no
   * mask is specified, then this is treated as a full update and all fields are
   * set to the values passed in, which may include unsetting empty fields in the
   * request. Repeated field items can not be individually updated.
   * @return Google_Service_MyBusiness_ServiceList
   */
  public function updateServiceList($name, Google_Service_MyBusiness_ServiceList $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateServiceList', array($params), "Google_Service_MyBusiness_ServiceList");
  }

  /**
   * Starts the verification process for a location. (locations.verify)
   *
   * @param string $name Resource name of the location to verify.
   * @param Google_VerifyLocationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_VerifyLocationResponse
   */
  public function verify($name, Google_Service_MyBusiness_VerifyLocationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('verify', array($params), "Google_Service_MyBusiness_VerifyLocationResponse");
  }
}
