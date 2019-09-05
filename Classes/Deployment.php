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
     * 
     * Basic application specific options
     * @var array
     */
    protected $options = array(
        'workspacesBasePath' => '/tmp/surf'
    );
    

    /**
     * Deployment constructor
     *
     * @param \TYPO3\Surf\Domain\Model\Deployment $deployment
     * @param $options
     * @throws \RKW\SurfDeployment\Exception
     */
    public function __construct(\TYPO3\Surf\Domain\Model\Deployment $deployment, $options)
    {
        
        // set options based on allowed options
        $mergedOptions = array_merge($this->options, $options);
        foreach (array_keys($this->options) as $key) {

            if (
                (! isset($mergedOptions[$key]))
                && (! is_null($mergedOptions[$key]))
            ){
                throw new \RKW\SurfDeployment\Exception(sprintf('Param "%s" has not been set.', $key));
            }
        }
        
        // security question
        $question = new \Symfony\Component\Console\Question\ConfirmationQuestion('Continue with deployment of branch [' . $this->options['branch'] . '] to [' . $this->options['workspacesBasePath'] . '] on server [' . $this->options['hostname'] . "]?\n(y|n) ", false, '/^(y|j)/i');
        $helper = new \Symfony\Component\Console\Helper\QuestionHelper;
        $input = new \Symfony\Component\Console\Input\ArgvInput;
        $output = new \Symfony\Component\Console\Output\StreamOutput(fopen('php://stdout', 'w'));

        if (!$helper->ask($input, $output, $question)) {
            exit;
        }

        $application = new Application();
        $application->initApplication($options);

        $node = new Node();
        $node->initNode($options);
        $application->addNode($node);

        $deployment->setWorkspacesBasePath($this->options['workspacesBasePath']);
        $deployment->addApplication($application);
    }
}

