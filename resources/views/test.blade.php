<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>testpage</h1>
    @php
        foreach ($images as $image) {
            $path = $image['path'];

            // Check if the path is a string and needs decoding
            if (is_string($path)) {
                $path = json_decode($path, true);
            }

            // Check if path is now an array
            if (is_array($path)) {
                foreach ($path as $p) {
                    echo $p;
                    echo "\n";
                    echo "\n";
                }
            } else {
                // If path is not an array, output it directly
                echo $image['path'];
                echo "\n";
            }
            echo "\n";
        }
    @endphp


</body>

</html>
