<?php
use  RKW\SurfDeployment\Deployment;

/**
 * Deployment-Script
 *
 * @author Steffen Kroggel <developer@steffenkroggel.de>
 * @copyright Rkw Kompetenzzentrum
 * @package RKW_Deployment
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

// load options
$options = require_once __DIR__ . '/Credentials.php';

// make deployment
$rkwDeployment = new Deployment($deployment, $options);