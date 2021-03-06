<?php


header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');

include_once '../../config/Database.php';
include_once '../../models/Posts.php';

$database = new Database();

$db = $database->connect();

$post = new Posts($db);

$post->id = isset($_GET['id']) ? $_GET['id']: die();

$post->get_single();
$post_item = array(
    'id'=>$post->id,
    'title'=>$post->title,
    'body'=>html_entity_decode($post->body),
    'author'=>$post->author,
    'category_id' => $post->category_id,
    'category_name'=>$post->category_name
);

print_r(json_encode($post_item));
