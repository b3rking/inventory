<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function all_user() {
        return $this->userRepository->all_user();
    }

    public function all_client() {
        return $this->userRepository->all_client();
    }

    public function one_user(User $user) {
        return $this->userRepository->show_one_user($user);
    }

    public function one_client(User $user) {
        return $this->userRepository->show_one_client($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
