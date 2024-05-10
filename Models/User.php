<?php

namespace Models;

class User extends Model
{
    public function fullName()
    {
        return "$this->name $this->family";
    }

    public function posts()
    {
        return \Models\Post::where(['user_id', '=', $this->id]);
    }

    public function postsCount()
    {
        return $this->posts()->count();
    }

    public function followersCount()
    {
        return \Models\Follower::where(['followed_id', '=', $this->id])->count();
    }

    public function followingCount()
    {
        return \Models\Follower::where(['user_id', '=', $this->id])->count();
    }

    public function suggestionsUser()
    {
        return \Models\Follower::qeury("
        SELECT fOf.followed_id FROM followers
        JOIN followers fOf On followers.followed_id = fOf.user_id 
        WHERE followers.user_id = {$this->id}
        AND
        fOf.followed_id != {$this->id} 
        ");
    }
}