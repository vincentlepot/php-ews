<?php
/**
 * Contains \jamesiarmes\PEWS\Type\ImAddressDictionaryType.
 */

namespace jamesiarmes\PEWS\Type;

use \jamesiarmes\PEWS\Type;

/**
 * Represents a collection of instant messaging addresses for a contact.
 *
 * @package php-ews\Types
 */
class ImAddressDictionaryType extends Type
{
    /**
     * Represents an instant messaging address for a contact.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\ImAddressDictionaryEntryType
     */
    public $Entry;
}
