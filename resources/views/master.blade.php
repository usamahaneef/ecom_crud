<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecom_crud</title>
    {{-- bootstrap cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- jquery cdn --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
     integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<style>
    .bottom-0{
        bottom: 0;
    }
</style>
<body>
    {{-- Header nav bar --}}
    <header class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Orders</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li> --}}
              </ul>
              <form class="form-inline my-2 my-lg-0 d-flex">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
    </header>
    
    @yield('content')

    <!-- Footer start -->
    <footer class="page-footer font-small blue bg-info bottom-0">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="/"> Ecom-crud.com</a>
        </div>
    </footer>
  <!-- Footer end -->
    
</body>
{{-- dummy popup setup --}}
{{-- <script>
    $('document').ready(function(){
        $('button').click(function(){
            alert('all set')
        })
    })
</script> --}}
</html>