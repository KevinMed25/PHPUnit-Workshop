<?php
namespace App;

class User
{
    private $name;
    private $age;
    private $email;
    private $active;

    public function __construct(string $name, int $age, bool $active = false)
    {
        $this->name = $name;
        $this->age = $age;
        $this->active = $active;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function activate(): void
    {
        $this->active = true;
    }
}