@extends('layout.main')
@section('title', 'Master Data')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.css">
<div class="container mt-4">
    <h1 style="text-align: center;">LIST OF ITEMS</h1>
    <table class="table table-bordered" id="example">
        <thead class="thead-dark">
            <tr>
                @foreach ($columns as $Columns)
                  <th scope="col">{{ $Columns }}</th>  
                @endforeach
            </tr>
        </thead>
            <tbody>
                @foreach ($items as $row)
                    <tr>
                        @foreach ($columns as $column)
                            <td>{{ $row[$column] }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.0/js/dataTables.js"></script>

<script>
    new DataTable('#example');
</script>
@endsection