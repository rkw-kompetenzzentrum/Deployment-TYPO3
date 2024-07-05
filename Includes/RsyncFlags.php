<?php
/**
 * RsyncFlags
 *
 * @author Steffen Kroggel <developer@steffenkroggel.de>
 * @copyright Rkw Kompetenzzentrum
 * @package RKW_Deployment
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

return [

    '-az',
    '--no-perms',
    '--no-owner',
    '--no-group',
    '--recursive',
    '--delete',
    '--delete-excluded',

    "--exclude '.git*'",
    '--exclude /.build',
    '--exclude /.buildpath',
    '--exclude /.bowerrc',
    '--exclude /.bundle',
    '--exclude /.idea',
    '--exclude /.settings',
    '--exclude /.project',

    '--exclude /.surf',
    '--exclude /.dev',
    '--exclude /.ddev',
    '--exclude /.scripts',

    '--exclude .DS_Store',
    '--exclude Capfile',
    '--exclude gulpfile.js',
    '--exclude Gemfile*',
    '--exclude node_modules',
    '--exclude .node-version',
    '--exclude package.json',
    '--exclude .editorconfig',

    "--exclude 'LICENSE.*'",
    "--exclude 'Readme.*'",
    "--exclude 'README.*'",
    '--exclude Rakefile',
    "--exclude '*.md'",
    "--exclude '*.dev*'",
    "--exclude '*.prod*'",
    "--exclude '*.stage*'",

    '--exclude /public/data*.txt',
    '--exclude /public/fileadmin',
    '--exclude /public/typo3conf/ENABLE_INSTALL_TOOL',
    '--exclude /public/typo3conf/LocalConfiguration.php',
    '--exclude /public/typo3conf/temp_CACHED*',
    '--exclude /public/typo3conf/temp_fieldInfo.php',
    '--exclude /public/typo3conf/deprecation_*.log',
    '--exclude /public/typo3temp/*',
    '--exclude /public/uploads/'
];
