{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($users as $user)
        <ul>
            <li><a href="{{ route('user.half', $user->id) }}">{{ $user->first_name }} {{ $user->second_name }} {{ $user->third_name }} {{ $user->faculty }}</a></li>
        </ul>
    @endforeach
</body>
</html> --}}

<!DOCTYPE html>
<html lang='ru'>

    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII=" rel="icon" type="image/x-icon">
        <title>Stifus</title>
        <link rel="stylesheet" href="/css/style2.css">
    </head>
    <body>
        <nav class="main_nav">
            <div class="logo">
                <a href="{{ route("index")}}"><img  src="/img/free-icon-treasure-chest-3305050.png" alt=""></a> 
            </div>
            <div class="name">
                <h1>stíthos dictionary</h1>
            </div>
        </nav>
        <div class= "container">
            <div class = "tablicka">
                <table id = "tablica1">
                    <tr class="label">
                        <th>№</th>
                        <th>ФИО Студента</th>
                        <th>Дата экзамена</th>
                        <th>Факультет</th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td><a href="{{ route('user.show.firsthalf', $user->id) }}">{{ $user->first_name }} {{ $user->second_name }} {{ $user->third_name }} </a></td>
                            <td>{{ $date }}</td>
                            <td>{{ $user->faculty }}</td>
                    
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class = "sect">
                <table>
                    <tr>
                        <th class="rang" style="height: 60px;">Рейтинг</th>
                    </tr>
                    <td>Козлов А.Д.</td>
                </tr>
                <tr>
                    <td>Назаров Н.Б.</td>
                </tr>
                <tr>
                    <td>Ешкеев А.А.</td>
                </tr>
                <tr>
                    <td>Гиезов М.Р.</td>
                </tr>
                <tr>
                    <td>Гыргенов К.Б.</td>
                </tr>
                <tr>
                    <td>Кудряшов К.П.</td>
                </tr>
                <tr>
                    <td>Сугдуллавев А.А.</td>
                </tr>
                <tr>
                    <td>Хабибулин В.А.</td>
                </tr>

                </table>
            </div>
        </div>
        

    </body>

</html>