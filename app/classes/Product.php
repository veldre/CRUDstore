<?php

namespace App\Classes;

class Product
{
    private $name;
    private $price;
    private $amount;
    private $createdAt;
    private $id;

    public function __construct(string $name, int $price, int $amount, string $createdAt, ?int $id = null)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
        $this->createdAt = $createdAt;
        $this->id = $id;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function formattedPrice(): string
    {
        return '$' . $this->price() / 100;
    }

    public function price(): int
    {
        return $this->price;
    }

    public function amount(): int
    {

        return $this->amount;

    }

    public function createdAt(): string
    {
        return $this->createdAt;
    }
}
