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

class Google_Service_MyBusiness_Review extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $comment;
  public $createTime;
  public $name;
  public $reviewId;
  protected $reviewReplyType = 'Google_Service_MyBusiness_ReviewReply';
  protected $reviewReplyDataType = '';
  protected $reviewerType = 'Google_Service_MyBusiness_Reviewer';
  protected $reviewerDataType = '';
  public $starRating;
  public $updateTime;


  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  public function getComment()
  {
    return $this->comment;
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
  public function setReviewId($reviewId)
  {
    $this->reviewId = $reviewId;
  }
  public function getReviewId()
  {
    return $this->reviewId;
  }
  public function setReviewReply(Google_Service_MyBusiness_ReviewReply $reviewReply)
  {
    $this->reviewReply = $reviewReply;
  }
  public function getReviewReply()
  {
    return $this->reviewReply;
  }
  public function setReviewer(Google_Service_MyBusiness_Reviewer $reviewer)
  {
    $this->reviewer = $reviewer;
  }
  public function getReviewer()
  {
    return $this->reviewer;
  }
  public function setStarRating($starRating)
  {
    $this->starRating = $starRating;
  }
  public function getStarRating()
  {
    return $this->starRating;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}
