<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
            * {
                font-family: "poppins";
            }
        </style>
        <title>tes</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <div class="container-fluid">
              <a class="container navbar-brand" href="index">Data Siswa</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active float-end" aria-current="page" href="siswa/index">Siswa</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <div class="container">
            @yield('content')
        </div>
        <script src="/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
