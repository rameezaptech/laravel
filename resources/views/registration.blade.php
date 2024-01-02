<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Registration form</h1>
    <form action="{{url('/')}}/registration" method = "POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
          
        <div class="mb-3">
          <label for="" class="form-label" >Email</label>
          <input type="email" class="form-control" id="exampleInputPassword1" name="email">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
        
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Gender</label>
            <input type="gender" class="form-control" id="exampleInputPassword1" name="gender">
          </div>
          
        <button type="submit" class="btn btn-primary" value="register">Submit</button>
      </form>
    </div>
</body>
</html>