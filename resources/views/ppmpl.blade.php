<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <title>try2</title>
</head>
<body>
    <!DOCTYPE html>
<html>
	<head>
		<title>ppmpl</title>
		<meta charset = "UTF-8" name = "viewport" content = "width-device=width, initial-scale=1" />
        <link rel = "stylesheet" type = "text/css" href = "{{ asset('css/bootstrap-3.3.7/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
	</head>
	<body>
		<div id="container">
            <div id="header"> Forum Diskusi Online</div><br>
        <button type="button" onclick="history.back();"> << Back</button>
        <p id="menu" ><strong>Pilih Week untuk Mata Kuliah {{$matakuliah->name}}</strong></p>
        
		<div id="box1">
            <ul>
                @foreach($data as $key => $row)
                    <li id="link1">
                        <i class="fas fa-comment"></i>&nbsp
                        <a href="/chat/{{$matakuliah->id}}/{{$row->id}}">WEEK {{$row->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
         
        </div>
	</body>
</html>





</body>
    </html>