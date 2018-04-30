<?php
namespace ATWS\AutotaskObjects;

class InstalledProduct extends Entity
{
    // Required
    public $AccountID;
    public $Active;
    public $InstallDate;
    public $ProductID;

    // Optional
    public $AEMDeviceAuditArchitectureID;
    public $AEMDeviceAuditDescription;
    public $AEMDeviceAuditDeviceTypeID;
    public $AEMDeviceAuditDisplayAdaptorID;
    public $AEMDeviceAuditDomainID;
    public $AEMDeviceAuditExternalIPAddress;
    public $AEMDeviceAuditHostname;
    public $AEMDeviceAuditIPAddress;
    public $AEMDeviceAuditLastUser;
    public $AEMDeviceAuditMacAddress;
    public $AEMDeviceAuditManufacturerID;
    public $AEMDeviceAuditMemoryBytes;
    public $AEMDeviceAuditMissingPatchCount;
    public $AEMDeviceAuditMobileNetworkOperatorID;
    public $AEMDeviceAuditMobileNumber;
    public $AEMDeviceAuditModelID;
    public $AEMDeviceAuditMotherboardID;
    public $AEMDeviceAuditOperatingSystem;
    public $AEMDeviceAuditProcessorID;
    public $AEMDeviceAuditServicePackID;
    public $AEMDeviceAuditSNMPContact;
    public $AEMDeviceAuditSNMPLocation;
    public $AEMDeviceAuditSNMPName;
    public $AEMDeviceAuditStorageBytes;
    public $AEMDeviceID;
    public $AEMDeviceUID;
    public $AEMOpenAlertCount;
    public $ContactID;
    public $ContractID;
    public $CreateDate;
    public $DailyCost;
    public $HourlyCost;
    public $InstalledByContactID;
    public $InstalledByID;
    public $LastModifiedTime;
    public $Location;
    public $MonthlyCost;
    public $Notes;
    public $NumberOfUsers;
    public $ParentInstalledProductID;
    public $PerUseCost;
    public $ProductID;
    public $ReferenceNumber;
    public $ReferenceTitle;
    public $SerialNumber;
    public $ServiceBundleID;
    public $ServiceID;
    public $ServiceLevelAgreementID;
    public $SetupFee;
    public $Type;
    public $VendorID;
    public $WarrantyExpirationDate;
}
