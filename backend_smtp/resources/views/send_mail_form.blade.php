<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smtp server CN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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
            <a href="/logout"><button class="btn btn-primary">Logout</button></a>
          </li>
  
        </ul>
      </div>
    </div>
  </nav>
  
    <h1 class="text-center py-5 fw-bold text-uppercase">Welcome to SMTP server</h1>
@if (isset($data))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <h3 class='text-uppercase'>{{$data['msg']}}</h3>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

{{-- <div class="alert alert-primary" role="alert">
  <h2 class='text-uppercase'>{{$data['msg']}}</h2> --}}
</div>

 @endif 

 @if ($errors->any())
 <div class="text-danger">
  <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
  </ul>
</div>
@endif

   <div class="mx-5">


        <form action='send_mail_view' method="POST" enctype="multipart/form-data">
            @csrf
  

            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Receiver email</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='receiver_email'>
              </div>
            <div class="mb-3">

              <label for="exampleInputEmail1" class="form-label">Subject</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='subject'>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Body</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name='body'>
            </div>
            <div class="mb-3">
                <input type="file" name="myfile" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Send email</button>
          </form>

{{-- 
<button type="button" class="btn btn-primary" href="/logout"> Logout </button> --}}

    </div>
</body>
</html>