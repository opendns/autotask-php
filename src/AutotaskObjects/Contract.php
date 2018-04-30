<?php
namespace ATWS\AutotaskObjects;

class Contract extends Entity
{
    // Required
    public $AccountID;
    public $BillingPreference;
    public $ContractName;
    public $ContractType;
    public $EndDate;
    public $StartDate;
    public $Status;
    public $TimeReportingRequiresStartAndStopTimes;


    // Optional
    public $Compliance;
    public $ContactID;
    public $ContactName;
    public $ContractCategory;
    public $ContractNumber;
    public $ContractPeriodType;
    public $Description;
    public $EstimatedCost;
    public $EstimatedHours;
    public $EstimatedRevenue;
    public $ExclusionContractID;
    public $InternalCurrencyOverageBillingRate;
    public $InternalCurrencySetupFee;
    public $IsDefaultContract;
    public $OpportunityID;
    public $OverageBillingRate;
    public $PurchaseOrderNumber;
    public $ServiceLevelAgreementID;
    public $SetupFee;
    public $SetupFeeAllocationCodeID;
}
