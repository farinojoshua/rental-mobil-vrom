<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use App\Models\Brand;
use App\Models\Item;
use App\Models\Type;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $items = Item::count();
        $brands = Brand::count();
        $types = Type::count();
        $bookings = Booking::count();

        return view('admin.dashboard', compact('items', 'brands', 'types', 'bookings'));
    }
}
