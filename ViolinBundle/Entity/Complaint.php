<?php

namespace VDHackaton\ViolinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Complaint{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	public $id;

	/**
	 * @ORM\Column(type="date")
	 */
	public $date;	
	

	/**
	 * @ORM\Column(type="string", length=256)
	 */
	public $information;
	
	/**
	 * @ORM\ManyToOne(targetEntity="ViolenceAct", inversedBy="id")
	 */
	public $violenc_acts;
	

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
     * Set date
     *
     * @param \DateTime $date
     * @return Complaint
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set information
     *
     * @param string $information
     * @return Complaint
     */
    public function setInformation($information)
    {
        $this->information = $information;
    
        return $this;
    }

    /**
     * Get information
     *
     * @return string 
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Set violenc_acts
     *
     * @param VDHackaton\ViolinBundle\Entity\ViolenceAct $violencActs
     * @return Complaint
     */
    public function setViolencActs(\VDHackaton\ViolinBundle\Entity\ViolenceAct $violencActs = null)
    {
        $this->violenc_acts = $violencActs;
    
        return $this;
    }

    /**
     * Get violenc_acts
     *
     * @return VDHackaton\ViolinBundle\Entity\ViolenceAct 
     */
    public function getViolencActs()
    {
        return $this->violenc_acts;
    }
}