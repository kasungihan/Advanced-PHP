<?php

interface ReportInterface
{
    public function getData();

    //violation in feature some reposrt does not download
    public function download($format);
}


class ReportByMonth implements ReportInterface
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


class ReportByProduct implements ReportInterface
{
    public function getData()
    {
        return Invoice::orderBy('invoice_date')->get();
    }

    //violation in feature some report does not download
}
