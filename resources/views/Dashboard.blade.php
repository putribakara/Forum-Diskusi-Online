

<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
        <meta charset = "UTF-8" name = "viewport" content = "width-device=width, initial-scale=1" />
        <link rel = "stylesheet" type = "text/css" href = "{{ asset('css/bootstrap-3.3.7/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
	</head>
	<body>
		<div id="container">   
        <div id="header"> Forum Diskusi Online</div>
            <p id="menu" ><strong>Mata kuliah</strong><br><br></p>
            <div id="box1">
                <ul>
                   @foreach($data as $key => $row)
                        <li id="link1">
                            <a href="/choseWeek/{{$row->id}}">{{$row->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div> 
        </div>
	</body>
</html>





</body>
    </html>