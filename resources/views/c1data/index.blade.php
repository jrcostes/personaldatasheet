@extends('welcome')



<?php
    $countries = array(
    "" => "",
    "AF" => "Afghanistan",
    "AX" => "Aland Islands",
    "AL" => "Albania",
    "DZ" => "Algeria",
    "AS" => "American Samoa",
    "AD" => "Andorra",
    "AO" => "Angola",
    "AI" => "Anguilla",
    "AQ" => "Antarctica",
    "AG" => "Antigua and Barbuda",
    "AR" => "Argentina",
    "AM" => "Armenia",
    "AW" => "Aruba",
    "AU" => "Australia",
    "AT" => "Austria",
    "AZ" => "Azerbaijan",
    "BS" => "Bahamas",
    "BH" => "Bahrain",
    "BD" => "Bangladesh",
    "BB" => "Barbados",
    "BY" => "Belarus",
    "BE" => "Belgium",
    "BZ" => "Belize",
    "BJ" => "Benin",
    "BM" => "Bermuda",
    "BT" => "Bhutan",
    "BO" => "Bolivia",
    "BQ" => "Bonaire, Sint Eustatius and Saba",
    "BA" => "Bosnia and Herzegovina",
    "BW" => "Botswana",
    "BV" => "Bouvet Island",
    "BR" => "Brazil",
    "IO" => "British Indian Ocean Territory",
    "BN" => "Brunei Darussalam",
    "BG" => "Bulgaria",
    "BF" => "Burkina Faso",
    "BI" => "Burundi",
    "KH" => "Cambodia",
    "CM" => "Cameroon",
    "CA" => "Canada",
    "CV" => "Cape Verde",
    "KY" => "Cayman Islands",
    "CF" => "Central African Republic",
    "TD" => "Chad",
    "CL" => "Chile",
    "CN" => "China",
    "CX" => "Christmas Island",
    "CC" => "Cocos (Keeling) Islands",
    "CO" => "Colombia",
    "KM" => "Comoros",
    "CG" => "Congo",
    "CD" => "Congo, the Democratic Republic of the",
    "CK" => "Cook Islands",
    "CR" => "Costa Rica",
    "CI" => "Cote D'Ivoire",
    "HR" => "Croatia",
    "CU" => "Cuba",
    "CW" => "Curacao",
    "CY" => "Cyprus",
    "CZ" => "Czech Republic",
    "DK" => "Denmark",
    "DJ" => "Djibouti",
    "DM" => "Dominica",
    "DO" => "Dominican Republic",
    "EC" => "Ecuador",
    "EG" => "Egypt",
    "SV" => "El Salvador",
    "GQ" => "Equatorial Guinea",
    "ER" => "Eritrea",
    "EE" => "Estonia",
    "ET" => "Ethiopia",
    "FK" => "Falkland Islands (Malvinas)",
    "FO" => "Faroe Islands",
    "FJ" => "Fiji",
    "FI" => "Finland",
    "FR" => "France",
    "GF" => "French Guiana",
    "PF" => "French Polynesia",
    "TF" => "French Southern Territories",
    "GA" => "Gabon",
    "GM" => "Gambia",
    "GE" => "Georgia",
    "DE" => "Germany",
    "GH" => "Ghana",
    "GI" => "Gibraltar",
    "GR" => "Greece",
    "GL" => "Greenland",
    "GD" => "Grenada",
    "GP" => "Guadeloupe",
    "GU" => "Guam",
    "GT" => "Guatemala",
    "GG" => "Guernsey",
    "GN" => "Guinea",
    "GW" => "Guinea-Bissau",
    "GY" => "Guyana",
    "HT" => "Haiti",
    "HM" => "Heard Island and Mcdonald Islands",
    "VA" => "Holy See (Vatican City State)",
    "HN" => "Honduras",
    "HK" => "Hong Kong",
    "HU" => "Hungary",
    "IS" => "Iceland",
    "IN" => "India",
    "ID" => "Indonesia",
    "IR" => "Iran, Islamic Republic of",
    "IQ" => "Iraq",
    "IE" => "Ireland",
    "IM" => "Isle of Man",
    "IL" => "Israel",
    "IT" => "Italy",
    "JM" => "Jamaica",
    "JP" => "Japan",
    "JE" => "Jersey",
    "JO" => "Jordan",
    "KZ" => "Kazakhstan",
    "KE" => "Kenya",
    "KI" => "Kiribati",
    "KP" => "Korea, Democratic People's Republic of",
    "KR" => "Korea, Republic of",
    "XK" => "Kosovo",
    "KW" => "Kuwait",
    "KG" => "Kyrgyzstan",
    "LA" => "Lao People's Democratic Republic",
    "LV" => "Latvia",
    "LB" => "Lebanon",
    "LS" => "Lesotho",
    "LR" => "Liberia",
    "LY" => "Libyan Arab Jamahiriya",
    "LI" => "Liechtenstein",
    "LT" => "Lithuania",
    "LU" => "Luxembourg",
    "MO" => "Macao",
    "MK" => "Macedonia, the Former Yugoslav Republic of",
    "MG" => "Madagascar",
    "MW" => "Malawi",
    "MY" => "Malaysia",
    "MV" => "Maldives",
    "ML" => "Mali",
    "MT" => "Malta",
    "MH" => "Marshall Islands",
    "MQ" => "Martinique",
    "MR" => "Mauritania",
    "MU" => "Mauritius",
    "YT" => "Mayotte",
    "MX" => "Mexico",
    "FM" => "Micronesia, Federated States of",
    "MD" => "Moldova, Republic of",
    "MC" => "Monaco",
    "MN" => "Mongolia",
    "ME" => "Montenegro",
    "MS" => "Montserrat",
    "MA" => "Morocco",
    "MZ" => "Mozambique",
    "MM" => "Myanmar",
    "NA" => "Namibia",
    "NR" => "Nauru",
    "NP" => "Nepal",
    "NL" => "Netherlands",
    "AN" => "Netherlands Antilles",
    "NC" => "New Caledonia",
    "NZ" => "New Zealand",
    "NI" => "Nicaragua",
    "NE" => "Niger",
    "NG" => "Nigeria",
    "NU" => "Niue",
    "NF" => "Norfolk Island",
    "MP" => "Northern Mariana Islands",
    "NO" => "Norway",
    "OM" => "Oman",
    "PK" => "Pakistan",
    "PW" => "Palau",
    "PS" => "Palestinian Territory, Occupied",
    "PA" => "Panama",
    "PG" => "Papua New Guinea",
    "PY" => "Paraguay",
    "PE" => "Peru",
    "PH" => "Philippines",
    "PN" => "Pitcairn",
    "PL" => "Poland",
    "PT" => "Portugal",
    "PR" => "Puerto Rico",
    "QA" => "Qatar",
    "RE" => "Reunion",
    "RO" => "Romania",
    "RU" => "Russian Federation",
    "RW" => "Rwanda",
    "BL" => "Saint Barthelemy",
    "SH" => "Saint Helena",
    "KN" => "Saint Kitts and Nevis",
    "LC" => "Saint Lucia",
    "MF" => "Saint Martin",
    "PM" => "Saint Pierre and Miquelon",
    "VC" => "Saint Vincent and the Grenadines",
    "WS" => "Samoa",
    "SM" => "San Marino",
    "ST" => "Sao Tome and Principe",
    "SA" => "Saudi Arabia",
    "SN" => "Senegal",
    "RS" => "Serbia",
    "CS" => "Serbia and Montenegro",
    "SC" => "Seychelles",
    "SL" => "Sierra Leone",
    "SG" => "Singapore",
    "SX" => "Sint Maarten",
    "SK" => "Slovakia",
    "SI" => "Slovenia",
    "SB" => "Solomon Islands",
    "SO" => "Somalia",
    "ZA" => "South Africa",
    "GS" => "South Georgia and the South Sandwich Islands",
    "SS" => "South Sudan",
    "ES" => "Spain",
    "LK" => "Sri Lanka",
    "SD" => "Sudan",
    "SR" => "Suriname",
    "SJ" => "Svalbard and Jan Mayen",
    "SZ" => "Swaziland",
    "SE" => "Sweden",
    "CH" => "Switzerland",
    "SY" => "Syrian Arab Republic",
    "TW" => "Taiwan, Province of China",
    "TJ" => "Tajikistan",
    "TZ" => "Tanzania, United Republic of",
    "TH" => "Thailand",
    "TL" => "Timor-Leste",
    "TG" => "Togo",
    "TK" => "Tokelau",
    "TO" => "Tonga",
    "TT" => "Trinidad and Tobago",
    "TN" => "Tunisia",
    "TR" => "Turkey",
    "TM" => "Turkmenistan",
    "TC" => "Turks and Caicos Islands",
    "TV" => "Tuvalu",
    "UG" => "Uganda",
    "UA" => "Ukraine",
    "AE" => "United Arab Emirates",
    "GB" => "United Kingdom",
    "US" => "United States",
    "UM" => "United States Minor Outlying Islands",
    "UY" => "Uruguay",
    "UZ" => "Uzbekistan",
    "VU" => "Vanuatu",
    "VE" => "Venezuela",
    "VN" => "Viet Nam",
    "VG" => "Virgin Islands, British",
    "VI" => "Virgin Islands, U.s.",
    "WF" => "Wallis and Futuna",
    "EH" => "Western Sahara",
    "YE" => "Yemen",
    "ZM" => "Zambia",
    "ZW" => "Zimbabwe"
    )
