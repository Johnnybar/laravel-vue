<!DOCTYPE html>
<html>
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->


  <title></title>
</head>
<body>

  <div class="container">


    @include('partials.header')

    <div class="main-content" id="app">

      @yield('content')



      @include('partials.footer')
    </div>
    <script type="text/javascript" src="js/app.js"></script>
    <link rel="stylesheet" href="css/app.css">
  </div>
  @if (getenv('APP_ENV') === 'local')
  <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>".replace("HOST", location.hostname));
    //]]>
  </script>
  @endif
</body>
</html>
