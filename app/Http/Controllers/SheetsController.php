<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sheet;
use Maatwebsite\Excel\Facades\Excel;

class SheetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Sheet::latest()->paginate(5);


        return view('c1data.homepage',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function excel(Sheet $sheet)
    {
        Excel::load('C:\xampp\htdocs\personaldatasheet\resources\views\excel_forms\c1form.xlsx', function($excel) {
            $excel->sheet('C1', function($sheet) {
                $sheet->cell('D10', function($cell) {
                    $cell->setValue('$surname');
                });
            });
        })->download('xlsx');
    }
}
