<?php

namespace App\Http\Controllers;

use App\Models\Sunday;
use Illuminate\Http\Request;

class SundayController extends Controller
{
    function insert(Request $request)
    {
        $sunday = new Sunday;
        $sunday->work_name = $request->name;
        $sunday->time = $request->time;
        $sunday->save();
        return response()->json(
            [
                "status" => 200,
                "Sunday" => $sunday->all()
            ]
        );
    }

    function waiting()
    {
        return Sunday::where('status', "waiting")->get();

    }

    function currentUpdate($id, Request $request)
    {
        $sunday = Sunday::findOrFail($id);
        $sunday->status = $request->status;
        $sunday->save();
        return response()->json(
            [
                "status" => 200,
                "Sunday" => $sunday->all()
            ]
        );
    }

    function current()
    {
        return Sunday::where('status', "current")->get();
    }

    function completeUpdate($id, Request $request)
    {
        $sunday = Sunday::findOrFail($id);
        $sunday->status = $request->status;
        $sunday->save();
        return response()->json(
            [
                "status" => 200,
                "Sunday" => $sunday->all()
            ]
        );

    }

    function complete()
    {
        return Sunday::where('status', "complete")->get();
    }

    function remove($id)
    {
        $sunday = Sunday::findOrFail($id);
        $sunday->delete();
    }
}
