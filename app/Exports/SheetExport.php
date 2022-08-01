<?php

namespace App\Exports;
use App\Sheet;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SheetExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sheet::all();
    }
    public function headings(): array{

        return ["ID", "Surname", "First Name", "First Name ext.", "Middle Name", "Birth date", "Sex", "Place of Birth", "Height", "Weight", "Blood Type", "GSIS No.", "PAGIBIG No.", "PhilHealth No.", "SSS No.", "TIN No.", "Agency / Employer", "Citizenship", "Country", "Residential House", "Residential Street", "Residential Subdivision / Village", "Residential Barangay", "Residential Province", "Residential City", "Residential Zip", "Permanent House", "Permanent Street", "Permanent Sudivision / Village", "Permanent Barangay", "Permanent City", "Permanent Province", "Permanent Zip", "Tel. No.", "Mob. No.", "E-Mail", "Spouse Surname", "Spouse Firstname", "Spouse Ext. Name", "Spouse Middle Name", "Spouse Occupation", "Spouse Employer", "Employer Address", "Spouse Tel no.", "Father's Surname", "Father's Firstname", "Father's Name Ext.", "Father's Middle name", "Mother's Surname", "Mother's Firstname", "Mother's Name Ext.", "Mother's Middle Name", "Child", "Birthdate", "Child", "Birthdate", "Child", "Birthdate", "Child", "Birthdate", "Child", "Birthdate", "Elementary School", "Basic Education / Degree / Course", "Attendance From", "Attendance To","Units Earned", "Year Graduated", "Scholarship", "High School", "Basic Education / Degree / Course", "Attendance From", "Attendance To", "Units Earned", "Year Graduated", "Scholarship", "Vocational School","Basic Education / Degree / Course", "Attendance From", "Attendance To", "Units Earned", "Year Graduated", "Scholarship", "College", "Basic Education / Degree / Course", "Attendance From", "Attendance To", "Units Earned", "Year Graduated", "Scholarship", "Gradiate Studies", "Basic Education / Degree / Course", "Attendance From", "Attendance To", "Units Earned", "Year Graduated", "Scholarship"];

    }
}
