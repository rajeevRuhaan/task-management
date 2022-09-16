<!doctype html>
<html lang="en">

<head>
    <title>Create Task Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <a  class="btn btn-primary" href="{{route('task.index')}}" role="button">Back to tasks management</a>
                <div class="card-header">Edit Task</div>
                <div class="card-body">
                    <form action="{{route('task.update', $task->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        <div class="col-md-12">
                            
                            <div class="form-group">
                                <label for="">Task Title</label>
                                <input type="text" value="{{$task->title}}" class="form-control" name="title" id="" aria-describedby="helpId"
                                    placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Task Description</label>
                                <input type="text" value="{{$task->des}}" class="form-control" name="des" id="" aria-describedby="helpId"
                                    placeholder="">
                            </div>
                            
                            @csrf
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted">Footer</div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>