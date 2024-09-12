<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div
        class="">

        <table
            class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Studentfirstname</th>
                    <th scope="col">Studentlastname</th>
                    <th scope="col">Guradianfirstname</th>
                    <th scope="col">Guradianlastname</th>
                    <th scope="col">Address</th>
                    <th scope="col">Religion</th>
                    <th scope="col">Nationality</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                    <th scope="col">created_at</th>
                    <th scope="col">updated_at</th>
                    <th scope="col"></th>
                    </tr>
                  </thead>
            <tbody>
            @foreach ($student as $data)
                <tr class="">   
                <td scope="row"> {{$data->id}}</td>
                <td scope="row">{{$data->studentfirstname}} </td>
                <td scope="row">{{$data->studentlastname}}</td>
                <td scope="row">{{$data->Guradianfirstname}}</td>
                <td scope="row">{{$data->Guradianlastname}}</td>
                <td scope="row">{{$data->address}}</td>
                <td scope="row">{{$data->religion}}</td>
                <td scope="row">{{$data->nationality}}</td>
                <td scope="row">{{$data->DOB}}</td>
                <td scope="row">{{$data->Email}}</td>
                <td scope="row">{{$data->phone}}</td>
                <td scope="row">
                    @if($data->Gender == 'F')
                    Female
                    @elseif($data->Gender == 'M')
                    Male
                    @else
                    Others
                    @endif
                </td>
                <td scope="row">{{$data->created_at}}</td>
                <td scope="row">{{$data->updated_at}}</td>
                </td>
                <td>
                    <a href ="edit_record/{{$data->id}}">
                        <button class="btn btn-primary">Edit</button></a>

                    <a href="{{url('/delete/')}}/{{$data->id}}">
                    <button class="btn btn-danger">Delete</button></a>
                    
                </td>
              @endforeach
            </tbody>
           
        </table>
    </div>
    
</body>
</html>