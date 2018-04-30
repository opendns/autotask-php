<?php
namespace ATWS\AutotaskObjects;

class Currency extends Entity
{
    // Required
    public $Active;
    public $CurrencyNegativeFormat;
    public $CurrencyPositiveFormat;
    public $Description;
    public $DisplaySymbol;
    public $ExchangeRate;
    public $IsInternalCurrency;
    public $Name;

    // Optional
    public $LastModifiedDateTime;
    public $UpdateResourceId;

}
