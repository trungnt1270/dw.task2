<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>To Do List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wapper {
            width: 650px;
            margin: 0 auto;
        }

        .page-header h2 {
            margin-top: 0;
        }

        table tr td:last-child a {
            margin-right: 10px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })
    </script>
</head>

<body>
<div class="wapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header clearfix">
                    <h2 class="pull-left">Task Details</h2>
                    <a href="{{route('create')}}" class="btn btn-success pull-right">Add New Task</a>
                </div>
                @if(count($todolists)>0)
                    <table class='table table-bordered table-striped'>
                        <thead>
                        <tr>
                            <th>Created At</th>
                            <th>Task</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($todolists as $todolist)

                            <tr>
                                <th scope="row">{{$todolist->created_at}}</th>
                                <td>{{$todolist->name}}</td>
                                <td>{{$todolist->details}}</td>
                                <td>
                                    <a href='{{route('read',$todolist->id)}}' title='View Task' data-toggle='tooltip'>
                                    <span class='glyphicon glyphicon-eye-open'></span></a>

                                    <a href='{{route('edit',$todolist->id)}}' title='Update Task' data-toggle='tooltip'>
                                        <span class='glyphicon glyphicon-pencil'></span></a>

                                    <a href='{{route('delete',$todolist->id)}}' title='Delete Task' data-toggle='tooltip'>
                                        <span class='glyphicon glyphicon-trash'></span></a>
                                </td>
                                </td>
                            </tr>
                        @endforeach

                        @endif


                        </tbody>
                    </table>


</body>
</html>

