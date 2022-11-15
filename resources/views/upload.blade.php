<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
</head>
<body>
    <!-- enctype="multipart/form-data" من اجل يقبل الملفات -->
    <form method="POST" action="{{route('uploadImage')}}" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <div>
                <legend>Upload File</legend>
            </div>
            <div>
                <!-- file -->
                <label>Image</label>
                <div>
                    <!--  -->
                    <input type="file" id="file" name="file" accept="image/jpg, image/png, image/jpeg">
                </div>
            </div>

            <div>
                <!-- button -->
                <div>
                    <button>upload</button>
                </div>
            </div>
        </fieldset>
    </form>
    
</body>
</html>