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
 * iCalcreator VTODO component class
 *
 * @since  2.29.9 - 2019-08-05
 */
final class Vtodo extends VetComponent
{
    use Traits\ATTACHtrait,
        Traits\ATTENDEEtrait,
        Traits\CATEGORIEStrait,
        Traits\CLASStrait,
        Traits\COLORrfc7986trait,
        Traits\COMMENTtrait,
        Traits\COMPLETEDtrait,
        Traits\CONFERENCErfc7986trait,
        Traits\CONTACTtrait,
        Traits\CREATEDtrait,
        Traits\DESCRIPTIONtrait,
        Traits\DTSTAMPtrait,
        Traits\DTSTARTtrait,
        Traits\DUEtrait,
        Traits\DURATIONtrait,
        Traits\EXDATEtrait,
        Traits\EXRULEtrait,
        Traits\GEOtrait,
        Traits\IMAGErfc7986trait,
        Traits\LAST_MODIFIEDtrait,
        Traits\LOCATIONtrait,
        Traits\ORGANIZERtrait,
        Traits\PERCENT_COMPLETEtrait,
        Traits\PRIORITYtrait,
        Traits\RDATEtrait,
        Traits\RECURRENCE_IDtrait,
        Traits\RELATED_TOtrait,
        Traits\REQUEST_STATUStrait,
        Traits\RESOURCEStrait,
        Traits\RRULEtrait,
        Traits\SEQUENCEtrait,
        Traits\STATUStrait,
        Traits\SUMMARYtrait,
        Traits\UIDrfc7986trait,
        Traits\URLtrait;

    /**
     * @var string
     */
    protected static $compSgn = 't';

    /**
     * Destructor
     *
     * @since  2.29.9 - 2019-08-05
     */
    public function __destruct()
    {
        if (!empty($this->components)) {
            foreach ($this->components as $cix => $component) {
                $this->components[$cix]->__destruct();
            }
        }
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
            $this->attach,
            $this->attendee,
            $this->categories,
            $this->class,
            $this->color,
            $this->conference,
            $this->comment,
            $this->completed,
            $this->contact,
            $this->created,
            $this->description,
            $this->dtstamp,
            $this->dtstart,
            $this->due,
            $this->duration,
            $this->image,
            $this->exdate,
            $this->exrule,
            $this->geo,
            $this->lastmodified,
            $this->location,
            $this->organizer,
            $this->percentcomplete,
            $this->priority,
            $this->rdate,
            $this->recurrenceid,
            $this->relatedto,
            $this->requeststatus,
            $this->resources,
            $this->rrule,
            $this->sequence,
            $this->status,
            $this->summary,
            $this->uid,
            $this->url
        );
    }

    /**
     * Return formatted output for calendar component VTODO object instance
     *
     * @return string
     * @throws Exception  (on Duration/Rdate err)
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
        $component  .= $this->createConference();
        $component  .= $this->createCompleted();
        $component  .= $this->createContact();
        $component  .= $this->createCreated();
        $component  .= $this->createDescription();
        $component  .= $this->createDtstart();
        $component  .= $this->createDue();
        $component  .= $this->createDuration();
        $component  .= $this->createExdate();
        $component  .= $this->createExrule();
        $component  .= $this->createImage();
        $component  .= $this->createGeo();
        $component  .= $this->createLastmodified();
        $component  .= $this->createLocation();
        $component  .= $this->createOrganizer();
        $component  .= $this->createPercentcomplete();
        $component  .= $this->createPriority();
        $component  .= $this->createRdate();
        $component  .= $this->createRelatedto();
        $component  .= $this->createRequeststatus();
        $component  .= $this->createRecurrenceid();
        $component  .= $this->createResources();
        $component  .= $this->createRrule();
        $component  .= $this->createSequence();
        $component  .= $this->createStatus();
        $component  .= $this->createSummary();
        $component  .= $this->createUrl();
        $component  .= $this->createXprop();
        $component  .= $this->createSubComponent();
        return $component . sprintf( self::$FMTEND, $compType );
    }
}
