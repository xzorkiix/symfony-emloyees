<?php
/**
 * Created by PhpStorm.
 * User: evgen
 * Date: 11.03.2018
 * Time: 16:07
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class DepartmentManager
 * @package App\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name = "dept_manager",
 *     indexes={ @ORM\Index(name="dept_no", columns={"dept_no"}) }
 *     )
 */
class DepartmentManager
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(
     *     targetEntity="App\Entity\Employee"
     * )
     * @ORM\JoinColumn(
     *     name="emp_no",
     *     referencedColumnName="emp_no",
     *     onDelete="CASCADE"
     * )
     */
    private $employee;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="App\Entity\Department")
     * @ORM\JoinColumn(
     *     name="dept_no",
     *     referencedColumnName="dept_no",
     *     onDelete="CASCADE"
     * )
     */
    private $department;

    /**
     * @ORM\Column(name="from_date", type="date")
     */
    private $fromDate;

    /**
     * @ORM\Column(name="to_date", type="date")
     */
    private $toDate;

    /**
     * @return mixed
     */
    public function getEmployee() : Employee
    {
        return $this->employee;
    }

    /**
     * @param mixed $employee
     */
    public function setEmployee(Employee $employee)
    {
        $this->employee = $employee;
    }

    /**
     * @return mixed
     */
    public function getDepartment() : Department
    {
        return $this->department;
    }

    /**
     * @param mixed $department
     */
    public function setDepartment(Department $department)
    {
        $this->department = $department;
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
    public function setFromDate($fromDate)
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
    public function setToDate($toDate)
    {
        $this->toDate = $toDate;
    }
}