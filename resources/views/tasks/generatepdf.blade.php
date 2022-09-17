<h1>List of tasks</h1>

    <table class="table">
        <thead>
            <tr>
                <th>S.N.</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        @foreach($task as $t)
        <tbody>
            <tr>
                <td class="row">{{$loop->iteration}}</td>
                <td>{{$t->title}}</td>
                <td>{{$t->des}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>

