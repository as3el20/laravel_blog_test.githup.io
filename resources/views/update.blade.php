<form action="{{route('back',Request::route('id'))}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter Your Name ?"   value="{{$updated->Name}}">
    <input type="email" name="email" placeholder="Enter Your Email ?" value="{{$updated->Email}}">
    <input type="submit" value="Update">
</form>