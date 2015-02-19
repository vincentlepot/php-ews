<?php
/**
 * Contains \jamesiarmes\PEWS\Type\WeeklyRecurrencePatternType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Describes a weekly recurrence pattern.
 *
 * @package php-ews\Types
 */
class WeeklyRecurrencePatternType extends IntervalRecurrencePatternBaseType
{
    /**
     * Describes which days of the week are in the weekly recurrence pattern.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Enumeration\DaysOfWeekType
     */
    public $DaysOfWeek;

    /**
     * Specifies the first day of the week.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PEWS\Enumeration\DayOfWeekType
     */
    public $FirstDayOfWeek;
}
