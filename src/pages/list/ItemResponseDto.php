<?php declare(strict_types=1);

namespace ExPF\pages\listing;

use ExPF\core\dto\ResponseDto;

final class ItemResponseDto implements ResponseDto {
    private string $key;
    private ?int $value;

    private function __construct(string $key, ?int $value) {
        $this->key = $key;
        $this->value = $value; 
    }

    public static function make(string $key, ?int $value) {
        return new self($key, $value);
    }

    public function generate(): string {
        $val = $this->value ?? "Not Found";
        $content = <<<HTML
           <p>{$this->key}: {$val}</p>
        HTML;
        return $content;
    }
}
