<?php

abstract class Model_Container_Abstract {    

    private $id, $name, $url, $isActive;

    public function __construct() {
        $this->isActive = false;
        return $this;
    }

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
    public function setActive($active) {
        $this->isActive = true;        
    }

    public function isActive() {
        return $this->isActive ? true : false;
    }    

    public function search($name, $value) {
        return $this->{$name} == $value ? $this : false;
    }

    /**
     * @todo
     * @param type $row
     */
    abstract public function setter($row);

}
