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
 * The "invitations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $invitations = $mybusinessService->invitations;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsInvitations_Resource extends Google_Service_Resource
{

  /**
   * Accepts the specified invitation. (invitations.accept)
   *
   * @param string $name The name of the invitation that is being accepted.
   * @param Google_AcceptInvitationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function accept($name, Google_Service_MyBusiness_AcceptInvitationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('accept', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Declines the specified invitation. (invitations.decline)
   *
   * @param string $name The name of the account invitation that is being
   * declined.
   * @param Google_DeclineInvitationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function decline($name, Google_Service_MyBusiness_DeclineInvitationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('decline', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Lists pending invitations for the specified account.
   * (invitations.listAccountsInvitations)
   *
   * @param string $parent The name of the account from which the list of
   * invitations is being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string targetType Specifies which target types should appear in
   * the response.
   * @return Google_Service_MyBusiness_ListInvitationsResponse
   */
  public function listAccountsInvitations($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListInvitationsResponse");
  }
}