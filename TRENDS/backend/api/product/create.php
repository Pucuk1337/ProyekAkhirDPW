<?php

    // Header
    header('Access-Contron-Allow-Origin: *');
    header('Content-Type: application.json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once '../../config/Database.php';
    include_once '../../models/Product.php';

    // Instantiate DB & Connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate TRENDS product Object
    $post = new Product($db);

    // Get Raw Posted Data
    $data = json_decode(file_get_contents("php://input"));

    $post->id = $data->id;
    $post->name = $data->name;
    $post->size = $data->size;
    $post->stock = $data->stock;
    $post->price = $data->price;

    // Create post
    if($post->create()){
        echo json_encode(
            array('message' => 'Post Created')
        );
    } else {
        echo json_encode(
            array('message' => 'Post Not Created!')
        );
    }