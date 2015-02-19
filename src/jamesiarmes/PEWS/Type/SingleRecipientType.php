<?php
/**
 * Contains \jamesiarmes\PEWS\Type\SingleRecipientType.
 */

namespace jamesiarmes\PEWS\Type;

use \jamesiarmes\PEWS\Type;

/**
 * Identifies the delegate in a delegate access scenario.
 *
 * @package php-ews\Types
 */
class SingleRecipientType extends Type
{
    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\EmailAddressType
     */
    public $Mailbox;
}
