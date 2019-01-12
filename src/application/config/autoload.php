<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| AUTO-LOADER
| -------------------------------------------------------------------
| This file specifies which systems should be loaded by default.
|
| In order to keep the framework as light-weight as possible only the
| absolute minimal resources are loaded by default. For example,
| the database is not connected to automatically since no assumption
| is made regarding whether you intend to use it.  This file lets
| you globally define which systems you would like loaded with every
| request.
|
| -------------------------------------------------------------------
| Instructions
| -------------------------------------------------------------------
|
| These are the things you can load automatically:
|
| 1. Packages
| 2. Libraries
| 3. Drivers
| 4. Helper files
| 5. Custom config files
| 6. Language files
| 7. Models
|
*/

/**
 * Auto-load Libraries
 */
$autoload['libraries'] = [];

/**
 * Auto-load Helper Files
 */
$autoload['helper'] = ['url', 'number'];

/**
 * Auto-load Packages
 */
$autoload['packages'] = [];

/**
 * Auto-load Drivers
 */
$autoload['drivers'] = [];

/**
 * Auto-load Config Files
 */
$autoload['config'] = ['app'];

/**
 * Auto-load Language Files
 */
$autoload['language'] = [];

/**
 * Auto-load Models
 */
$autoload['model'] = [];
