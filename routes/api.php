<?php

use App\Http\Resources\TodayTaskResource;
use App\Http\Resources\UpcomingResource;
use App\Models\Today;
use App\Models\Upcoming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// ** UPcoming Task *//

// Get all the upcoming task

// Add a new task


// Delete upcoming task

//** Today Task */

// Get all task


// Add a task


// Delete Today Task

