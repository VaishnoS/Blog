@include('welcome');
<h1>Hello Sam</h1>
<h1>{{10*10}}</h1>
<h1>Hello, {{count($user)}}</h1>

@foreach($user as $name)
<h1>Hello, {{$name}}</h1>
@endforeach

@if($name=="Vaishno")
<h1>Hello Vaishno1</h1>
@elseif($name=="Prakash")
<h1>Hello Prakash1</h1>
@elseif($name=="Saxena")
<h1>Hello Saxena1</h1>
@else
<h1>Hello Unknown1</h1>
@endif


@for($i=0; $i< count($user); $i++ ) <h1>{{$user[$i]}}</h1>
    @endfor


    @for($i=1; $i<=10; $i++) {{"5*".$i. "= ". 5*$i}} <br> @endfor<br>
        @for($i=1; $i<=10; $i++) {{"7*".$i. "= ". 7*$i}} <br> @endfor

            @csrf