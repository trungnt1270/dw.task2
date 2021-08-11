<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
@csrf
<div class="wapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>View Record</h1>
                </div>
                <div class="form-group">
                    <label>Created At</label>
                    <p class="form-control-static">{{$task->created_at}}</p>
                </div>

                <div class="form-group">
                    <label>Name</label>
                    <p class="form-control-static">{{$task->name}}</p>
                </div>

                <div class="form-group">
                    <label>Details</label>
                    <p class="form-control-static">{{$task->details}}</p>
                </div>
                <p><a href="{{route('home')}}" class="btn btn-primary">Back</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
