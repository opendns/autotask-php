<?php
namespace ATWS\AutotaskObjects;

class Opportunity extends Entity
{
    // Required
    public $AccountID;
    public $Amount;
    public $Cost;
    public $CreateDate;
    public $OwnerResourceID;

    // Optional
    public $AdvancedField1;
    public $AdvancedField2;
    public $AdvancedField3;
    public $AdvancedField4;
    public $AdvancedField5;
    public $AssessmentScore;
    public $Barriers;
    public $BusinessDivisionSubdivisionID;
    public $ClosedDate;
    public $ContactID;
    public $DateStamp;
    public $HelpNeeded;
    public $LastActivity;
    public $LeadReferral;
    public $LossReason;
    public $LossReasonDetail;
    public $Market;
    public $MonthlyCost;
    public $MonthlyRevenue;
    public $NextStep;
    public $OnetimeCost;
    public $OnetimeRevenue;
    public $PrimaryCompetitor;
    public $Probability;
    public $ProductID;
    public $ProjectedCloseDate;
    public $ProjectedLiveDate;
    public $PromotionName;
    public $QuarterlyCost;
    public $QuarterlyRevenue;
    public $Rating;
    public $RelationshipAssessmentScore;
    public $RevenueSpread;
    public $RevenueSpreadUnit;
    public $SalesOrderID;
    public $SalesProcessPercentComplete;
    public $SemiannualCost;
    public $SemiannualRevenue;
    public $Stage;
    public $Status;
    public $TechnicalAssessmentScore;
    public $ThroughDate;
    public $Title;
    public $TotalAmountMonths;
    public $UseQuoteTotals;
    public $WinReason;
    public $WinReasonDetail;
    public $YearlyCost;
    public $YearlyRevenue;
}
