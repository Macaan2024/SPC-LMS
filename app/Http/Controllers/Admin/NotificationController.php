<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestNotification;
use Carbon\Carbon;
use App\Models\Transaction;

class NotificationController extends Controller
{
    public function collectNotification() {
        // Get the current date and time
        $currentDateTime = Carbon::now();
    
        // Calculate the date and time for 3 days ago
        $threeDaysAgo = $currentDateTime->copy()->subDays(3);
    
        // Retrieve the transactions created within the last 3 days and with status 'pending'
        $data = Transaction::with(['user.role', 'book'])
                    ->where('created_at', '>=', $threeDaysAgo)
                    ->where('status', 'pending')
                    ->get();
    
        // Count the total number of notifications
        $totalnotification = $data->count();
    
        // Return the data as a JSON response
        return response()->json([
            'data' => $data,
            'totalnotification' => $totalnotification
        ]);
    }
}
