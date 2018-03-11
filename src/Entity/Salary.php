<?php
/**
 * Created by PhpStorm.
 * User: evgen
 * Date: 11.03.2018
 * Time: 23:46
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Salaries
 * @package App\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name = "salaries")
 */
class Salary
{
    /**
     * @ORM\Id
     * @ORM\Column(name="emp_no", type = "integer")
     */
    private $id;

    /**
     * @ORM\Id
     * @ORM\Column(name = "from_date", type="date")
     */
    private $fromDate;

    /**
     * @ORM\Column(name = "to_date", type="date")
     */
    private $toDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $salary;

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
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * @param mixed $fromDate
     */
    public function setFromDate($fromDate): void
    {
        $this->fromDate = $fromDate;
    }

    /**
     * @return mixed
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * @param mixed $toDate
     */
    public function setToDate($toDate): void
    {
        $this->toDate = $toDate;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
}