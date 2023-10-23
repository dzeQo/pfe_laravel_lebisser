<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(Request $request)
    {
        return view('calendar');
    }
    public function calendarEvent(Request $request)
    {
         $data = Post::where('idcat',2)->get(['id','title','start_at as start', 'end_at as end']);
         return response()->json($data);
    }

}
