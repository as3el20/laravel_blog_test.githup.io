<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('post')}}" method="POST" style="display: flex;flex-direction:column;gap:10px">
        @csrf
        <label>Title</label>
        <input type="text" name="title" placeholder="title" @error('title') @enderror>
        @error('title')
          {{$message}}  
        @enderror
        <label>Content</label>
        <textarea type="content" name="content" placeholder="content"></textarea>
        @error('content')
        {{$message}}  
        @enderror
        <input type="submit" name='save' value="Save">
        </form>
        {{csrf_token()}}
        {{csrf_field()}}

        {{-- @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $err)
                <li>{{$err}}</li>
    
                @endforeach
            </ul>
        </div>
            
        @endif --}}
</body>
</html>