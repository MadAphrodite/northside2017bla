<?php

# Page header
$siteTitle = 'Add publisher';
$siteName = 'Add publisher';
$siteDescription = 'Please fill out the form below with information about the stage.';

include('includes/header.php');
?>

    <i class="fa fa-plus fa-3x"></i>
    <form action="addingstage.php" method="post">
        <div class="form-group">
            <label for="stage_name">Stage name:</label>
            <input type="text" name="stage_name" id="stage_name" class="form-control" placeholder="Red">    

            <input type="submit" value="Add Stage" class="btn btn-primary">   
        </div> <!-- END form-group -->
        
    </form>
    
   <?php include('includes/footer.php'); ?>