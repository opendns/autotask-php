<?php
namespace ATWS\AutotaskObjects;

class PaymentTerm extends Entity
{
    // Required
    public $Name;

    // Optional
    public $Active;
    public $Description;
    public $PaymentDueInDays;
}
