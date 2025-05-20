@extends('layout.main')
@section('title', 'FAQ')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    body {
        background: #f8f9fa;
        padding: 30px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .card-horizontal {
        display: flex;
        flex-wrap: wrap;
        box-shadow: 0 8px 16px rgb(0 0 0 / 0.15);
        border-radius: 15px;
        overflow: hidden;
        transition: box-shadow 0.3s ease;
        margin-bottom: 2rem;
        background-color: white;
    }
    .card-horizontal:hover {
        box-shadow: 0 12px 24px rgb(0 0 0 / 0.25);
    }
    .card-img-left {
        flex: 0 0 40%;
        max-width: 40%;
        height: auto;
        object-fit: cover;
    }
    .card-body {
        flex: 1 1 60%;
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .btn-custom {
        background-color: #0d6efd;
        border: none;
        transition: background-color 0.3s ease;
        width: fit-content;
        color: white;
    }
    .btn-custom:hover {
        background-color: #0b5ed7;
        color: white;
    }
.parent {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-template-rows: repeat(5, 1fr);
    gap: 8px;
    width: 100%;
    height: 100vh;
}
    
.div1 {
    grid-column: span 2 / span 2;
    grid-row: span 5 / span 5;
    color: rgb(50, 99, 39);
    background-color: rgb(50, 99, 39);
}

.div2 {
    grid-column: span 2 / span 2;
    grid-row: span 3 / span 3;
    grid-column-start: 3;
    grid-row-start: 3;
    color: rgb(159, 76, 76);
    background-color: rgb(159, 76, 76);
}

.div3 {
    grid-row: span 5 / span 5;
    grid-column-start: 5;
    grid-row-start: 1;
    color: rgb(76, 159, 76);
    background-color: rgb(76, 159, 76);
}

.div4 {
    grid-column: span 2 / span 2;
    grid-row: span 2 / span 2;
    grid-column-start: 3;
    grid-row-start: 1;
    color: rgb(76, 76, 159);
    background-color: rgb(76, 76, 159);
}
</style>    
<div class="parent">
    <div class="div1 rounded">1</div>
    <div class="div2 rounded">2</div>
    <div class="div3 rounded">3</div>
    <div class="div4 rounded">4</div>
</div>

@endsection