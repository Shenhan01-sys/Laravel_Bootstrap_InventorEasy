<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>web_laravel_gweh @yield('title')</title>
  </head>
  <body>
    <div class='container-fluid'>
        <!--Baris 1-->
        <div class="row">
            <div class="col-md-12 py-3" style="background-color: #485068;">
                <div class="dropdown float-right">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" 
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-circle"></i> User
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">
                            <div class="media">
                                <img src="https://thumb.viva.id/vivabanyuwangi/665x374/2025/03/21/67dd1293ac3a8-solo-leveling-salah-satu-anime-terpopuler-saat-ini_banyuwangi.jpg"
                                height="50" width="50" class="align-self-center mr-3" alt="...">
                                <div class="media-body">
                                <h5 class="mt-0">Hans Gunawan</h5>
                                <p class="mb-0"><i class="bi bi-clock"></i> <small>Pkl.13.00 WIB</p>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#"> <i class="bi bi-key"></i> Change Password</a>
                        <a class="dropdown-item" href="#"> <i class="bi bi-power"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Baris 2 -->
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 vh-100 border" style="background-color: #fdfdfd;">
                @include('Navbar/sidebar')
            </div>

            <!-- Konten -->
            <div class="col-md-9 vh-100 border" style="overflow-y: auto; padding-bottom: 60px;">
                @yield('content')
            </div>
        </div>

        <div class="footer bg-dark text-white text-center py-3">
            <p>&copy; template by Hans Gunawan_72230649.</p>
            <p>
                <a href="https://wa.me/6289673280495" class="text-white me-3">
                    <i class="bi bi-whatsapp"></i> WhatsApp
                </a>
            </p>
            <p>
                <a href="https://instagram.com/shen_han01" class="text-white">
                    <i class="bi bi-instagram"></i> Instagram
                </a>
            </p>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
