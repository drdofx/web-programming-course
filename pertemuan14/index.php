<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

?>
 
<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="style.css">

</head>
 
<body>
<a href="add.php">Add New User</a><br/><br/>
    
    
    <table width='80%' border=1  class="table table-striped">
 
    <tr>
        <th>Name</th> <th>Mobile Number</th> <th>Email</th> <th colspan="2">Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_assoc($result)) {  
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile_number']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a></td>";
        echo '<td><a data-target="#myModal_'.$user_data["id"].'" data-toggle="modal" href="#myModal_'.$user_data["id"].'">Delete</a></td></tr>';
        echo '<!-- Modal -->
        <div class="modal fade" id="myModal_'.$user_data["id"].'" tabindex="-1" role="dialog" aria-labelledby="myModal_'.$user_data["id"].'Title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Menghapus data user</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <a class="btn btn-danger" href="delete.php?id=' . $user_data["id"] . '" role="button">Hapus</a>
                    </div>
                </div>
            </div>
        </div>';
    }
    ?>
    </table>


    <!-- <script type="text/javascript">
                $(document).ready(function(){
                    $("#myModal").modal("show");
                });
            </script>'; -->
</body>
</html>