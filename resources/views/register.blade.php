<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('createUser')}}" method="post">
        @csrf
        <fieldset>
            <legend>Register Form</legend>
            <br>
            Name: <input type="text" name="name" id="" style="margin-left: 45px;margin-bottom:15px">
            <br>
            Email: <input type="email" name="email" id="" style="margin-left: 48px;margin-bottom:15px">
            <br>
            PassWord: <input type="password" name="password" id="" style="margin-left: 19px;margin-bottom:15px">
            <br>
            <input type="submit" value="SignUp" style="background: seagreen;color:#f2f2f2;margin-left: 90px;">
        </fieldset>
   

    </form>
</body>
</html>