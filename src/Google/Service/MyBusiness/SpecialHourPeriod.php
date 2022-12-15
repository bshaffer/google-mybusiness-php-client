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

class Google_Service_MyBusiness_SpecialHourPeriod extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $closeTime;
  protected $endDateType = 'Google_Service_MyBusiness_Date';
  protected $endDateDataType = '';
  public $isClosed;
  public $openTime;
  protected $startDateType = 'Google_Service_MyBusiness_Date';
  protected $startDateDataType = '';


  public function setCloseTime($closeTime)
  {
    $this->closeTime = $closeTime;
  }
  public function getCloseTime()
  {
    return $this->closeTime;
  }
  public function setEndDate(Google_Service_MyBusiness_Date $endDate)
  {
    $this->endDate = $endDate;
  }
  public function getEndDate()
  {
    return $this->endDate;
  }
  public function setIsClosed($isClosed)
  {
    $this->isClosed = $isClosed;
  }
  public function getIsClosed()
  {
    return $this->isClosed;
  }
  public function setOpenTime($openTime)
  {
    $this->openTime = $openTime;
  }
  public function getOpenTime()
  {
    return $this->openTime;
  }
  public function setStartDate(Google_Service_MyBusiness_Date $startDate)
  {
    $this->startDate = $startDate;
  }
  public function getStartDate()
  {
    return $this->startDate;
  }
}
