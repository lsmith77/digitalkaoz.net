<?php

namespace rs\kaoz4FrontBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * NetworkRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NetworkRepository extends EntityRepository
{
    
    /**
     * find all networks by active
     * 
     * @return array 
     */
    public function findActive()
    {
        return $this->findBy(array(
            'active'=>true
        ));
    }
}