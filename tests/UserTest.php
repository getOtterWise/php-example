<?php declare(strict_types=1);

use Src\User;

class UserTest extends \PHPUnit\Framework\TestCase
{
	public function test_construct():void {
		$user = new User(1, 'John Doe');

		$this->assertInstanceOf(User::class, $user);
	}

	public function test_getId():void {
		$user = new User(1, 'John Doe');

		$this->assertEquals(1, $user->getId());
	}

	public function test_delete():void {
		/*
		 * notice here how we have user id = 2, which in our code cannot be deleted, so the delete part is never executed
		 * and thus won't be marked as covered
		 */
		$user = new User(2, 'John Doe');

		$this->assertFalse($user->delete());
	}
}
