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

class Google_Service_MyBusiness_ListMediaItemsResponse extends Google_Collection
{
  protected $collection_key = 'mediaItems';
  protected $internal_gapi_mappings = array(
  );
  protected $mediaItemsType = 'Google_Service_MyBusiness_MediaItem';
  protected $mediaItemsDataType = 'array';
  public $nextPageToken;
  public $totalMediaItemCount;


  public function setMediaItems($mediaItems)
  {
    $this->mediaItems = $mediaItems;
  }
  public function getMediaItems()
  {
    return $this->mediaItems;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setTotalMediaItemCount($totalMediaItemCount)
  {
    $this->totalMediaItemCount = $totalMediaItemCount;
  }
  public function getTotalMediaItemCount()
  {
    return $this->totalMediaItemCount;
  }
}
