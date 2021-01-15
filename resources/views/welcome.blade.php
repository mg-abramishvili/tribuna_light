<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Трибуна</title>

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <style>
		html, body {cursor: none;}
		
        body,
        .wrapper,
        .slide {
            width: 540px;
            height: 1920px;
            position: relative;
            overflow: hidden;
            margin: 0;
        }

        .slide h1 {
            margin: 0 auto;
            position: absolute;
            top: 40%;
            left: 15px;
            right: 15px;
            text-align: center;
            font-family: 'HeliosCond';
            text-transform: uppercase;
            font-size: 60px;
            line-height: 1.4;
            text-shadow: 0 1px 36px white;
            z-index: 20;
            color: rgb(0,121,193);
        }

        .rotate {
            animation: rotation 0.5s linear;
        }

        @keyframes rotation {
		0% {
				transform: rotate(0deg);
		}
		100% {
				transform: rotate(359deg);
        }
        }
    </style>
</head>
<body>

    <div class="wrapper">
        @foreach($slides as $slide)
            
            <div class="slide" style="background: url(@foreach($slide->backgrounds as $bg){{$bg->file}}@endforeach);">
                <h1>{!! $slide->text !!}</h1>

                @foreach($slide->logos as $logo)
                @if($logo->id == '1')
                <img src="{{$logo->logo}}" style="width:250px;display:block;margin:0 auto;position:absolute; left: 15px; right: 15px; bottom: 100px;">
                @elseif($logo->id == '3')
                <img src="{{$logo->logo}}" style="width:250px;display:block;margin:0 auto;position:absolute; left: 15px; right: 15px; bottom: 100px;">
                @else
                <img src="{{$logo->logo}}" style="width:500px;display:block;margin:0 auto;position:absolute; left: 15px; right: 15px; bottom: 100px;">
                @endif
                @endforeach
            </div>

            <script>
                $(document).ready(function() {
                    setInterval(function() {
                        $('.slide').load('{{ action('App\Http\Controllers\FrontController@index') }}');
                    }, 1000);
                });
            </script>
            
        @endforeach
    </div>

</body>
</html>