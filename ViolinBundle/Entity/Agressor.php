<?php
namespace VDHackaton\ViolinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Agressor {
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
	public $hasArms;

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
	 * @ORM\OneToMany(targetEntity="ViolenceAct", mappedBy="agressor")
	 */
	public $violenceActs;

    /**
     * Set id
     *
     * @param string $id
     * @return Agressor
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
     * @return Agressor
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
     * @return Agressor
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
     * @return Agressor
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
     * Set hasArms
     *
     * @param boolean $hasArms
     * @return Agressor
     */
    public function setHasArms($hasArms)
    {
        $this->hasArms = $hasArms;
    
        return $this;
    }

    /**
     * Get hasArms
     *
     * @return boolean 
     */
    public function getHasArms()
    {
        return $this->hasArms;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->violenceActs = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add violenceActs
     *
     * @param VDHackaton\ViolinBundle\Entity\ViolenceAct $violenceActs
     * @return Agressor
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
     * @return Agressor
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
     * @return Agressor
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
     * @return Agressor
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
     * @return Agressor
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
     * @return Agressor
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
     * @return Agressor
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
     * @return Agressor
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
     * @return Agressor
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
     * @return Agressor
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
     * @return Agressor
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