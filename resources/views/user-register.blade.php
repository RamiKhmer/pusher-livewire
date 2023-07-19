<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <h1>Hello, world!</h1>
    <form method="POST" action="" class="row g-3">
      @csrf
        <div class="col-auto">
          <label for="inputPassword2" class="visually-hidden">Name</label>
          <input type="text" name="name" class="form-control" id="inputPassword2" placeholder="Name">
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>