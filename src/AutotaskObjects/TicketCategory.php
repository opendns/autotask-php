<?php
namespace ATWS\AutotaskObjects;

class TicketCategory extends Entity
{
    // Required
    public $Active;
    public $DisplayColorRGB;
    public $Name;

    // Optional
    public $GlobalDefault;
    public $Nickname;
}
