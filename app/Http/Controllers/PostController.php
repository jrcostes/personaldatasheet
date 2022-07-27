<?php

namespace App\Http\Controllers;

use App\Sheet;
use Illuminate\Http\Request;
use Knp\Snappy\Pdf;
use App\Exports\SheetExport;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->all();

        Sheet::create($request->all());

        return redirect('/')
            ->with('success','Task created successfully.');
    }
    public function export()
    {
        return Excel::download(new SheetExport, 'list.xlsx');
    }
}
