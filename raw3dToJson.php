#!/usr/bin/env php
<?php

ini_set('memory_limit', '1024M');

$handle = @fopen($argv[1], "r");
$index = false;

$data = array();

if( $handle ) {
	while( ($buffer = fgets($handle, 4096)) !== false ) {
		$buffer = trim($buffer);

		if (preg_match('/^([a-z]+\d+)$/si', $buffer)) {
			$index = $buffer;
		}elseif( $index ) {
			$data[ $index ][] = explode(' ', $buffer);
		}else{
			throw new Exception('Data before a object index set');
		}
	}
	if( !feof($handle) ) {
		echo "Error: unexpected fgets() fail\n";
	}
	fclose($handle);
}

echo json_encode($data, JSON_NUMERIC_CHECK);
echo PHP_EOL;