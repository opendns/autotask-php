<?php
namespace ATWS\AutotaskObjects;

class Contact extends Entity
{
    // Required
    public $AccountID;
    public $Active;
    public $FirstName;
    public $LastName;

    // Optional
    public $AdditionalAddressInformation;
    public $AddressLine;
    public $AddressLine1;
    public $AlternatePhone;
    public $BulkEmailOptOut;
    public $BulkEmailOptOutTime;
    public $City;
    public $Country;
    public $CountryID;
    public $CreateDate;
    public $EMailAddress;
    public $EMailAddress2;
    public $EMailAddress3;
    public $Extension;
    public $ExternalID;
    public $FacebookURL;
    public $FaxNumber;
    public $LastActivityDate;
    public $LastModifiedDate;
    public $LinkedInURL;
    public $MiddleInitial;
    public $MobilePhone;
    public $NamePrefix;
    public $NameSuffix;
    public $Note;
    public $Notification;
    public $Phone;
    public $PrimaryContact;
    public $RoomNumber;
    public $SolicitationOptOut;
    public $SolicitationOptOutTime;
    public $State;
    public $SurveyOptOut;
    public $Title;
    public $TwitterURL;
    public $ZipCode;
}
