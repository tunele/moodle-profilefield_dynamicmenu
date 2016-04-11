<?php
/**
 * Strings for component 'profilefield_dynamicmenu', language 'en'
 *
 * @package   profilefield_dynamicmenu
 * @copyright 2016 onwards Antonello Moro  {@link http://treagles.it}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Dropdown dynamic menu';

$string['queryerrorfalse'] = "Errore nell'esecuzione della query: il valore di ritorno è false";
$string['queryerrorempty'] = "La query non ha restituito alcun valore: impossibile validare";
$string['queryerroridmissing'] = 'La query deve restituire una colonna chiamata id e una colonna chiamata data: id missing';
$string['queryerrordatamissing'] = 'La query deve restituire una colonna chiamata id e una colonna chiamata data: data missing';
$string['queryerrordefaultmissing'] = 'Il valore impostato come default non esiste nella lista dei valori possibili';
$string['sqlquery'] = 'Sql query';
$string['numbersqlvalues'] = 'Number of possible values';
$string['samplesqlvalues'] = 'Sample of possible values';
$string['sqlerror'] = 'Error executing the query';
$string['dynamicmenu:caneditsql'] = 'Can edit sql query for dynamic menu user custom field';
$string['param1sqlhelp'] = 'Sql query';
$string['param1sqlhelp_help'] = 'The query should return two column: data and id. Furthermore, it should return at least one value. Example: "select 1 id, \'hallo\' data"';