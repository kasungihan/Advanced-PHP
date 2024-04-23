<?php

class InvoiceReportController
{
    public function reportByMonth()
    {
    }
}

interface ReportInterface
{
    public function getDate();
}

class ReportByMonth
{
    public function getDate()
    {
        return Invoice::get();
    }
}

class TestReportByMonth
{
    public function getDate()
    {
        return Invoice::get();
    }
}

if (app()->enviroment() == 'local') {
    TestReportByMonth::class;
} else {
    ReportByMonth::class;
}
