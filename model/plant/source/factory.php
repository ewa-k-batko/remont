<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Plant_Source_Factory {

    const FILE_CSV = 'csv';
    const DB_MYSQL = 'mysql';

    public static function getSource($source = self::DB_MYSQL) {

            switch($source){
               case self::FILE_CSV:
                   return Model_Plant_Source_File_Csv::getInstance();
                   break;
                case self::DB_MYSQL:
                    return Model_Plant_Source_Db_Mysql::getInstance();
               default:    
                    break;
            }

        
    }

}
