@extends('welcome')

@section('content')
 <h1>index</h1>
<html>

<head>

</head>
<body>
    {{!! Form::open() !!}}
    <div class="Header">
        <span id="headers1">CS Form No. 212<br>Revised 2017</span>

        <h1>Personal Data Sheet</h1>
        <p id="headerp1">Warning: Any misinterpretation made in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administrative/criminal case/s against the person concernced<br>
        READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS) BEFORE ACCOMPLISHING THE PDS FORM.</P>
        <p id="headerp2">Print legibly. Tick appropriate boxes (□) and use separate sheet if necessary. Indicate N/A if not applicable. <b>DO NOT ABBREVIATE</b></p>
        <div class="form-grouph1">
            <div class="input-group">
              <div class="input-group-addon">CS ID No.</div>
                {{{Form::label('csid','csid')}}}
                {{Form::text('csid')}}
            </div>
          </div>
    </div>
    <div class="PersonInfo">
        <span id="PersonInfoTitle"><i><b>I. Personal Information</b></i></span>
        <table class="table table-bordered">
            <div class="name">
                <tr>
                    <td>{{Form::label('surname','SURNAME')}}</td>
                    <td colspan="2">{{Form::text('surname')}}</td>
                </tr>
                <tr>
                    <td>{{Form::label('firstname','FIRST NAME')}}</td>
                    <td>{{Form::text('firstname')}}</td>
                    <td>{{Form::text('nameExt')}}</td>
                </tr>
                <tr>
                    <td>{{Form::label('midname','MIDDLE NAME')}}</td>
                    <td colspan="2">{{Form::text('midname')}}</td>
                </tr>
            </div>
            <div class="birthdate">
                <tr>
                    <td>{{Form::label('birthdate','3. BIRTHDATE')}}</td>
                    <td rowspan="2">{{Form::date('birthdate')}}</td>
            </div>
        </table>
    </div>
    {{ Form::submit('NEXT PAGE')}}
    {!! Form::close() !!}
</body>
</html>
