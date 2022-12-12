<?php declare(strict_types=1);

namespace ExPF\pages\home;

use ExPF\core\dto\RequestDto;
use ExPF\core\view\View;
use ExPF\pages\PageFooter;
use ExPF\pages\PageHeader;

final class HomeView extends View {
    
    public function __construct() {
        $this->header = new PageHeader("Home");
        $this->footer = new PageFooter();
        $this->db = null;
    }

    public function generate(?RequestDto $request = null): string {
       $content = <<<HTML
        {$this->header->generate()}
        <p>Welcome</p>
       {$this->footer->generate()}
       HTML;
       return $content;
    }
}


