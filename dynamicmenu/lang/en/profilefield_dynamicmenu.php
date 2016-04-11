<?php
/**
 * Strings for component 'profilefield_dynamicmenu', language 'en'
 *
 * @package   profilefield_dynamicmenu
 * @copyright 2016 onwards Antonello Moro  {@link http://treagles.it}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Dropdown dynamic menu';

$string['queryerrorfalse'] = "Error executing the query: return value is false";
$string['queryerrorempty'] = "No results found executing the query: cannnot validate";
$string['queryerroridmissing'] = 'id column is missing in query return values';
$string['queryerrordatamissing'] = 'data column is missing in query return values';
$string['queryerrordefaultmissing'] = 'Default value does not exists among the list of allowed values';
$string['sqlquery'] = 'Sql query';
$string['numbersqlvalues'] = 'Number of possible values';
$string['samplesqlvalues'] = 'Sample of possible values';
$string['sqlerror'] = 'Error executing the query';
$string['dynamicmenu:caneditsql'] = 'Can edit sql query for dynamic menu user custom field';
$string['param1sqlhelp'] = 'Sql query';
$string['param1sqlhelp_help'] = 'The query should return two column: data and id. Furthermore, it should return at least one value. Example: "select 1 id, \'hallo\' data"';