<?php
namespace ATWS\AutotaskObjects;

class SurveyResults extends Entity
{
    // Required
    public $id;
    public $SurveyID;

    // Optional
    public $AccountID;
    public $CompanyRating;
    public $ContactID;
    public $ContactRating;
    public $CompleteDate;
    public $ResourceRating;
    public $SendDate;
    public $SurveyRating;
    public $TicketID;
}
