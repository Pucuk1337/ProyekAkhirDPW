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

    // Get ID from URL
    $post->id = isset($_GET['id']) ? $_GET['id'] : die();

    // Get product
    $post->detail();
    $post_arr = array(
        'id' => $post->id,
        'name' => $post->name,
        'size' => $post->size,
        'stock' => $post->stock,
        'price' => $post->price
    );

    // JSON DATA
    print_r(json_encode($post_arr));