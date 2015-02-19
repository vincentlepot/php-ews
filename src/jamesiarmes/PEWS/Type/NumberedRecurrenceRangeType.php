<?php
/**
 * Contains \jamesiarmes\PEWS\Type\NumberedRecurrenceRangeType.
 */

namespace jamesiarmes\PEWS\Type;

/**
 * Describes the start date and the number of occurrences of a recurring item.
 *
 * @package php-ews\Types
 */
class NumberedRecurrenceRangeType extends RecurrenceRangeBaseType
{
    /**
     * Contains the number of occurrences of a recurring item.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $NumberOfOccurrences;
}
