<?php declare(strict_types=1);

namespace ExPF\pages\listing;

use ExPF\core\db\DBConnector;
use ExPF\core\dto\RequestDto;
use ExPF\core\dto\ResponseDto;

final class ListConnector extends DBConnector {
    // This simulates a real database connection

    private array $data = ["a" => 1, "b" => 2, "c" => 3];

    public static function make(): self {
        return new self("SomeDBURI");
    }

    public function query(RequestDto $data): ?ResponseDto {
        if ($data instanceof IdRequestDto) {
            $val = $this->data[$data->id()] ?? null;
            return ItemResponseDto::make($data->id(), $val);
        } else {
            return ListResponseDto::make($this->data);
        }
    }
}




