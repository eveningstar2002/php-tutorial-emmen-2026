<pre><code>
<?php

var_dump($_FILES);

if (array_key_exists("myfile", $_FILES) &&  $_FILES["myfile"]["error"] === 0) {
    $filename = $_FILES["myfile"]["name"];
    $destinationFolder = __DIR__ . "/uploads/";
    var_dump($destinationFolder);
    @mkdir($destinationFolder);
    move_uploaded_file($_FILES["myfile"]["tmp_name"], $destinationFolder . $filename);
    $uploadedFilename = "/examples/week05/03/uploads/" . $filename;
}
else {
    die("You need to upload a file.");
}

?>
</code></pre>
<img src="<?= $uploadedFilename ?>" alt="uploaded file">