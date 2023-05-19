<?php
include "config.php";
$query = mysqli_query($conn ,"SELECT * FROM customer"); 
?>
<a href="tambah.php"> Tambah </a> 


<!DOCTYPE html>
<html>
<head>
  <title>Table</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>
<body>
  <table id="myTable" class="display">
    <thead>
    <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php if(mysqli_num_rows($query)>0){ 
            $no =1;
            while($data=mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["first_name"]; ?></td>
                    <td><?php echo $data["last_name"]; ?></td>
                    <td><?php echo $data["email"]; ?></td>
                    <td><?php echo $data["phone"]; ?></td>
                    <td><?php echo $data["address"]; ?></td>
                    <td>
                        <a href="#"> Delete </a> | 
                        <a href="#"> Edit </a>
                    </td>
                </tr>
        <?php 
                $no++;
            }
        }
        ?>
    </tbody>
</table>
</body>
</html>

  <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
  </script>

