<link href="blocks.css" rel="stylesheet" />
<link href="delete.css" rel="stylesheet" />
<nav class="nav flex-column vh-100 p-2" style="width: 280px; background-color: #485068;">
  <a class="nav-link text-white" href="#dashboard"><i class="bi bi-speedometer2 me-2"></i>Home</a>
  <a class="nav-link text-white" href="/about"><i class="bi bi-person-circle me-2"></i>About</a>
  <a class="nav-link text-white" href="/faq"><i class="bi bi-question-circle me-2"></i>FAQ</a>

  <!-- Items parent menu -->
  <a class="nav-link text-white d-flex justify-content-between align-items-center" data-toggle="collapse" href="#itemsMenu" role="button" aria-expanded="false" aria-controls="itemsMenu">
    <span>Items</span>
    <i class="bi bi-caret-down-fill"></i>
  </a>
  <div class="collapse" id="itemsMenu">
    <nav class="nav flex-column ml-3">
      <a class="nav-link text-white" href="/master_data"><div id="list-items"></div>List of Items</a>
      <a class="nav-link text-white" href="/listOfItems"><i class="bi bi-card-list me-1"></i>Card items</a>
      <a class="nav-link text-white" href="/insertItems"><i class="bi bi-plus-circle me-2"></i>Add Item</a>
      <a class="nav-link text-white" href="#settings"><i class="bi bi-pencil-square me-2"></i>Edit Item</a>
      <a class="nav-link text-white" href="#help"><i class="bi bi-trash me-2"></i>Delete Item</a>
    </nav>
  </div>

  <!-- Loans parent menu -->
  <a class="nav-link text-white d-flex justify-content-between align-items-center" data-toggle="collapse" href="#loansMenu" role="button" aria-expanded="false" aria-controls="loansMenu">
    <span>Loans</span>
    <i class="bi bi-caret-down-fill"></i>
  </a>
  <div class="collapse" id="loansMenu">
    <nav class="nav flex-column ml-3">
      <a class="nav-link text-white" href="#help"><i class="bi bi-info-circle me-2"></i>List of Loans</a>
      <a class="nav-link text-white" href="#help"><i class="bi bi-box-arrow-right me-2"></i>Add Loan</a>
      <a class="nav-link text-white" href="#help"><i class="bi bi-pencil-square me-2"></i>Edit Loan</a>
      <a class="nav-link text-white" href="#help"><i class="bi bi-trash me-2"></i>Delete Loan</a>
    </nav>
  </div>

  <!-- Students parent menu -->
  <a class="nav-link text-white d-flex justify-content-between align-items-center" data-toggle="collapse" href="#studentsMenu" role="button" aria-expanded="false" aria-controls="studentsMenu">
    <span>Students</span>
    <i class="bi bi-caret-down-fill"></i>
  </a>
  <div class="collapse" id="studentsMenu">
    <nav class="nav flex-column ml-3">
      <a class="nav-link text-white" href="#help"><i class="bi bi-list-ul me-2"></i>List of Students</a>
      <a class="nav-link text-white" href="#help"><i class="bi bi-box-arrow-right me-2"></i>Add Student</a>
      <a class="nav-link text-white" href="#help"><i class="bi bi-pencil-square me-2"></i>Edit Student</a>
      <a class="nav-link text-white" href="#help"><i class="bi bi-trash me-2"></i>Delete Student</a>
    </nav>
  </div>

  <a class="nav-link text-white" href="#help"><i class="bi bi-gear me-2"></i>Settings</a>
</nav>

<!-- Navbar toggle button for small screens -->
<nav class="navbar navbar-dark bg-dark fixed-top d-lg-none">
  <div class="container-fluid">
    <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-label="Toggle sidebar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <span class="navbar-brand ms-2">MyApp</span>
  </div>
</nav>

