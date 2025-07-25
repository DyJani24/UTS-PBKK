<?php

namespace App\Http\Controllers;

use App\Models\order_item;
use Illuminate\Http\Request;

class order_itemController extends Controller
{
    public function index()
    {
        return order_item::all();
    }

    public function store(Request $request)
    {
        return order_item::create($request->all());
    }

    public function show($id)
    {
        return order_item::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $item = order_item::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        order_item::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}
