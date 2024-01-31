<?php

namespace App\Http\Controllers\API\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Catergories;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;

class Categories extends Controller
{
    use HttpResponses;

    public function index(Request $request){
        $category = Catergories::all();
        return $this->success([
            'data' => $category
        ]);
    }
}
