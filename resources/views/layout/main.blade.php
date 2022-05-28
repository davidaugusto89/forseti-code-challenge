<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Forseti Code Challenge @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="David Augusto Keller Haddad">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style type="text/css">
      html, body{
        font-family: Montserrat;
      }
      #link_topo a{
        font-size: 0.9rem;
      }
      
      @media only screen and (max-device-width: 480px) {
        .navbar-brand {
            float:none !important;
            text-align: center !important;
            margin:0 auto !important;
            display:block !important;
            width: 100% !important;
        }
        #link_topo a{
          float:none !important;
          text-align: center !important;
          margin:5px auto !important;
          display:block !important;
          width: 100% !important;
        }
        .input-group{
          margin: 5px 0;
        }
      }
    </style>
  </head>
  <body>
    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex text-md-left text-center justify-content-between">
          <a href="{{ route('noticias.index') }}" class="navbar-brand">
            <strong>Forseti Code Challenge</strong>
          </a>

          <div class="col-lg-5 col-12 text-right" id="link_topo">
          <a href="{{ route('noticias.index') }}" class="text-white mr-3">Início</a>
            <a href="{{ route('noticias.importar') }}" class="text-white mr-3">Importar Notícias</a>
          </div>
        </div>
      </div>
    </header>
    
    <main>
      <div class="container py-5">
        @yield('content')
      </div>
    </main>

    <footer>
      <div class="fixed-bottom bg-dark box-shadow p-2">
        <div class="container text-white text-center">
            <small>Desenvolvido por David Augusto | github: <a href="https://github.com/davidaugusto89/" target="_blank" class="text-white">davidaugusto89</a></small>
        </div>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.10/dist/sweetalert2.all.min.js"></script>

    @if (Session::get('icon'))
    <script>
      Swal.fire({
        icon: "{{Session::get('icon')}}",
        title: "{{Session::get('message')}}",
        showConfirmButton: false,
        timer: 1500
      })
    </script>
    @endif

    @yield('script')
  </body>
</html>