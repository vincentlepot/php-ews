<?php
/**
 * Contains \jamesiarmes\PEWS\Type\PhoneNumberDictionaryType.
 */

namespace jamesiarmes\PEWS\Type;

use \jamesiarmes\PEWS\Type;

/**
 * Represents a collection of telephone numbers for a contact.
 *
 * @package php-ews\Types
 */
class PhoneNumberDictionaryType extends Type
{
    /**
     * Represents a telephone number for a contact.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\PhoneNumberDictionaryEntryType
     */
    public $Entry;
}
