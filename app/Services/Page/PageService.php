<?php
namespace App\Services\Page;

use App\DataTransferObjects\TrainingPageDto;

abstract class PageService
{
    abstract function getData(): TrainingPageDto;
}
