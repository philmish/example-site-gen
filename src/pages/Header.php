<?php declare(strict_types=1);

namespace ExPF\pages;

use ExPF\core\view\Header;

final class PageHeader extends Header {

    private string $title;

    public function __construct(string $title) {
       $this->title = $title ;
    }

    public function generate(): string {
        // Overrides the header template to inject something
        $header = <<<HTML
            <!DOCTYPE html>
            <html lang="de">
              <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Titel der Seite | Name der Website</title>
              </head>
              <body>
                <h1>$this->title</h1>
        HTML;
        return $header;
        
    }
}


