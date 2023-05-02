<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Localization section --}}
    {{-- {{-- <ul>
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            {{-- <li> --}}
                {{-- <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a> --}}
            {{-- </li> --}}
        {{-- //@endforeach --}}
    {{-- </ul>  --}} 
    <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">arabic</a> &nbsp;
    <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
{{__('main.welcome')}}
    <form action="{{route('loginUser')}}" method="post">
        @csrf
        UserName Or Email : <input type="text" name="name" id="" style="margin-left: 1%;margin-bottom:15px">
        <br>
        PassWord : <input type="password" name="password" id="" style="margin-left: 5.2%;margin-bottom:15px">
        <br>
        <input type="submit" value="Login" style="background:rgb(5, 122, 5);color:white;font-weight:bold;margin-left: 10.2%">
    </form>
</body>
</html>