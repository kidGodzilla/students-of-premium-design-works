<?php
/* Last updated with phpFlickr 1.3.2
 *
 * This example file shows you how to call the 100 most recent public
 * photos.  It parses through them and prints out a link to each of them
 * along with the owner's name.
 *
 * Most of the processing time in this file comes from the 100 calls to
 * flickr.people.getInfo.  Enabling caching will help a whole lot with
 * this as there are many people who post multiple photos at once.
 *
 * Obviously, you'll want to replace the "<api key>" with one provided 
 * by Flickr: http://www.flickr.com/services/api/key.gne
 */

    require_once("phpFlickr.php");
    $f = new phpFlickr('d5be097973bb28233b387d3396c8edaa');

    $recent = $f->photos_getRecent();

    foreach ($recent['photos']['photo'] as $photo) {
        $owner = $f->people_getInfo($photo['owner']);
        echo "<a href='http://www.flickr.com/photos/" . $photo['owner'] . "/" . $photo['id'] . "/'>";
        echo $photo['title'];
        echo "</a> Owner: ";
        echo "<a href='http://www.flickr.com/people/" . $photo['owner'] . "/'>";
        echo $owner['username'];
        echo "</a><br>";
    } 

    foreach ( array_reverse($photos_by_set['photoset']['photo']) as $photo ) { // begin loop

        echo '<li class="my-flickr-thumb"><a href="' . $f->buildPhotoURL($photo, "large") .  '"><img src="' . $f->buildPhotoURL($photo, "square_150") .  '" /></a></li>'; // create the list item(s) with a square thumbnail that links to the large size image

    }  // end loop


?>
