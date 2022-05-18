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
                @method("PUT")
                <div class="mb-3">
                    <label for="name" class="form-lable">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-lable">City</label>
                    <input type="text" class="form-control" id="name" name="city"  value="{{$student->city}}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-lable">Marks</label>
                    <input type="number" class="form-control" id="name" name="marks"  value="{{$student->marks}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            @if (session()->has('status'))
                <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
          </div>
          <div class="col-sm-6">
              
          </div>
      </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>