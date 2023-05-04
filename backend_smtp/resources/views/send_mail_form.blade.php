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

    <h1 class="text-center py-5">Welcome to SMTP server</h1>
@if (isset($data))
 <h2>{{$data['msg']}}</h2>
 @endif 
   

    <div class="">
        <form action='send_mail_view' method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Sender email</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='sender_email'>
              </div>

              <label for="exampleInputEmail1" class="form-label">Password</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='password'>
            </div> --}}

            <div class="mb-3">
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
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
<br> <br>
<a href="/logout"><button class="btn btn-primary">Logout</button></a>
{{-- 
<button type="button" class="btn btn-primary" href="/logout"> Logout </button> --}}

    </div>
</body>
</html>