<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\CustomersDataTable;

class DashboardController extends Controller
{
    public function getCustomers(CustomersDataTable $dataTable)
    {
        return $dataTable->render('dashboard.customers');
    }
}
