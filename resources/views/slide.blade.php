<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Трибуна</title>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            background: url(/img/adminbg.jpg) center center;
            background-size: cover;
            background-attachment: fixed;
            font-family: 'HeliosCond';
            text-transform: uppercase;
        }

        form {
            background-color: rgba(255,255,255,0.9);
            padding: 25px;
        }

        .keyboard button {
            width: 30px;
            height: 30px;
            border: 2px solid rgba(0,121,193,0.2);
            box-shadow: none;
            text-align: center;
            line-height: 25px;
            margin-bottom: 5px;
            padding: 0;
            background-color: rgba(0,121,193, 0.1);
            font-family: 'HeliosCond';
            font-weight: bold;
            color: rgb(0,121,193);
        }

        .radios,
        .radiosl {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
        }

        .radio,
        .radiol {
            display: inline-flex;
            width: 25%;
        }

        .radio input[type="radio"],
        .radiol input[type="radio"] {
            display: none;
        }

        .radio input[type="radio"] label,
        .radiol input[type="radio"] label {
            border: 3px solid transparent;
        }

        .radio input[type="radio"]:checked+label,
        .radiol input[type="radio"]:checked+label {
            border: 3px solid rgb(0,121,193);
        }

    </style>
</head>
<body>
    
    <form action="/slides/{{$slides->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$slides->id}}">

        <div class="row align-items-center mb-2" style="display:none;">    
            <dt class="col-sm-12">
                Заголовок
            </dt>
            <dd class="col-sm-12">
                <input type="text" class="form-control" name="title" value="{{$slides->title}}">
            </dd>
        </div>

        <div class="row align-items-center mb-2">    
            <dt class="col-sm-12 mb-2" style="color: #a1a1a1;">
                Выступающий:
            </dt>
            <dd class="col-sm-12">
                <input type="text" id="text" onkeyup="myFunction()" class="form-control" name="text" value="{{$slides->text}}">
                    
                    <div class="veteran-list-keyboard">
                <div class="keyboard" style="margin-top: 20px;">

                    <div style="text-align: center;">
                        <div class="k-eng">
                        <!--<button value="1" id="v28">1</button>
                        <button value="2" id="v29">2</button>
                        <button value="3" id="v30">3</button>
                        <button value="4" id="v31">4</button>
                        <button value="5" id="v32">5</button>
                        <button value="6" id="v33">6</button>
                        <button value="7" id="v34">7</button>
                        <button value="8" id="v35">8</button>
                        <button value="9" id="v36">9</button>
                        <button value="0" id="v37">0</button>
                        <button value="@" id="v41">@</button>
                        <br>-->
                        <button value="Q" id="v18">Q</button>
                        <button value="W" id="v24">W</button>
                        <button value="E" id="v5">E</button>
                        <button value="R" id="v19">R</button>
                        <button value="T" id="v21">T</button>
                        <button value="Y" id="v26">Y</button>
                        <button value="U" id="v22">U</button>
                        <button value="I" id="v9">I</button>
                        <button value="O" id="v16">O</button>
                        <button value="P" id="v17">P</button>
                        <br>
                        <button value="A" id="v1">A</button>
                        <button value="S" id="v20">S</button>
                        <button value="D" id="v4">D</button>
                        <button value="F" id="v6">F</button>
                        <button value="G" id="v7">G</button>
                        <button value="H" id="v8">H</button>
                        <button value="J" id="v10">J</button>
                        <button value="K" id="v11">K</button>
                        <button value="L" id="v13">L</button>
                        <br>
                        <button value="Z" id="v27">Z</button>
                        <button value="X" id="v25">X</button>
                        <button value="C" id="v3">C</button>
                        <button value="V" id="v23">V</button>
                        <button value="B" id="v2">B</button>
                        <button value="N" id="v15">N</button>
                        <button value="M" id="v14">M</button>
                        
                        <br>
                    </div>
                    <div class="k-rus">
                        <button value="Й" id="rv01">Й</button>
                        <button value="Ц" id="rv02">Ц</button>
                        <button value="У" id="rv03">У</button>
                        <button value="К" id="rv04">К</button>
                        <button value="Е" id="rv05">Е</button>
                        <button value="Н" id="rv06">Н</button>
                        <button value="Г" id="rv07">Г</button>
                        <button value="Ш" id="rv08">Ш</button>
                        <button value="Щ" id="rv09">Щ</button>
                        <button value="З" id="rv10">З</button>
                        <button value="Х" id="rv11">Х</button>
                        <button value="Ъ" id="rv12">Ъ</button>
                        <br>
                        <button value="Ф" id="rv13">Ф</button>
                        <button value="Ы" id="rv14">Ы</button>
                        <button value="В" id="rv15">В</button>
                        <button value="А" id="rv16">А</button>
                        <button value="П" id="rv17">П</button>
                        <button value="Р" id="rv18">Р</button>
                        <button value="О" id="rv19">О</button>
                        <button value="Л" id="rv20">Л</button>
                        <button value="Д" id="rv21">Д</button>
                        <button value="Ж" id="rv22">Ж</button>
                        <button value="Э" id="rv23">Э</button>
                        <br>
                        <button value="Я" id="rv24">Я</button>
                        <button value="Ч" id="rv25">Ч</button>
                        <button value="С" id="rv26">С</button>
                        <button value="М" id="rv27">М</button>
                        <button value="И" id="rv28">И</button>
                        <button value="Т" id="rv29">Т</button>
                        <button value="Ь" id="rv30">Ь</button>
                        <button value="Б" id="rv31">Б</button>
                        <button value="Ю" id="rv32">Ю</button>
                        <br>
                    </div>
                        
                        <button value="." id="v38">.</button>
                        <button value="-" id="v39">-</button>
                        <button value=" " id="v40">_</button>
                        <button value="<br>" id="v41" style="width: 80px;">ENTER</button>
                        <button class="globebutton" style="width: 100px;">RU/EN</button>
                        <button value="" id="backspace">&#x2190</button>
                        <button value="" id="clear">&times;</button>
                    </div>
                </div>
            </div>
            </dd>
        </div>

        <div class="row align-items-center mb-2">    
            <dt class="col-sm-12 mb-2" style="color: #a1a1a1;">
                Фон:
            </dt>
            <dd class="col-sm-12">
                <div class="radios">
                @foreach($backgrounds as $background)
                    <div class="radio">
                        <input name="backgrounds" id="{{ $background->id }}" type="radio" @foreach($slides->backgrounds as $t)@if($background->id == $t->id)checked @endif @endforeach value="{{ $background->id }}">
                        <label for="{{ $background->id }}">
                            <img src="{{ $background->file }}" style="width:100px">
                        </label>
                    </div>
                @endforeach
                </div>
            </dd>
        </div>

        <div class="row align-items-center mb-2">    
            <dt class="col-sm-12 mb-2" style="color: #a1a1a1;">
                Логотип:
            </dt>
            <dd class="col-sm-12">
                <div class="radiosl">
                @foreach($logos as $logo)
                    <div class="radiol">
                        <input name="logos" id="l{{ $logo->id }}" type="radio" @foreach($slides->logos as $tl)@if($logo->id == $tl->id)checked @endif @endforeach value="{{ $logo->id }}">
                        <label for="l{{ $logo->id }}">
                            <img src="{{ $logo->logo }}" style="width:100px">
                        </label>
                    </div>
                @endforeach
                </div>
            </dd>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <button type="submit" class="btn btn-lg btn-success" style="width: 200px; display: block; margin: 0 auto; margin-bottom: 30px; background-color: rgb(0,121,193);">Сохранить</button>
            </div>
        </div>
        
    </form>

    <script> // КЛАВИАТУРА
    $(document).ready(function(){
    $('#v1,#v2,#v3,#v4,#v5,#v6,#v7,#v8,#v9,#v10,#v11,#v12,#v13,#v14,#v15,#v16,#v17,#v18,#v19,#v20,#v21,#v22,#v23,#v24,#v25,#v26,#v27,#v28,#v29,#v30,#v31,#v32,#v33,#v34,#v35,#v36,#v37,#v38,#v39,#v40,#v41,#rv01,#rv02,#rv03,#rv04,#rv05,#rv06,#rv07,#rv08,#rv09,#rv10,#rv11,#rv12,#rv13,#rv14,#rv15,#rv16,#rv17,#rv18,#rv19,#rv20,#rv21,#rv22,#rv23,#rv24,#rv25,#rv26,#rv27,#rv28,#rv29,#rv30,#rv31,#rv32,#rv33,#rv34,#rv35,#rv36,#rv37,#rv38,#rv39,#rv40,#rv41').click(function(){
        event.preventDefault();
         var v = $(this).val();
        var total = $('#text').val($('#text').val() + v);
     });
   $('#clear').click(function(){
    event.preventDefault();
       $('#text').val('');
       
     });
   $('#backspace').click(function(){
    event.preventDefault();
       $('#text').val($('#text').val().substring(0, $('#text').val().length - 1));
       
     });
 });
</script>

<script> // ПЕРЕКЛЮЧЕНИЕ КЛАВИАТУРЫ
$('.k-eng').hide();
$('.globebutton').on('click',
function()
{
    event.preventDefault();
    $('.k-rus, .k-eng').toggle()
}
);
</script>

</body>
</html>