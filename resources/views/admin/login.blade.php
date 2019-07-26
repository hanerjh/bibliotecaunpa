<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>
      </head>
  <body class="text-center">
      <div class="container">
          <div class="row">

            <div class="col-12 auto">
                    
                <form class="form-signin" method="POST" action="{{ route('login')}}">
                           @csrf
                           <img class="mb-4" src="/asset/img/escudo.png" alt="" width="72" height="72">
                          <h1> BIBLIOTECA UNIPACÍFICO</h1>
                      
                            <h1 class="h3 mb-3 font-weight-normal">Iniciar session</h1>

                            <label for="inputEmail" class="sr-only">Email</label>
                <input type="email" name="email" id="inputEmail" class="form-control" value="{{old('email')}}" placeholder="Email" required >
                                @if($errors->has('email'))         
                                <small class="text-danger">{{$errors->first('email',':message')}} </small>  
                            @endif

                            <label for="inputPassword" class="sr-only">Contraseña</label>
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                @if($errors->has('password'))         
                                <small class="text-danger">{{$errors->first('password',':message')}} </small>  
                            @endif
                           
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                            <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
                          </form>

            </div>

          </div>
            

      </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>