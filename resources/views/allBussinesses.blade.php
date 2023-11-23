<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
</head>

<body>

    <div class="conainter m-5"  style="width:100vw;">

<div class="d-flex" style="width:100%;">
    <h2>Bussiness</h2>
    <a class="btn btn-success" href="{{ route('bussiness.create') }}">Add Bussinees</a>
</div>

        <div class="row">
    

    <table class="table table-bordered w-75">
    <thead>
    <tr>

    <th>Name</th>
    <th>Address</th>
    <th>Email</th>
    <th>Website</th>
    <th>Contact Person</th>
    <th>Phone Number</th>
    
    </tr>
    </thead>


<tbody>

@foreach($bussiness as $value)

<tr>

<td>{{ $value->Name }}</td>
<td>{{ $value->address }}</td>
<td>{{ $value->email }}</td>
<td>{{ $value->website }}</td>
<td>{{ $value->contact_person }}</td>
<td>{{ $value->phone_no }}</td>
</tr>

@endforeach

</tbody>
    </table>

      </div>
    </div>


    </div>

</body>

</html>