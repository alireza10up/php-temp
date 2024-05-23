<?php

try {
    if (!isset($_POST['user_id']) || !isset($_POST['post_id'])) return;
    require "../config/config.php";
    \Models\Post::toggleLike($_POST['user_id'], $_POST['post_id']);
    $likeCount = \Models\Like::where(['post_id', '=', $_POST['post_id']])->count();
    echo json_encode(['likeCount' => $likeCount]);
} catch (\Throwable $th) {
    echo json_encode(['error' => $th->getMessage()]);
}

die();