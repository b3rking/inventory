<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository {

    private function get_user(User $user, $type) {
        if ($user->type === 1 && $type === 'user') {
            return $user;
        } else if ($user->type === 2 && $type === 'client') {
            return $user;
        } else {
            return ['error' => 'access denied'];
        }
    }

    private function all($type) {
        if ($type === 'user') {
            return User::where('type', 1)->get();
        } else if ($type === 'client') {
            return User::where('type', 2)->get();
        }
    }

    public function all_user() {
        return $this->all('user');
    }
    
    public function all_client() {
        return $this->all('client');
    }

    public function show_one_user(User $user) {
        return $this->get_user($user, 'user');
    }

    public function show_one_client(User $user) {
        return $this->get_user($user, 'client');
    }
}