<?php include("Interface/header.php"); ?>

<?php include("Message_Notification.php")?>
<div class="row">
    <div class="col-12 bg-white shadow-sm p-3 bg-body rounded me-5">
        <div class="row p-3">
            <div class="d-flex flex-row">
                <div class=""><center><i style="font-size: 40px; color: rgb(99, 157, 243);" class="bi bi-telephone-fill pt-2"></i></center></div>
                <div class="text-start ms-3">
                    <span style="font-size: 23px;font-weight: bold;">Edit Phone Directory</span> <br/>
                    <span style="font-size: 14px; color: grey;">View and update Phone Directory</span>
                </div>
            </div>
        </div>
        <span class="d-grid mx-auto mt-3 mb-3" style="border-bottom:0.5px solid rgb(241, 240, 240);"></span>
    </div>
    <div class="col-12 bg-white shadow-sm p-3 mb-5 bg-body rounded me-5">
        <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">Department</th>
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">Name</th>
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">Designation</th>
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">Extension</th>
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">Speed Dial</th>
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">Email</th>
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query_showData = mysqli_query($con, "SELECT * FROM phone ORDER BY Phone_ID DESC");
                        while($result_showData = mysqli_fetch_array($query_showData)){

                            $showData_department = $result_showData['FK_Department'];
                            $query_departmentData = mysqli_query($con,"SELECT * FROM department WHERE Dept_ID = '$showData_department'");
                            $result_departmentData = mysqli_fetch_array($query_departmentData);
                            $department_name = $result_departmentData['Dept_Name'];
                            $department_floor = $result_departmentData['Dept_Floor'];
                            $phone_id = $result_showData['Phone_ID'];
                    ?>
                    <tr>
                        <th scope="col"><?php echo $result_showData['Phone_ID']; ?></th>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $department_name; ?> | level <?php echo $department_floor; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['Phone_Name']; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['Phone_Designation']; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['Phone_Ext']; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['Phone_Dial']; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['Phone_email']; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); ">
                            <div class="d-flex flex-row bd-highlight">
                                <div class="bd-highlight"><button type="submit"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $phone_id ?>">Edit</button></div>
                                <div class="ps-2 bd-highlight"><button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo $phone_id ?>">Delete</button></div>
                            </div>
                        </td>
                        
                        <!-- Delete Modal -->
                        <div class="modal fade" id="delete<?php echo $phone_id?>" tabindex="-1" aria-labelledby="deleteModalLabel" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete <?php echo $phone_id; ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <div class="modal-body">
                                        Are you want to delete? <strong><?php echo $result_showData['Phone_Name']; ?></strong>      
                                    </div> 
                                    <div class="modal-footer">
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $phone_id; ?>" name="idDelete" />
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="deleteProduct" class="btn btn-danger">DELETE</button>
                                    </form>
                                    </div>   
                                </div>
                            </div>
                        </div>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="edit<?php echo $phone_id?>" tabindex="-1" aria-labelledby="editModalLabel" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Edit <strong><?php echo $phone_id?></strong> ?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <form method="post">
                                    <div class="modal-body">
                                    <div class="form-group row">
                                        
                                        <div class="col-sm-12">
                                        <label>Name</label>
                                            <input class="form-control" placeholder="Enter Name" name="nameEdit" value="<?php echo $result_showData['Phone_Name']; ?>" required autofocus="autofocus" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        
                                        <div class="col-sm-12">
                                        <label>Designation</label>
                                            <input class="form-control" placeholder="Enter Designation" name="designationEdit" value="<?php echo $result_showData['Phone_Designation']; ?>" required autofocus="autofocus" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        
                                        <div class="col-sm-3">
                                        <label>Extension</label>
                                        <input class="form-control" placeholder="Extension" name="extEdit" value="<?php echo $result_showData['Phone_Ext']; ?>" required autofocus="autofocus" />
                                        </div>
                                        <div class="col-sm-3">
                                        <label>Speed Dial</label>
                                        <input class="form-control" placeholder="Speed Dial" name="dialEdit" value="<?php echo $result_showData['Phone_Dial']; ?>" required autofocus="autofocus" />
                                        </div>
                                        <div class="col-sm-6">
                                        <label>Email</label>
                                        <input class="form-control" placeholder="Email" name="emailEdit" value="<?php echo $result_showData['Phone_email']; ?>" required autofocus="autofocus" />
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                    <input type="hidden" value="<?php echo $phone_id?>" name="idEdit" />
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="editProduct" class="btn btn-primary">Save</button>
                                    </form>
                                    </div>   
                                </div>
                            </div>
                        </div>


                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            
        </div>
    </div>
</div>


<?php
    if(isset($_POST['editProduct'])){
        $nameEdit = $_POST['nameEdit'];
        $designationEdit = $_POST['designationEdit'];
        $extEdit = $_POST['extEdit'];
        $dialEdit = $_POST['dialEdit'];
        $emailEdit = $_POST['emailEdit'];
        $idEdit = $_POST['idEdit'];


        $query_update = mysqli_query($con,"UPDATE phone SET Phone_Name='$nameEdit',Phone_Designation='$designationEdit',Phone_Ext='$extEdit',Phone_Dial='$dialEdit',
        Phone_email='$emailEdit' WHERE Phone_Id='$idEdit'");

        $_SESSION['message'] = 'Successfully update information';   
        echo '<script>window.location.href="Phone_Edit.php?msg=success"</script>';

    }

    if(isset($_POST['deleteProduct'])){
        $idDelete = $_POST['idDelete'];

        $query_deletePhone = mysqli_query($con, "DELETE FROM phone WHERE Phone_ID = '$idDelete'");
        $_SESSION['message'] = 'Successfully delete information';   
        echo '<script>window.location.href="Phone_Edit.php?msg=success"</script>';

    }
?>
<?php include("Interface/footer.php"); ?>