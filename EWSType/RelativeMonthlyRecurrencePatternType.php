<?php
/**
 * Contains \jamesiarmes\PEWS\Type\RelativeMonthlyRecurrencePatternType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Describes a relative monthly recurrence pattern.
 *
 * @package php-ews\Types
 */
class RelativeMonthlyRecurrencePatternType extends IntervalRecurrencePatternBaseType
{
    /**
     * Describes which week is used in a relative monthly recurrence pattern.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Enumeration\DayOfWeekIndexType
     */
    public $DayOfWeekIndex;

    /**
     * Describes which days of the week are in the relative monthly recurrence
     * pattern.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Enumeration\DayOfWeekType
     */
    public $DaysOfWeek;
}
