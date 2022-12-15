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
 * The "categories" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $categories = $mybusinessService->categories;
 *  </code>
 */
class Google_Service_MyBusiness_Categories_Resource extends Google_Service_Resource
{

  /**
   * Returns a list of business categories for the provided language and GConcept
   * ids. (categories.batchGet)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode Required. The BCP 47 code of language that the
   * category names should be returned in.
   * @opt_param string categoryIds Required. At least one name must be set. The
   * GConcept ids the localized category names should be returned for.
   * @opt_param string regionCode Optional. The ISO 3166-1 alpha-2 country code
   * used to infer non-standard language.
   * @opt_param string view Required. Specifies which parts to the Category
   * resource should be returned in the response.
   * @return Google_Service_MyBusiness_BatchGetBusinessCategoriesResponse
   */
  public function batchGet($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('batchGet', array($params), "Google_Service_MyBusiness_BatchGetBusinessCategoriesResponse");
  }

  /**
   * Returns a list of business categories. Search will match the category name
   * but not the category ID. *Note:* Search only matches the front of a category
   * name (that is, 'food' may return 'Food Court' but not 'Fast Food
   * Restaurant'). (categories.listCategories)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string regionCode The ISO 3166-1 alpha-2 country code.
   * @opt_param string languageCode The BCP 47 code of language. If the language
   * is not available, it will default to English.
   * @opt_param string searchTerm Optional filter string from user.
   * @opt_param int pageSize How many categories to fetch per page. Default is
   * 100, minimum is 1, and maximum page size is 100.
   * @opt_param string pageToken If specified, the next page of categories will be
   * fetched.
   * @opt_param string view Optional. Specifies which parts to the Category
   * resource should be returned in the response.
   * @return Google_Service_MyBusiness_ListBusinessCategoriesResponse
   */
  public function listCategories($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListBusinessCategoriesResponse");
  }
}
