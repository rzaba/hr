<?php

namespace Hr\TimeManagmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Hr\EmployeeBundle\Entity\Employee;

/**
 * Absence
 */
class Absence
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $absenceType;

    /**
     * @var integer
     */
    private $absenceStatus;

    /**
     * @var \DateTime
     */
    private $dateFrom;

    /**
     * @var \DateTime
     */
    private $dateTo;

    /**
     * @var integer
     */
    private $days;

    /**
     * @var integer
     */
    private $itemStatus;

    /**
     * @var Employee
     */
    private $employee;


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
     * Set absenceType
     *
     * @param integer $absenceType
     * @return Absence
     */
    public function setAbsenceType($absenceType)
    {
        $this->absenceType = $absenceType;

        return $this;
    }

    /**
     * Get absenceType
     *
     * @return integer 
     */
    public function getAbsenceType()
    {
        return $this->absenceType;
    }

    /**
     * Set absenceStatus
     *
     * @param integer $absenceStatus
     * @return Absence
     */
    public function setAbsenceStatus($absenceStatus)
    {
        $this->absenceStatus = $absenceStatus;

        return $this;
    }

    /**
     * Get absenceStatus
     *
     * @return integer 
     */
    public function getAbsenceStatus()
    {
        return $this->absenceStatus;
    }

    /**
     * Set dateFrom
     *
     * @param \DateTime $dateFrom
     * @return Absence
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get dateFrom
     *
     * @return \DateTime 
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateTo
     *
     * @param \DateTime $dateTo
     * @return Absence
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Get dateTo
     *
     * @return \DateTime 
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Set days
     *
     * @param integer $days
     * @return Absence
     */
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Get days
     *
     * @return integer 
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Set itemStatus
     *
     * @param integer $itemStatus
     * @return Absence
     */
    public function setItemStatus($itemStatus)
    {
        $this->itemStatus = $itemStatus;

        return $this;
    }

    /**
     * Get itemStatus
     *
     * @return integer 
     */
    public function getItemStatus()
    {
        return $this->itemStatus;
    }

    /**
     * Set employee
     *
     * @param Employee $employee
     * @return Absence
     */
    public function setEmployee(Employee $employee)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return Employee
     */
    public function getEmployee()
    {
        return $this->employee;
    }
}
