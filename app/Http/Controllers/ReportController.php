<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $reports = DB::table('customers')
            ->join('contacts', 'customers.id', '=', 'contacts.customer_id')
            ->select('customers.*', 'contacts.name', 'contacts.email', 'contacts.phone')
            ->get()
        ;
        return view('Report')->with('reports', $reports);
    }
}
