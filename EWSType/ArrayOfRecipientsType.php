<?php
/**
 * Contains EWSType_ArrayOfRecipientsType.
 */

/**
 * Represents an array of recipients of an item.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfRecipientsType extends EWSType
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
