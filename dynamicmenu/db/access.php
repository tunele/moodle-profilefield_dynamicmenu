<?php
defined('MOODLE_INTERNAL') || die();
//specific capability (requires knowing db and sql)
$capabilities = array(
	'profilefield/dynamicmenu:caneditsql' => array(
			'riskbitmask'  => RISK_CONFIG,
			'captype'      => 'write',
			'contextlevel' => CONTEXT_SYSTEM
	)
);