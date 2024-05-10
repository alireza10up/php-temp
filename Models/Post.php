<?php

namespace Models;

class Post extends Model {

    public function user()
    {
        return User::where(['id', '=', $this->user_id])->first();
    }

    public function likes()
    {
        return Like::where(['post_id', '=', $this->id]);
    }


    public function getLike()
    {
        return Like::where(['post_id', '=', $this->id])->count();
    }

    public function getCommentCount()
    {
        return Comment::where(['post_id', '=', $this->id])->count();
    }

    public function isLikeByUser($userId)
    {
        return !!(Like::where(['post_id', '=', $this->id])->where(['user_id', '=', $userId])->count());
    }

    public static function toggleLike($user_id, $post_id)
    {
        $isLike = Like::where(['post_id', '=', $post_id])->where(['user_id', '=', $user_id])->get();

        if (empty($isLike)) {
            return Like::create(['user_id' => $user_id, 'post_id' => $post_id]);
        }

        Like::where(['post_id', '=', $post_id])->where(['user_id', '=', $user_id])->remove();
    }
}