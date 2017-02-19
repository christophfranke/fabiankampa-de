<?php

field::$methods['kirbytext'] = function($field) {
	$field->value = str_replace('ä', '&auml;', $field->value);
	$field->value = str_replace('ö', '&ouml;', $field->value);
	$field->value = str_replace('ü', '&uuml;', $field->value);
	$field->value = str_replace('Ä', '&Auml;', $field->value);
	$field->value = str_replace('Ö', '&Ouml;', $field->value);
	$field->value = str_replace('Ü', '&Uuml;', $field->value);
	$field->value = str_replace('ß', '&szlig;', $field->value);
	return kirbytext($field);
};