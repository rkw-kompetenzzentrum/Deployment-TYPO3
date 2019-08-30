<?php
namespace RKW\Deployment\TYPO3;


class Node extends \TYPO3\Surf\Domain\Model\Node
{

    /**
     * @var array
     */
    protected $options = [
        'username' => 'my-ssh-user',
        'hostname' => 'hostname-to-deploy-to',
    ];

    public function __construct()
    {
        parent::__construct('Webserver for my customer');
    }


}