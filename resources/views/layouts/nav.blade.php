<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">
    .subscription-card{
      border: 2px solid lightgrey;
      border-radius: 4px;
      padding: 10px;
      text-align: center;
      background: #fbeded;
      box-shadow: 1px 1px 5px lightgrey;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="#">Home</a></li>
      <li class="nav-item {{ Route::is('subscription') ? 'active' : '' }}">
        <a href="{{ url('subscription') }}">Subscription</a>
      </li>
    </ul>
  </div>
</nav>
  
@yield('content')

</body>
</html>
