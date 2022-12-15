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

class Google_Service_MyBusiness_Question extends Google_Collection
{
  protected $collection_key = 'topAnswers';
  protected $internal_gapi_mappings = array(
  );
  protected $authorType = 'Google_Service_MyBusiness_Author';
  protected $authorDataType = '';
  public $createTime;
  public $name;
  public $text;
  protected $topAnswersType = 'Google_Service_MyBusiness_Answer';
  protected $topAnswersDataType = 'array';
  public $totalAnswerCount;
  public $updateTime;
  public $upvoteCount;


  public function setAuthor(Google_Service_MyBusiness_Author $author)
  {
    $this->author = $author;
  }
  public function getAuthor()
  {
    return $this->author;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setText($text)
  {
    $this->text = $text;
  }
  public function getText()
  {
    return $this->text;
  }
  public function setTopAnswers($topAnswers)
  {
    $this->topAnswers = $topAnswers;
  }
  public function getTopAnswers()
  {
    return $this->topAnswers;
  }
  public function setTotalAnswerCount($totalAnswerCount)
  {
    $this->totalAnswerCount = $totalAnswerCount;
  }
  public function getTotalAnswerCount()
  {
    return $this->totalAnswerCount;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  public function setUpvoteCount($upvoteCount)
  {
    $this->upvoteCount = $upvoteCount;
  }
  public function getUpvoteCount()
  {
    return $this->upvoteCount;
  }
}
