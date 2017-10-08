<?php

# Page header

$siteTitle = 'Stage';
$siteName = 'Stage';
$siteDescription = '';

include('includes/header.php');
?>

<?php

    # Connect to the database
    include('includes/connectdb.php');
    
    # Get data from submit-form and store it in variables
    $stage_name = $_POST['stage_name'];

    # Prepare SQL-query for insert operation
    $query = "INSERT INTO stage(stage_id, stage_name) VALUES(NULL, '$stage_name') ";

    # Execute SQL-query
    mysqli_query($dbc, $query) or die('Error querying the database');
?>

    <div id="divspace" class="panel panel-default">
        <div class="class-heading panel panel-heading">Success...</div>
        <div class="panel-body">
            <h2>You have now added <?php echo $stage_name; ?> to the stage archive.</h2>
        </div><!-- END panel-body-->
        <div class="panel-footer">
            <button class="btn btn-primary" onclick="goBack()">Go Back</button>
        </div><!-- END panel-footer-->
    </div><!-- END divspace -->
     <?php 
      # Close database-connection
      mysqli_close($dbc);
    ?> 
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    
    <?php include('includes/footer.php'); ?>
