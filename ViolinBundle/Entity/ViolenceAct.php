<?php
namespace VDHackaton\ViolinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ViolenceAct {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	public $id;
	
	/**
	 * @ORM\Column(type="datetime")
	 */
	public $date;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Victim", inversedBy="violenceActs")
	 */
	public $victim;
	
	/**
	 * @ORM\ManytoOne(targetEntity="Agressor", inversedBy="violenceActs")
	 */
	public $agressor;

	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $reception_inst;
	
	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $complainant_name;
	
	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $complainant_victim;
	
	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $violence_clasification;
	
	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $weapon_used;
	

	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $date_fact;

	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $place;
	
	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $state;
	
	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $district;
	
	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $cor;
	
	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $phone_complainant;
	
	/**
	 * @ORM\Column(type="boolean")
	 */
	public $use_alcohol;
	
	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $details_alcohol;
	
	/**
	 * @ORM\Column(type="string", length=256)
	 */
	public $accounts_events;
	
	
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
     * @return ViolenceAct
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
     * Set victim
     *
     * @param VDHackaton\ViolinBundle\Entity\Victim $victim
     * @return ViolenceAct
     */
    public function setVictim(\VDHackaton\ViolinBundle\Entity\Victim $victim = null)
    {
        $this->victim = $victim;
    
        return $this;
    }

    /**
     * Get victim
     *
     * @return VDHackaton\ViolinBundle\Entity\Victim 
     */
    public function getVictim()
    {
        return $this->victim;
    }

    /**
     * Set agressor
     *
     * @param VDHackaton\ViolinBundle\Entity\Agressor $agressor
     * @return ViolenceAct
     */
    public function setAgressor(\VDHackaton\ViolinBundle\Entity\Agressor $agressor = null)
    {
        $this->agressor = $agressor;
    
        return $this;
    }

    /**
     * Get agressor
     *
     * @return VDHackaton\ViolinBundle\Entity\Agressor 
     */
    public function getAgressor()
    {
        return $this->agressor;
    }

    /**
     * Set reception_inst
     *
     * @param string $receptionInst
     * @return ViolenceAct
     */
    public function setReceptionInst($receptionInst)
    {
        $this->reception_inst = $receptionInst;
    
        return $this;
    }

    /**
     * Get reception_inst
     *
     * @return string 
     */
    public function getReceptionInst()
    {
        return $this->reception_inst;
    }

    /**
     * Set complainant_name
     *
     * @param string $complainantName
     * @return ViolenceAct
     */
    public function setComplainantName($complainantName)
    {
        $this->complainant_name = $complainantName;
    
        return $this;
    }

    /**
     * Get complainant_name
     *
     * @return string 
     */
    public function getComplainantName()
    {
        return $this->complainant_name;
    }

    /**
     * Set complainant_victim
     *
     * @param string $complainantVictim
     * @return ViolenceAct
     */
    public function setComplainantVictim($complainantVictim)
    {
        $this->complainant_victim = $complainantVictim;
    
        return $this;
    }

    /**
     * Get complainant_victim
     *
     * @return string 
     */
    public function getComplainantVictim()
    {
        return $this->complainant_victim;
    }

    /**
     * Set violence_clasification
     *
     * @param string $violenceClasification
     * @return ViolenceAct
     */
    public function setViolenceClasification($violenceClasification)
    {
        $this->violence_clasification = $violenceClasification;
    
        return $this;
    }

    /**
     * Get violence_clasification
     *
     * @return string 
     */
    public function getViolenceClasification()
    {
        return $this->violence_clasification;
    }

    /**
     * Set weapon_used
     *
     * @param string $weaponUsed
     * @return ViolenceAct
     */
    public function setWeaponUsed($weaponUsed)
    {
        $this->weapon_used = $weaponUsed;
    
        return $this;
    }

    /**
     * Get weapon_used
     *
     * @return string 
     */
    public function getWeaponUsed()
    {
        return $this->weapon_used;
    }

    /**
     * Set date_fact
     *
     * @param string $dateFact
     * @return ViolenceAct
     */
    public function setDateFact($dateFact)
    {
        $this->date_fact = $dateFact;
    
        return $this;
    }

    /**
     * Get date_fact
     *
     * @return string 
     */
    public function getDateFact()
    {
        return $this->date_fact;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return ViolenceAct
     */
    public function setPlace($place)
    {
        $this->place = $place;
    
        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return ViolenceAct
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set district
     *
     * @param string $district
     * @return ViolenceAct
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    
        return $this;
    }

    /**
     * Get district
     *
     * @return string 
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set cor
     *
     * @param string $cor
     * @return ViolenceAct
     */
    public function setCor($cor)
    {
        $this->cor = $cor;
    
        return $this;
    }

    /**
     * Get cor
     *
     * @return string 
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set phone_complainant
     *
     * @param string $phoneComplainant
     * @return ViolenceAct
     */
    public function setPhoneComplainant($phoneComplainant)
    {
        $this->phone_complainant = $phoneComplainant;
    
        return $this;
    }

    /**
     * Get phone_complainant
     *
     * @return string 
     */
    public function getPhoneComplainant()
    {
        return $this->phone_complainant;
    }

    /**
     * Set use_alcohol
     *
     * @param boolean $useAlcohol
     * @return ViolenceAct
     */
    public function setUseAlcohol($useAlcohol)
    {
        $this->use_alcohol = $useAlcohol;
    
        return $this;
    }

    /**
     * Get use_alcohol
     *
     * @return boolean 
     */
    public function getUseAlcohol()
    {
        return $this->use_alcohol;
    }

    /**
     * Set details_alcohol
     *
     * @param string $detailsAlcohol
     * @return ViolenceAct
     */
    public function setDetailsAlcohol($detailsAlcohol)
    {
        $this->details_alcohol = $detailsAlcohol;
    
        return $this;
    }

    /**
     * Get details_alcohol
     *
     * @return string 
     */
    public function getDetailsAlcohol()
    {
        return $this->details_alcohol;
    }

    /**
     * Set accounts_events
     *
     * @param string $accountsEvents
     * @return ViolenceAct
     */
    public function setAccountsEvents($accountsEvents)
    {
        $this->accounts_events = $accountsEvents;
    
        return $this;
    }

    /**
     * Get accounts_events
     *
     * @return string 
     */
    public function getAccountsEvents()
    {
        return $this->accounts_events;
    }
}