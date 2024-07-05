<?php
/**
 * SymLinks
 *
 * @author Steffen Kroggel <developer@steffenkroggel.de>
 * @copyright Rkw Kompetenzzentrum
 * @package RKW_Deployment
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

return [
    './public/uploads' => '../../../surf/shared/Data/uploads',
    './public/fileadmin' => '../../../surf/shared/Data/fileadmin',
    './public/typo3temp/logs' => '../../../../shared/Data/logs',
    './public/typo3temp/var/logs' => '../../../../../shared/Data/logs',
    './public/typo3temp/assets' => '../../../../shared/Data/assets',
    './public/typo3conf/LocalConfiguration.php' => '../../../../shared/LocalConfiguration.php'
];
