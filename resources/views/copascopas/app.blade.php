<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Master Class</title>

  <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <a class="navbar-brand" href="#">Master Class</a>
    <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{\Route::is('home') ? 'active' : '' }}">
          <a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item {{\Route::is('phonebook') ? 'active' : '' }}">
          <a class="nav-link" href="{{url('phonebook')}}">Phonebook</a>
        </li>
      </ul>
    </div>
  </nav>

  {{$slot}}


  <script src="{{url('js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
