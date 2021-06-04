<?php
    include("connection.php");

    $upCSV = 'C:/xampp/htdocs/prodottiCustom/fileCSV/';
	$upFileCSV = $upCSV . basename($_FILES['filecsv']['name']);;
	move_uploaded_file($_FILES['filecsv']['tmp_name'], $upFileCSV);
    
    $handler = fopen($upFileCSV, 'r');

    while($data = fgetcsv($handler)) {
        $product[] = implode('\n', $data);
    }

    if(!$product == NULL){
        $sql = "INSERT INTO products (ID) VALUES (NULL)";
        $conn->query($sql);
        $id=$conn->insert_id;
    }

    fclose($handler);

    for($i=0; $i<count($product); $i++){
        $fields=explode(';',  $product[$i]);
        $val=$fields[1];
        $field = $fields[0];
        $sql = "UPDATE products SET ".$field." = '".$val."' WHERE ID = ".$id;
        $conn->query($sql);
    }

    header("location:list.php");
?>