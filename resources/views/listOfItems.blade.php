@extends('layout.main')
@section('title', 'List of Items')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.css">
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
      position: relative;
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

    /* Grid container untuk menampilkan 2 kartu berdampingan */
    .cards-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(520px, 1fr));
      gap: 2rem;
    }

    /* Responsif untuk layar kecil */
    @media (max-width: 767.98px) {
      .card-horizontal {
        flex-direction: column;
      }
      .card-img-left,
      .card-body {
        flex: 1 1 100%;
        max-width: 100%;
      }
      .card-img-left {
        height: 200px;
      }
    }

    /* Added CSS to fix SweetAlert z-index issue */
    .custom-popover {
      position: absolute;
      z-index: 1060;
    }
    .swal2-container {
      position: fixed !important;
      z-index: 2147483647 !important;
    }
</style>
<div class="container mt-4">
    <strong style="text-align: center; font-size: 30px; padding: 12px;" class="text-light bg-primary rounded">LIST OF ITEMS</strong>

    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    @if(session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif

    <input type="text" id="searchbar" placeholder="Search here..." class="form-control mt-4 mb-4 half-width" />
    <script>
        document.getElementById('searchbar').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const cards = document.querySelectorAll('.card-horizontal');
            cards.forEach(card => {
                const title = card.querySelector('.card-title').textContent.toLowerCase();
                const description = card.querySelector('.card-text').textContent.toLowerCase();
                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>

    <div class="displayCount-container">
      <div class="text-primary" style="font-size: 20px;"> 
        <strong>Display count<br></strong>
        <form method="GET" action="\listOfItems">
          <select id="displayCount" name="displaycount" class="form-select mb-4" style="width: 100px;" onchange="this.form.submit()">
              <option value="5">5</option>
              <option value="10">10</option>
              <option value="20">20</option>
              <option value="50">50</option>
              <option value="100">100</option>
          </select>
        </form>
      </div>
    </div>
    @php
      $counter = 0;
    @endphp

    <div class="cards-container">
      <!-- Card 1 -->
      @foreach ($items as $row)    
      @break($counter >= $limit)
          @php
              $counter++;         
              $name = $row['name_Item'] ?? '';
              $title = $row['title'] ?? '';
              $description = $row['description'] ?? '';
              $quantity = $row['quantity'] ?? '';
              $link = $row['link'] ?? '';
              $popoverId = 'up-' . $loop->index;
              $idItem = $row['id_Item'] ?? '';
          @endphp
          <div class="card-horizontal mt-5" id="itemcard">
              @if($link== null)
                <img src="https://picsum.photos/400/200?random={{ $loop->index }}" alt="{{ $name }}" class="card-img-left" />
              @else
                <img src="{{ $link }}" alt="{{ $name }}" class="card-img-left" />
              @endif
              <div class="card-body"> 
                  <h4 class="card-title mb-3">{{ $name }}</h4>
                  <p class="card-text mb-4">{{ \Illuminate\Support\Str::limit($description, 20) }}</p>
                  @if($quantity > 1)
                    <p class="card-text mb-3 bg-success rounded p-1" style="display:inline-block; font-weight:bold; align-self: flex-start;">Jumlah: {{ $quantity }}</p>
                  @elseif($quantity == 1)
                    <p class="card-text mb-3 bg-warning rounded p-1" style="display:inline-block; font-weight:bold; align-self: flex-start;">Jumlah: {{ $quantity }}</p>
                  @elseif ($quantity == 0)
                    <p class="card-text mb-3 bg-danger rounded p-1" style="display:inline-block; font-weight:bold; align-self: flex-start;">Jumlah: {{ $quantity }}</p>
                  @endif
                  <button href="#" popovertarget="{{ $popoverId }}" class="btn btn-custom align-self-start">Show more</button>
                  <div class="custom-popover rounded ml-10 mr-10" id="{{ $popoverId }}" popover="true">
                    <div class="card-body">
                      @if($link== null)
                        <img src="https://picsum.photos/400/200?random={{ $loop->index }}" alt="{{ $name }}" class="card-img-left" />
                      @else
                        <img src="{{ $link }}" alt="{{ $name }}" class="card-img-left" />
                      @endif
                      <h4 class="card-title mb-3">{{ $name }}</h4>
                        <p class="card-text mb-4">{{ $description }}</p>
                        @if($quantity > 1)
                          <p class="card-text mb-3 bg-success rounded p-1" style="display:inline-block; font-weight:bold; align-self: flex-start;">Jumlah: {{ $quantity }}</p>
                        @elseif($quantity == 1)
                          <p class="card-text mb-3 bg-warning rounded p-1" style="display:inline-block; font-weight:bold; align-self: flex-start;">Jumlah: {{ $quantity }}</p>
                        @elseif ($quantity == 0)
                          <p class="card-text mb-3 bg-danger rounded p-1" style="display:inline-block; font-weight:bold; align-self: flex-start;">Jumlah: {{ $quantity }}</p>
                        @endif
                    </div>
                    <button class="edit_btn btn-success mb-10 rounded" data-id="{{ $row['id_Item'] }}" onclick="click_edit(this)">Edit</button>
                    <button class="delete_btn btn-danger mb-10 rounded" onclick="click_delete(this)">Delete</button>
                    <button class="btn-primary ml-2 mb-2 rounded" popovertarget="{{ $popoverId }}">close</button>
                  </div>
              </div>
          </div>
      @endforeach
      <script>
        function closeAllPopovers() {
            document.querySelectorAll('.custom-popover.show').forEach(pop => {
                pop.classList.remove('show');
                pop.style.display = 'none';
            });
        }
        function click_edit(button){
          closeAllPopovers();
          const id = button.getAttribute('data-id');
          Swal.fire({
              target: 'body',
              icon: 'question',
              title: 'Do you want to edit this item?',
              showConfirmButton: true,
          }).then((result) => {
              if (result.isConfirmed) {
                  window.location.href = "/editItem/" + id;
              }
          });
        }

        function click_delete(button) {
          closeAllPopovers();
          const card = button.closest('.card-horizontal');
          const id = card.querySelector('.edit_btn').getAttribute('data-id');
          Swal.fire({
            target: 'body',
            icon: 'warning',
            title: 'Do you want to delete this item?',
            showCancelButton: true,
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancel',
          }).then((result) => {
            if (result.isConfirmed) {
              // Submit the hidden delete form with the item id
              const form = document.getElementById('deleteForm');
              form.action = '/deleteItem/' + id;
              form.submit();
            }
          });
        }
      </script>
    </div>

    <!-- Hidden form for delete action -->
    <form id="deleteForm" method="POST" style="display:none;">
        @csrf
    </form>

    <script>
      // Show SweetAlert confirmation on page load if session success or error exists
      document.addEventListener('DOMContentLoaded', function() {
        @if(session('success'))
          Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK'
          });
        @elseif(session('error'))
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
            confirmButtonText: 'OK'
          });
        @endif
      });
    </script>
</div>
@endsection
