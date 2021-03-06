<?php

namespace BTDemo;

use OLOG\Layouts\InterfaceMenu;
use OLOG\Layouts\MenuItem;

class DemoMenu implements InterfaceMenu
{
    static public function menuArr(){
        return [
            new MenuItem('123', '/'),
            new MenuItem('234', '', [
                new MenuItem('345', '/2'),
                new MenuItem('456', '/3')
            ]),
            new MenuItem('567', '', [
                new MenuItem('678', '/4'),
                new MenuItem('789', '/5')
            ])
        ];
    }


}