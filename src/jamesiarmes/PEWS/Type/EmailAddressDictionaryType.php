<?php
/**
 * Contains \jamesiarmes\PEWS\Type\EmailAddressDictionaryType.
 */

namespace jamesiarmes\PEWS\Type;

use \jamesiarmes\PEWS\Type;

/**
 * Represents a collection of e-mail addresses for a contact.
 *
 * @package php-ews\Types
 */
class EmailAddressDictionaryType extends Type
{
    /**
     * Represents a single e-mail address for a contact.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\EmailAddressDictionaryEntryType
     */
    public $Entry;
}
