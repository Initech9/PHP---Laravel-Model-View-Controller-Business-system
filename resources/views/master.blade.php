<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Store CSRF token for AJAX calls -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    @yield('extra-css')


    <style>

        .spacer {
			background-color: LIGHTGRAY;
            margin-bottom: 100px;
			
        }

        .cart-image {
			background-color: LIGHTGRAY;
            width: 100px;
			
        }
		
		.container {
		background-color: LIGHTGRAY;	
		}

        footer {
           
			background-color: LIGHTGRAY;
            padding: 20px 0;
        }

        .table>tbody>tr>td {
			background-color: LIGHTGRAY;
            vertical-align: middle;
			
        }

        .side-by-side {
			background-color: LIGHTGRAY;
            display: inline-block;
        }
		
		.btn-primary {
			background-color: ORANGE;
			
		}
		
		
    </style>
</head>
<body>

    <header>

        <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="{{ set_active('shop') }}"><a href="{{ url('/') }}">Home</a></li>


              </ul>
              <ul class="nav navbar-nav navbar-right">
                 <li class="{{ set_active('bartender') }}"><a href="{{ url('/bartender') }}">order queue option  ({{ Cart::instance('default')->count(false) }})</a></li>
              </ul>
            </div>
          </div>
        </nav>

    </header>

    @yield('content')

    <footer>
      <div class="container">
       
      </div>
    </footer>


@yield('extra-js')

</body>
</html>
