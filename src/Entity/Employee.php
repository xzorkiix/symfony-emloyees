<?php
/**
 * Created by PhpStorm.
 * User: evgen
 * Date: 11.03.2018
 * Time: 15:31
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Employee
 * @package App\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name = "employees")
 */
class Employee
{
    const GENDER_MALE = 'M';
    const GENDER_FEMALE = 'F';

    /**
     * @ORM\Id
     * @ORM\Column(name="emp_no", type="integer")
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @ORM\Column(name="birth_date", type="date")
     */
    private $birthDate;

    /**
     * @ORM\Column(name="first_name", type="string", length=14)
     */
    private $firstName;

    /**
     * @ORM\Column(name="last_name", type="string", length=16)
     */
    private $lastName;

    /**
     * @ORM\Column(columnDefinition="enum('M','F')")
     */
    private $gender;

    /**
     * @ORM\Column(name="hire_date", type="date")
     */
    private $hireDate;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param mixed $birthDate
     */
    public function setBirthDate($birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender can be or 'M' or 'F' value.
     * @throws InvalidArgumentException
     */
    public function setGender($gender): void
    {
        if(!in_array($gender, array(self::GENDER_MALE, self::GENDER_FEMALE)))
        {
            throw new \InvalidArgumentException("Invalid gender value");
        }
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getHireDate()
    {
        return $this->hireDate;
    }

    /**
     * @param mixed $hireDate
     */
    public function setHireDate($hireDate): void
    {
        $this->hireDate = $hireDate;
    }
}