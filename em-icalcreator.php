<?php
/*
Plugin Name: Events Manager iCalcreator
Version: 5.0.0
Description: iCalcreator library http://kigkonsult.se/iCalcreator/index.php and helper functions to use it with events-manager ical templates.
Author: Ekes
License: GPL2
*/

/**
 * Proceedural helper to load library if required and return iCalcreator
 * vcalendar object.
 *
 * @param array $config
 *   Any configuration options as defined by
 *   http://kigkonsult.se/iCalcreator/docs/using.html#iCalcreator_configuration_methods
 *
 * @return vcalendar
 *   Configured vcalendar object.
 */
function em_icalcreator_vcalendar($config = array()) {
  require_once 'libraries/iCalcreator/iCalcreator.class.php';
  return new vcalendar( $config );
}

/**
 * Helper function to convert stored timestamp into an array.
 *
 * @param int $date
 *   Timestamp.
 * @param bool $all_day
 *   TRUE if an all day event.
 * @param int $offset
 *   Signed integer for timezone offset.
 */
function em_icalcreator_datestamp2array($date, $all_day = FALSE, $offset = NULL) {
  $date_array = array();
  $date_array['year'] = date('Y', $date);
  $date_array['month'] = date('m', $date);
  $date_array['day'] = date('d', $date);
  if (! $all_day) {
    $date_array['hour'] = date('H', $date);
    $date_array['min'] = date('m', $date);
    $date_array['sec'] = date('s', $date);
  }
  if ($offset !== NULL) {
    $date_array['tz'] = (string) $offset;
  }

  return $date_array;
}
  
