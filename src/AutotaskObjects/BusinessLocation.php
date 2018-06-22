<?php
namespace ATWS\AutotaskObjects;

class BusinessLocation extends Entity
{
    // Required
    public $DateFormat;
    public $Name;
    public $NumberFormat;
    public $TimeFormat;
    public $TimeZoneID;

    // Optional
    public $AdditionalAddressInfo;
    public $Address1;
    public $Address2;
    public $City;
    public $CountryID;
    public $Default;
    public $FirstDayOfWeek;
    public $FridayBusinessHoursEndTime;
    public $FridayBusinessHoursStartTime;
    public $FridayExtendedHoursEndTime;
    public $FridayExtendedHoursStartTime;
    public $HolidaySetID;
    public $MondayBusinessHoursEndTime;
    public $MondayBusinessHoursStartTime;
    public $MondayExtendedHoursEndTime;
    public $MondayExtendedHoursStartTime;
    public $NoHoursOnHolidays;
    public $PostalCode;
    public $SaturdayBusinessHoursEndTime;
    public $SaturdayBusinessHoursStartTime;
    public $SaturdayExtendedHoursEndTime;
    public $SaturdayExtendedHoursStartTime;
    public $State;
    public $SundayBusinessHoursEndTime;
    public $SundayBusinessHoursStartTime;
    public $SundayExtendedHoursEndTime;
    public $SundayExtendedHoursStartTime;
    public $ThursdayBusinessHoursEndTime;
    public $ThursdayBusinessHoursStartTime;
    public $ThursdayExtendedHoursEndTime;
    public $ThursdayExtendedHoursStartTime;
    public $TuesdayBusinessHoursEndTime;
    public $TuesdayBusinessHoursStartTime;
    public $TuesdayExtendedHoursEndTime;
    public $TuesdayExtendedHoursStartTime;
    public $WednesdayBusinessHoursEndTime;
    public $WednesdayBusinessHoursStartTime;
    public $WednesdayExtendedHoursEndTime;
    public $WednesdayExtendedHoursStartTime;
}
