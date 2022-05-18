<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CURD Query Builder</title>
</head>
<body>
    <div class="container">
      <div class="row">
          <div class="col-sm-6 mt-5">
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-lable">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-lable">City</label>
                    <input type="text" class="form-control" id="name" name="city">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-lable">Marks</label>
                    <input type="number" class="form-control" id="name" name="marks">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @if (session()->has('status'))
                <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
          </div>
          <div class="col-sm-6">
              <table class="table table-hover mt-5">
                  <thead>
                      <tr>
                          <th scop="col">ID</th>
                          <th scop="col">Name</th>
                          <th scop="col">City</th>
                          <th scop="col">Marks</th>
                          <th scop="col">Action</th>
                      </tr>
                  </thead>
                  @foreach ($student as $stu)
                      <tr>
                          <th>{{$stu->id}}</th>
                          <th>{{$stu->name}}</th>
                          <th>{{$stu->city}}</th>
                          <th>{{$stu->marks}}</th>
                          <td>
                            <a href="{{url('/edit',$stu->id)}}" class="btn btn-info btn-sm">Eidt</a>
                            <a href="{{url('/delete',$stu->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                  @endforeach
              </table>
          </div>
      </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>