<?php

namespace App\DataTransferObjects;

class TrainingPageDto
{
    public function __construct(
        public string $title,
        public string $description,
        public array $features,
        public array $priceCards,
    )
    {
    }
}
