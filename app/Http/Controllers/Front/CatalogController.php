<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Type;

class CatalogController extends Controller
{
    public function index()
    {
        $items = Item::with(['type', 'brand'])->get();
        $types = Type::all();

        return view('catalog', [
            'items' => $items,
            'types' => $types,
        ]);
    }

    public function type($type)
    {
        $types = Type::all();
        $type = Type::where('slug', $type)->firstOrFail();
        $items = Item::with('type')->where(['type_id' => $type->id])->paginate(5);

        return view('catalog', [
            'items' => $items,
            'types' => $types,
        ]);
    }
}
