<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestNotification;
use Carbon\Carbon;

class NotificationController extends Controller
{
    public function collectNotification() {
        // Get the current date and time
        $currentDateTime = Carbon::now();

        // Calculate the date and time for 5 days ago
        $threeDaysAgo = $currentDateTime->copy()->subDays(3);

        // Retrieve the notifications created within the last 5 days along with their related transactions, users, and books
        $data = RequestNotification::with(['transaction.user.role', 'transaction.book'])
                    ->where('created_at', '>=', $threeDaysAgo)
                    ->get();

        $totalnotification = $data->count();


        // Return the data as a JSON response
        return response()->json([
            'data' => $data,
            'totalnotification' => $totalnotification
        ]);
    }
}
