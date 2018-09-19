<?php
namespace ATWS\AutotaskObjects;

class ServiceLevelAgreementResults extends Entity
{
    // Required
    public $id;

    // Optional
    public $FirstResponseElapsedHours;
    public $FirstResponseInitiatingResourceID;
    public $FirstResponseMet;
    public $FirstResponseResourceID;
    public $ResolutionElapsedHours;
    public $ResolutionMet;
    public $ResolutionPlanElapsedHours;
    public $ResolutionPlanMet;
    public $ResolutionPlanResourceID;
    public $ResolutionResourceID;
    public $ServiceLevelAgreementName;
    public $TicketID;
}
