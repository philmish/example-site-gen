<?php declare(strict_types=1);

namespace ExPF\core\dto;

// Data Transfer Object for responses
interface ResponseDto {

    // Outputs formated HTML from the data in the response
    public function generate();
}


