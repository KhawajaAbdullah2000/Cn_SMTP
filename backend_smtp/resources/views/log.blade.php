<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">SMTP Server</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/receive_view">Receive email</a>
          </li>
  
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">

    @if ($errors->any())
    <div class="text-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <h2 class="text-center fw-bold text-uppercase my-5">Login to send email</h2>
    <div class="mx-auto ">

    <form action='' method="POST" >
        @csrf
        <div class="row">

          <div class="col-md-8 mx-auto">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Sender email</label>
              <input type="text" class="form-control bg-info " id="exampleInputEmail1" aria-describedby="emailHelp" name='sender_email'>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-8 mx-auto">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="password" class="form-control bg-info" id="exampleInputEmail1" aria-describedby="emailHelp" name='password'>
          </div>

        </div>
       
  <div class='text-center'>
    <button type="submit" class="btn btn-success mt-4 px-5">Login</button>
  </div>
    </form>
  </div>
  </div>
</body>
</html>