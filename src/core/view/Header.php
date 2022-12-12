<?php declare(strict_types=1);

namespace ExPF\core\view;

/**
 * Abstraction for the head of an HTML document.
 * Can be extended to display different Head parts
 * for different pages.
 *
 * This is the place you might want to inject your style-
 * sheet.
 *
 */
abstract class Header {

    public function generate(): string {
        // This is the basic ending for an HTML page
        $header = <<<HTML
            <!DOCTYPE html>
            <html lang="de">
              <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Titel der Seite | Name der Website</title>
              </head>
              <body>
        HTML;
        return $header;
    }
}
