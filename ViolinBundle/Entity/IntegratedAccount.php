<?php
namespace VDHackaton\ViolinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
 class IntegratedAccount {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
 	public $id;
 	
 	/**
 	 * @ORM\Column(type="string", length=16)
 	 */
 	public $secretKey;
 	
 	/**
 	 * @ORM\Column(type="string", length=100)
 	 */
 	public $name;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set secretKey
     *
     * @param string $secretKey
     * @return IntegratedAccount
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
    
        return $this;
    }

    /**
     * Get secretKey
     *
     * @return string 
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return IntegratedAccount
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}