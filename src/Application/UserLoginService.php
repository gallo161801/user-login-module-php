<?php

namespace UserLoginService\Application;

use UserLoginService\Domain\User;

class UserLoginService
{
    private array $loggedUsers;

    public function __construct(){
        $this->loggedUsers = [];
    }

    public function manualLogin(User $user): string
    {
        if(!in_array($user, $this->loggedUsers)){
            $this->logguedUsers[] = $user;
            return "user logged";
        }
        return "";
    }

}