<?php
/**
 * Contains \jamesiarmes\PEWS\Type\MembersListType.
 */

namespace jamesiarmes\PEWS\Type;

use \jamesiarmes\PEWS\Type;

/**
 * Represents the list of members for a distribution list.
 *
 * @package php-ews\Types
 */
class MembersListType extends Type
{
    /**
     * Provides an identifier for a fully resolved e-mail address, and the
     * status of that address on the server.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PEWS\Type\MemberType
     */
    public $Member;
}
