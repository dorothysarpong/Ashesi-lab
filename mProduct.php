<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ("Adb.php");

class Product extends Adb{

    /**
     * Adds a product to the database
     * @param varchar $serial serial number of a product
     * @param varchar $name   name of the product
     * @param varchar $desc   description of the product
     * @param varchar $date   maintenance date of the product
     * @param varchar $man    manufacturer of the product
     * @param int     $loc    location of the product;
     * @param link    $link   link of a tutorial to use the product
     */
    function add($serial, $name, $desc, $date, $man, $loc, $link) {
        $string = "insert into product (serial_no, "
                . "name,description,date,man,loc,link )"
                . "values ('$serial', '$name', '$desc', '$date','$manufacturer','$location','$link')";
        if ($this->query($string) == false) {
            echo "Error inserting";
        } else {
            echo "Insert success";
        }
    }

    /**
     * Deletes a product from the database
     * @param int $id id of the product
     */
    function delete($id){
        $string = "delete from product where product_id='$id'";
        if($this->query($string) == false){
            echo "Error deleting";
        } else{
            echo "Delete success";
        }
    }

    /**
     * Updates a product in the database
     * @param int $id         id of the product
     * @param varchar $serial serial number of the product
     * @param varchar $name   name of product to be updated
     * @param varchar $desc   description of the product
     * @param varchar $date   maintenance date of the product
     * @param varchar $man    manufacturer of the product
     * @param varchar $loc    location of the product
     * @param varchar $link   link of a tutorial to use the product
     */
    function update($id,$serial, $name, $desc, $date, $man, $loc, $link) {
        $string = "update product set serial_no='$serial' "
                . "name='$name',description='$desc',date='$date',man='$man',loc='$loc',link='$link'"
                . "where product_id='$id'";
        if ($this->query($string) == false) {
            echo "Error updating";
        } else {
            echo "update success";
        }
    }
}



//test code
    $obj = new Product();
//    $obj->add("KP09888HUIG76758","charger","some test","10/28/2015","ASUS",3,"www.google.com");
    $obj->delete(1);
