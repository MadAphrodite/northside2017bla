<?php

# Page header
$siteTitle = 'Northside 2017 Artist';
$siteName = 'Northside 2017';
$siteDescription = 'Please insert the artist name.';

include('includes/header.php');
?>
   
   
   <form action="addingartist.php" method="post">
            <div class="form-group">
                <label for="artist_name">Artist:</label>
                <input type="text" name="artist_name" id="artist_name" class="form-control" placeholder="The Prodigy">
                <!-- END artist-field-->
            </div>
            <div class="form-group">
                <label for="artist_music_style">Music style:</label>
                <input type="text" name="artist_music_style" id="artist_music_style" class="form-control" placeholder="Rock">
                <!-- END music-field-->
            </div>
            <div class="form-group">
                <label for="artist_country">Country:</label>
                <input type="text" name="artist_country" id="artist_country" class="form-control" placeholder="Denmark">
                <!-- END country-field-->
            </div>

        <input type="submit" value="Add Artist" class="btn btn-primary btn-block">
        
    </form>
    <?php include('includes/footer.php'); ?>