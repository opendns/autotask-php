<?php
namespace ATWS\AutotaskObjects;

class NotificationHistory extends Entity
{
    // Required
    public $IsActive;
    public $IsDeleted;
    public $IsTemplateJob;
    public $DisplaySeparateLineItemForEachTax;
    public $DisplayTaxCategory;
    public $DisplayTaxCategorySuperscripts;
    public $DisplayZeroAmountRecurringServicesAndBundles;
    public $GroupBy;
    public $ItemizeItemsInEachGroup;
    public $ItemizeServicesAndBundles;
    public $Name;
    public $NonBillableLaborLabel;
    public $NumberFormat;
    public $PageLayout;
    public $PageNumberFormat;
    public $PaymentTerms;
    public $ShowGridHeader;
    public $ShowVerticalGridLines;
    public $SortBy;
    public $TimeFormat;

    // Optional
    public $AccountID;
    public $EntityNumber;
    public $EntityTitle;
    public $InitiatingContactID;
    public $InitiatingResourceID;
    public $NotificationHistoryTypeID;
    public $NotificationSentTime;
    public $OpportunityID;
    public $ProjectID;
    public $QuoteID;
    public $RecipientDisplayName;
    public $RecipientEmailAddress;
    public $TaskID;
    public $TemplateName;
    public $TicketID;
    public $TimeEntryID;
}
