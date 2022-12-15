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
 * The "answers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $answers = $mybusinessService->answers;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsQuestionsAnswers_Resource extends Google_Service_Resource
{

  /**
   * Deletes the answer written by the current user to a question.
   * (answers.delete)
   *
   * @param string $parent The name of the question to delete an answer for.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function delete($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Returns the paginated list of answers for a specified question.
   * (answers.listAccountsLocationsQuestionsAnswers)
   *
   * @param string $parent The name of the question to fetch answers for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many answers to fetch per page. The default and
   * maximum `page_size` values are 10.
   * @opt_param string pageToken If specified, the next page of answers is
   * retrieved.
   * @opt_param string orderBy The order to return the answers. Valid options
   * include 'update_time desc' and 'upvote_count desc', which will return the
   * answers sorted descendingly by the requested field. The default sort order is
   * 'update_time desc'.
   * @return Google_Service_MyBusiness_ListAnswersResponse
   */
  public function listAccountsLocationsQuestionsAnswers($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListAnswersResponse");
  }

  /**
   * Creates an answer or updates the existing answer written by the user for the
   * specified question. A user can only create one answer per question.
   * (answers.upsert)
   *
   * @param string $parent The name of the question to write an answer for.
   * @param Google_UpsertAnswerRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Answer
   */
  public function upsert($parent, Google_Service_MyBusiness_UpsertAnswerRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('upsert', array($params), "Google_Service_MyBusiness_Answer");
  }
}