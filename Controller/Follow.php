<?php

try {
    if (!isset($_POST['user_id']) || !isset($_POST['target_user_id'])) return;
    require "../config/config.php";
    $user = \Models\User::where(['id', '=', $_POST['target_user_id']])->first();
    $resultFollow = $user->toggleFollow($_POST['user_id']);
    echo json_encode(['result' => match ($resultFollow) {
        0, '0', false => 'ارسال شد',
        1, '1', true => 'دنبال شد',
        -1, '-1' => 'دنبال کردن',
        default => 'مشکلی رخ داد'
    }]);
} catch (\Throwable $th) {
    echo json_encode(['error' => $th->getMessage()]);
}

die();