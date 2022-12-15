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

class Google_Service_MyBusiness_TimeInterval extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $endDateType = 'Google_Service_MyBusiness_Date';
  protected $endDateDataType = '';
  protected $endTimeType = 'Google_Service_MyBusiness_TimeOfDay';
  protected $endTimeDataType = '';
  protected $startDateType = 'Google_Service_MyBusiness_Date';
  protected $startDateDataType = '';
  protected $startTimeType = 'Google_Service_MyBusiness_TimeOfDay';
  protected $startTimeDataType = '';


  public function setEndDate(Google_Service_MyBusiness_Date $endDate)
  {
    $this->endDate = $endDate;
  }
  public function getEndDate()
  {
    return $this->endDate;
  }
  public function setEndTime(Google_Service_MyBusiness_TimeOfDay $endTime)
  {
    $this->endTime = $endTime;
  }
  public function getEndTime()
  {
    return $this->endTime;
  }
  public function setStartDate(Google_Service_MyBusiness_Date $startDate)
  {
    $this->startDate = $startDate;
  }
  public function getStartDate()
  {
    return $this->startDate;
  }
  public function setStartTime(Google_Service_MyBusiness_TimeOfDay $startTime)
  {
    $this->startTime = $startTime;
  }
  public function getStartTime()
  {
    return $this->startTime;
  }
}
