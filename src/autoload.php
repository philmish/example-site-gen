<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'expf\\core\\db\\dbconnector' => '/core/db/Connector.php',
                'expf\\core\\dto\\requestdto' => '/core/dto/RequestDto.php',
                'expf\\core\\dto\\responsedto' => '/core/dto/ResponseDto.php',
                'expf\\core\\view\\footer' => '/core/view/Footer.php',
                'expf\\core\\view\\header' => '/core/view/Header.php',
                'expf\\core\\view\\view' => '/core/view/View.php',
                'expf\\pages\\home\\homeview' => '/pages/home/HomeView.php',
                'expf\\pages\\home\\listview' => '/pages/list/ListView.php',
                'expf\\pages\\listing\\idrequestdto' => '/pages/list/IdRequestDto.php',
                'expf\\pages\\listing\\itemresponsedto' => '/pages/list/ItemResponseDto.php',
                'expf\\pages\\listing\\listconnector' => '/pages/list/ListConnector.php',
                'expf\\pages\\listing\\listrequestdto' => '/pages/list/ListRequestDto.php',
                'expf\\pages\\listing\\listresponsedto' => '/pages/list/ListResponseDto.php',
                'expf\\pages\\pagefooter' => '/pages/Footer.php',
                'expf\\pages\\pageheader' => '/pages/Header.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd