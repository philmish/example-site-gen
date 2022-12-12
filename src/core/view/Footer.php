<?php declare(strict_types=1);

namespace ExPF\core\view;

// Abstraction for the end of a HTML Document
// Can be extended or implemented as is.
// This might be also the place where you inject
// javascript.
abstract class Footer {

    public function generate(): string {
        // This is the basic ending for an HTML page
        $footer = <<<HTML
            </body>
        </html>
        HTML;
        return $footer;
    }
}
