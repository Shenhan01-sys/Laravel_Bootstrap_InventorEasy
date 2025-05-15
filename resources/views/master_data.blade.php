@extends('layout.main')
@section('title', 'Master Data')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.css">
<div class="container mt-4">
    <h5>Master Data</h5>
    <table class="table table-bordered" id="example">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Language</th>
                <th>Level</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Pemrograman berbasis web</td>
                <td>php, html, css, js</td>
                <td>difficult</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Restful API</td>
                <td>C# native</td>
                <td>hard</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Data warehouse</td>
                <td>Query SQL</td>
                <td>advance</td>
            </tr>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.0/js/dataTables.js"></script>

<script>
    new DataTable('#example');
</script>
@endsection