<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
<div class="container">
    <div class="row">
<div class="col-sm-6 mt-5" >
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" />
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" />
        </div>

        <div class="mb-3">
            <label for="marks" class="form-label">Marks</label>
            <input type="number" class="form-control" id="marks" name="marks" />
        </div>
<button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@if(@session()->has('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>


@endif
</div>
<div class="col-sm-6">
    <table class="table table-hover">
        <thead>

            <tr>
                <th class="col" >ID</th>
                <th class="col" >Name</th>
                <th class="col" >City</th>
                <th class="col" >Marks</th>
                <th class="col" >Actions</th>


            </tr>

        </thead>
<tbody>
    @foreach ($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->city}}</td>
        <td>{{$student->marks}}</td>
        <td>
            <a href="{{ url("/edit",$student->id) }}" class="btn btn-info btn-sm">Update</a>
            <a href="{{ url("/delete",$student->id) }}" class="btn btn-danger btn-sm">Delete</a>
        </td>
        </td>
</tr>
@endforeach
</tbody>
    </table>
</div>
    </div>
</div>








        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
