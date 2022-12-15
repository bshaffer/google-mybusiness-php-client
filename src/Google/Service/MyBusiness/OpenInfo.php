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

class Google_Service_MyBusiness_OpenInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $canReopen;
  protected $openingDateType = 'Google_Service_MyBusiness_Date';
  protected $openingDateDataType = '';
  public $status;


  public function setCanReopen($canReopen)
  {
    $this->canReopen = $canReopen;
  }
  public function getCanReopen()
  {
    return $this->canReopen;
  }
  public function setOpeningDate(Google_Service_MyBusiness_Date $openingDate)
  {
    $this->openingDate = $openingDate;
  }
  public function getOpeningDate()
  {
    return $this->openingDate;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}
