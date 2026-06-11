<?php

declare(strict_types=1);

namespace UserLoginService\Tests\Application;

use PHPUnit\Framework\TestCase;
use UserLoginService\Application\UserLoginService;
use UserLoginService\Domain\User;

final class UserLoginServiceTest extends TestCase
{
    /**
     * @test
     */
    public function userIsNotLoggedIn()
    {
        $userLoginService = new UserLoginService();
        $user = new User("Usuario");

        $result = $userLoginService->manualLogin($user);

        $this->assertEquals("user logged", $userLoginService->manualLogin());
    }
}
