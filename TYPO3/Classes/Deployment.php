<?php
namespace RKW\Deployment\TYPO3;

use RKW\Deployment\TYPO3\Domain\Model\Application;
use RKW\Deployment\TYPO3\Domain\Model\Node;

/**
 * Deployment-Script
 *
 * @author Steffen Kroggel <developer@steffenkroggel.de>
 * @copyright Rkw Kompetenzzentrum
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @var \TYPO3\Surf\Domain\Model\Deployment $deployment
 * @version 1.0.8
 */

$application = new Application();
$application->initApplication($options);

$node = new Node();
$node->initNode($options);
$application->addNode($node);

if ($absolutePathLocal) {
    $deployment->setWorkspacesBasePath($absolutePathLocal);
}

$deployment->addApplication($application);