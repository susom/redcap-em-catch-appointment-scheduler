<?php
/**
 * iCalcreator, the PHP class package managing iCal (rfc2445/rfc5445) calendar information.
 *
 * This file is a part of iCalcreator.
 *
 * @author    Kjell-Inge Gustafsson, kigkonsult <ical@kigkonsult.se>
 * @copyright 2007-2021 Kjell-Inge Gustafsson, kigkonsult, All rights reserved
 * @link      https://kigkonsult.se
 * @license   Subject matter of licence is the software iCalcreator.
 *            The above copyright, link, package and version notices,
 *            this licence notice and the invariant [rfc5545] PRODID result use
 *            as implemented and invoked in iCalcreator shall be included in
 *            all copies or substantial portions of the iCalcreator.
 *
 *            iCalcreator is free software: you can redistribute it and/or modify
 *            it under the terms of the GNU Lesser General Public License as
 *            published by the Free Software Foundation, either version 3 of
 *            the License, or (at your option) any later version.
 *
 *            iCalcreator is distributed in the hope that it will be useful,
 *            but WITHOUT ANY WARRANTY; without even the implied warranty of
 *            MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *            GNU Lesser General Public License for more details.
 *
 *            You should have received a copy of the GNU Lesser General Public License
 *            along with iCalcreator. If not, see <https://www.gnu.org/licenses/>.
 */
declare(strict_types=1);

namespace Kigkonsult\Icalcreator;

use Exception;

use function sprintf;
use function strtoupper;

/**
 * iCalcreator VFREEBUSY component class
 *
 * @since 2.29.9 2019-08-05
 */
final class Vfreebusy extends Vcomponent
{
    use Traits\ATTENDEEtrait,
        Traits\COMMENTtrait,
        Traits\CONTACTtrait,
        Traits\DTENDtrait,
        Traits\DTSTAMPtrait,
        Traits\DTSTARTtrait,
        Traits\DURATIONtrait,   // Deprecated in rfc5545
        Traits\FREEBUSYtrait,
        Traits\ORGANIZERtrait,
        Traits\REQUEST_STATUStrait,
        Traits\UIDrfc7986trait,
        Traits\URLtrait;

    /**
     * @var string
     */
    protected static $compSgn = 'f';

    /**
     * Destructor
     *
     * @since  2.26 - 2018-11-10
     */
    public function __destruct()
    {
        unset(
            $this->compType,
            $this->xprop,
            $this->components,
            $this->unparsed,
            $this->config,
            $this->propIx,
            $this->compix,
            $this->propDelIx
        );
        unset(
            $this->cno,
            $this->srtk
        );
        unset(
            $this->attendee,
            $this->comment,
            $this->contact,
            $this->dtend,
            $this->dtstamp,
            $this->dtstart,
            $this->duration,
            $this->freebusy,
            $this->organizer,
            $this->requeststatus,
            $this->uid,
            $this->url
        );
    }

    /**
     * Return formatted output for calendar component VFREEBUSY object instance
     *
     * @return string
     * @throws Exception  (on Duration/Freebusy err)
     * @since 2.29.9 2019-08-05
     */
    public function createComponent(): string
    {
        $compType = strtoupper($this->getCompType());
        $component = sprintf(self::$FMTBEGIN, $compType);
        $component .= $this->createUid();
        $component .= $this->createDtstamp();
        $component .= $this->createAttendee();
        $component .= $this->createComment();
        $component .= $this->createContact();
        $component .= $this->createDtstart();
        $component .= $this->createDtend();
        $component .= $this->createDuration();
        $component  .= $this->createFreebusy();
        $component  .= $this->createOrganizer();
        $component  .= $this->createRequeststatus();
        $component  .= $this->createUrl();
        $component  .= $this->createXprop();
        return $component . sprintf( self::$FMTEND, $compType );
    }
}
