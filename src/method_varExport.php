<?php
/**
 * Test the method 'var_export'
 * mixed var_export ( mixed $expression [, bool $return = false ] )
 * if $return is true, return the result.
 * if $return is false, output the result.
 * @author hackingangle@gmail.com
 */

$arrUser = array(
    2,
    'username' => 'wanggang',
    'age' => 25,
    10,
);

$arrAdmin = array(
    1,
    'username' => 'wanggang',
    'age' => 25,
    10,
);

/*
    array (
      0 => 2,
      'username' => 'wanggang',
      'age' => 25,
      1 => 10,
    )
 */
var_export($arrUser);
/**
 * no output
 */
var_export($arrUser, true);

$outputUser = var_export($arrUser, true);
/*
    string(73) "array (
      0 => 2,
      'username' => 'wanggang',
      'age' => 25,
      1 => 10,
    )"
 */
var_dump($outputUser);
/**
 * Warning: Illegal string offset 'username'
 * As:var_export is that changing the type to string.
 */
echo $outputUser['username'];

/**
 * output to the file
 */
file_put_contents('../data/log/log-method_varExport', var_export($arrUser, true). "\n", FILE_APPEND);

/*  output to the console
    array (
      0 => 1,
      'username' => 'wanggang',
      'age' => 25,
      1 => 10,
    )
 */
file_put_contents('../data/log/log-method_varExport', var_export($arrAdmin). "\n", FILE_APPEND);