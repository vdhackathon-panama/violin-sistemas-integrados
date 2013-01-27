<?php

namespace VDHackaton\ViolinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class PolicyReport{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	public $id;
	
	/**
	 * @ORM\Column(type="date")
	 */
	public $date_report;
	
	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $institution;
	
	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $dependency;
	
	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $supervisor;
	
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
     * Set date_report
     *
     * @param \DateTime $dateReport
     * @return PolicyReport
     */
    public function setDateReport($dateReport)
    {
        $this->date_report = $dateReport;
    
        return $this;
    }

    /**
     * Get date_report
     *
     * @return \DateTime 
     */
    public function getDateReport()
    {
        return $this->date_report;
    }

    /**
     * Set institution
     *
     * @param string $institution
     * @return PolicyReport
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
    
        return $this;
    }

    /**
     * Get institution
     *
     * @return string 
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * Set dependency
     *
     * @param string $dependency
     * @return PolicyReport
     */
    public function setDependency($dependency)
    {
        $this->dependency = $dependency;
    
        return $this;
    }

    /**
     * Get dependency
     *
     * @return string 
     */
    public function getDependency()
    {
        return $this->dependency;
    }

    /**
     * Set supervisor
     *
     * @param string $supervisor
     * @return PolicyReport
     */
    public function setSupervisor($supervisor)
    {
        $this->supervisor = $supervisor;
    
        return $this;
    }

    /**
     * Get supervisor
     *
     * @return string 
     */
    public function getSupervisor()
    {
        return $this->supervisor;
    }

    /**
     * Set violenc_acts
     *
     * @param VDHackaton\ViolinBundle\Entity\violenceActs $violencActs
     * @return PolicyReport
     */
    public function setViolencActs(\VDHackaton\ViolinBundle\Entity\violenceActs $violencActs = null)
    {
        $this->violenc_acts = $violencActs;
    
        return $this;
    }

    /**
     * Get violenc_acts
     *
     * @return VDHackaton\ViolinBundle\Entity\violenceActs 
     */
    public function getViolencActs()
    {
        return $this->violenc_acts;
    }
}