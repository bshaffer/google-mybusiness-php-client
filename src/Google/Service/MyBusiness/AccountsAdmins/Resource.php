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
 * The "admins" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $admins = $mybusinessService->admins;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsAdmins_Resource extends Google_Service_Resource
{

  /**
   * Invites the specified user to become an administrator for the specified
   * account. The invitee must accept the invitation in order to be granted access
   * to the account. See AcceptInvitation to programmatically accept an
   * invitation. (admins.create)
   *
   * @param string $parent The resource name of the account this admin is created
   * for.
   * @param Google_Admin $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Admin
   */
  public function create($parent, Google_Service_MyBusiness_Admin $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_MyBusiness_Admin");
  }

  /**
   * Removes the specified admin from the specified account. (admins.delete)
   *
   * @param string $name The resource name of the admin to remove from the
   * account.
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
   * Lists the admins for the specified account. (admins.listAccountsAdmins)
   *
   * @param string $parent The name of the account from which to retrieve a list
   * of admins.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_ListAccountAdminsResponse
   */
  public function listAccountsAdmins($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListAccountAdminsResponse");
  }

  /**
   * Updates the Admin for the specified Account Admin. Only the AdminRole of the
   * Admin can be updated. (admins.patch)
   *
   * @param string $name The resource name of the admin to update.
   * @param Google_Admin $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Admin
   */
  public function patch($name, Google_Service_MyBusiness_Admin $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_MyBusiness_Admin");
  }
}