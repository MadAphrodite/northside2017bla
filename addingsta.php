<?php 

# Page header
$siteTitle = 'Performance';
$siteName = 'Performance';
$siteDescription = '';

include('includes/header.php');
?>

<?php

# Connect to the database
include('includes/connectdb.php');

# Get data from submit-form and store it in a variable
$sta_id = $_POST['sta_id'];

# Prepare SQL-Query for insert operation
$query = "INSERT INTO performances(sta_id, artist_id, stage_id, sta_date, sta_time) VALUES(NULL, '$sta_id') ";

# Execute SQL-query
mysqli_query($dbc, $query) or die('Error quering the SQL-query');

?>

<div id="divspace" class="panel panel-default">
    <div class="panel-heading panel panel-success">Success...</div>
    <div class="panel-body">
        <h2>You have added <?php echo $sta_id; ?> to the archive. </h2>
    </div>  <!-- END panel-body -->
    <div class="panel-footer">
        <button class="btn btn-primary" onclick="goBack()">Go Back</button>
    </div>  <!-- END panel-footer -->
</div>  <!-- END divspace -->
<?php
# Close database-connection
   mysqli_close($dbc);
?>

<!--  ###### A JS-script that make it possible to return to previus page ##### --> 
  <script>
    function goBack() {
    window.history.back();
    }
  </script>
  
<?php include('includes/footer.php'); ?>
