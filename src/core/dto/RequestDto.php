<?php declare(strict_types=1);

namespace ExPF\core\dto;

// Data Transfer Object containing request data
interface RequestDto {
    static public function fromJSON(array $data): ?RequestDto;
}


