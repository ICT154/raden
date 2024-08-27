<?php

namespace App\Http\Controllers\System;

use App\Models\System\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class MenuController extends Controller
{
    public function show(Request $request)
    {
        $draw = $request->input("draw");
        $start = $request->input("start");

        $data = Menu::Datatable($request);

        $rows = [];
        $no = $start + 1;

        foreach ($data["row"] as $key) {

            $encryptedId = Crypt::encryptString($key->id);


            // button action
            $button = "";
            $button .= '<a href="' . route('menu-management.edit', $encryptedId) . '" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>';
            $button .= '<a href="#!" class="btn btn-danger btn-sm mr-3" title="Delete" onclick="deleteData(\'' . route('menu-management.destroy', $encryptedId) . '\')"><i class="fas fa-trash"></i></a>';

            $row = [
                $no++,
                $key->name,
                $key->icon,
                $key->route,
                $key->parent_id,
                $key->order,
                $button,
            ];

            $rows[] = $row;
        }

        $output = [
            "draw" => $draw,
            "recordsTotal" => Menu::count(),
            "recordsFiltered" => $data["count"],
            "data" => $rows,
        ];

        return response()->json($output);
    }
}
