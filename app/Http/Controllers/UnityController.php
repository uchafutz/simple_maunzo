<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnityRequestStore;
use App\Models\Invetory\Unity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UnityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $unities = Unity::getList();
        if ($request->wantsJson()) {
            return response([
                "unities"
            ], 200);
        }
        return view("admin.unity.index", compact('unities'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.unity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UnityRequestStore $request)
    {
        $data = Unity::create($request->input());
        if ($data instanceof Model) {
            toastr()->success('Data succefull saved!');
            return redirect()->route('unities.index');
        }
        toastr()->error('Something went wrong!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Unity $unity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unity $unity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unity $unity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unity $unity)
    {
        //
    }
}
