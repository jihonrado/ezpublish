<?php
//
// Definition of eZDateTimeType class
//
//
// Copyright (C) 1999-2002 eZ systems as. All rights reserved.
//
// This source file is part of the eZ publish (tm) Open Source Content
// Management System.
//
// This file may be distributed and/or modified under the terms of the
// "GNU General Public License" version 2 as published by the Free
// Software Foundation and appearing in the file LICENSE.GPL included in
// the packaging of this file.
//
// Licencees holding valid "eZ publish professional licences" may use this
// file in accordance with the "eZ publish professional licence" Agreement
// provided with the Software.
//
// This file is provided AS IS with NO WARRANTY OF ANY KIND, INCLUDING
// THE WARRANTY OF DESIGN, MERCHANTABILITY AND FITNESS FOR A PARTICULAR
// PURPOSE.
//
// The "eZ publish professional licence" is available at
// http://ez.no/home/licences/professional/. For pricing of this licence
// please contact us via e-mail to licence@ez.no. Further contact
// information is available at http://ez.no/home/contact/.
//
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
// Contact licence@ez.no if any conditions of this licencing isn't clear to
// you.
//

//!! eZKernel
//! The class eZDateTimeType
/*!

*/

include_once( "kernel/classes/ezdatatype.php" );
include_once( "lib/ezlocale/classes/ezdatetime.php" );

define( "EZ_DATATYPESTRING_DATETIME", "ezdatetime" );


class eZDateTimeType extends eZDataType
{
    function eZDateTimeType()
    {
        $this->eZDataType( EZ_DATATYPESTRING_DATETIME, "Datetime" );
    }

    /*!
     Validates the input and returns true if the input was
     valid for this datatype.
    */
    function validateObjectAttributeHTTPInput( &$http, $base, &$contentObjectAttribute )
    {
        $year = $http->postVariable( $base . "_datetime_year_" . $contentObjectAttribute->attribute( "id" ) );
        $month = $http->postVariable( $base . "_datetime_month_" . $contentObjectAttribute->attribute( "id" ) );
        $day = $http->postVariable( $base . "_datetime_day_" . $contentObjectAttribute->attribute( "id" ) );
        $hour = $http->postVariable( $base . "_datetime_hour_" . $contentObjectAttribute->attribute( "id" ) );
        $minute = $http->postVariable( $base . "_datetime_minute_" . $contentObjectAttribute->attribute( "id" ) );
        $datetime = $year.$month.$day.$hour.$minute;
        $classAttribute =& $contentObjectAttribute->contentClassAttribute();
        if( ( $classAttribute->attribute( "is_required" ) == false ) &&  ( $data == "" ) )
        {
            return EZ_INPUT_VALIDATOR_STATE_ACCEPTED;
        }
        if ( preg_match( "#^[1-2]{1}[0-9]{3}[1-2]{1}[0-9]{1}[0-3]{1}[0-9]{1}[0-2]{1}[0-9]{1}[0-6]{1}[0-9]{1}$#", $datatime ) )
            return EZ_INPUT_VALIDATOR_STATE_ACCEPTED;
        return EZ_INPUT_VALIDATOR_STATE_INVALID;
    }

    /*!
     Fetches the http post var integer input and stores it in the data instance.
    */
    function fetchObjectAttributeHTTPInput( &$http, $base, &$contentObjectAttribute )
    {
        $year = $http->postVariable( $base . "_datetime_year_" . $contentObjectAttribute->attribute( "id" ) );
        $month = $http->postVariable( $base . "_datetime_month_" . $contentObjectAttribute->attribute( "id" ) );
        $day = $http->postVariable( $base . "_datetime_day_" . $contentObjectAttribute->attribute( "id" ) );
        $hour = $http->postVariable( $base . "_datetime_hour_" . $contentObjectAttribute->attribute( "id" ) );
        $minute = $http->postVariable( $base . "_datetime_minute_" . $contentObjectAttribute->attribute( "id" ) );
        $dateTime = new eZDateTime();
        $dateTime->setMDY( $month, $day, $year );
        $dateTime->setHMS( ($hour+1), $minute, 0 );
        eZDebug::writeError("WWWWWWWWWWWW". $minute);
        $contentObjectAttribute->setAttribute( "data_int", $dateTime->timeStamp() );
        // $contentObjectAttribute->setAttribute( "data_int", $dateTime->currentTimeStamp() );
    }

    /*!
     Returns the content.
    */
    function &objectAttributeContent( &$contentObjectAttribute )
    {
        $dateTime = new eZDateTime();
        $dateTime->setTimeStamp( $contentObjectAttribute->attribute( 'data_int' ) );
        return $dateTime;
    }

    /*!
     Returns the meta data used for storing search indeces.
    */
    function metaData( $contentObjectAttribute )
    {
        return $contentObjectAttribute->attribute( 'data_text' );
    }

    /*!
     Returns the date.
    */
    function title( &$contentObjectAttribute )
    {
        return $contentObjectAttribute->attribute( "data_text" );
    }
}
eZDataType::register( EZ_DATATYPESTRING_DATETIME, "ezdatetimetype" );

?>
