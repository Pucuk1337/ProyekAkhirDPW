<?php

    // Header
    header('Access-Contron-Allow-Origin: *');
    header('Content-Type: application.json');

    include_once '../../config/Database.php';
    include_once '../../models/Product.php';

    // Instantiate DB & Connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate TRENDS product Object
    $post = new Product($db);

    // TRENDS product Query Read
    $result = $post->post();
    // Get Row Count
    $num = $result->rowCount();

    // Check if any product
    if($num > 0){
        // Product Array
        $post_arr = array();
        $post_arr['data'] = array();

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $post_item = array (
                'id' => $id,
                'name' => $name,
                'size' => $size,
                'stock' => $stock,
                'price' => $price
            );

            // Push to 'Data'
            array_push($post_arr['data'], $post_item);
        }

        // Turn to JSON & Output
        echo json_encode($post_arr);
        
    } else {
        // No Product
        echo json_encode(
            array('message' => 'No Product Found!')
        );

    }