<?php declare(strict_types=1);

namespace ExPF\pages\home;

use ExPF\core\dto\RequestDto;
use ExPF\core\view\View;
use ExPF\pages\listing\IdRequestDto;
use ExPF\pages\listing\ListConnector;
use ExPF\pages\listing\ListRequestDto;
use ExPF\pages\PageFooter;
use ExPF\pages\PageHeader;

/**
 * This class simulates a view which builds the HTML
 * from data fetched from the DB.
 *
 * It might be a good idea to inject the DBConnector dependecy
 * instead of declaring it right in the constructor.
 *
 *
 */
final class ListView extends View {
    
    public function __construct() {
        $this->header = new PageHeader("List");
        $this->footer = new PageFooter();
        $this->db = ListConnector::make();
    }

    /**
     * This page can be requested with an "id" query param
     * to retrieve a specific value from the fake DBConnector.
     *
     * Otherwise the whole list is returned.
     *
     */
    public function generate(?RequestDto $request = null): string {
        if (array_key_exists("id", $_GET)) {
            $request = IdRequestDto::fromJSON($_GET);
        } else {
            $request = ListRequestDto::fromJSON(array());
        }
        $result = $this->db->query($request);
        $content = <<<HTML
            {$this->header->generate()}
            {$result->generate()}
            {$this->footer->generate()}
        HTML;
        return $content;
    }
}


