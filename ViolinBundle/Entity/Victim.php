<?php
namespace VDHackaton\ViolinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Victim {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="string", length=100)
	 */
	public $id;
	
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	public $firstName;

	/**
	 * @ORM\Column(type="string", length=100)
	 */
	public $lastName;
	
	/**
	 * @ORM\Column(type="date")
	 */
	public $birthDate;
	
	/**
	 * @ORM\Column(type="boolean")
	 */
	public $sex;
	
	/**
	 * @ORM\Column(type="string", length=128)
	 */	
	public $nationality;

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
	public $address_home;
	
	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $address_work;

	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $education_level;

	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $race;

	/**
	 * @ORM\Column(type="string", length=128)
	 */
	public $personale_phone;
	
	/**
	 * @ORM\OneToMany(targetEntity="ViolenceAct", mappedBy="victim")
	 */
	public $violenceActs;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->violenceActs = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set id
     *
     * @param string $id
     * @return Victim
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Victim
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Victim
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return Victim
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    
        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Add violenceActs
     *
     * @param VDHackaton\ViolinBundle\Entity\ViolenceAct $violenceActs
     * @return Victim
     */
    public function addViolenceAct(\VDHackaton\ViolinBundle\Entity\ViolenceAct $violenceActs)
    {
        $this->violenceActs[] = $violenceActs;
    
        return $this;
    }

    /**
     * Remove violenceActs
     *
     * @param VDHackaton\ViolinBundle\Entity\ViolenceAct $violenceActs
     */
    public function removeViolenceAct(\VDHackaton\ViolinBundle\Entity\ViolenceAct $violenceActs)
    {
        $this->violenceActs->removeElement($violenceActs);
    }

    /**
     * Get violenceActs
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getViolenceActs()
    {
        return $this->violenceActs;
    }

    /**
     * Set sex
     *
     * @param boolean $sex
     * @return Victim
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    
        return $this;
    }

    /**
     * Get sex
     *
     * @return boolean 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     * @return Victim
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    
        return $this;
    }

    /**
     * Get nationality
     *
     * @return string 
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Victim
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
     * @return Victim
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
     * @return Victim
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
     * Set address_home
     *
     * @param string $addressHome
     * @return Victim
     */
    public function setAddressHome($addressHome)
    {
        $this->address_home = $addressHome;
    
        return $this;
    }

    /**
     * Get address_home
     *
     * @return string 
     */
    public function getAddressHome()
    {
        return $this->address_home;
    }

    /**
     * Set address_work
     *
     * @param string $addressWork
     * @return Victim
     */
    public function setAddressWork($addressWork)
    {
        $this->address_work = $addressWork;
    
        return $this;
    }

    /**
     * Get address_work
     *
     * @return string 
     */
    public function getAddressWork()
    {
        return $this->address_work;
    }

    /**
     * Set education_level
     *
     * @param string $educationLevel
     * @return Victim
     */
    public function setEducationLevel($educationLevel)
    {
        $this->education_level = $educationLevel;
    
        return $this;
    }

    /**
     * Get education_level
     *
     * @return string 
     */
    public function getEducationLevel()
    {
        return $this->education_level;
    }

    /**
     * Set race
     *
     * @param string $race
     * @return Victim
     */
    public function setRace($race)
    {
        $this->race = $race;
    
        return $this;
    }

    /**
     * Get race
     *
     * @return string 
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set personale_phone
     *
     * @param string $personalePhone
     * @return Victim
     */
    public function setPersonalePhone($personalePhone)
    {
        $this->personale_phone = $personalePhone;
    
        return $this;
    }

    /**
     * Get personale_phone
     *
     * @return string 
     */
    public function getPersonalePhone()
    {
        return $this->personale_phone;
    }
}