<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestNotification;
use Carbon\Carbon;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;


class NotificationController extends Controller
{
    public function UserNotification() {
        // Get the current date and time
        $currentDateTime = Carbon::now();
    
        // Calculate the date and time for 3 days ago
        $threeDaysAgo = $currentDateTime->copy()->subDays(3);

        $user = Auth::user();
        $thirtyMinutesBefore = $currentDateTime->copy()->addMinutes(30);
    
        // Retrieve the transactions created within the last 3 days and with status 'pending'
        $data = Transaction::with(['user.role', 'book'])
            ->where('created_at', '>=', $threeDaysAgo)
            ->where('status', 'approved')
            ->get();

        // Count the total number of notifications
        $totalnotification = $data->count();
        
        // Return the data as a JSON response
        return response()->json([
            'data' => $data,
            'totalnotification' => $totalnotification
        ]);
    }
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
