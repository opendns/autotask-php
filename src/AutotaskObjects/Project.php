<?php
namespace ATWS\AutotaskObjects;

class Project extends Entity
{
    // Required
    public $AccountID;
    public $EndDateTime;
    public $ProjectName;
    public $StartDateTime;
    public $Type;

    // Optional
    public $ActualBilledHours;
    public $ActualHours;
    public $ChangeOrdersBudget;
    public $ChangeOrdersRevenue;
    public $CompanyOwnerResourceID;
    public $CompletedDateTime;
    public $CompletedPercentage;
    public $ContractID;
    public $CreateDateTime;
    public $CreatorResourceID;
    public $Department;
    public $Description;
    public $Duration;
    public $EstimatedSalesCost;
    public $EstimatedTime;
    public $ExtPNumber;
    public $ExtProjectType;
    public $LaborEstimatedCosts;
    public $LaborEstimatedMarginPercentage;
    public $LaborEstimatedRevenue;
    public $LineOfBusiness;
    public $OriginalEstimatedRevenue;
    public $ProjectCostEstimatedMarginPercentage;
    public $ProjectCostsBudget;
    public $ProjectCostsRevenue;
    public $ProjectLeadResourceID;
    public $ProjectNumber;
    public $PurchaseOrderNumber;
    public $SGDA;
    public $Status;
    public $StatusDateTime;
    public $StatusDetail;
}
