<?php
/**
 * Contains \jamesiarmes\PEWS\Type\EndDateRecurrenceRangeType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Describes the start date and the end date of an item recurrence pattern.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_RecurrenceRangeBaseType.
 */
class EndDateRecurrenceRangeType extends RecurrenceRangeBaseType
{
    /**
     * Represents the end date of a recurring task or calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a date object that extends DateTime.
     */
    public $EndDate;
}
