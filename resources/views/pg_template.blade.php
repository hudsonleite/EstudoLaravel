<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tabelas Geral</title>
	<!-- define a viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

	<!-- adicionar Css Bootstrap -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
	<!-- css personalizado -->
	<link href="{{ asset('css/estilo_personalizado.css') }}" rel="stylesheet" media="screen">
</head>
<body> 
	<div class="panel panel-default">
		<div class="panel-body">
    		@yield('header')
  		</div>  		
	</div>

	<div class="container">
		@yield('content')
	</div> 

     <!-- Inclusão do Java Script -->
     <script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
	 <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>