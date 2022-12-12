<?php declare(strict_types=1);

namespace ExPF\core\db;

use ExPF\core\dto\RequestDto;
use ExPF\core\dto\ResponseDto;

/**
 * Abstraction for a db connection.
 * Can be used to execute Database operations.
 *
 * The public methods are really basic and should be reworked.
 *
 */
abstract class DBConnector {

    protected function __constructor(string $dsn) {
        $this->dsn = $dsn;
    }

    public function query(RequestDto $data): ?ResponseDto {
        return NULL;
    }

    public function insert(RequestDto $data): ?ResponseDto {
        return NULL;
    }
}


