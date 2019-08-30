<?php
/**
 * Class RsyncFlags
 *
 * @author Steffen Kroggel <developer@steffenkroggel.de>
 * @copyright Rkw Kompetenzzentrum
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @version 1.0.2
 */
$rsyncFlags = array(

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

    '--exclude /dev',
    '--exclude /scripts',
    '--exclude /web/data*.txt',
    '--exclude /web/fileadmin',
    '--exclude /web/typo3conf/ENABLE_INSTALL_TOOL',
    '--exclude /web/typo3conf/LocalConfiguration.php',
    '--exclude /web/typo3conf/temp_CACHED*',
    '--exclude /web/typo3conf/temp_fieldInfo.php',
    '--exclude /web/typo3conf/deprecation_*',
    '--exclude /web/typo3temp/*',
    '--exclude /web/uploads/'
);
