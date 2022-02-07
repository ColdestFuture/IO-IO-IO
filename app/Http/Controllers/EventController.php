<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {
        $events= Event::all();
        return view('calendar',['events' => $events]);
    }

    public function addEvent()
    {
        return view('event_add');
    }

    public function customAddEvent(Request $request)
    {
        /*$request->validate([
            'title' => 'required',
            'data' => 'required',
            'time' => 'required',
            'desription' => 'required|min:6',
        ]);*/

        $data = $request->all();
        $check = $this->create($data);

        return redirect('kalendarz');
    }


    public function create(array $data)
    {
      return Event::create([
        'title' => $data['title'],
        'Data' => $data['data'].' '.$data['time']
      ]);
    }
    public function editEvent(Request $request)
    {
        $data = $request->all();
        $query_edit = DB::table('events')->where('id', '=', $data['idEvent'])->get();
        return view('event_edit',['event' => $query_edit[0]] );

    }

    public function customEditEvent(Request $request)
    {
        $data = $request->all();
        $check = $this->update($data);

        return redirect('kalendarz');
    }

    public function update(array $data)
    {
      return DB::table('events')
      ->where('id', $data['ID'])
      ->update([
          'title' => $data['title'],
          'Data' => $data['data'].' '.$data['time']
      ]);
    }

    public function customDeleteEvent(Request $request)
    {
        $data = $request->all();
        $check = $this->update($data);


        return redirect('kalendarz');
    }
    
    public function delete(array $data)
    {
      return DB::table('events')
      ->where('id', $data['idEvent'])
      ->delete();
    }
}
