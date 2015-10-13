<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("Adb.php");

class Equipment extends Adb{

    /**
     *
     * @param type $id product id
     * @param type $name product name
     * @param type $desc description of the product
     * @param type $price price of the product
     * @param type $main  maintenance date
     * @param type $man  manufacturer
     * @param type $loc location
     * @param type $cat category
     */
    function add($id, $name, $desc, $price, $main, $man, $loc, $cat) {
        $string = "insert into equipments (e_id, e_name, "
                . "description, price, maintenance,manufacturer,location,category )"
                . " values ('$id', '$name', '$desc', '$price', '$main','$man','$loc','$cat')";
        if ($this->query($string) == false) {
            echo "Error inserting";
        } else {
            echo "Insert success";
        }
    }
}

$obj = new Equipment();

$obj->add("PAT12j3", "PUTTY", "SOME TEST", "190", "9/1/14", "OS", "ELEC", "nigga");




