<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
    <h1> {{ $user->first_name }} {{ $user->second_name }} {{ $user->third_name }}</h1>

    @foreach($points as $point)
    
        @if($point['half_number'] == 1)
        <ul>
            @foreach(json_decode($point, true) as $key => $value)
                @if($key != 'id' && $key != 'user_id' && $key != 'half_number' && $value != null)
                    <li>{{ $key }} {{ $value }}</li>
                @endif
            @endforeach
        </ul>
        @endif


        @if($point['half_number'] == 2)
        <ul>
            @foreach(json_decode($point, true) as $key => $value)
                @if($key != 'id' && $key != 'user_id' && $key != 'half_number' && $value != null)
                    <li>{{ $value }}</li>
                @endif
            @endforeach
        </ul>
        @endif

    @endforeach
</body>
</html>