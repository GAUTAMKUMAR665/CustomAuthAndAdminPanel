@extends('targlo.main')
@section('content')
<ul class="srchul">
    <li class='search'>A</li>
    <li class='search'>B</li>
    <li class='search'>C</li>
    <li class='search'>D</li>
    <li class='search'>E</li>
    <li class='search'>F</li>
    <li class='search'>G</li>
    <li class='search'>H</li>
    <li class='search'>I</li>
    <li class='search'>J</li>
    <li class='search'>K</li>
    <li class='search'>L</li>
    <li class='search'>M</li>
    <li class='search'>N</li>
    <li class='search'>O</li>
    <li class='search'>P</li>
    <li class='search'>Q</li>
    <li class='search'>R</li>
    <li class='search'>S</li>
    <li class='search'>T</li>
    <li class='search'>U</li>
    <li class='search'>V</li>
    <li class='search'>W</li>
    <li class='search'>X</li>
    <li class='search'>Y</li>
    <li class='search'>Z</li>
    <li class='search'>0</li>
    <li class='search'>1</li>
    <li class='search'>2</li>
    <li class='search'>3</li>
    <li class='search'>4</li>
    <li class='search'>5</li>
    <li class='search'>6</li>
    <li class='search'>7</li>
    <li class='search'>8</li>
    <li class='search'>9</li>
</ul>

                    <div class="listcontainer" >
                        @for ($i = 0; $i <count($indus); $i++)
                        <ul class="ulindus">

						  <li class="industry"><a href="/report/{{$indus[$i]->Meta_Title }}">{{ $indus[$i]->Meta_Title}}</a></li>


                        </ul>


                        @endfor


                    </div>

</body>
@endsection
