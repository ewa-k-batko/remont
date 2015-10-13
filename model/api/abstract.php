<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Model_Api_Abstract {

    protected $source;

    abstract public function __construct($source);

    final protected static function validObject($object, $name) {
        if ($object instanceof $name) {
            return $object;
        }
        throw new Model_Exception_NotFound();
    }

    final protected static function validList($list) {
        if ($list instanceof Model_Collection && $list->count() > 0) {
            return $list;
        }
        throw new Model_Exception_NotFound();
    }

    final protected static function validId($id) {
        $id = (int) $id;
        if ($id <= 0) {
            throw new Model_Exception_NotFound();
        }
        return $id;
    }

    final protected static function validPack($pack) {
        $pack = (int) $pack;
        if ($pack >= 0) {
            return $pack;
        }
        return 1;
    }

    final protected static function validPackSize($sizePack) {
        $sizePack = (int) $sizePack;
        if ($sizePack > 0 && $sizePack < 150) {
            return $sizePack;
        } else {
            return 10;
        }
    }

}
