<?php

/*
 * This file is part of the Novo SGA project.
 *
 * (c) Rogerio Lino <rogeriolino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Security;

use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Security\User\EntityUserProvider;

/**
 * UserProvider
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
class UserProvider extends EntityUserProvider
{
    
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, 'Novosga\Entity\Usuario', 'login');
    }
    
}