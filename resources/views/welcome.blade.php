<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    @foreach ($worker_worker as $worker)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$worker->name}}</h5>
          <h5 class="card-title">{{$worker->age}}</h5>
          <a href="/worker/{{$worker->id}}" class="btn btn-primary">See More Detail</a>
          <a href="/update/worker/{{$worker->id}}" class="btn btn-secondary">Update</a>
          <form action="/delete/Worker/{{$worker->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
          </form>
        </div>
    </div>
    @endforeach

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</body>
</html>