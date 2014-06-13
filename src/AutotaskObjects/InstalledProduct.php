<?php
namespace ATWS\AutotaskObjects;

class InstalledProduct extends Entity
{
    // Required
    public $AccountID;
    public $CreateDate;
    public $InstalledByContactID;
    public $InstalledByID;
    public $ProductID;

    // Optional
    public $Active;
    public $ContactID;
    public $ContractID;
    public $DailyCost;
    public $HourlyCost;
    public $InstallDate;
    public $Location;
    public $MonthlyCost;
    public $Notes;
    public $NumberOfUsers;
    public $PerUseCost;
    public $ReferenceNumber;
    public $ReferenceTitle;
    public $SerialNumber;
    public $ServiceBundleID;
    public $SetupFee;
    public $Type;
    public $ServiceID;
    public $UserDefinedFields;
    public $VendorID;
    public $WarrantyExpirationDate;
}
