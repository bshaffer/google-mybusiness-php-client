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

class Google_Service_MyBusiness_FoodMenuItemAttributes extends Google_Collection
{
  protected $collection_key = 'preparationMethods';
  protected $internal_gapi_mappings = array(
  );
  public $allergen;
  public $dietaryRestriction;
  protected $ingredientsType = 'Google_Service_MyBusiness_Ingredient';
  protected $ingredientsDataType = 'array';
  public $mediaKeys;
  protected $nutritionFactsType = 'Google_Service_MyBusiness_NutritionFacts';
  protected $nutritionFactsDataType = '';
  protected $portionSizeType = 'Google_Service_MyBusiness_PortionSize';
  protected $portionSizeDataType = '';
  public $preparationMethods;
  protected $priceType = 'Google_Service_MyBusiness_Money';
  protected $priceDataType = '';
  public $servesNumPeople;
  public $spiciness;


  public function setAllergen($allergen)
  {
    $this->allergen = $allergen;
  }
  public function getAllergen()
  {
    return $this->allergen;
  }
  public function setDietaryRestriction($dietaryRestriction)
  {
    $this->dietaryRestriction = $dietaryRestriction;
  }
  public function getDietaryRestriction()
  {
    return $this->dietaryRestriction;
  }
  public function setIngredients($ingredients)
  {
    $this->ingredients = $ingredients;
  }
  public function getIngredients()
  {
    return $this->ingredients;
  }
  public function setMediaKeys($mediaKeys)
  {
    $this->mediaKeys = $mediaKeys;
  }
  public function getMediaKeys()
  {
    return $this->mediaKeys;
  }
  public function setNutritionFacts(Google_Service_MyBusiness_NutritionFacts $nutritionFacts)
  {
    $this->nutritionFacts = $nutritionFacts;
  }
  public function getNutritionFacts()
  {
    return $this->nutritionFacts;
  }
  public function setPortionSize(Google_Service_MyBusiness_PortionSize $portionSize)
  {
    $this->portionSize = $portionSize;
  }
  public function getPortionSize()
  {
    return $this->portionSize;
  }
  public function setPreparationMethods($preparationMethods)
  {
    $this->preparationMethods = $preparationMethods;
  }
  public function getPreparationMethods()
  {
    return $this->preparationMethods;
  }
  public function setPrice(Google_Service_MyBusiness_Money $price)
  {
    $this->price = $price;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function setServesNumPeople($servesNumPeople)
  {
    $this->servesNumPeople = $servesNumPeople;
  }
  public function getServesNumPeople()
  {
    return $this->servesNumPeople;
  }
  public function setSpiciness($spiciness)
  {
    $this->spiciness = $spiciness;
  }
  public function getSpiciness()
  {
    return $this->spiciness;
  }
}
