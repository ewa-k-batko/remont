<?php

class Model_Collection extends ArrayIterator {

    protected $_total,
            $_position,
            $_items;

    public function __construct() {
        $this->_position = 0;
        $this->_total = 0;
    }

    public function append($object) {
        $this->_items[$this->_total] = $object;
        $id = $this->_total;
        $this->_total++;
        return $id;
    }

    public function rewind() {
        $this->_position = 0;
    }

    public function next() {
        $this->_position++;
        return isset($this->_items[$this->_position]) ? $this->_items[$this->_position] : false;
    }

    public function current() {
        return $this->_items[$this->_position];
    }

    public function key() {
        return $this->_position;
    }

    public function valid() {
        return isset($this->_items[$this->_position]);
    }

    public function count() {
        return $this->_total;
    }

    public function serialize() {
        return serialize($this->_items);
    }

    public function unserialize($data) {
        $this->_items = unserialize($data);
        $this->_total = count($this->_items);
        return $this;
    }

    public function search($name, $value) {
        $name = 'get' . ucfirst($name);
        foreach ($this->_items as $item) {
            if (method_exists($item, $name)) {
                $tmp = $item->{$name}();
                if ($tmp == $value) {
                    return $item;
                }
            }
        }
        return null;
    }

}
