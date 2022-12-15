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
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $accounts = $mybusinessService->accounts;
 *  </code>
 */
class Google_Service_MyBusiness_Accounts_Resource extends Google_Service_Resource
{

  /**
   * Creates an account with the specified name and type under the given parent. -
   * Personal accounts and Organizations cannot be created. - User Groups cannot
   * be created with a Personal account as primary owner. - Location Groups cannot
   * be created with a primary owner of a Personal account if the Personal account
   * is in an Organization. - Location Groups cannot own Location Groups.
   * (accounts.create)
   *
   * @param Google_Account $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string primaryOwner The resource name of the account which will be
   * the primary owner of the account being created. It should be of the form
   * `accounts/{account_id}/`.
   * @return Google_Service_MyBusiness_Account
   */
  public function create(Google_Service_MyBusiness_Account $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_MyBusiness_Account");
  }

  /**
   * Clears the pubsub notification settings for the account.
   * (accounts.deleteNotifications)
   *
   * @param string $name The resource name for the notification settings to be
   * cleared.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function deleteNotifications($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('deleteNotifications', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Generates an account number for this account. The account number is not
   * provisioned when an account is created. Use this request to create an account
   * number when it is required. (accounts.generateAccountNumber)
   *
   * @param string $name The name of the account to generate an account number
   * for.
   * @param Google_GenerateAccountNumberRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Account
   */
  public function generateAccountNumber($name, Google_Service_MyBusiness_GenerateAccountNumberRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('generateAccountNumber', array($params), "Google_Service_MyBusiness_Account");
  }

  /**
   * Gets the specified account. Returns `NOT_FOUND` if the account does not exist
   * or if the caller does not have access rights to it. (accounts.get)
   *
   * @param string $name The name of the account to fetch.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Account
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_MyBusiness_Account");
  }

  /**
   * Returns the pubsub notification settings for the account.
   * (accounts.getNotifications)
   *
   * @param string $name The notification settings resource name.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Notifications
   */
  public function getNotifications($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getNotifications', array($params), "Google_Service_MyBusiness_Notifications");
  }

  /**
   * Lists all of the accounts for the authenticated user. This includes all
   * accounts that the user owns, as well as any accounts for which the user has
   * management rights. (accounts.listAccounts)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many accounts to fetch per page. Default is 20,
   * minimum is 2, and maximum page size is 20.
   * @opt_param string pageToken If specified, the next page of accounts is
   * retrieved. The `pageToken` is returned when a call to `accounts.list` returns
   * more results than can fit into the requested page size.
   * @opt_param string name The resource name of the account for which the list of
   * directly accessible accounts is to be retrieved. This only makes sense for
   * Organizations and User Groups. If empty, will return `ListAccounts` for the
   * authenticated user.
   * @opt_param string filter A filter constraining the accounts to return. The
   * response includes only entries that match the filter. If `filter` is empty,
   * then no constraints are applied and all accounts (paginated) are retrieved
   * for the requested account. For example, a request with the filter
   * `type=USER_GROUP` will only return user groups.
   * @return Google_Service_MyBusiness_ListAccountsResponse
   */
  public function listAccounts($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListAccountsResponse");
  }

  /**
   * List all the GoogleLocations that have been recommended to the specified GMB
   * account. Recommendations are provided for personal accounts and location
   * groups only, requests for all other account types will result in an error.
   * The recommendations for location groups are based on the locations in that
   * group. The recommendations for personal accounts are based on all of the
   * locations that the user has access to on Google My Business (which includes
   * locations they can access through location groups), and is a superset of all
   * recommendations generated for the user.
   * (accounts.listRecommendGoogleLocations)
   *
   * @param string $name Name of the account resource to fetch recommended Google
   * locations for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many locations to fetch per page. Default is 25,
   * minimum is 1, and maximum page size is 100.
   * @opt_param string pageToken If specified, the next page of locations is
   * retrieved.
   * @return Google_Service_MyBusiness_ListRecommendedGoogleLocationsResponse
   */
  public function listRecommendGoogleLocations($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('listRecommendGoogleLocations', array($params), "Google_Service_MyBusiness_ListRecommendedGoogleLocationsResponse");
  }

  /**
   * Updates the specified business account. Personal accounts cannot be updated
   * using this method. *Note:* The only editable field for an account is
   * `account_name`. Any other fields passed in (such as `type` or `role`) are
   * ignored. (accounts.update)
   *
   * @param string $name The name of the account to update.
   * @param Google_Account $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool validateOnly If true, the request is validated without
   * actually updating the account.
   * @return Google_Service_MyBusiness_Account
   */
  public function update($name, Google_Service_MyBusiness_Account $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_MyBusiness_Account");
  }

  /**
   * Sets the pubsub notification settings for the account informing My Business
   * which topic to send pubsub notifications for: - New reviews for locations
   * administered by the account. - Updated reviews for locations administered by
   * the account. - New `GoogleUpdates` for locations administered by the account.
   * An account will only have one notification settings resource, and only one
   * pubsub topic can be set. (accounts.updateNotifications)
   *
   * @param string $name The notification settings resource name.
   * @param Google_Notifications $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Notifications
   */
  public function updateNotifications($name, Google_Service_MyBusiness_Notifications $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateNotifications', array($params), "Google_Service_MyBusiness_Notifications");
  }
}