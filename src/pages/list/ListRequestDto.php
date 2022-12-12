<?php declare(strict_types=1);

namespace ExPF\pages\listing;

use ExPF\core\dto\RequestDto;

final class ListRequestDto implements RequestDto {

    static public function fromJSON(array $data): ?self {
        return new self();
    }
}


