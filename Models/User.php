<?php

namespace Models;

class User extends Model
{
    public function fullName(): string
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
        return Follower::where(['followed_id', '=', $this->id])->where(['accept', '=', '1'])->count();
    }

    public function toggleFollow($userId): bool|int
    {
        $followStatus = $this->isFollowedBy($userId);

        $acceptStatus = $this?->account_type == 'private' ? 0 : 1;

        if (empty($followStatus)) {
            Follower::create(['followed_id' => $this->id, 'user_id' => $userId, 'accept' => $acceptStatus]);
            return $acceptStatus;
        }

        Follower::where(['followed_id', '=', $this->id])->where(['user_id', '=', $userId])->remove();

        return -1;
    }

    public function isFollowedBy($userId)
    {
        return Follower::where(['followed_id', '=', $this->id])->where(['user_id', '=', $userId])->first();
    }

    public function followings() {
       return Follower::where(['user_id', '=', $this->id])->where(['accept' , '=' , 1]);
    }

    public function followingsCount(): int
    {
        return $this->followings()->count();
    }

    public function getFollowings()
    {
        return $this->followings()->get();
    }

    public function suggestionsUser(): array
    {
        $suggestions = Follower::query("
        SELECT DISTINCT fOf.followed_id
        FROM followers
        JOIN followers fOf ON followers.followed_id = fOf.user_id
        WHERE followers.user_id = {$this->id}
            AND fOf.followed_id != {$this->id}
            AND fOf.followed_id NOT IN (
                SELECT followed_id
                FROM followers
                WHERE user_id = {$this->id} AND accept = 1
            )
        GROUP BY fOf.followed_id
    ");

        return $suggestions;
    }

    public function getPostsFollowing(): array
    {
        $posts=[];

        // get following posts
        foreach ($this->getFollowings() as $following) {
            $posts = array_merge($posts, \Models\Post::where(['user_id', '=', $following->followed_id])->get());
        }

        return $posts;
    }
}