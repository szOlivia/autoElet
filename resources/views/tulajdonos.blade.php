<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        @include('menu')
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="bg-dark p-3 roudnded text-wite mt-3">
                            <h1>Tujaddonos</h1>
                            <table class="table table-light table-sm table-striped table-hover">
                                <tr>
                                    <th>#</th>
                                    <th>Tulajdonos neve</th>
                                    <th>Tulajdonjog kezdete</th>
                                    <th>Tulajdonjog vége</th>
                                </tr>
                                @foreach ($tulajdonosok as $item)
                                <tr>
                                    <td>{{ $item->t_id}}</td>
                                    <td>{{ $item->nev}}</td>
                                    <td>{{ $item->tulajdonjog_kezdete}}</td>
                                    <td>{{ $item->tulajdonjog_vege}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>    
                </div>
            </div>    
        </div>
          
</body>
</html>