?>
<html>
    <head>

    </head>
    <div class="head">
        <h2 id="personal">I. Personal Information</h2>
    </div>
    <body class="content">
        <form method="post" action="{{ route('post.store', '/sender') }}" autocomplete="off" class="form-horizontal">
            @csrf
        <div class="personalInformation">
            <div class="card1">
                {{-- Form for name --}}
                {{Form::label('surname','SURNAME')}}
                {{Form::text('surname', '', array('required' => 'required'))}}<br>

                {{Form::label('firstname','FIRST NAME')}}
                {{Form::text('firstname', '', array('required' => 'required'))}}
                {{Form::text('firstnameext',null, array( 'id' => 'namext-M','placeholder' => 'Ext.'))}}<br>

                {{Form::label('midname','MIDDLE NAME')}}
                {{Form::text('midname', '', array('required' => 'required'))}} <br>

                {{Form::label('birthdate','BIRTHDATE')}}
                {{Form::date('birthdate', '', array('required' => 'required'))}}

                {{Form::label('sex','SEX')}}
                {{Form::select('sex', ['male' => 'MALE', 'female' => 'FEMALE'],null, ['placeholder' => ''])}}<br>

                {{Form::label('placeofBirth','PLACE OF BIRTH')}}
                {{Form::text('placeofBirth', '', array('required' => 'required'))}} <br>

                {{Form::label('civilStatus','CIVIL STATUS')}}
                {{Form::select('sex', ['single' => 'SINGLE', 'widowed' => 'Widowed', 'married' => 'Married', 'separated' => 'Separated', 'others' => 'Other/s'],null, ['placeholder' => ''])}}<br>

                {{Form::label('height','HEIGHT')}}
                {{Form::number('height', '', array('required' => 'required'))}}

                {{Form::label('weight','WEIGHT')}}
                {{Form::number('weight', '', array('required' => 'required'))}}<br>

                {{Form::label('bloodType','BLOODTYPE')}}
                {{Form::text('bloodType', '', array('required' => 'required'))}}
            </div>
            <div class="card2">
                {{-- Form for government id's --}}
                {{Form::label('gsisno','GSIS No.')}}
                {{Form::number('gsisno')}}<br>

                {{Form::label('pagibigno','PAG-IBIG No.')}}
                {{Form::number('pagibigno')}}<br>

                {{Form::label('philhealthno','PHILHEALTH No.')}}
                {{Form::number('philhealthno')}}<br>

                {{Form::label('sssno','PAG-IBIG No.')}}
                {{Form::number('sssno')}}<br>

                {{Form::label('tinno','TIN No.')}}
                {{Form::number('tinno')}}<br>

                {{Form::label('agencyemp','AGENCY EMPLOYEE No.')}}
                {{Form::number('agencyemp')}}<br>

            </div>
        </div>
        <div class="additionalInfo">
            <div class="card3">
                {{-- 3rd card for c1 form --}}
                {{Form::label('citizenship','CITIZENSHIP')}}

                {{Form::radio('citizens', 'Filipino' ,array('required' => 'required'))}}
                {{Form::label('citizens','FILIPINO')}}

                {{Form::radio('citizens', 'Dual Citizenship', array('required' => 'required')) }}
                {{Form::label('citizens','DUAL CITIZENSHIP')}}<br>

                {{Form::radio('citizens', 'By Birth', array('required' => 'required')) }}
                {{Form::label('citizens','BY BIRTH')}}

                {{Form::radio('citizens', 'By Naturalization', array('required' => 'required')) }}
                {{Form::label('citizens','BY NATURALIZATION')}}<Br>

                {{Form::label('Pls. indicate country')}}
                {{Form::select('country',  $countries, null, ['class' => 'form-control', 'placeholder' => 'Select Country...'])}}<br>

                {{-- residential address --}}
                <b>{{Form::label('residential-address', 'Residential Address')}}<br></b>
                {{Form::text('residential-house', null, array('class' => 'form-control','id' => 'houseno-R','placeholder' => 'House/Block/Lot No.', 'reqiured'=>'required')) }}
                {{Form::text('residential-st', null, array('class' => 'form-control','id' => 'street-R','placeholder' => 'Street', 'reqiured'=>'required')) }}
                {{Form::text('residential-sudv', null, array('class' => 'form-control','id' => 'subdivillage-R','placeholder' => 'Subdivision/Village', 'reqiured'=>'required')) }} <br>
                {{Form::text('residential-brgy', null, array('class' => 'form-control','id' => 'barangay-R','placeholder' => 'Barangay', 'reqiured'=>'required')) }}
                {{Form::text('residential-city', null, array('class' => 'form-control','id' => 'City/Municipality-R','placeholder' => 'City/Municipality', 'reqiured'=>'required')) }}
                {{Form::text('residential-prv', null, array('class' => 'form-control','id' => 'province-R','placeholder' => 'Province', 'reqiured'=>'required')) }}<br>
                {{Form::number('residential-zip', null, array('class' => 'form-control','id' => 'zipcode-R','placeholder' => 'Zip Code', 'reqiured'=>'required')) }}<BR>

                <b>{{Form::label('permanent-address', 'Permanent Address')}}<br></b>
                {{Form::text('permanent-house', null, array('class' => 'form-control','id' => 'houseno-P','placeholder' => 'House/Block/Lot No.', 'reqiured'=>'required')) }}
                {{Form::text('permanent-st', null, array('class' => 'form-control','id' => 'street-P','placeholder' => 'Street', 'reqiured'=>'required')) }}
                {{Form::text('permanent-subdv', null, array('class' => 'form-control','id' => 'subdivillage-P','placeholder' => 'Subdivision/Village', 'reqiured'=>'required')) }} <br>
                {{Form::text('permanent-brgy', null, array('class' => 'form-control','id' => 'barangay-P','placeholder' => 'Barangay', 'reqiured'=>'required')) }}
                {{Form::text('permanent-city', null, array('class' => 'form-control','id' => 'City/Municipality-P','placeholder' => 'City/Municipality', 'reqiured'=>'required')) }}
                {{Form::text('permanent-prv', null, array('class' => 'form-control','id' => 'province-P','placeholder' => 'Province', 'reqiured'=>'required')) }}<br>
                {{Form::number('permanent-zip', null, array('class' => 'form-control','id' => 'zipcode-P','placeholder' => 'Zip Code', 'reqiured'=>'required')) }}<br>

                {{-- contact information --}}
                <b>
                {{Form::label('contact', 'Contact Information')}}<br>
                </b>
                {{Form::text('telno',null, array('class' => 'form-control', 'id' => 'tel',  'placeholder' => 'MOBILE NUMBER'))}}
                {{Form::text('mobno', null, array('class' => 'form-control', 'id' => 'mob', 'placeholder' => 'TELEPHONE NUMBER'))}}
                {{Form::email('email', null, array('class' => 'form-control', 'id' => 'email', 'placeholder' => 'EMAIL'))}}

                <h2 id="family">II. Family Background</h2>
                <b>{{Form::label('spouse', "Spouse's Name")}}</b><br>
                {{Form::text('spousesn',null, array('class'=>'form-control', 'id' => 'surname-S','placeholder' => 'Surname'))}}
                {{Form::text('spousefn',null, array('class'=>'form-control', 'id' => 'firstname-S','placeholder' => 'First Name'))}}
                {{Form::text('spousemn',null, array('class'=>'form-control', 'id' => 'midname-S','placeholder' => 'Middle Name'))}}
                {{Form::text('spousenmext',null, array('class'=>'form-control', 'id' => 'namext-S','placeholder' => 'Ext.'))}}<br>
                {{Form::text('spouseocc',null, array('class'=>'form-control', 'id' => 'occupation-S','placeholder' => 'Occupation'))}}
                {{Form::text('spouseemp',null, array('class'=>'form-control', 'id' => 'employ-S','placeholder' => 'Employer/Business Name'))}}
                {{Form::text('spouseempadd',null, array('class'=>'form-control', 'id' => 'employadd-S','placeholder' => 'Business Address'))}}
                {{Form::text('spousetel',null, array('class'=>'form-control', 'id' => 'telno-S','placeholder' => 'Tel. No'))}}<br>

                <b>{{Form::label('father', "Father's Name")}}</b><br>
                {{Form::text('fathersn',null, array('class'=>'form-control', 'id' => 'surname-F','placeholder' => 'Surname'))}}
                {{Form::text('fatherfn',null, array('class'=>'form-control', 'id' => 'firstname-F','placeholder' => 'First Name'))}}
                {{Form::text('fathermn',null, array('class'=>'form-control', 'id' => 'midname-F','placeholder' => 'Middle Name'))}}
                {{Form::text('fatherext',null, array('class'=>'form-control', 'id' => 'namext-F','placeholder' => 'Ext.'))}}<br>

                <b>{{Form::label('mother', "Mother's Name")}}</b><br>
                {{Form::text('mothernm',null, array('class'=>'form-control', 'id' => 'surname-M','placeholder' => 'Surname'))}}
                {{Form::text('motherfn',null, array('class'=>'form-control', 'id' => 'firstname-M','placeholder' => 'First Name'))}}
                {{Form::text('mothermn',null, array('class'=>'form-control', 'id' => 'midname-M','placeholder' => 'Middle Name'))}}
                {{Form::text('motherext',null, array('class'=>'form-control', 'id' => 'namext-M','placeholder' => 'Ext.'))}}<br>

                <b>{{Form::label('children', "Name of Children (List all names)")}}</b><br>

                <?php
                    $children = array("child0","child1","child2","child3","child4");
                    foreach ($children as $childno) {
                        echo Form::text($childno, null, array('class'=> 'form-control','id'=>$childno, 'placeholder' => 'Full Name'));

                        $str = "birth";
                        $str .=$childno;
                        echo Form::label('$str', 'Birthday: ');
                        echo Form::date($str);
                        echo "<br>";
                    }
                ?>

                <h2 id='education'>III. Educational Background</h2>
                <b>Level</b><br>
                <b>{{Form::label('elem', 'Elementary')}}</b><br>
                {{Form::text('elemname', null, array('class'=>'form-control','id' => 'elemname', 'placeholder'=>'Name of School (No Abbreviations)'))}}<br>
                {{Form::text('elemdeg', null, array('class' => 'form-control', 'id' => 'elemdegree','placeholder' => 'Basic Education/Degree/Course (No Abbreviations)'))}}<br>

                <b>Pediod of Attendance</b><br>
                {{Form::month('attendancefrom', null, array('class' => 'form-control', 'id' => 'elemattendFrom','placeholder' => 'FROM'))}}
                {{Form::month('attendanceto', null, array('class' => 'form-control', 'id' => 'elemattendto','placeholder' => 'TO'))}}<br>
                {{Form::number('elemunitLevel', null, array('class' => 'form-control', 'id' => 'unitLevelelem','placeholder' => 'Highest Unit / Level earned'))}}<br>
                {{Form::text('yeargradelem',null,array('class' => 'form-control', 'id' => 'yearelem', 'placeholder' => 'Year Graduated'))}}<br>
                {{Form::text('scholarshipelem',null,array('class' => 'form-control', 'id' => 'scholarelem', 'placeholder' => 'Scholarship/Academic Honors Recieved'))}}<br>

                <b>Level</b><br>
                <b>{{Form::label('hs', 'Secondary')}}</b><br>
                {{Form::text('hsname', null, array('class'=>'form-control','id' => 'hsname', 'placeholder'=>'Name of School (No Abbreviations)'))}}<br>
                {{Form::text('hsdeg', null, array('class' => 'form-control', 'id' => 'hsdegree','placeholder' => 'Basic Education/Degree/Course (No Abbreviations)'))}}<br>

                <b>Pediod of Attendance</b><br>
                {{Form::month('attendancefromhs', null, array('class' => 'form-control', 'id' => 'hsattendFrom','placeholder' => 'FROM'))}}
                {{Form::month('attendancetohs', null, array('class' => 'form-control', 'id' => 'hsattendto','placeholder' => 'TO'))}}<br>
                {{Form::number('hsunitLevel', null, array('class' => 'form-control', 'id' => 'unitLevelelem','placeholder' => 'Highest Unit / Level earned'))}}<br>
                {{Form::text('yeargradhs',null,array('class' => 'form-control', 'id' => 'yearhs', 'placeholder' => 'Year Graduated'))}}<br>
                {{Form::text('scholarshiphs',null,array('class' => 'form-control', 'id' => 'scholarhs', 'placeholder' => 'Scholarship/Academic Honors Recieved'))}}<br>

                <b>Level</b><br>
                <b>{{Form::label('voc', 'Vocational / Trade Course')}}</b><br>
                {{Form::text('vocname', null, array('class'=>'form-control','id' => 'vocname', 'placeholder'=>'Name of School (No Abbreviations)'))}}<br>
                {{Form::text('vocdeg', null, array('class' => 'form-control', 'id' => 'vocdegree','placeholder' => 'Basic Education/Degree/Course (No Abbreviations)'))}}<br>

                <b>Pediod of Attendance</b><br>
                {{Form::month('attendancefromvoc', null, array('class' => 'form-control', 'id' => 'vocattendFrom','placeholder' => 'FROM'))}}
                {{Form::month('attendancetovoc', null, array('class' => 'form-control', 'id' => 'vocattendto','placeholder' => 'TO'))}}<br>
                {{Form::number('vocunitLevel', null, array('class' => 'form-control', 'id' => 'unitLevelelem','placeholder' => 'Highest Unit / Level earned'))}}<br>
                {{Form::text('yeargradvoc',null,array('class' => 'form-control', 'id' => 'yearvoc', 'placeholder' => 'Year Graduated'))}}<br>
                {{Form::text('scholarshipvoc',null,array('class' => 'form-control', 'id' => 'scholarvoc', 'placeholder' => 'Scholarship/Academic Honors Recieved'))}}<br>

                <b>Level</b><br>
                <b>{{Form::label('col', 'College')}}</b><br>
                {{Form::text('colname', null, array('class'=>'form-control','id' => 'colname', 'placeholder'=>'Name of School (No Abbreviations)'))}}<br>
                {{Form::text('coldeg', null, array('class' => 'form-control', 'id' => 'coldegree','placeholder' => 'Basic Education/Degree/Course (No Abbreviations)'))}}<br>

                <b>Pediod of Attendance</b><br>
                {{Form::month('attendancefromcol', null, array('class' => 'form-control', 'id' => 'colattendFrom','placeholder' => 'FROM'))}}
                {{Form::month('attendancetocol', null, array('class' => 'form-control', 'id' => 'colattendto','placeholder' => 'TO'))}}<br>
                {{Form::number('colunitLevel', null, array('class' => 'form-control', 'id' => 'unitLevelelem','placeholder' => 'Highest Unit / Level earned'))}}<br>
                {{Form::text('yeargradcol',null,array('class' => 'form-control', 'id' => 'yearcol', 'placeholder' => 'Year Graduated'))}}<br>
                {{Form::text('scholarshipcol',null,array('class' => 'form-control', 'id' => 'scholarcol', 'placeholder' => 'Scholarship/Academic Honors Recieved'))}}<br>

                <b>Level</b><br>
                <b>{{Form::label('grad', 'Graduate Studies')}}</b><br>
                {{Form::text('gradname', null, array('class'=>'form-control','id' => 'gradname', 'placeholder'=>'Name of School (No Abbreviations)'))}}<br>
                {{Form::text('graddeg', null, array('class' => 'form-control', 'id' => 'graddegree','placeholder' => 'Basic Education/Degree/Course (No Abbreviations)'))}}<br>

                <b>Pediod of Attendance</b><br>
                {{Form::month('attendancefromgrad', null, array('class' => 'form-control', 'id' => 'gradattendFrom','placeholder' => 'FROM'))}}
                {{Form::month('attendancetograd', null, array('class' => 'form-control', 'id' => 'gradattendto','placeholder' => 'TO'))}}<br>
                {{Form::number('gradunitLevel', null, array('class' => 'form-control', 'id' => 'unitLevelelem','placeholder' => 'Highest Unit / Level earned'))}}<br>
                {{Form::text('yeargradgrad',null,array('class' => 'form-control', 'id' => 'yeargrad', 'placeholder' => 'Year Graduated'))}}<br>
                {{Form::text('scholarshipgrad',null,array('class' => 'form-control', 'id' => 'scholargrad', 'placeholder' => 'Scholarship/Academic Honors Recieved'))}}<br>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

        {{Form::close()}}
        <a href='sender' class="btn btn-primary">PDF</a>
        <a href="exporter" class="btn btn-warning">Export</a>


</body>
</html>
