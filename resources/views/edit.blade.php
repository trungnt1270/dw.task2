<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<h2>Update Task</h2>
<form action="{{route('update',$task->id)}}" method="post">
    @csrf
    <div class="form-group">
        <label>Task Name <span class="text-danger">*</span></label>
        <input type="text" name="name" id="name" value="{{$task->name}}" class="form-control" placeholder="Name" required>
    </div>
    <div class="form-group">
        <label>Details <span class="text-danger">*</span></label>
        <input type="text" name="details" id="details" value="{{$task->details}}" class="form-control" placeholder="Details" required>
    </div>
    <div class="form-group">
        <button type="submit" name="submit" value="Update" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Update Task</button>
    </div>
</form>
</body>
</html>
