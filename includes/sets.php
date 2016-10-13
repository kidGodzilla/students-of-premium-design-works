<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>My Flickr Set</title>
</head>

<body>

<?php

    require_once('phpFlickr.php');  // inclue the core API file <https://github.com/dan-coulter/phpflickr> by Dan Coulter

    $api_key = '51deab88b25b39f3f49fe73891c05f32'; // my Flicker API Key 
    $api_secret = 'e02a97e62109b5dd'; // my Flickr API Secret
    $set_id = '72157651013775823'; // my Flickr set ID
    $f = new phpFlickr($api_key, $api_secret); // create the phpFlickr class
    $photos_by_set = $f->photosets_getPhotos($set_id, 3,'', 0, 1); // get Photo Sets 

    echo '<div class="my-flickr-gallery">'; // begin markup division tag

    foreach( array_reverse($photos_by_set['photoset']['photo']) as $photo) {

        echo '<li class="my-flickr-thumb"><a href="' . $f->buildPhotoURL($photo, "large") .  '"><img src="' . $f->buildPhotoURL($photo, "square_150") .  '" /></a></li>'; // create the list item(s) with a square thumbnail that links to the large size image

    }  // end loop

    echo '</div>';  // end markup division tag
    
?>

</body>
</html>