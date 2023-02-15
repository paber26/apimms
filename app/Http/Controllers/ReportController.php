<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function report()
    {
        $q = DB::table('accounts')->get();

        // $jobs_details = $this->jobs_details->like('created_date', '2022-04-%')->get()->getResultArray();
        return response()->json($q);
    }
}
