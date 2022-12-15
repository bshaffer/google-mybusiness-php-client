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

class Google_Service_MyBusiness_NutritionFacts extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $caloriesType = 'Google_Service_MyBusiness_CaloriesFact';
  protected $caloriesDataType = '';
  protected $cholesterolType = 'Google_Service_MyBusiness_NutritionFact';
  protected $cholesterolDataType = '';
  protected $proteinType = 'Google_Service_MyBusiness_NutritionFact';
  protected $proteinDataType = '';
  protected $sodiumType = 'Google_Service_MyBusiness_NutritionFact';
  protected $sodiumDataType = '';
  protected $totalCarbohydrateType = 'Google_Service_MyBusiness_NutritionFact';
  protected $totalCarbohydrateDataType = '';
  protected $totalFatType = 'Google_Service_MyBusiness_NutritionFact';
  protected $totalFatDataType = '';


  public function setCalories(Google_Service_MyBusiness_CaloriesFact $calories)
  {
    $this->calories = $calories;
  }
  public function getCalories()
  {
    return $this->calories;
  }
  public function setCholesterol(Google_Service_MyBusiness_NutritionFact $cholesterol)
  {
    $this->cholesterol = $cholesterol;
  }
  public function getCholesterol()
  {
    return $this->cholesterol;
  }
  public function setProtein(Google_Service_MyBusiness_NutritionFact $protein)
  {
    $this->protein = $protein;
  }
  public function getProtein()
  {
    return $this->protein;
  }
  public function setSodium(Google_Service_MyBusiness_NutritionFact $sodium)
  {
    $this->sodium = $sodium;
  }
  public function getSodium()
  {
    return $this->sodium;
  }
  public function setTotalCarbohydrate(Google_Service_MyBusiness_NutritionFact $totalCarbohydrate)
  {
    $this->totalCarbohydrate = $totalCarbohydrate;
  }
  public function getTotalCarbohydrate()
  {
    return $this->totalCarbohydrate;
  }
  public function setTotalFat(Google_Service_MyBusiness_NutritionFact $totalFat)
  {
    $this->totalFat = $totalFat;
  }
  public function getTotalFat()
  {
    return $this->totalFat;
  }
}
