<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('insert')}}" method="get">
        <input type="text"placeholder='YourName ?'><br>
        <input type="email"placeholder='Your Email ?'><br>
        <input type="password"placeholder='Your Password ?'><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>