<?php

declare(strict_types=1);

namespace ecstsy\MartianUtilities\interfaces;

use ecstsy\AetherisCore\utils\inventory\CustomSizedInvMenu;
use muqsit\invmenu\InvMenu;
use Vecnavium\FormsUI\CustomForm;
use Vecnavium\FormsUI\SimpleForm;

interface ScreenInterface {

    /**
     * Displays the screen to the given player
     */
    public function getMenu(): InvMenu|null|CustomSizedInvMenu;

    public function getForm(): CustomForm|null|SimpleForm;
}
