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
 * The "followers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $followers = $mybusinessService->followers;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsFollowers_Resource extends Google_Service_Resource
{

  /**
   * Get the followers settings for a location. NOT_FOUND is returned if either
   * the account or the location doesn't exist. PRECONDITION_FAILED is returned if
   * the location is not verified nor connected to Maps. (followers.getMetadata)
   *
   * @param string $name The resource name of the location's followers metadata.
   * accounts/{account_id}/locations/{location_id}/followers/metadata
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_FollowersMetadata
   */
  public function getMetadata($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getMetadata', array($params), "Google_Service_MyBusiness_FollowersMetadata");
  }
}