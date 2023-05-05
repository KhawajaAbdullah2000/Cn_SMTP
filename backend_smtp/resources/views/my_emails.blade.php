<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>My mails</title>
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

    @if(isset($data))
    @foreach ($data as $d)
    <div class="row mx-4">
<div class="row-md-8 mt-4 ">

    <p><span class="fw-bold">From</span> {{$d['from']}}</p>
    <p> <span class="fw-bold">To</span> {{$d['to']}}</p>
    <p><span class="fw-bold">Subject</span>  {{$d['subject']}}</p>
    <p><span class="fw-bold">Body</span> {{$d['body']}}</p>
    @if(isset($d['path']))
    <p><span class="fw-bold">Attachment</span> {{$d['path']}}</p>
    
    @endif
    <p><span class="fw-bold">Date</span> {{$d['date']}}</p>

    <br>

</div>

    </div>
       
    
        
    @endforeach

    @else
    <h3>No data. pls first login</h3>
    @endif


    
</body>
</html>