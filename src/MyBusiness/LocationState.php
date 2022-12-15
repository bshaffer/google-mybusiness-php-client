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

class Google_Service_MyBusiness_LocationState extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $canDelete;
  public $canHaveFoodMenus;
  public $canModifyServiceList;
  public $canOperateHealthData;
  public $canOperateLodgingData;
  public $canUpdate;
  public $hasPendingEdits;
  public $hasPendingVerification;
  public $isDisabled;
  public $isDisconnected;
  public $isDuplicate;
  public $isGoogleUpdated;
  public $isLocalPostApiDisabled;
  public $isPendingReview;
  public $isPublished;
  public $isSuspended;
  public $isVerified;
  public $needsReverification;


  public function setCanDelete($canDelete)
  {
    $this->canDelete = $canDelete;
  }
  public function getCanDelete()
  {
    return $this->canDelete;
  }
  public function setCanHaveFoodMenus($canHaveFoodMenus)
  {
    $this->canHaveFoodMenus = $canHaveFoodMenus;
  }
  public function getCanHaveFoodMenus()
  {
    return $this->canHaveFoodMenus;
  }
  public function setCanModifyServiceList($canModifyServiceList)
  {
    $this->canModifyServiceList = $canModifyServiceList;
  }
  public function getCanModifyServiceList()
  {
    return $this->canModifyServiceList;
  }
  public function setCanOperateHealthData($canOperateHealthData)
  {
    $this->canOperateHealthData = $canOperateHealthData;
  }
  public function getCanOperateHealthData()
  {
    return $this->canOperateHealthData;
  }
  public function setCanOperateLodgingData($canOperateLodgingData)
  {
    $this->canOperateLodgingData = $canOperateLodgingData;
  }
  public function getCanOperateLodgingData()
  {
    return $this->canOperateLodgingData;
  }
  public function setCanUpdate($canUpdate)
  {
    $this->canUpdate = $canUpdate;
  }
  public function getCanUpdate()
  {
    return $this->canUpdate;
  }
  public function setHasPendingEdits($hasPendingEdits)
  {
    $this->hasPendingEdits = $hasPendingEdits;
  }
  public function getHasPendingEdits()
  {
    return $this->hasPendingEdits;
  }
  public function setHasPendingVerification($hasPendingVerification)
  {
    $this->hasPendingVerification = $hasPendingVerification;
  }
  public function getHasPendingVerification()
  {
    return $this->hasPendingVerification;
  }
  public function setIsDisabled($isDisabled)
  {
    $this->isDisabled = $isDisabled;
  }
  public function getIsDisabled()
  {
    return $this->isDisabled;
  }
  public function setIsDisconnected($isDisconnected)
  {
    $this->isDisconnected = $isDisconnected;
  }
  public function getIsDisconnected()
  {
    return $this->isDisconnected;
  }
  public function setIsDuplicate($isDuplicate)
  {
    $this->isDuplicate = $isDuplicate;
  }
  public function getIsDuplicate()
  {
    return $this->isDuplicate;
  }
  public function setIsGoogleUpdated($isGoogleUpdated)
  {
    $this->isGoogleUpdated = $isGoogleUpdated;
  }
  public function getIsGoogleUpdated()
  {
    return $this->isGoogleUpdated;
  }
  public function setIsLocalPostApiDisabled($isLocalPostApiDisabled)
  {
    $this->isLocalPostApiDisabled = $isLocalPostApiDisabled;
  }
  public function getIsLocalPostApiDisabled()
  {
    return $this->isLocalPostApiDisabled;
  }
  public function setIsPendingReview($isPendingReview)
  {
    $this->isPendingReview = $isPendingReview;
  }
  public function getIsPendingReview()
  {
    return $this->isPendingReview;
  }
  public function setIsPublished($isPublished)
  {
    $this->isPublished = $isPublished;
  }
  public function getIsPublished()
  {
    return $this->isPublished;
  }
  public function setIsSuspended($isSuspended)
  {
    $this->isSuspended = $isSuspended;
  }
  public function getIsSuspended()
  {
    return $this->isSuspended;
  }
  public function setIsVerified($isVerified)
  {
    $this->isVerified = $isVerified;
  }
  public function getIsVerified()
  {
    return $this->isVerified;
  }
  public function setNeedsReverification($needsReverification)
  {
    $this->needsReverification = $needsReverification;
  }
  public function getNeedsReverification()
  {
    return $this->needsReverification;
  }
}
