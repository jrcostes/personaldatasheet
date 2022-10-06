<?php

namespace App\Http\Controllers;

use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Support\Facades\App;
use App\Sheet;
use Illuminate\Http\Request;

use App\Exports\SheetExport;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{
    public function index()
    {
        $products = Sheet::latest()->paginate(5);


        return view('c1data.homepage',compact('products'));

    }
    public function store(Request $request)
    {
        $request->all();

        Sheet::create($request->all());

        return redirect('/')
            ->with('success','Entry Saved');
    }
    public function export()
    {

    }

    public function print_form(Request $request){
        $surname = $request->input('surname');
        $firstname = $request->input('firstname');
        $firstnameext = $request->input('firstnaemext');
        $midname = $request->input('midname');
        $birthdate = $request->input('birthdate');
        $sex = $request->input('sex');
        $placeofBirth = $request->input('placeofBirth');
        $civilStat = $request->input('civilStat');
        $height = $request->input('height');
        $weight = $request->input('weight');
        $bloodType = $request->input('bloodType');
        $gsisno = $request->input('gsisno');
        $pagibigno = $request->input('pagibigno');
        $philhealthno = $request->input('philhealthno');
        $sssno = $request->input('sssno');
        $tinno = $request->input('tinno');
        $agencyemp = $request->input('agencyemp');
        $citizens = $request->input('citizens');
        $country = $request->input('country');
        $residentialhouse = $request->input('residentialhouse');
        $residentialst = $request->input('residentialst');
        $residentialsudv = $request->input('residentialsudv');
        $residentialbrgy = $request->input('residentialbrgy');
        $residentialcity = $request->input('residentialcity');
        $residentialprv = $request->input('residentialprv');
        $residentialzip = $request->input('residentialzip');
        $permanenthouse = $request->input('permanenthouse');
        $permanentst = $request->input('permanentst');
        $permanentsubdv = $request->input('permanentsubdv');
        $permanentbrgy = $request->input('permanentbrgy');
        $permanentcity = $request->input('permanentcity');
        $permanentprv = $request->input('permanentprv');
        $permanentzip = $request->input('permanentzip');
        $telno = $request->input('telno');
        $mobno = $request->input('mobno');
        $email = $request->input('email');
        $spousesn = $request->input('spousesn');
        $spousefn = $request->input('spousefn');
        $spousemn = $request->input('spousemn');
        $spousenmext = $request->input('spousenmext');
        $spouseocc = $request->input('spouseocc');
        $spouseemp = $request->input('spouseemp');
        $spouseempadd = $request->input('spouseempadd');
        $spousetel = $request->input('spousetel');
        $fathersn = $request->input('fathersn');
        $fatherfn = $request->input('fatherfn');
        $fathermn = $request->input('fathermn');
        $fatherext = $request->input('fatherext');
        $mothernm = $request->input('mothernm');
        $mothersn = $request->input('mothersn');
        $motherfn = $request->input('motherfn');
        $mothermn = $request->input('mothermn');
        $child0 = $request->input('child0');
        $birthchild0 = $request->input('birthchild0');
        $child1 = $request->input('child1');
        $birthchild1 = $request->input('birthchild1');
        $child2 = $request->input('child2');
        $birthchild2 = $request->input('birthchild2');
        $child3 = $request->input('child');
        $birthchild3 = $request->input('birthchild3');
        $child4 = $request->input('child4');
        $birthchild4 = $request->input('birthchild4');
        $child5 = $request->input('child5');
        $birthchild5 = $request->input('birthchild5');
        $child6 = $request->input('child6');
        $birthchild6 = $request->input('birthchild6');
        $child7 = $request->input('child7');
        $birthchild7 = $request->input('birthchild7');
        $child8 = $request->input('child8');
        $birthchild8 = $request->input('birthchild8');
        $child9 = $request->input('child9');
        $birthchild9 = $request->input('birthchild9');
        $child10 = $request->input('child10');
        $birthchild10 = $request->input('birthchild10');
        $child11 = $request->input('child11');
        $birthchild11 = $request->input('birthchild11');
        $elemname = $request->input('elemname');
        $elemdeg = $request->input('elemdeg');
        $attendancefrom = $request->input('attendancefrom');
        $attendanceto = $request->input('attendanceto');
        $elemunitLevel = $request->input('elemunitLevel');
        $yeargradelem = $request->input('yeargradelem');
        $scholarshipelem = $request->input('scholarshipelem');
        $hsname = $request->input('hsname');
        $hsdeg = $request->input('hsdeg');
        $attendancefromhs = $request->input('attendancefromhs');
        $attendancetohs = $request->input('attendancetohs');
        $hsunitLevel = $request->input('hsunitLevel');
        $yeargradhs = $request->input('yeargradhs');
        $scholarshiphs = $request->input('scholarshiphs');
        $vocname = $request->input('vocname');
        $vocdeg = $request->input('vocdeg');
        $attendancefromvoc = $request->input('attendancefromvoc');
        $attendancetovoc = $request->input('attendancetovoc');
        $vocunitLevel = $request->input('vocunitLevel');
        $yeargradvoc = $request->input('yeargradvoc');
        $scholarshipvoc = $request->input('scholarshipvoc');
        $colname = $request->input('colname');
        $coldeg = $request->input('coldeg');
        $attendancefromcol = $request->input('attendancefromcol');
        $attendancetocol = $request->input('attendancetocol');
        $colunitLevel = $request->input('colunitLevel');
        $yeargradcol = $request->input('yeargradcol');
        $scholarshipcol = $request->input('scholarshipcol');
        $gradname = $request->input('gradname');
        $graddeg = $request->input('graddeg');
        $attendancefromgrad = $request->input('attendancefromgrad');
        $attendancetograd = $request->input('attendancetograd');
        $gradunitLevel = $request->input('gradunitLevel');
        $yeargradgrad = $request->input('yeargradgrad');
        $scholarshipgrad = $request->input('scholarshipgrad');
        $form_radio = $request->input('form_radio');
        $datacompact = compact('surname', 'firstname', 'firstnameext','midname', 'birthdate','sex','placeofBirth','civilStat','height','weight','bloodType','gsisno','pagibigno','philhealthno','sssno','tinno','agencyemp','citizens','country','residentialhouse','residentialst','residentialsudv','residentialbrgy','residentialcity','residentialprv','residentialzip','permanenthouse','permanentst','permanentsubdv','permanentbrgy','permanentcity','permanentprv','permanentzip','telno','mobno','email','spousesn','spousefn','spousemn','spousenmext','spouseocc','spouseemp','spouseempadd','spousetel','fathersn','fatherfn','fathermn','fatherext','mothernm','fatherext','mothernm','mothersn','motherfn','mothermn','child0','birthchild0','child1','birthchild1','child2','birthchild2','child3','birthchild3','child4','birthchild4','child5','birthchild5','child6','birthchild6','child7','birthchild7','child8','birthchild8','child9','birthchild9','child10','birthchild10','child11','birthchild11','elemname','elemdeg','attendancefrom','attendanceto','elemunitLevel','yeargradelem','scholarshipelem','hsname','hsdeg','attendancefromhs','attendancetohs','hsunitLevel','yeargradhs','scholarshiphs','vocname','vocdeg','attendancefromvoc','attendancetovoc','vocunitLevel','yeargradvoc','scholarshipvoc','colname','coldeg','attendancefromcol','attendancetocol','colunitLevel','yeargradcol','scholarshipcol','gradname','graddeg','attendancefromgrad','attendancetograd','gradunitLevel','yeargradgrad','scholarshipgrad');

        if($form_radio == 'c1form'){
            $pdf = App::make('snappy.pdf.wrapper');
            $pdf = PDF::loadView('print_forms.c1form', $datacompact)->setOption('page-width', '215.9')->setOption('page-height','355.6');

            return $pdf->download('c1form.pdf');
        }
        elseif($form_radio == 'excelform'){

            Excel::load('D:\c1_form_ui\ppersonaldatasheet\resources\views\excel_forms\c1form.xlsx', function($excel) {
                $excel->sheet('C1', function($sheet) {

                        //General Information
                        $sheet->cell('D10', function($cell) {
                            $cell->setValue($_GET['surname']);
                        });
                        $sheet->cell('D11', function($cell) {
                            $cell->setValue($_GET['firstname']);
                        });
                        $sheet->cell('L11', function($cell){
                            $cell->setValue($_GET['firstnameext']);
                        });
                        $sheet->cell('D12',function($cell){
                            $cell->setValue($_GET['midname']);
                        });
                        $sheet->cell('D13',function($cell){
                            $cell->setValue($_GET['birthdate']);
                        });
                        $sheet->cell('D15',function($cell){
                            $cell->setValue($_GET['placeofBirth']);
                        });
                        $sheet->cell('D22',function($cell){
                            $cell->setValue($_GET['height']);
                        });
                        $sheet->cell('D24',function($cell){
                            $cell->setValue($_GET['weight']);
                        });
                        $sheet->cell('D25',function($cell){
                            $cell->setValue($_GET['bloodType']);
                        });
                        //-General Information End

                        // Residential Address Data
                        $sheet->cell('I17',function($cell){
                            $cell->setValue($_GET['residentialhouse']);
                        });
                        $sheet->cell('L17',function($cell){
                            $cell->setValue($_GET['residentialst']);
                        });
                        $sheet->cell('I19',function($cell){
                            $cell->setValue($_GET['residentialsudv']);
                        });
                        $sheet->cell('L19',function($cell){
                            $cell->setValue($_GET['residentialbrgy']);
                        });
                        $sheet->cell('I22',function($cell){
                            $cell->setValue($_GET['residentialcity']);
                        });
                        $sheet->cell('L22',function($cell){
                            $cell->setValue($_GET['residentialprv']);
                        });
                        // Residential Address Data End

                        // Permanent Address Data
                        $sheet->cell('I25',function($cell){
                            $cell->setValue($_GET['permanenthouse']);
                        });
                        $sheet->cell('L25',function($cell){
                            $cell->setValue($_GET['permanentst']);
                        });
                        $sheet->cell('I27',function($cell){
                            $cell->setValue($_GET['permanentsubdv']);
                        });
                        $sheet->cell('L27',function($cell){
                            $cell->setValue($_GET['permanentbrgy']);
                        });
                        $sheet->cell('I29',function($cell){
                            $cell->setValue($_GET['permanentcity']);
                        });
                        $sheet->cell('L29',function($cell){
                            $cell->setValue($_GET['permanentprv']);
                        });
                        //Permanent Address Data end

                        //Gov't IDs
                        $sheet->cell('D27',function($cell){
                            $cell->setValue($_GET['gsisno']);
                        });
                        $sheet->cell('D29',function($cell){
                            $cell->setValue($_GET['pagibigno']);
                        });
                        $sheet->cell('D31',function($cell){
                            $cell->setValue($_GET['philhealthno']);
                        });
                        $sheet->cell('D32',function($cell){
                            $cell->setValue($_GET['sssno']);
                        });
                        $sheet->cell('D33',function($cell){
                            $cell->setValue($_GET['tinno']);
                        });
                        $sheet->cell('D34',function($cell){
                            $cell->setValue($_GET['agencyemp']);
                        });
                        //Gov't ID's end

                        //Spouse Information
                        $sheet->cell('D36',function($cell){
                            $cell->setValue($_GET['spousesn']);
                        });
                        $sheet->cell('D37',function($cell){
                            $cell->setValue($_GET['spousefn']);
                        });
                        $sheet->cell('G37',function($cell){
                            $cell->setValue($_GET['spousenmext']);
                        });
                        $sheet->cell('D38',function($cell){
                            $cell->setValue($_GET['spousemn']);
                        });
                        $sheet->cell('D39',function($cell){
                            $cell->setValue($_GET['spouseocc']);
                        });
                        $sheet->cell('D40',function($cell){
                            $cell->setValue($_GET['spouseemp']);
                        });
                        $sheet->cell('D41',function($cell){
                            $cell->setValue($_GET['spouseempadd']);
                        });
                        $sheet->cell('D42',function($cell){
                            $cell->setValue($_GET['spousetel']);
                        });
                        //Spouse Information End

                        //Father's Information
                        $sheet->cell('D43',function($cell){
                            $cell->setValue($_GET['fathersn']);
                        });
                        $sheet->cell('D44',function($cell){
                            $cell->setValue($_GET['fatherfn']);
                        });
                        $sheet->cell('G44',function($cell){
                            $cell->setValue($_GET['fatherext']);
                        });
                        $sheet->cell('D45',function($cell){
                            $cell->setValue($_GET['fathermn']);
                        });
                        //Father's Information End

                        //Mother's Information
                        $sheet->cell('D46',function($cell){
                            $cell->setValue($_GET['mothernm']);
                        });
                        $sheet->cell('D47',function($cell){
                            $cell->setValue($_GET['mothersn']);
                        });
                        $sheet->cell('D48',function($cell){
                            $cell->setValue($_GET['motherfn']);
                        });
                        $sheet->cell('D49',function($cell){
                            $cell->setValue($_GET['mothermn']);
                        });
                        //Mother's Information End

                        //Children
                        $sheet->cell('I37',function($cell){
                            $cell->setValue($_GET['child0']);
                        });
                        $sheet->cell('M37',function($cell){
                            $cell->setValue($_GET['birthchild0']);
                        });
                        $sheet->cell('I38',function($cell){
                            $cell->setValue($_GET['child1']);
                        });
                        $sheet->cell('M38',function($cell){
                            $cell->setValue($_GET['birthchild1']);
                        });
                        $sheet->cell('I39',function($cell){
                            $cell->setValue($_GET['child2']);
                        });
                        $sheet->cell('M39',function($cell){
                            $cell->setValue($_GET['birthchild2']);
                        });
                        $sheet->cell('I40',function($cell){
                            $cell->setValue($_GET['child3']);
                        });
                        $sheet->cell('M40',function($cell){
                            $cell->setValue($_GET['birthchild3']);
                        });
                        $sheet->cell('I41',function($cell){
                            $cell->setValue($_GET['child4']);
                        });
                        $sheet->cell('M41',function($cell){
                            $cell->setValue($_GET['birthchild4']);
                        });
                        $sheet->cell('I42',function($cell){
                            $cell->setValue($_GET['child5']);
                        });
                        $sheet->cell('M42',function($cell){
                            $cell->setValue($_GET['birthchild5']);
                        });
                        $sheet->cell('I43',function($cell){
                            $cell->setValue($_GET['child6']);
                        });
                        $sheet->cell('M43',function($cell){
                            $cell->setValue($_GET['birthchild6']);
                        });
                        $sheet->cell('I44',function($cell){
                            $cell->setValue($_GET['child7']);
                        });
                        $sheet->cell('M44',function($cell){
                            $cell->setValue($_GET['birthchild7']);
                        });
                        $sheet->cell('I45',function($cell){
                            $cell->setValue($_GET['child8']);
                        });
                        $sheet->cell('M45',function($cell){
                            $cell->setValue($_GET['birthchild8']);
                        });
                        $sheet->cell('I46',function($cell){
                            $cell->setValue($_GET['child9']);
                        });
                        $sheet->cell('M46',function($cell){
                            $cell->setValue($_GET['birthchild9']);
                        });
                        $sheet->cell('I47',function($cell){
                            $cell->setValue($_GET['child10']);
                        });
                        $sheet->cell('M47',function($cell){
                            $cell->setValue($_GET['birthchild10']);
                        });
                        $sheet->cell('I48',function($cell){
                            $cell->setValue($_GET['child11']);
                        });
                        $sheet->cell('M48',function($cell){
                            $cell->setValue($_GET['birthchild11']);
                        });
                        //Children End

                        //Educational - Elementary
                        $sheet->cell('D54',function($cell){
                            $cell->setValue($_GET['elemname']);
                        });
                        $sheet->cell('G54',function($cell){
                            $cell->setValue($_GET['elemdeg']);
                        });
                        $sheet->cell('J54',function($cell){
                            $cell->setValue($_GET['attendancefrom']);
                        });
                        $sheet->cell('K54',function($cell){
                            $cell->setValue($_GET['attendanceto']);
                        });
                        $sheet->cell('L54',function($cell){
                            $cell->setValue($_GET['elemunitLevel']);
                        });
                        $sheet->cell('M54',function($cell){
                            $cell->setValue($_GET['yeargradelem']);
                        });
                        $sheet->cell('N54',function($cell){
                            $cell->setValue($_GET['scholarshipelem']);
                        });
                        //Educational - Elementary end

                        //Educational - High School
                        $sheet->cell('D55',function($cell){
                            $cell->setValue($_GET['hsname']);
                        });
                        $sheet->cell('G55',function($cell){
                            $cell->setValue($_GET['hsdeg']);
                        });
                        $sheet->cell('J55',function($cell){
                            $cell->setValue($_GET['attendancefromhs']);
                        });
                        $sheet->cell('K55',function($cell){
                            $cell->setValue($_GET['attendancetohs']);
                        });
                        $sheet->cell('L55',function($cell){
                            $cell->setValue($_GET['hsunitLevel']);
                        });
                        $sheet->cell('M55',function($cell){
                            $cell->setValue($_GET['yeargradhs']);
                        });
                        $sheet->cell('N55',function($cell){
                            $cell->setValue($_GET['scholarshiphs']);
                        });
                        //Educational - High School end

                        //Educational - Vocational
                        $sheet->cell('D56',function($cell){
                            $cell->setValue($_GET['vocname']);
                        });
                        $sheet->cell('G56',function($cell){
                            $cell->setValue($_GET['vocdeg']);
                        });
                        $sheet->cell('J56',function($cell){
                            $cell->setValue($_GET['attendancefromvoc']);
                        });
                        $sheet->cell('K56',function($cell){
                            $cell->setValue($_GET['attendancetovoc']);
                        });
                        $sheet->cell('L56',function($cell){
                            $cell->setValue($_GET['vocunitLevel']);
                        });
                        $sheet->cell('M56',function($cell){
                            $cell->setValue($_GET['yeargradvoc']);
                        });
                        $sheet->cell('N56',function($cell){
                            $cell->setValue($_GET['scholarshipvoc']);
                        });
                        //Educational - Vocational end

                        //Educational - College
                        $sheet->cell('D57',function($cell){
                            $cell->setValue($_GET['colname']);
                        });
                        $sheet->cell('G57',function($cell){
                            $cell->setValue($_GET['coldeg']);
                        });
                        $sheet->cell('J57',function($cell){
                            $cell->setValue($_GET['attendancefromcol']);
                        });
                        $sheet->cell('K57',function($cell){
                            $cell->setValue($_GET['attendancetocol']);
                        });
                        $sheet->cell('L57',function($cell){
                            $cell->setValue($_GET['colunitLevel']);
                        });
                        $sheet->cell('M57',function($cell){
                            $cell->setValue($_GET['yeargradcol']);
                        });
                        $sheet->cell('N57',function($cell){
                            $cell->setValue($_GET['scholarshipcol']);
                        });
                        //Educational - College end

                        //Edecational - Graduate
                        $sheet->cell('D58',function($cell){
                            $cell->setValue($_GET['gradname']);
                        });
                        $sheet->cell('G58',function($cell){
                            $cell->setValue($_GET['graddeg']);
                        });
                        $sheet->cell('J58',function($cell){
                            $cell->setValue($_GET['attendancefromgrad']);
                        });
                        $sheet->cell('K58',function($cell){
                            $cell->setValue($_GET['attendancetograd']);
                        });
                        $sheet->cell('L58',function($cell){
                            $cell->setValue($_GET['gradunitLevel']);
                        });
                        $sheet->cell('M58',function($cell){
                            $cell->setValue($_GET['yeargradgrad']);
                        });
                        $sheet->cell('N58',function($cell){
                            $cell->setValue($_GET['scholarshipgrad']);
                        });















                 // if($_GET['sex'] == 'male'){
                 //     $sheet->cell('D16', function($cell){
                 //         $cell->setValue($_GET['sex']);
                 //     });
                 // }else{
                 //     $sheet->cell('E16', function($cell){
                 //         $cell->setValue($_GET['sex']);
                 //     });
                 // }

                });
            })->download('xlsx');
        }
        else{
            Sheet::create($datacompact);

            return view('c1data.index');

        }


    }
}


