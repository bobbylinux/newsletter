<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gestore NewsLetter</title>

    <link href="{!! url('css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! url('css/app.css') !!}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{!! url('/') !!}">Newsletter</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestisci <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="{!! url('bozze') !!}">Bozze</a></li>
                      <li><a href="{!! url('contatti') !!}">Contatti</a></li>
                      <li><a href="{!! url('interessi') !!}">Interessi</a></li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          @yield('content')
        </div>
      </div>
    </div>
    <script src="{!! url('js/jquery-3.1.1.min.js') !!}"></script>
    <script src="{!! url('ckeditor/ckeditor.js') !!}"></script>
    <script src="{!! url('ckeditor/adapters/jquery.js') !!}"></script>
    <script src="{!! url('js/bootstrap.js') !!}"></script>
    <script src="{!! url('js/utilities.js') !!}"></script>
    <script src="{!! url('js/app.js') !!}"></script>
  </body>
</html>
