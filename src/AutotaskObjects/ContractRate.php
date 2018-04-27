<?php
namespace ATWS\AutotaskObjects;

class ContractRate extends Entity
{
    // Required
    public $ContractHourlyRate;
    public $ContractID;
    public $RoleID;

    // Optional
    public $InternalCurrencyContractHourlyRate;
}
