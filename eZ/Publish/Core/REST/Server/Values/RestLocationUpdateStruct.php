<?php
/**
 * File containing the RestLocationUpdateStruct class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\API\Repository\Values\Content\LocationUpdateStruct;

/**
 * RestLocationUpdateStruct view model
 */
class RestLocationUpdateStruct
{
    /**
     * Location update struct
     *
     * @var \eZ\Publish\API\Repository\Values\Content\LocationUpdateStruct
     */
    public $locationUpdateStruct;

    /**
     * If set, the location is hidden ( == true ) or unhidden ( == false )
     *
     * @var bool
     */
    public $hidden;

    /**
     * Construct
     *
     * @param \eZ\Publish\API\Repository\Values\Content\LocationUpdateStruct $locationUpdateStruct
     * @param bool $hidden
     */
    public function __construct( LocationUpdateStruct $locationUpdateStruct, $hidden = null )
    {
        $this->locationUpdateStruct = $locationUpdateStruct;
        $this->hidden = $hidden;
    }
}