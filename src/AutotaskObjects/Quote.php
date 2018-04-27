<?php
namespace ATWS\AutotaskObjects;

class Quote extends Entity
{
    // Required
    public $BillToLocationID;
    public $EffectiveDate;
    public $ExpirationDate;
    public $Name;
    public $OpportunityID;

    // Optional
    public $AccountID;
    public $CalculateTaxSeparately;
    public $Comment;
    public $ContactID;
    public $CreateDate;
    public $CreatorResourceID;
    public $Description;
    public $eQuoteActive;
    public $ExternalQuoteNumber;
    public $GroupByID;
    public $GroupByProductCategory;
    public $LastActivityDate;
    public $LastModifiedBy;
    public $PaymentTerm;
    public $PaymentType;
    public $PrimaryQuote;
    public $ProposalProjectID;
    public $PurchaseOrderNumber;
    public $QuoteNumber;
    public $QuoteTemplateID;
    public $ShippingType;
    public $ShipToLocationID;
    public $ShowEachTaxInGroup;
    public $ShowTaxCategory;
    public $SoldToLocationID;
    public $TaxGroup;
}
