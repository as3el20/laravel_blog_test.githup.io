<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('uploadImg') }}" method="post" enctype="multipart/form-data">
        @csrf
    <fieldset>
        <div id="legend">
            <legend>Upload File</legend>
        </div>
        <div class="control_group">
            {{-- Email --}}
            <label class="control-label" for="file">Image</label>
            <div class="controls">
                <input type="file" name="file" id="file" accept="image/jpg,image/jpeg,image/png">
            </div>
        </div>
            <div class="control_group">
                <input type="submit" value="Upload">
            </div>
        
    </fieldset>
    </form>
</body>
</html>