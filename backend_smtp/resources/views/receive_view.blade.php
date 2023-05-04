<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action='/receive_view' method="POST" >
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Your email</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='sender_email'>
          </div>

          <label for="exampleInputEmail1" class="form-label">Password</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='password'>
        </div>
  <div>
    <button type="submit">Retrieve</button>
  </div>
    </form>
</body>
</html>