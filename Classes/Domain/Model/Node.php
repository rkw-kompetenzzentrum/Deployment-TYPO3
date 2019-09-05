<?php
namespace RKW\SurfDeployment\Domain\Model;


/**
 * Class Node
 *
 * @author Steffen Kroggel <developer@steffenkroggel.de>
 * @copyright Rkw Kompetenzzentrum
 * @package RKW_Deployment
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later */

class Node extends \TYPO3\Surf\Domain\Model\Node
{


    /**
     * Constructor
     * @param string $name
     */
    public function __construct($name = 'Server')
    {
        parent::__construct($name);
        $this->options = array_merge($this->options, array(
            'hostname' => '',
            'username' => '',
            'password' => '',
            'port' => ''
        ));
    }


    /**
     * Init node with params
     *
     * @param $options
     * @throws \RKW\Deployment\TYPO3\Exception
     */
    public function initNode($options)
    {

        // set all options
        $mergedOptions = array_merge($this->options, $options);
        foreach (array_keys($this->options) as $key) {

            if (! isset($mergedOptions[$key])){
                throw new \RKW\Deployment\TYPO3\Exception(sprintf('Param "%s" has not been set.', $key));
            }
            $this->setOption($key, $mergedOptions[$key]);

            // override name
            if ($key == 'hostname') {
                $this->name = $mergedOptions[$key];
            }
        }
    }

}