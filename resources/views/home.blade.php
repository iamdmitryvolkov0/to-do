<html>
<head>
    <title>To-do-list</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</head>
<body class="bg-info">
    <div class="container w-25 mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3>To do list</h3>
                <form action="{{ route('store') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="tasks" class="form-control" placeholder="Add new task">
                        <button type="submit" class="btn btn-dark btn-sm px-4"><i class="fas fa-plus"></i></button>
                    </div>

                </form>
                    @if(count($todolist))
                    <ul class="list-group list-group-flush mt-3">
                        @foreach($todolist as $todolist)
                            <li class="list-group-item">
                                <form action="{{ route('destroy', $todolist->id) }}" method="post">
                                    {{$todolist->tasks}}
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-link btn-sm float-end"><i class="fas fa-trash"></i></button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                    @else
                        <p class="text-center mt-3">No added tasks yet.</p>
                    @endif
            </div>
        </div>
    </div>
</body>
</html>
