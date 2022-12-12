<?php declare(strict_types=1);

namespace ExPF\pages\listing;

use ExPF\core\dto\RequestDto;

final class IdRequestDto implements RequestDto {

    private function __construct(string $id) {
       $this->id = $id; 
    }

    public function id(): string {
       return $this->id; 
    }

    static public function fromJSON(array $data): ?self {
        if (!array_key_exists("id", $data)) {
            return null;
        }
        return new self($data["id"]);
    }
}


