<?php

interface ReportDataInterface
{
    public function getData();
}

interface ReportDownloadInterface
{
    public function download($format);
}


class ReportByMonth implements ReportDataInterface, ReportDownloadInterface
{
    public function getData()
    {
        return Invoice::orderBy('invoice_date')->get();
    }

    public function download($format)
    {
        return response()->download('report_file.' . $format);
    }
}

class ReportByProduct implements ReportDataInterface
{
    public function getData()
    {
        return Invoice::orderBy('invoice_date')->get();
    }
    // this only have getdata interface
}
