<?php

class Model_Category_Container {

    const FILTER = 'cid';

    private $id, $name, $url, $subCategories;

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

    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }
    public function getUrl() {
        return $this->url;
    }
    
    public function setSubCategories(Model_Collection $list) {
        $this->subCategories = $list;
        return $this;
    }
    public function getSubCategories() {
        return $this->subCategories;
    }   
}
