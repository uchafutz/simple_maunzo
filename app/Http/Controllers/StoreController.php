<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestStore;
use App\Http\Requests\RequestStoreUpdate;
use App\Models\Store\Store;
use Countable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $stores = Store::getList();

        if ($request->wantsJson()) {
            return response(['stores'], 200);
        }

        return view("admin.store.index", compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [];
        return view("admin.store.create", compact("data"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestStore $request)
    {


        if (Store::getCount() <= 0) {
            $data = Store::query()->create($request->input());
            //dd($data);
            if ($data instanceof Model) {

                toastr()->success('Data has been saved successfully!');
                return redirect()->route('stores.index');
            }
            toastr()->error('An error has occured please try again!');
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestStoreUpdate $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        //
    }
}
