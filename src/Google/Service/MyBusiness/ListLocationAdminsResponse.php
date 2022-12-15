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

class Google_Service_MyBusiness_ListLocationAdminsResponse extends Google_Collection
{
  protected $collection_key = 'admins';
  protected $internal_gapi_mappings = array(
  );
  protected $adminsType = 'Google_Service_MyBusiness_Admin';
  protected $adminsDataType = 'array';


  public function setAdmins($admins)
  {
    $this->admins = $admins;
  }
  public function getAdmins()
  {
    return $this->admins;
  }
}
