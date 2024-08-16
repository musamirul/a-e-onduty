<?php include("Interface/header.php"); ?>

<?php include("Message_Notification.php")?>
<div class="row">
    <div class="col-12 bg-white shadow-sm p-3 mb-5 bg-body rounded me-5">
        <div class="row p-3">
            <div class="d-flex flex-row">
                <div class=""><center><i style="font-size: 40px; color: rgb(99, 157, 243);" class="bi bi-telephone-plus pt-2"></i></center></div>
                <div class="text-start ms-3">
                    <span style="font-size: 23px;font-weight: bold;">Phone Directory</span> <br/>
                    <span style="font-size: 14px; color: grey;">View and update Phone Directory</span>
                </div>
            </div>
        </div>
        <span class="d-grid mx-auto mt-3 mb-3" style="border-bottom:0.5px solid rgb(241, 240, 240);"></span>
        <div class="row pt-2 ps-5 pe-5 ms-5 me-5">
            <div style="background-color: rgb(249, 250, 215); " class="col-5">
                <div class="row p-3">
                    <div class="ms-3">
                        <center><span style="font-size: 23px;font-weight: bold;">Add Phone Directory</span></center> <br/>
                    </div>
                </div>
                <form method="post">
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Department </label>
                    <div class="col-sm-5">
                        <select name="department" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM department ORDER BY Dept_Name");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Dept_ID']; ?>"><?php echo $result_deptShow['Dept_Name']; ?> | Level <?php echo $result_deptShow['Dept_Floor']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Name </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" required/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Designation </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="designation" required/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Phone Extension </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="extension" required/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Speed Dial </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="dial" required/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Email Address </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="email" required/>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="p-2 bd-highlight"><button type="submit" name="addPhone" class="btn btn-primary">Save</button></div>
                </div>
                </form>
            </div>
            <div style="background-color: rgb(219, 250, 215); " class="col-5 ms-5">
                <div class="row p-3">
                    <div class="ms-3">
                        <center><span style="font-size: 23px;font-weight: bold;">List of Department</span></center> <br/>
                    </div>
                </div>
                <div class="row mb-3">
                <form method="post">
                    <div class="d-flex flex-row bd-highlight">
                        <div class="p-2 bd-highlight"><input type="text" class="form-control form-control-sm" name="dept_name" required/></div>
                        <div class="p-2 bd-highlight">
                            <select name="dept_level" class="form-select form-select-sm">
							  <option value="1">Level B1</option>
                                <option value="1">Level 1</option>
                                <option value="2">Level 2</option>
                                <option value="3">Level 3</option>
                                <option value="3A">Level 3A</option>
                                <option value="5">Level 5</option>
                                <option value="6">Level 6</option>
                            </select>
                        </div>
                        <div class="p-2 bd-highlight"><button type="submit" name="addDepartment" class="btn btn-primary btn-sm">Add</button></div>
                    </div>
                </form>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <select class="form-select" size="11">
                            <?php
                                $query_dept = mysqli_query($con,"SELECT * FROM department ORDER BY Dept_ID DESC");
                                while($result_dept = mysqli_fetch_array($query_dept)){
                            ?>
                            <option value="<?php echo $result_dept['Dept_ID']; ?>">
                            <?php echo $result_dept['Dept_Name']; ?> | Level <?php echo $result_dept['Dept_Floor']; ?>
                            </option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                
            </div>
        </div>
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
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query_showData = mysqli_query($con, "SELECT * FROM phone ORDER BY Phone_ID DESC LIMIT 4");
                        while($result_showData = mysqli_fetch_array($query_showData)){

                            $showData_department = $result_showData['FK_Department'];
                            $query_departmentData = mysqli_query($con,"SELECT * FROM department WHERE Dept_ID = '$showData_department'");
                            $result_departmentData = mysqli_fetch_array($query_departmentData);
                            $department_name = $result_departmentData['Dept_Name'];
                            $department_floor = $result_departmentData['Dept_Floor'];
                    ?>
                    <tr>
                        <th scope="col"><?php echo $result_showData['Phone_ID']; ?></th>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $department_name; ?> | level <?php echo $department_floor; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['Phone_Name']; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['Phone_Designation']; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['Phone_Ext']; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['Phone_Dial']; ?></td>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            
        </div>
    </div>
</div>


<?php
    if(isset($_POST['addDepartment'])){
        $dept_name = $_POST['dept_name'];
        $dept_level = $_POST['dept_level'];
        $query_update = mysqli_query($con,"INSERT INTO department(Dept_Name,Dept_Floor) VALUES ('$dept_name','$dept_level')");

        $_SESSION['message'] = 'Successfully update information';   
        echo '<script>window.location.href="Phone_Add.php?msg=success"</script>';

    }

    if(isset($_POST['addPhone'])){
        $department = $_POST['department'];
        $name = $_POST['name'];
        $designation = $_POST['designation'];
        $extension = $_POST['extension'];
        $dial = $_POST['dial'];
        $email = $_POST['email'];

        $query_updatePhone = mysqli_query($con, "INSERT INTO phone(Phone_Name, Phone_Designation, Phone_Ext, Phone_Dial, Phone_Email, FK_Department) 
        VALUES ('$name','$designation','$extension','$dial','$email','$department')");
        $_SESSION['message'] = 'Successfully update information';   
        echo '<script>window.location.href="Phone_Add.php?msg=success"</script>';

    }
?>
<?php include("Interface/footer.php"); ?>