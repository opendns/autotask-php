<?php
namespace ATWS\AutotaskObjects;

class InvoiceTemplate extends Entity
{
    public $CoveredByBlockRetainerContractLabel;
    public $CoveredByRecurringServiceFixedPricePerTicketContractLabel;
    public $DateFormat;
    public $DisplayFixedPriceContractLabor;
    public $DisplayRecurringServiceContractLabor;
    public $DisplaySeparateLineItemForEachTax;
    public $DisplayTaxCategory;
    public $DisplayTaxCategorySuperscripts;
    public $DisplayZeroAmountRecurringServicesAndBundles;
    public $GroupBy;
    public $Id;
    public $ItemizeItemsInEachGroup;
    public $ItemizeServicesAndBundles;
    public $Name;
    public $NonBillableLaborLabel;
    public $NumberFormat;
    public $PageLayout;
    public $PageNumberFormat;
    public $PaymentTerms;
    public $RateCostExpression;
    public $SortBy;
    public $TimeFormat;
}
