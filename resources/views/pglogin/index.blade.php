@extends('pg_template')

@section('content')
	<div class="wrapper">
		<form action="#" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Bem Vindo! Login</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="Username" placeholder="Usuário" required="" autofocus="" />
			  <input type="password" class="form-control" name="Password" placeholder="Senha" required=""/>     		  
			 
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Acessar</button>  			
		</form>			
	</div>
@stop