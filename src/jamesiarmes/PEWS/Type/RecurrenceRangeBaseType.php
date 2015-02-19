<?php
/**
 * Contains \jamesiarmes\PEWS\Type\RecurrenceRangeBaseType.
 */

namespace jamesiarmes\PEWS\Type;

use jamesiarmes\PEWS\Type;

/**
 * Base class for recurrence ranges,
 *
 * @package php-ews\Types
 */
abstract class RecurrenceRangeBaseType extends Type
{
    /**
     * Represents the start date of a recurring task or calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a date object that extends DateTime.
     */
    public $StartDate;
}
