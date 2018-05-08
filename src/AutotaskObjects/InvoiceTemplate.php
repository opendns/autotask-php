<?php
namespace ATWS\AutotaskObjects;

class InvoiceTemplate extends Entity
{
    // Required
    public $DateFormat;
    public $DisplayFixedPriceContractLabor;
    public $DisplayRecurringServiceContractLabor;
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
    public $CoveredByBlockRetainerContractLabel;
    public $CoveredByRecurringServiceFixedPricePerTicketContractLabel;
    public $CurrencyNegativeFormat;
    public $CurrencyPositiveFormat;
    public $RateCostExpression;
}
