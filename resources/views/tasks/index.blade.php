@extends('../layouts.app')
<!doctype html>
<html lang="en">

<head>
    <title>Manage Task</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
        @notifyCss
</head>
<body>
    {{--  notify --}}
    <x:notify-messages />
    <div class="container">
        <div class="row">
            <div class="card" style="margin:10px auto;">
                <a  class="btn btn-primary" href="{{route('task.create')}}" role="button">Create Task</a>
                <a class="btn btn-secondary" href="{{route('createpdf')}}" role="button">Generate PDF</a>
                <div class="card-header">
                    Manage Task
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S:N:</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                <td class="row">{{$loop->iteration}}</td>
                                <td>{{$task->title}}</td>
                                <td> {{$task->des}}</td>
                                <td>
                                    
                                         <a class="btn btn-secondary btn-sm" href="{{route('task.edit', $task->id)}}" role="button">Edit</a>
                                        
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modelId">
                                        Delete
                                        </button>
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Are you sure to delete this task?</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    Click "Yes" to delete and "No" to discard this action.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No</button>
                                                        <form action="{{route('task.destroy', $task->id)}}"             method="POST" enctype="multipart/form-data">
                                                            @method('delete')
                                                            <button type="submit"  class="btn btn-danger btn-sm" href="#" role="button">Yes</button>
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                    {{$tasks->links()}}
                </div>
                <div class="card-footer text-muted">
                    Footer
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    @notifyJs
</body>

</html>