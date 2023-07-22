<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequestStore;
use App\Models\Invetory\Category;
use App\Models\Invetory\Item;
use App\Models\Invetory\Unity;
use App\Models\Store\Store;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $items = Item::getList();
        $store = Store::getStore();
        $categories = Category::getList();
        $unities = Unity::getList();
        if ($request->wantsJson()) {
            return response(['data' => [$items, $store, $categories, $unities]], 200);
        }
        return view('admin.item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $store = Store::getStore();
        $categories = Category::getList();
        $unities = Unity::getList();
        // dd($stores->id);
        return view('admin.item.create', compact('store', 'categories', 'unities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemRequestStore $request)
    {
        //
        //dd($request);
        $item = Item::create($request->input());
        if ($item instanceof Model) {
            toastr()->success("Data Item succefull saved!");
            return redirect()->route('items.index');
        }
        if ($request->wantsJson()) {
            return response(["data" => $item], 201);
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
