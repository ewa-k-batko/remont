<?php

class Model_Plant_Container {

    
    const PATH = '/oferta/katalog/roslina-';
    const FILTER = 'pid';
    const CURRENCY = 'zł';

    private $id, $category, $name, $url, $price, $genus, $species, $height, $heightMax, $pot, $periodBloom, $periodSow, $gallery;

    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }
    public function getName() {
        return $this->name;
    }
    
    public function setCategory(Model_Category_Container $category) {
        $this->category = $category;
        return $this;
    }
    public function getCategory() {
        return $this->category;
    }

    public function setUrl($url = null) {
        $this->url = $url ? $url : self::PATH . Model_Tool_String::toUrl($this->getName()) . ',' . self::FILTER  . ',' . $this->getId(). ',' . Model_Plant_Category_Container::FILTER  . ',' . $this->getCategory()->getId();
        return $this;
    }
    public function getUrl() {
        if(!$this->url){
           $this->setUrl();
        }
        return $this->url;
    }
    
    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }
    public function getPrice() {
        return $this->price;
    }
    
    public function setGenus($genus) {
        $this->genus = $genus;
        return $this;
    }
    public function getGenus() {
        return $this->genus;
    }
    
    public function setSpecies($species) {
        $this->species = $species;
        return $this;
    }
    public function getSpecies() {
        return $this->species;
    }
    
    public function setHeight($height) {
        $this->height = $height;
        return $this;
    }
    public function getHeight() {
        return $this->height;
    }
    
    public function setHeightMax($heightMax) {
        $this->heightMax = $heightMax;
        return $this;
    }
    public function getHeightMax() {
        return $this->heightMax;
    }
    
    public function setPot(Model_Plant_Pot_Container $pot) {
        $this->pot = $pot;
        return $this;
    }
    public function getPot() {
        return $this->pot;
    }
    
    public function setPeriodBloom($periodBloom) {
        $this->periodBloom = $periodBloom;
        return $this;
    }
    public function getPeriodBloom() {
        return $this->periodBloom;
    }
    
    public function setPeriodSow($periodSow) {
        $this->periodSow = $periodSow;
        return $this;
    }
    public function getPeriodSow() {
        return $this->periodSow;
    }
    
    public function setGallery(Model_Gallery_Container $gallery) {
        $this->gallery = $gallery;
        return $this;
    }
    public function getGallery() {
        if(!$this->gallery) {
           $this->gallery = new Model_Gallery_Container(); 
        }
        return $this->gallery;
    }
    

}
