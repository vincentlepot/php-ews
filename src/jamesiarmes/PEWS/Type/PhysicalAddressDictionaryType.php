<?php
/**
 * Contains \jamesiarmes\PEWS\Type\PhysicalAddressDictionaryType.
 */

namespace jamesiarmes\PEWS\Type;

use \jamesiarmes\PEWS\Type;

/**
 * Represents a collection of physical addresses that are associated with a
 * contact.
 *
 * @package php-ews\Types
 */
class PhysicalAddressDictionaryType extends Type
{
    /**
     * Describes a single physical address for a contact item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\PhysicalAddressDictionaryEntryType
     */
    public $Entry;
}
