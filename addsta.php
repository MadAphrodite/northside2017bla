<?php

# Page header
$siteTitle = 'Add performance';
$siteName = 'Add performance';
$siteDescription = 'Please fill out the form below with information about the concert.';

include('includes/header.php');
?>

        <i class="fa fa-plus fa-3x" aria-hidden="true"></i>
        <i class="fa fa-archive fa-3x"></i>
        <form action="addingsta.php" method="post">
            <div class="form-group">
                <label for="titlename">Artist:</label>
                <input type="text" name="titlename" id="titlename" class="form-control">
                <!-- END artist-field-->
            </div>
            <div class="form-group">
                <label for="artist_music_style">Music style:</label>
                <input type="text" name="artist_music_style" id="artist_music_style" class="form-control">
                <!-- END music-field-->
            </div>
            <div class="form-group">
                <label for="artist_country">Country:</label>
                <input type="text" name="artist_country" id="artist_country" class="form-control">
                <!-- END country-field-->
            </div>
               
            <div class="form-group">
                <label for="sta_date">Date and time:</label>
                <input type="date" name="sta_date" id="sta_date" class="form-control" min="2017-05-20" max="2017-05-28"><br>
                <input type="time" name="sta_time" id="sta_time" class="form-control">
            </div>
                
                <?php
                
                # include database connection
                include('includes/connectdb.php');
                
                # making a SQL-query to the database
                $stageQuery = "SELECT stage_id, stage_name FROM stage";
                
                #Execute the SQL-query $platformQuery
                $resultStageQuery = mysqli_query($dbc, $stageQuery);
                
                
                # making a SQL-query to the database
                $artistQuery = "SELECT artist_id, artist_name FROM artist";
                
                #Execute the SQL-query $publisherQuery
                $resultArtistQuery = mysqli_query($dbc, $artistQuery);
                
                ?>
    
       <div class="form-group">
           <label for="stage">Stage:</label>
           <select name="stage_id" id="stage_id" class="form-control">
           <!-- Looping through  php array with platforms-->
           <?php while($row = mysqli_fetch_array($resultStageQuery)): ?>
             <option value="<?php echo $row['stage_id']; ?>">
                 <?php echo $row['stage_name']; ?></option>
            <!-- END php-loop-->
             <?php endwhile; ?>
               
           </select>
       </div><!-- END form-group platforms-->
          
       
           <input type="submit" value="Submit" class="btn btn-primary">
  </form>
  
  
  <?php include('includes/footer.php'); ?>