<!-- Sidebar - Offcanvas on mobile, fixed on large screens -->
<div class="offcanvas offcanvas-start offcanvas-lg" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarLabel">
  <div class="offcanvas-header d-lg-none">
    <h5 class="offcanvas-title" id="sidebarLabel">Menu</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body px-0">
    <nav class="nav flex-column">
      <a class="nav-link px-3" href="#dashboard"><i class="bi bi-speedometer2 me-2"></i>Home</a>
      <a class="nav-link px-3" href="/about"><i class="bi bi-person-circle me-2"></i>About</a>
      <a class="nav-link px-3" href="/faq"><i class="bi bi-question-circle me-2"></i>FAQ</a>
      <!-- Items parent menu -->
      <a class="nav-link px-3 d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#itemsMenu" role="button" aria-expanded="false" aria-controls="itemsMenu">
        <span>
          Items
        </span>
        <i class="bi bi-caret-down-fill"></i>
      </a>
      <div class="collapse" id="itemsMenu">
        <nav class="nav flex-column ms-3">
          <a class="nav-link px-3" href="#/master_data"><div id="list-items" style="display: flex; padding-right: 0px;"></div>List of Items</a>
          <a class="nav-link px-3" href="/listOfItems"><div id="card-items" style="display: flex; padding-right: 0px;"></div>Card items</a>
          <a class="nav-link px-3" href="/insertItems"><i class="bi bi-chat-dots me-2"></i>Add Item</a>
          <a class="nav-link px-3" href="#settings"><div id="edit-item"></div>Edit Item</a>
          <a class="nav-link px-3" href="#help"><div id="delete-item"></div>Delete Item</a>
        </nav>
      </div>

      <!-- Loans parent menu -->
      <a class="nav-link px-3 d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#loansMenu" role="button" aria-expanded="false" aria-controls="loansMenu">
        <span>Loans</span>
        <i class="bi bi-caret-down-fill"></i>
      </a>
      <div class="collapse" id="loansMenu">
        <nav class="nav flex-column ms-3">
          <a class="nav-link px-3" href="#help"><i class="bi bi-info-circle me-2"></i>List of Loans</a>
          <a class="nav-link px-3" href="#help"><i class="bi bi-box-arrow-right me-2"></i>Add Loan</a>
          <a class="nav-link px-3" href="#help"><div id="edit-loan"></div>Edit Loan</a>
          <a class="nav-link px-3" href="#help"><div id="delete-loan"></div>Delete Loan</a>
        </nav>
      </div>

      <a class="nav-link px-3 d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#studentsMenu" role="button" aria-expanded="false" aria-controls="loansMenu">
        <span>Students</span>
        <i class="bi bi-caret-down-fill"></i>
      </a>
      <div class="collapse" id="studentsMenu">
        <nav class="nav flex-column ms-3">
          <a class="nav-link px-3" href="#help"><div id="list-students"></div>List of Students</a>
          <a class="nav-link px-3" href="#help"><i class="bi bi-box-arrow-right me-2"></i>Add Loan</a>
          <a class="nav-link px-3" href="#help"><div id="edit-student"></div>Edit Student</a>
          <a class="nav-link px-3" href="#help"><div id="delete-student"></div>Delete Student</a>
        </nav>
      </div>


      <a class="nav-link px-3" href="#help"><i class="bi bi-question-circle me-2"></i>Settings</a>
    </nav>
  </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var offcanvasElement = document.getElementById('sidebarMenu');
    var bsOffcanvas = new bootstrap.Offcanvas(offcanvasElement, {backdrop: false});
    bsOffcanvas.show();
  });

  function loadHTML(url, elementId) {
  fetch(url)
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.text();
    })
    .then(data => {
      document.getElementById(elementId).innerHTML = data;
    })
    .catch(error => {
      console.error('Error loading HTML:', error);
    });
  }
  // Contoh memuat file sidebar.html ke dalam div dengan id 'include-container'
  loadHTML('deleteIcon.html', 'delete-item');
  loadHTML('deleteIcon.html', 'delete-loan');
  loadHTML('deleteIcon.html', 'delete-student');
  loadHTML('edit.html', 'edit-item');
  loadHTML('edit.html', 'edit-loan');
  loadHTML('edit.html', 'edit-student');
  loadHTML('users.html', 'list-students');
  loadHTML('BlockIcon.html', 'list-items');
</script>
