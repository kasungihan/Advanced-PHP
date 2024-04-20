<?php

class EmployeeControl
{
    public function index()
    {
        $employee = Employee::all();
        return $employee;
    }
}

class Employee
{
    public $type;
    public $start_date;

    public function getSalaryAttribute()
    {
        try {
            $className = 'App\\Calculator\\' . $this->type . 'SalaryCalculator';
            return (new $className)->calculate($this->start_date);
        } catch (\Exception $ex) {
            throw ($ex);
        }
        return 0;
    }
}

interface SalaryCalculatorInterface
{
    public function calculate($start_date): float;
}

interface BonusCalculatorInterface
{
    public function calculate($start_date, $bonus): float;
}

class DesignSalaryCalculator implements SalaryCalculatorInterface
{
    public function calculate($start_date): float
    {
        return 40000 + now()->diffInMonths($start_date) * 45000;
    }
}
class DeveloperSalaryCalculator implements SalaryCalculatorInterface, BonusCalculatorInterface
{
    public function calculate($start_date, $bonus): float
    {
        return 45000 + now()->diffInMonths($start_date) * 45000;
    }
}
