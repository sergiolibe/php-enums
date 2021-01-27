<?php
declare(strict_types=1);

namespace Enums;


use JsonSerializable;

class User implements JsonSerializable
{
    private ERole $role;
    private EGender $gender;

    public function __construct(
        private string $username,
        private string $email,
        ?ERole $role = null,
        ?EGender $gender = null,
    )
    {
        $this->role = $role ?? ERole::USER();
        $this->gender = $gender ?? EGender::MALE();
    }

    public function __toString(): string
    {
        return
            $this->username
            . ' ' . $this->email
            . ' ' . $this->role
            . ' ' . $this->gender;
    }

    public function jsonSerialize()
    {
        return [
            'username' => $this->username,
            'email' => $this->email,
            'role' => $this->role,
            'gender' => $this->gender,
        ];
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getRole(): ERole
    {
        return $this->role;
    }

    public function getGender(): EGender
    {
        return $this->gender;
    }
}