<?php

namespace Abi\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeCompte
 *
 * @ORM\Table(name="type_compte")
 * @ORM\Entity(repositoryClass="Abi\UtilisateurBundle\Repository\TypeCompteRepository")
 */
class TypeCompte
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
