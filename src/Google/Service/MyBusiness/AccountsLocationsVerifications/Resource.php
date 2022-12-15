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
 * The "verifications" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $verifications = $mybusinessService->verifications;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsVerifications_Resource extends Google_Service_Resource
{

  /**
   * Completes a `PENDING` verification. It is only necessary for non `AUTO`
   * verification methods. `AUTO` verification request is instantly `VERIFIED`
   * upon creation. (verifications.complete)
   *
   * @param string $name Resource name of the verification to complete.
   * @param Google_CompleteVerificationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_CompleteVerificationResponse
   */
  public function complete($name, Google_Service_MyBusiness_CompleteVerificationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('complete', array($params), "Google_Service_MyBusiness_CompleteVerificationResponse");
  }

  /**
   * List verifications of a location, ordered by create time.
   * (verifications.listAccountsLocationsVerifications)
   *
   * @param string $parent Resource name of the location that verification
   * requests belong to.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many verification to include per page. If not
   * set, return all.
   * @opt_param string pageToken If specified, returns the next page of
   * verifications.
   * @return Google_Service_MyBusiness_ListVerificationsResponse
   */
  public function listAccountsLocationsVerifications($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListVerificationsResponse");
  }
}
