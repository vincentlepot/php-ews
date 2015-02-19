<?php
/**
 * Contains \jamesiarmes\PEWS\Type\ImAddressDictionaryEntryType.
 */

namespace jamesiarmes\PEWS\Type;

use \jamesiarmes\PEWS\Type;

/**
 * Represents an instant messaging (IM) address for a contact.
 *
 * @package php-ews\Types
 *
 * @todo Create a common EntryType class.
 * @todo Create a common TextEntryType class.
 */
class ImAddressDictionaryEntryType extends Type
{
    /**
     * Represents the IM address.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $_;

    /**
     * Identifies the IM address.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Enumeration\ImAddressKeyType
     */
    public $Key;
}
