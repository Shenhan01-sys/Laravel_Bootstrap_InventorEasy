@extends('layout.main')
@section('title', 'Master Data')
@section('content')
<style>
    .parent {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-template-rows: repeat(5, 1fr);
        gap: 8px;
        width: 100%;
        height: 50%;
    }
        
    .div1 {
        grid-column: span 2 / span 2;
        grid-row: span 5 / span 5;
        grid-column-start: 3;
        grid-row-start: 1;
        background-color: #d4ddff;
        border-radius: 10px;
    }

    .div2 {
        grid-column: span 2 / span 2;
        grid-row: span 3 / span 3;
        grid-column-start: 1;
        grid-row-start: 1;}

    fieldset {
        border: 1px solid #ccc;
        padding: 1rem;
        margin-top: 1rem;
        display: grid;
        grid-template-columns: 120px 1fr;
        gap: 0.5rem 1rem;
        align-items: center;
    }

    fieldset legend {
        font-weight: bold;
        padding: 0 0.5rem;
    }

    fieldset label {
        justify-self: end;
        font-weight: 500;
    }

    fieldset input[type="text"],
    fieldset input[type="number"] {
        width: 100%;
        padding: 0.25rem 0.5rem;
        box-sizing: border-box;
    }
</style>
<div class="parent mt-4">
    <div class="div1 mt-2 ml-5" id="div1">
        <img id="previewImg" src="" alt="Image Preview" style="max-width: 100%; max-height: 100%; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
    </div>
    <script>
        function previewImage(input) {
            const imageUrl = input.value;
            const previewImg = document.getElementById('previewImg');
            if (imageUrl) {
                previewImg.src = imageUrl;
                previewImg.style.display = 'block';
            } else {
                previewImg.style.display = 'none';
            }
        }
    </script>
    <div class="div2 rounded">
            <form method="GET" action="{{ route('insert_Item') }}">
                <fieldset class="border border-primary rounded" style="font-size: 20px;">
                    <legend>New Item</legend>
                    <label for="name_Item">Item name:</label>
                    <input id="name_Item" type="text" name="name_Item" placeholder="Item Name" required>
                    <label for="description">Description:</label>
                    <input id="description" type="text" name="description" placeholder="Item Description" required>
                    <label for="quantity">Quantity:</label>
                    <input id="quantity" type="number" name="quantity" placeholder="Item Quantity" required>
                    <label for="link">Image:</label>
                    <input id="link" type="text" name="link" placeholder="Item Image" onchange="previewImage(this)" required>
                </fieldset>
                <fieldset class="border border-primary rounded" style="font-size: 20px;">
                    <legend>Choose Category</legend>
                    <label for="category">Category:</label>
                    <select id="id_Category" name="category" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id_Category }}">{{ $category->name_category }}</option>
                        @endforeach
                    </select>
                </fieldset>
                <fieldset class="border border-primary rounded" style="font-size: 20px;">
                    <legend>Availabel Now?</legend>
                    <label for="available">Available:</label>
                    <select id="available" name="Available" required>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </fieldset>
                <input type="submit" class="btn btn-primary mt-4 mb-4" value="Insert Item">
                <input type="reset" class="btn btn-danger mt-4 mb-4" value="Reset">
            </form>

            @if(session('success'))
                <div class="alert alert-success mt-4">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger mt-4">
                    {{ session('error') }}
                </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger mt-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
</div>
@endsection