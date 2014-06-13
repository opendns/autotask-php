<?php
namespace ATWS\AutotaskObjects;

class Account extends Entity
{
    // Required
    public $AccountName;
    public $AccountType;
    public $OwnerResourceID;
    public $Phone;

    // Optional
    public $AccountNumber;
    public $Active;
    public $AdditionalAddressInformation;
    public $Address1;
    public $Address2;
    public $AlternativePhone1;
    public $AlternatePhone2;
    public $AssetValue;
    public $BillToAdditionalAddressInformation;
    public $BillToAddress1;
    public $BillToAddress2;
    public $BillToAddressToUse;
    public $BillToAttention;
    public $BillToCity;
    public $BillToCountryID;
    public $BillToState;
    public $BillToZipCode;
    public $City;
    public $ClientPortalActive;
    public $CompetitorID;
    public $Country;
    public $CountryID;
    public $CreateDate;
    public $Fax;
    public $InvoiceMethod;
    public $InvoiceNonContractItemsToParentAccount;
    public $KeyAccountIcon;
    public $LastActivityDate;
    public $MarketSegmentID;
    public $ParentAccountID;
    public $PostalCode;
    public $SICCode;
    public $State;
    public $StockMarket;
    public $StockSymbol;
    public $TaskFireActive;
    public $TaxExempt;
    public $TaxID;
    public $TaxRegionID;
    public $TerritoryID;
    public $WebAddress;
}
