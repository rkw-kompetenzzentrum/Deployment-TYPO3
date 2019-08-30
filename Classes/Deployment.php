<?php
namespace RKW\SurfDeployment;

use RKW\SurfDeployment\Domain\Model\Application;
use RKW\SurfDeployment\Domain\Model\Node;

/**
 * Class Deployment
 *
 * @author Steffen Kroggel <developer@steffenkroggel.de>
 * @copyright Rkw Kompetenzzentrum
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @var \TYPO3\Surf\Domain\Model\Deployment $deployment
 */
class Deployment
{

    /**
     * Deployment constructor
     *
     * @param \TYPO3\Surf\Domain\Model\Deployment $deployment
     * @param $options
     * @throws \RKW\SurfDeployment\Exception
     */
    public function __construct(\TYPO3\Surf\Domain\Model\Deployment $deployment, $options)
    {

        $application = new Application();
        $application->initApplication($options);

        $node = new Node();
        $node->initNode($options);
        $application->addNode($node);

        if ($options['workspacesBasePath']) {
            $deployment->setWorkspacesBasePath($options['workspacesBasePath']);
        }

        $deployment->addApplication($application);
    }
}

