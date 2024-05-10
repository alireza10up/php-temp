<?php

namespace Models;

class Follower extends Model
{
    public function user()
    {
        return \Models\User::where(['id', '=', $this->followed_id])->first();
    }
}