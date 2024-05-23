<?php

namespace App\Http\Controllers\Logbook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogbookLogsController extends Controller
{
    

    public function logbookLogs() {

        return view('logbook.logbook');
    }
}
