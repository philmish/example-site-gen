<?php declare(strict_types=1);

namespace ExPF\pages\listing;

use ExPF\core\dto\ResponseDto;

/**
 * Data Transfer Object for returning the whole data
 * like you would for a get all request.
 *
 */
final class ListResponseDto implements ResponseDto {
    private array $data;

    private function __construct(array $data) {
        $this->data = $data;
    }

    static public function make(array $data): self {
        return new self($data);
    }

    // Create the body for the View by iterating over data
    // and building an unordered list.
    public function generate(): string {
        $content = <<<HTML
            <ul>
        HTML;
        foreach ($this->data as $k => $v) {
            $content .= "<li>$k => $v</li>" . "\n";
        };
        $content .= "</ul>";
        return $content;
    }
}
