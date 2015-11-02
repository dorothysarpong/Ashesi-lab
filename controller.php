<?php

if (isset($_REQUEST['cmd'])) {

    $command = $_REQUEST['cmd'];

    switch ($command) {

        case 1:
            specific_product();
            break;
    }
}

function specific_product() {
   if (isset($_REQUEST['id'])) {

        $i = $_REQUEST['id'];
        include ("mProduct.php");
        $obj = new Product();

        $result = $obj->get_specific_product($i);

        if (!$result) {
            echo '{"result":0,"message":"error"}';
        } else {
            $row = $obj->fetch();
            echo '{"result":1, "desc":"' . $row['description'] . '", "link":"'.$row['link'].'"}';
        }
    }
}
