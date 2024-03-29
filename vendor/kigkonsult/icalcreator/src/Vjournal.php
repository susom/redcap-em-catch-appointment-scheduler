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
 * iCalcreator VJOURNAL component class
 *
 * @since  2.29.9 - 2019-08-05
 */
final class Vjournal extends Vcomponent
{
    use Traits\ATTACHtrait,
        Traits\ATTENDEEtrait,
        Traits\CATEGORIEStrait,
        Traits\CLASStrait,
        Traits\COLORrfc7986trait,
        Traits\COMMENTtrait,
        Traits\CONTACTtrait,
        Traits\CREATEDtrait,
        Traits\DESCRIPTIONtrait,
        Traits\DTSTAMPtrait,
        Traits\DTSTARTtrait,
        Traits\EXDATEtrait,
        Traits\EXRULEtrait,
        Traits\IMAGErfc7986trait,
        Traits\LAST_MODIFIEDtrait,
        Traits\ORGANIZERtrait,
        Traits\RDATEtrait,
        Traits\RECURRENCE_IDtrait,
        Traits\RELATED_TOtrait,
        Traits\REQUEST_STATUStrait,
        Traits\RRULEtrait,
        Traits\SEQUENCEtrait,
        Traits\STATUStrait,
        Traits\SUMMARYtrait,
        Traits\UIDrfc7986trait,
        Traits\URLtrait;

    /**
     * @var string
     */
    protected static $compSgn = 'j';

    /**
     * Destructor
     *
     * @since  2.29.9 - 2019-08-05
     */
    public function __destruct()
    {
        unset(
            $this->compType,
            $this->xprop,
            $this->components,
            $this->unparsed,
            $this->config,
            $this->compix,
            $this->propIx,
            $this->propDelIx
        );
        unset(
            $this->cno,
            $this->srtk
        );
        unset(
            $this->attach,
            $this->attendee,
            $this->categories,
            $this->class,
            $this->color,
            $this->comment,
            $this->contact,
            $this->created,
            $this->description,
            $this->dtstamp,
            $this->dtstart,
            $this->exdate,
            $this->exrule,
            $this->image,
            $this->lastmodified,
            $this->organizer,
            $this->rdate,
            $this->recurrenceid,
            $this->relatedto,
            $this->requeststatus,
            $this->rrule,
            $this->sequence,
            $this->status,
            $this->summary,
            $this->uid,
            $this->url
        );
    }

    /**
     * Return formatted output for calendar component VJOURNAL object instance
     *
     * @return string
     * @throws Exception  (on Rdate err)
     * @since  2.29.9 - 2019-08-05
     */
    public function createComponent(): string
    {
        $compType = strtoupper($this->getCompType());
        $component = sprintf(self::$FMTBEGIN, $compType);
        $component .= $this->createUid();
        $component .= $this->createDtstamp();
        $component .= $this->createAttach();
        $component .= $this->createAttendee();
        $component .= $this->createCategories();
        $component .= $this->createClass();
        $component .= $this->createColor();
        $component .= $this->createComment();
        $component  .= $this->createContact();
        $component  .= $this->createCreated();
        $component  .= $this->createDescription();
        $component  .= $this->createDtstart();
        $component  .= $this->createExdate();
        $component  .= $this->createExrule();
        $component  .= $this->createImage();
        $component  .= $this->createLastmodified();
        $component  .= $this->createOrganizer();
        $component  .= $this->createRdate();
        $component  .= $this->createRequeststatus();
        $component  .= $this->createRecurrenceid();
        $component  .= $this->createRelatedto();
        $component  .= $this->createRrule();
        $component  .= $this->createSequence();
        $component  .= $this->createStatus();
        $component  .= $this->createSummary();
        $component  .= $this->createUrl();
        $component  .= $this->createXprop();
        return $component . sprintf( self::$FMTEND, $compType );
    }
}
