<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<!-- <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script> -->
</head>
<body>
    <div>
                        <?php
                    // Include config file
                    include_once "dbconn.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM tbl_contact";
                    if($rs = mysqli_query($con, $sql)){
                        if(mysqli_num_rows($rs) > 0){
        			?>                    
                	    <table class="border-collapse border border-gray-900 bg-gray-50 flex-auto">
                            <!-- <tr>
                                <th class="border-2 border-gray-400 w">Project Id</th>
                                <th class="border-2 border-gray-400">Project Name</th>
                                <th class="border-2 border-gray-400">Task</th>
                                <th class="border-2 border-gray-400">Notes</th>
                                <th class="border-2 border-gray-400">Action</th>
                            </tr> -->
                                <?php
                                while($row = mysqli_fetch_array($rs)){
                                ?>    
                                <tr>
                                <td class="border-2 border-gray-400 w-20"><span><b>Id:</b></span><?php echo $row["p_id"]; ?></td>
                                <td class="border-2 border-gray-400 w-32"><span><b>Name:</b></span><?php echo $row["p_name"]; ?></td>
                                <td class="border-2 border-gray-400 w-32"><span><b>Task:</b></span><?php echo $row["p_task"]; ?></td>
                                <td class="border-2 border-gray-400 w-60"><p><b>Notes:</b></p><?php echo $row["p_notes"]; ?></td>
                                <td class="border-2 border-gray-400 w-32"><span><b>Work Time:</b></span><?php echo $row["p_worktime"]; ?></td>
                                <td class="border-2 border-gray-400 w-44">
                                <a target="_parent" href="update.php?id=<?php echo $row["p_id"]; ?>" title="Update Record" data-toggle="tooltip" ><p class="fa fa-pencil ml-2 mt-2"></p></a>
                                <a href="delete.php?id=<?php echo $row["p_id"]; ?>" title="Delete Record" data-toggle="tooltip"><p class="fa fa-trash"></p></a>  
                                 
                                </td>
                                </tr>
                               <?php
                                }
                                ?>
                            </table>
                            <?php
                            mysqli_free_result($rs);
                        } else{
                            echo '<div class="alert alert-danger"><em>Enter Project details to start tracking time.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                     mysqli_close($con);
				?>
	</div>		



<script>
</script>
</body>
</html>
