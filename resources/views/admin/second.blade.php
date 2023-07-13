{{-- 
<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII=" rel="icon" type="image/x-icon">
    <title>Stifus</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header>

    </header>
    <form action="{{ route('admin.show.firstupdate', $user->id) }}" method="POST" >
        <div class= "container">
            <div class = "tablicka">
                <table>
                    <tr>
                        <th>Наименование дисциплины</th>
                        <th>Семестр I</th>
                        <th>Зачёт</th>
                        <th>Дата сдачи экзамена</th>
                    </tr>
                    @foreach($points as $point)
        
                            {{ method_field('PUT') }}
                            @csrf
                            @foreach(json_decode($point, true) as $key => $value)
                                @if($key != 'id' && $key != 'user_id' && $key != 'created_at' && $key != 'updated_at' && $value != null)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td><input type="text" maxlength="1" value="{{ $value }}" name="{{ $key }}"></td> 
                                    @if($value > 2)
                                        <td>Зачёт</td>
                                    @else
                                        <td>Не Зачёт</td>
                                    @endif
                                    <td>{{ $date }}</td>   
                                </tr>
                                @endif
                                
                            @endforeach
                    @endforeach    
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
        <div class = "form-btn">
            <button class="submit" type="submit">Сохранить</button>
        </div>
        
    </form>
</body>

</html> --}}

<!DOCTYPE html>
<html lang='ru'>

<head>
  <link rel="stylesheet" href="/css/style2.css">
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII=" rel="icon" type="image/x-icon">
    <title>Stifus</title>
    <style>

    </style>
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
    <form action="{{ route('admin.show.secondupdate', $user->id) }}" method="POST" >
        {{ method_field('PUT') }}
        @csrf
        <div class= "container">
            <div class = "tablicka">
                <table>
                    <tr>
                        <th>Наименование дисциплины</th>
                        <th>Семестр II</th>
                        <th>Зачёт</th>
                        <th>Дата сдачи экзамена</th>
                    </tr>
                    @foreach($points as $point)
            
                        @foreach(json_decode($point, true) as $key => $value)
                                @if($key != 'id' && $key != 'user_id' && $key != 'created_at' && $key != 'updated_at' && $value != null)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td><input type="text" maxlength="1" value="{{ $value }}" name="{{ $key }}"></td> 
                                    @if($value > 2)
                                        <td>Зачёт</td>
                                    @else
                                        <td>Не Зачёт</td>
                                    @endif
                                    <td>{{ $date }}</td>   
                                </tr>
                                @endif
                                
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
            <button class="glow-on-hover" type="submit">Сохранить изменения</button>
            {{-- <a class='btn-sub' href=""><img src="/img/wd2.png" alt=""></a> --}}
        </div>
    </form>
    
</body>

</html>
