{{-- 
<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel="stylesheet" href="/css/style.css">
    <link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII=" rel="icon" type="image/x-icon">
    <title>Stifus</title>

</head>

<body>

    <header>  
        <div class="user-name">  {{ $user->first_name }} {{ $user->second_name }} {{ $user->third_name }}</div>
    </header>
    
    <div class= "container">
        <div class = "tablicka">
            <table>
                <tr>
                    <th>Наименование дисциплины</th>
                    <th>Семестр I</th>
                    <th>Зачёт</th>
                    <th>Дата сдачи экзамена</th>
                </tr>
            
                
                

            </table>
        </div>
        <div class = "sect"> 
            <table> 
                <tr> 
                    <th style="height: 60px;">Рейтинг</th> 
                </tr> 
                <tr> 
                    <td>1.</td> 
                </tr> 
                <tr> 
                    <td>2.</td> 
                </tr> 
            </table> 
        </div>
    </div>
    <div class = "rectangle">
        <button></button>
    </div>
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
                    <th>Наименование дисциплины</th>
                    <th>Оценка</th>
                    <th>Семестр I</th>
                    <th>Дата</th>
                </tr>
                @foreach($points as $point)
                    
                    @foreach(json_decode($point, true) as $key => $value)
                        <tr>
                            @if($key != 'id' && $key != 'user_id' && $key != 'updated_at' && $key != 'created_at' && $value != null)
                                <td>{{ $key }}</td>
                                <td>{{ $value }}</td>
                                @if($value > 2)
                                    <td>Зачёт</td>
                                @else
                                    <td>Не Зачёт</td>
                                @endif
                                <td>{{ $date }}</td>
                            @endif
                        </tr>
                    @endforeach

                @endforeach
            </table>
        </div>
        <div class = "sect">
            <table> 
                <tr> 
                    <th style="height: 60px;">Рейтинг</th> 
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
    <div class = "rectangle">        
        <a href=""><img src="/img/" alt=""></a>
        <a href="{{ route('user.show.secondhalf', $user->id) }}"><img src="/img/wd2.png" ></a>
    </div>
  
</body>

</html>