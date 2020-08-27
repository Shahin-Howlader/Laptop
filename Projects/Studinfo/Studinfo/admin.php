<?php include 'connection.php';
include 'topnav.php'; ?>
           <div class="col-lg-12">

            <div>
            <i class="fas fa-table"></i>

            Student Records <br></br> 
            <a>Add New</a>
            <a href="adminAdd.php?action=add"  type="button" class="btn btn-xs fa fa-user-plus"></a>
            </div>   
          <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Admin id</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Position</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT id, fname, lname, user, position FROM admin';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['id'].'</td>';
                            echo '<td>'. $row['fname'].'</td>';
                            echo '<td>'. $row['lname'].'</td>';
                            echo '<td>'. $row['user'].'</td>';
                            echo '<td>'. $row['position'].'</td>';
                            echo '<td>';
                            echo ' <a  type="button" class="btn btn-xs btn-warning fa fa-edit" href="student_edit.php?action=edit & id='.$row[     'id'] . '"> </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger fa fa-trash" href="studentdel.php?type=student&delete & id=' . $row['id'] . '"> </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
<?php include 'footer.php'; ?>