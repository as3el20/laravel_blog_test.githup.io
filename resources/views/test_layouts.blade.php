{{-- @extends('layouts.app')

@section('title','Laravel Course')
@section('content')
    <h1>Hello Laravel</h1>
    <p>lorem ipusem</p>
    <table border="1" style="text-align: center;width:100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Grades</th>
            <th></th>
        </tr>
        @foreach ($select as $sel)
                <tr>
            <td>{{$sel->id}}</td>
            <td>{{$sel->Name}}</td>
            <td>{{$sel->Email}}</td>
            <td>{{$sel->grades->grades}}</td>

            <td>
                <form action="{{route('del',$sel->id)}}" method="post">
                    @csrf
                    <input type="submit" name="del" value="Delete">

                </form>
                <a href="update/{{$sel->id}}"><button>Update</button></a>
            </td>
        </tr>    
        @endforeach

    </table>
    {{-- <code>
        @if ($x==10)
            {{'yes'}}
        @else
            {{'No'}}
        @endif
    </code><br>
    <code>
        @switch($x)
            @case(15)
                No,it Is
                @break
            @case(10)
                Yes,it Is
                @break
            @default
                Wrong Number!
        @endswitch
    </code><br>
    <code>
        @for ($i = 0; $i < 10; $i++)
            {{$i}}<br>
        @endfor
    </code><br>
    <code>
        @foreach ($users as $user)
            {{$user}}
        @endforeach
    </code><br>
    <code>
        @while ($x<=100)
            {{ $x++ }}
        @endwhile
    </code><br>
    @include('layouts.navbar')
    <br>
    @php
        $x='Hello From Laravel';
        echo $x;
    @endphp --}}
    {{-- hjvhjvhchgcc --}}
    {{-- <form action="{{route('store')}}" method="POST">
        @csrf
        <input type="text" name="Name" placeholder="Your Name ?">
        <input type="email" name="Email" placeholder="Your Email ?">
        <input type="submit" value="Insert">
    </form>
@endsection
     --}} 