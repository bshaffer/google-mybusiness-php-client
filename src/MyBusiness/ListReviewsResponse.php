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

class Google_Service_MyBusiness_ListReviewsResponse extends Google_Collection
{
  protected $collection_key = 'reviews';
  protected $internal_gapi_mappings = array(
  );
  public $averageRating;
  public $nextPageToken;
  protected $reviewsType = 'Google_Service_MyBusiness_Review';
  protected $reviewsDataType = 'array';
  public $totalReviewCount;


  public function setAverageRating($averageRating)
  {
    $this->averageRating = $averageRating;
  }
  public function getAverageRating()
  {
    return $this->averageRating;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setReviews($reviews)
  {
    $this->reviews = $reviews;
  }
  public function getReviews()
  {
    return $this->reviews;
  }
  public function setTotalReviewCount($totalReviewCount)
  {
    $this->totalReviewCount = $totalReviewCount;
  }
  public function getTotalReviewCount()
  {
    return $this->totalReviewCount;
  }
}
