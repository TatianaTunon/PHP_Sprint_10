@extends('layoutusuario')

@section('content')
<body>
<div class="container">
    <div class="row">
		<div class="col-md-5 mx-auto">
			<div class="myform form ">
				<div class="logo mb-3">
					<div class="col-md-12 text-center">
							<h1>Login</h1>
					</div>
			    </div>
                <form action="{{ url('/login') }}" method="post" name="login">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                    </div>
                    </br>
                    <div class="col-md-12 text-center ">
                        <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button></a>
                    </div>
                    </br>
                    <div class="form-group">
                        <p class="text-center">¿No tienes cuenta? <a href="{{ route('create') }}" id="signup">Aquí puedes</a></p>
                    </div>
                    <div class="form-group">
                        <p class="text-center">Has olvidado la contraseña <a href="{{ url('/recuperacio')}}" id="signup">Aquí puedes</a></p>
                    </div>
                </form>
			</div>
		</div>
	</div>
</div>    
</body>
@endsection
