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

class Google_Service_MyBusiness_ReportGoogleLocationRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $locationGroupName;
  public $reportReasonBadLocation;
  public $reportReasonBadRecommendation;
  public $reportReasonElaboration;
  public $reportReasonLanguageCode;


  public function setLocationGroupName($locationGroupName)
  {
    $this->locationGroupName = $locationGroupName;
  }
  public function getLocationGroupName()
  {
    return $this->locationGroupName;
  }
  public function setReportReasonBadLocation($reportReasonBadLocation)
  {
    $this->reportReasonBadLocation = $reportReasonBadLocation;
  }
  public function getReportReasonBadLocation()
  {
    return $this->reportReasonBadLocation;
  }
  public function setReportReasonBadRecommendation($reportReasonBadRecommendation)
  {
    $this->reportReasonBadRecommendation = $reportReasonBadRecommendation;
  }
  public function getReportReasonBadRecommendation()
  {
    return $this->reportReasonBadRecommendation;
  }
  public function setReportReasonElaboration($reportReasonElaboration)
  {
    $this->reportReasonElaboration = $reportReasonElaboration;
  }
  public function getReportReasonElaboration()
  {
    return $this->reportReasonElaboration;
  }
  public function setReportReasonLanguageCode($reportReasonLanguageCode)
  {
    $this->reportReasonLanguageCode = $reportReasonLanguageCode;
  }
  public function getReportReasonLanguageCode()
  {
    return $this->reportReasonLanguageCode;
  }
}
