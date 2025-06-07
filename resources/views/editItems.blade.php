@extends('layout.main')
@section('title', 'Edit Item')
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
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        height: 300px;
        min-height: 300px;
        width: 100%;
        padding: 10px;
    }
    #previewImg {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        border-radius: 10px;
        display: block;
        margin: auto;
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
        <img id="previewImg" src="{{ $item->link ?? asset('images/upload_icon.png') }}"
            style="
                max-width: 100%; 
                max-height: 100%; 
                border-radius: 10px; 
                display: block;
                margin: auto;">
    </div>
    <script>
        function previewImage(input) {
            const imageUrl = input.value;
            const previewImg = document.getElementById('previewImg');
            if (imageUrl) {
                previewImg.src = imageUrl;
                previewImg.style.display = 'block';
                previewImg.style.left = '17%';
                previewImg.style.top = '28%';
            } else {
                previewImg.style.display = 'none';
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('link');
            if (input && input.value) {
                previewImage(input);
            }
        });
    </script>
    <div class="div2 rounded">
            <form method="POST" action="{{ route('updateItem', ['id' => $item->id_Item]) }}">
                @csrf
                @method('PUT')
                <fieldset class="border border-primary rounded" style="font-size: 20px;">
                    <legend>Edit Item</legend>
                    <label for="name_Item">Item name:</label>
                    <input id="name_Item" type="text" name="name_Item" placeholder="Item Name" value="{{ old('name_Item', $item->name_Item) }}" required>
                    <label for="description">Description:</label>
                    <input id="description" type="text" name="description" placeholder="Item Description" value="{{ old('description', $item->description) }}" required>
                    <label for="quantity">Quantity:</label>
                    <input id="quantity" type="number" name="quantity" placeholder="Item Quantity" value="{{ old('quantity', $item->quantity) }}" required>
                    <label for="link">Image:</label>
                    <input id="link" type="text" name="link" placeholder="Item Image" value="{{ old('link', $item->link) }}" onchange="previewImage(this)" required>
                </fieldset>
                <fieldset class="border border-primary rounded" style="font-size: 20px;">
                    <legend>Choose Category</legend>
                    <label for="category">Category:</label>
                    <select id="id_Category" name="id_Category" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id_Category }}" {{ (old('id_Category', $item->id_Category) == $category->id_Category) ? 'selected' : '' }}>{{ $category->name_category }}</option>
                        @endforeach
                    </select>
                </fieldset>
                <fieldset class="border border-primary rounded" style="font-size: 20px;">
                    <legend>Available Now?</legend>
                    <label for="available">Available:</label>
                    <select id="available" name="available" required>
                        <option value="1" {{ (old('available', $item->available) == 1) ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ (old('available', $item->available) == 0) ? 'selected' : '' }}>No</option>
                    </select>
                </fieldset>
                <input type="submit" class="btn btn-primary mt-4 mb-4" value="Update Item">
                <input type="reset" class="btn btn-danger mt-4 mb-4" value="Reset">
            </form>

            @if(session('success'))
                <div class="alert alert-success mt-4" style="font-size: 20px; display: flex; align-items: center;">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger mt-4" style="font-size: 20px; display: flex; align-items: center;">
                    {{ session('error') }}
                </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger mt-4" style="font-size: 20px; display: flex; align-items: center;">
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
