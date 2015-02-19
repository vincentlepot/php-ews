<?php
/**
 * Contains \jamesiarmes\PEWS\Type\ResolutionType.
 */

namespace jamesiarmes\PEWS\Type;

use \jamesiarmes\PEWS\Type;

/**
 * Represents a single resolved entity.
 *
 * @package php-ews\Types
 */
class ResolutionType extends Type
{
    /**
     * Represents an Exchange contact item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\ContactItemType
     */
    public $Contact;

    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\EmailAddressType
     */
    public $Mailbox;
}
