<?php
use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{
    // Check if the user's age is correct.
    public function testGetAge()
    {
        $user = new User('John', 30);
        $this->assertEquals(30, $user->getAge());
    }

    // Verify the user’s active status.
    public function testUserIsActive()
    {
        $user = new User('John', 30, true);
        $this->assertTrue($user->isActive());
    }

    public function testUserIsNotActive()
    {
        $user = new User('John', 30);
        $this->assertFalse($user->isActive());
    }

    // Use a mock to simulate behavior of getName() returning a different value.
    public function testWithMock()
    {
        $user = $this->createMock(User::class);

        // Configure the mock to return 'Jane' when getName() is called
        $user->method('getName')->willReturn('Jane');

        // Test the mocked getName method
        $this->assertEquals('Jane', $user->getName());
    }
}