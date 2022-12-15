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

/**
 * The "media" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $media = $mybusinessService->media;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsMedia_Resource extends Google_Service_Resource
{

  /**
   * Creates a new media item for the location. (media.create)
   *
   * @param string $parent The resource name of the location where this media item
   * will be created.
   * @param Google_MediaItem $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MediaItem
   */
  public function create($parent, Google_Service_MyBusiness_MediaItem $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_MyBusiness_MediaItem");
  }

  /**
   * Deletes the specified media item. (media.delete)
   *
   * @param string $name The name of the media item to be deleted.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Returns metadata for the requested media item. (media.get)
   *
   * @param string $name The name of the requested media item.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MediaItem
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_MyBusiness_MediaItem");
  }

  /**
   * Returns a list of media items associated with a location.
   * (media.listAccountsLocationsMedia)
   *
   * @param string $parent The name of the location whose media items will be
   * listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many media items to return per page. The default
   * value is 100, which is also the maximum supported number of media items able
   * to be added to a location with the My Business API. Maximum page size is
   * 2500.
   * @opt_param string pageToken If specified, returns the next page of media
   * items.
   * @return Google_Service_MyBusiness_ListMediaItemsResponse
   */
  public function listAccountsLocationsMedia($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListMediaItemsResponse");
  }

  /**
   * Updates metadata of the specified media item. This can only be used to update
   * the Category of a media item, with the exception that the new category cannot
   * be COVER or PROFILE. (media.patch)
   *
   * @param string $name The name of the media item to be updated.
   * @param Google_MediaItem $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask The specific fields to update. If no mask is
   * specified, then this is treated as a full update and all editable fields are
   * set to the values passed in.
   * @return Google_Service_MyBusiness_MediaItem
   */
  public function patch($name, Google_Service_MyBusiness_MediaItem $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_MyBusiness_MediaItem");
  }

  /**
   * Generates a `MediaItemDataRef` for media item uploading. (media.startUpload)
   *
   * @param string $parent The resource name of the location this media item is to
   * be added to.
   * @param Google_StartUploadMediaItemDataRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MediaItemDataRef
   */
  public function startUpload($parent, Google_Service_MyBusiness_StartUploadMediaItemDataRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('startUpload', array($params), "Google_Service_MyBusiness_MediaItemDataRef");
  }
}
