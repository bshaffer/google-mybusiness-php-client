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
 * The "questions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $questions = $mybusinessService->questions;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsQuestions_Resource extends Google_Service_Resource
{

  /**
   * Adds a question for the specified location. (questions.create)
   *
   * @param string $parent The name of the location to write a question for.
   * @param Google_Question $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Question
   */
  public function create($parent, Google_Service_MyBusiness_Question $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_MyBusiness_Question");
  }

  /**
   * Deletes a specific question written by the current user. (questions.delete)
   *
   * @param string $name The name of the question to delete.
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
   * Returns the paginated list of questions and some of its answers for a
   * specified location. (questions.listAccountsLocationsQuestions)
   *
   * @param string $parent The name of the location to fetch questions for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many questions to fetch per page. The default and
   * maximum `page_size` values are 10.
   * @opt_param string pageToken If specified, the next page of questions is
   * retrieved.
   * @opt_param int answersPerQuestion How many answers to fetch per question. The
   * default and maximum `answers_per_question` values are 10.
   * @opt_param string filter A filter constraining the questions to return. The
   * only filter currently supported is "ignore_answered=true"
   * @opt_param string orderBy The order to return the questions. Valid options
   * include 'update_time desc' and 'upvote_count desc', which will return the
   * questions sorted descendingly by the requested field. The default sort order
   * is 'update_time desc'.
   * @return Google_Service_MyBusiness_ListQuestionsResponse
   */
  public function listAccountsLocationsQuestions($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListQuestionsResponse");
  }

  /**
   * Updates a specific question written by the current user. (questions.patch)
   *
   * @param string $name The name of the question to update.
   * @param Google_Question $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Question
   */
  public function patch($name, Google_Service_MyBusiness_Question $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_MyBusiness_Question");
  }
}
