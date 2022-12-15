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
 * The "googleLocations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $googleLocations = $mybusinessService->googleLocations;
 *  </code>
 */
class Google_Service_MyBusiness_GoogleLocations_Resource extends Google_Service_Resource
{

  /**
   * Report a GoogleLocation. (googleLocations.report)
   *
   * @param string $name Resource name of a [GoogleLocation], in the format
   * `googleLocations/{googleLocationId}`.
   * @param Google_ReportGoogleLocationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function report($name, Google_Service_MyBusiness_ReportGoogleLocationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('report', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Search all of the possible locations that are a match to the specified
   * request. (googleLocations.search)
   *
   * @param Google_SearchGoogleLocationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_SearchGoogleLocationsResponse
   */
  public function search(Google_Service_MyBusiness_SearchGoogleLocationsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_MyBusiness_SearchGoogleLocationsResponse");
  }
}



