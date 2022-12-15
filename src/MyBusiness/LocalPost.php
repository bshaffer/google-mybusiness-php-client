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

class Google_Service_MyBusiness_LocalPost extends Google_Collection
{
  protected $collection_key = 'media';
  protected $internal_gapi_mappings = array(
  );
  public $alertType;
  protected $callToActionType = 'Google_Service_MyBusiness_CallToAction';
  protected $callToActionDataType = '';
  public $createTime;
  protected $eventType = 'Google_Service_MyBusiness_LocalPostEvent';
  protected $eventDataType = '';
  public $languageCode;
  protected $mediaType = 'Google_Service_MyBusiness_MediaItem';
  protected $mediaDataType = 'array';
  public $name;
  protected $offerType = 'Google_Service_MyBusiness_LocalPostOffer';
  protected $offerDataType = '';
  public $searchUrl;
  public $state;
  public $summary;
  public $topicType;
  public $updateTime;


  public function setAlertType($alertType)
  {
    $this->alertType = $alertType;
  }
  public function getAlertType()
  {
    return $this->alertType;
  }
  public function setCallToAction(Google_Service_MyBusiness_CallToAction $callToAction)
  {
    $this->callToAction = $callToAction;
  }
  public function getCallToAction()
  {
    return $this->callToAction;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setEvent(Google_Service_MyBusiness_LocalPostEvent $event)
  {
    $this->event = $event;
  }
  public function getEvent()
  {
    return $this->event;
  }
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  public function setMedia($media)
  {
    $this->media = $media;
  }
  public function getMedia()
  {
    return $this->media;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setOffer(Google_Service_MyBusiness_LocalPostOffer $offer)
  {
    $this->offer = $offer;
  }
  public function getOffer()
  {
    return $this->offer;
  }
  public function setSearchUrl($searchUrl)
  {
    $this->searchUrl = $searchUrl;
  }
  public function getSearchUrl()
  {
    return $this->searchUrl;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setSummary($summary)
  {
    $this->summary = $summary;
  }
  public function getSummary()
  {
    return $this->summary;
  }
  public function setTopicType($topicType)
  {
    $this->topicType = $topicType;
  }
  public function getTopicType()
  {
    return $this->topicType;
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
