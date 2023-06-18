<?php

namespace App\DataTransferObjects;

class PriceCardDto
{

    public function __construct(
        public string $title,
        public int $price,
        public string $description,
        public array $features,
    )
    {
    }
}
