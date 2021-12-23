<?php
session_start();

function getCategories()
{
    return isset($_SESSION["categories"]) ? $_SESSION["categories"] : array();
}

function getPosts()
{
    return isset($_SESSION["posts"]) ? $_SESSION["posts"] : array();
}

function getOrders()
{
    return isset($_SESSION["orders"]) ? $_SESSION["orders"] : array();
}

function getCategory($category)
{

    $categories = getCategories();

    foreach ($categories as $item) {
        if ($item['category_id'] == $category) {
            return $item;
        }
    }

    return array();
}

function getPost($post)
{

    $posts = getPosts();

    foreach ($posts as $item) {
        if ($item['id'] == $post) {
            return $item;
        }
    }

    return array();
}

function getOrder($order)
{

    $orders = getOrders();

    foreach ($orders as $item) {
        if ($item['id'] == $order) {
            return $item;
        }
    }

    return array();
}

function deleteCategory($category_id)
{
    $categories = getCategories();
     
    foreach ($categories as $key => $item)
    {
        if ($item['category_id'] == $category_id){
            unset($categories[$key]);
        }
    }
     
    // Cập nhật lại Session
    $_SESSION['categories'] = $categories;
     
    return $categories;
}

function deletePost($post_id)
{
    $posts = getPosts();
     
    foreach ($posts as $key => $item)
    {
        if ($item['id'] == $post_id){
            unset($categories[$key]);
        }
    }
     
    // Cập nhật lại Session
    $_SESSION['posts'] = $posts;
     
    return $posts;
}

function deleteOrder($order_id)
{
    $orders = getOrders();
     
    foreach ($orders as $key => $item)
    {
        if ($item['id'] == $order_id){
            unset($categories[$key]);
        }
    }
     
    // Cập nhật lại Session
    $_SESSION['orders'] = $orders;
     
    return $orders;
}

function updateCategory($category_id, $category_quantity)
{
    $categories = getCategories();
     
    $new_category = array(
        'category_id' => $category_id,
        'category_quantity' => $category_quantity,
    );
     
    // Trường hợp update
    $is_update_action = false;
    foreach ($categories as $key => $item)
    {
        if ($item['category_id'] == $category_id){
            $categorys[$key] = $new_category;
            $is_update_action = true; // khai báo đây là action update
        }
    }
     
    // Trường hợp add, tứ là $is_update_action = false
    if (!$is_update_action){
        $categories[] = $new_category;
    }
     
    // Cập nhật dữ liệu trong Session
    $_SESSION['categories'] = $categories;
     
    return $categories;
}