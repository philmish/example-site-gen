<?php declare(strict_types=1);

namespace ExPF\core\view;

use ExPF\core\db\DBConnector;
use ExPF\core\dto\RequestDto;
use ExPF\core\view\Header as Head;


/**
 * Abstraction for the whole html document.
 * It should be used to generate the document body
 * and takes a header and footer as construction
 * parameters.
 *
 * This class also uses the DbConnector for the related page.
 *
 */
abstract class View {
   protected Head $header; 
   protected Footer $footer; 
   protected ?DBConnector $db;

   // Generates the HTML document.
   abstract public function generate(?RequestDto $request = null): string;
}


