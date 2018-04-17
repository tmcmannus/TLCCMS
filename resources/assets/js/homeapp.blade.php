
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hill Airforce Base Mud Run 2018</title>
    <link rel="stylesheet" href="/css/app.css">
     <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}"/>
<body>
  @include('inc.nav')


      <!-- Main jumbotron for a primary marketing message or call to action -->
      @include('inc.header')
      <div class="container title">
        @if(Request::is('/'))
            @include('inc.hometitle')
        @elseif(Request::is('about'))
            @include('inc.abouttitle')
        @elseif(Request::is('t-shirts'))
            @include('inc.tshirttitle')
        @elseif(Request::is('sign-up'))
            @include('inc.signuptitle')
        @elseif(Request::is('contact'))
            @include('inc.contacttitle')
        @endif
      </div>
      @include('inc.homepage')



    <footer>
          <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
          </div>
        </footer>
    <script src="{{url('assets/js/components/bootstrap.js')}}"></script>
      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
      </body>
      </html>
