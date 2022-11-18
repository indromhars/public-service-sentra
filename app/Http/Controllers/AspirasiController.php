<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{

    public function form_view() {
        return view();
    }

    public function store(Request $request) {
        $input = $request->only('topic', 'description', 'sender_name', 'location');

        $input['status'] = 0;

        $store = Aspirasi::create($input);

        if($store) {
            return view();
        } else {
            return view();
        }
    }
}
