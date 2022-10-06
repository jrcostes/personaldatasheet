@extends('c1data.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Surname</th>
            <th>First Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $sheet)
        <tr>
            <td>{{ $sheet->id }}</td>
            <td>{{ $sheet->surname }}</td>
            <td>{{ $sheet->firstname }}</td>
            <td>
                <a href="{{ route('sheets.excel', $sheet->id) }}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection
