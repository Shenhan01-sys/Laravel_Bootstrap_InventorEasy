@extends('layout.main')
@section('title', 'Home')
@section('content')
<div class="container mt-1">
    <h1>Selamat Datang di Web GWEH</h1>
    <p>Ini adalah halaman home. Woilah cik.</p>

    <div class="card mt-1">
        <div class="card-body bg-dark col-md-12">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqRzrzFi7N3rYvcn5iPHp01RiGWOevIOmC-Q&s" 
            class="img-fluid mb-3" alt="Poster Film" style="width: 200px; height: 200px; border-radius: 30px;">
            <h5 class="card-title" style="color: white;">Data Diri</h5>
            <p class="card-text" style="color: white;">
                Nama: Hans Gunawan<br>
                NIM: 72230649<br>
                Prodi: Sistem Informasi<br>
                Alamat: Rumah<br>
                No. HP: 089673280495<br>
                Email:hansgunawan775@gmail.com
            </p>
            <p class="card-text col-md-12" style="color: white; font-size: 30px;">
                <small class="text-muted">Last updated 3 mins ago</small> 
        </div>
    </div>
</div>
@endsection

