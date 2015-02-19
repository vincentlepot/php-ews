<?php
/**
 * Contains \jamesiarmes\PEWS\Type\RelativeYearlyRecurrencePatternType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Describes a relative yearly recurrence pattern.
 *
 * @package php-ews\Types
 */
class RelativeYearlyRecurrencePatternType extends RecurrencePatternBaseType
{
    /**
     * Describes which week in a month is used in a relative yearly recurrence
     * pattern.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Enumeration\DayOfWeekIndexType
     */
    public $DayOfWeekIndex;

    /**
     * Describes the days of the week that are used in item recurrence patterns.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Enumeration\DayOfWeekType
     */
    public $DaysOfWeek;

    /**
     * Describes the month when a yearly recurring item occurs.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Enumeration\MonthNamesType
     */
    public $Month;
}
