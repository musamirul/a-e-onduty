<?php include("Interface/header.php"); ?>
<div class="row">
    <div class="col-12 bg-white shadow-sm p-3 mb-2 bg-body rounded me-5">
        <div class="row p-3">
            <div class="d-flex flex-row">
                <div class=""><center><i style="font-size: 40px; color: rgb(99, 157, 243);" class="bi bi-person-plus pt-2"></i></center></div>
                <div class="text-start ms-3">
                    <span style="font-size: 23px;font-weight: bold;">Add User</span> <br/>
                    <span style="font-size: 14px; color: grey;">Create New User</span>
                </div>
            </div>
        </div>
        <span class="d-grid mx-auto mt-3 mb-3" style="border-bottom:0.5px solid rgb(241, 240, 240);"></span>
        <div class="row pt-2 ps-5 pe-5 ms-5 me-5">
            <div style="background-color: rgb(249, 250, 215); " class="col">
                <div class="row pt-3 mb-2">
                    <div class="col">
                        <div class="ms-3 float-end">
                            <span style="font-size: 23px;font-weight: bold;">Add Staff</span>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#DepartmentModal">Add Department</button>

                        <!-- Modal -->
                        <div class="modal fade" id="DepartmentModal" tabindex="-1" aria-labelledby="editModalLabel" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Add Department </strong></h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form method="POST">
                                    <div class="p-2 bd-highlight">
                                        <label for="exampleFormControlInput1" class="form-label">Department Name</label>
                                        <input type="text" class="form-control form-control-sm" name="dept_name" required/>
                                    </div>
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
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" name="saveDepartment" type="submit">Save</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                                </form>
                                </div>
                            </div>
                        </div>        
                    </div>
                </div>
                <form method="post">
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <label class="form-label">Staff Name</label>
                        <input class="form-control " name="Staff_Name" placeholder="Staff Name">
                    </div>
                    <div class="col-sm-3">
                        <label class="form-label">Staff Title</label>
                        <select name="Staff_Title" class="form-select">
                            <option value="Unit Manager">Unit Manager</option>
                            <option value="Staff">Staff</option>
                            <option value="Nurse">Nurse</option>
                            <option value="Executive">Executive</option>
                            <option value="Medical Officer">Medical Officer</option>
                            <option value="Head Of Services">Head of Services</option>
                            <option value="Operation Manager">Operation Manager</option>
                            <option value="Chief Nursing Officer">Chief Nursing Officer</option>
                            <option value="Chief Executive Officer">Chief Executive Officer</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label class="form-label">Department </label>
                        <select name="fk_dept" class="form-select ">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM department ORDER BY Dept_Name");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Dept_ID']; ?>"><?php echo $result_deptShow['Dept_Name']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-2 mt-3">
                        <div class="p-2 bd-highlight"><button type="submit" name="addStaff" class="btn btn-primary btn-sm mt-2">Save</button></div>
                    </div>
                </div>
                </form>
            </div>
            <div style="background-color: rgb(219, 250, 215); " class="col ms-5">
                <div class="row pt-3">
                    <div class="col">
                        <div class="ms-3 float-end">
                            <span style="font-size: 23px;font-weight: bold;">Add Doctors</span>
                        </div>
                    </div>
                    <div class="col">
                        <span><button type="button" class="btn btn-secondary btn-sm float-end" data-bs-toggle="modal" data-bs-target="#SpecialityModal">Add Doctor Speciality</button></span>
                    </div>
                </div>
                <div class="row mb-3">
                <form method="post">
                    <div class="d-flex flex-row bd-highlight">
                        <div class="p-2 bd-highlight"><label class="form-label">Doctor Name</label><input type="text" class="form-control form-control" name="doctor_name" placeholder="Doctor Name" required/></div>
                        <div class="p-2 bd-highlight"><label class="form-label">Speciality</label>
                            <select name="doctor_special" class="form-select ">
                                <?php
                                    $query_deptShow = mysqli_query($con,"SELECT * FROM speciality ORDER BY Speciality_Name");
                                    while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                ?>
                                <option value="<?php echo $result_deptShow['Speciality_Name']; ?>"><?php echo $result_deptShow['Speciality_Name']; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="p-2 mt-4 bd-highlight"><button type="submit" name="addDoctor" class="btn btn-primary btn-sm mt-2">Add</button></div>
                    </div>
                </form>
                </div>
                
            </div>
        </div>
        <div class="row pt-2 ps-5 pe-5 ms-5 me-5 ">
            <div style="background-color: rgb(249, 250, 215); " class="col">
                <div class="overflow-auto p-3" style="max-width: auto; max-height: 500px;">
                    <ol class="list-group list-group-numbered">
                        <?php
                            $query_deptStaff = mysqli_query($con,"SELECT * FROM staff ORDER BY Staff_ID DESC ");
                            while($result_deptStaff = mysqli_fetch_array($query_deptStaff)){
                            $Staff_DeptID = $result_deptStaff['FK_Dept_ID'];
                        ?>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold"><?php echo $result_deptStaff['Staff_Name']; ?></div>
                            <?php echo $result_deptStaff['Staff_Title']; ?>
                                <!-- Get Department Name -->
                                <?php
                                    $query_getDept = mysqli_query($con,"SELECT Dept_Name FROM department WHERE Dept_ID = '$Staff_DeptID' ");
                                    while($result_getDept = mysqli_fetch_array($query_getDept)){
                                        echo "[ ";
                                        echo $result_getDept['Dept_Name'];
                                        echo " ]";
                                    }
                                ?>
                            </div>
                        </li>
                        <?php
                            }
                        ?>
                    </ol>
                </div>
            </div>
            <div style="background-color: rgb(219, 250, 215); " class="col ms-5">
                <div class="overflow-auto p-3" style="max-width: auto; max-height: 500px;">
                    <ol class="list-group list-group-numbered">
                        <?php
                            $query_deptStaff = mysqli_query($con,"SELECT * FROM doctor ORDER BY Doctor_ID DESC ");
                            while($result_deptStaff = mysqli_fetch_array($query_deptStaff)){
                        ?>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold"><?php echo $result_deptStaff['Doctor_Name']; ?></div>
                            <?php echo $result_deptStaff['Doctor_Specialist']; ?>
                            </div>
                        </li>
                        <?php
                            }
                        ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- View Speciality -->
<div class="modal fade" id="SpecialityModal" tabindex="-1" aria-labelledby="editModalLabel" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Add Doctor Speciality </strong></h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form method="POST">
            <div class="row mb-3 mt-4">   
                <label class="col-sm-2 col-form-label">Speciality</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="add_speciality" required/>
                </div>
            </div>
        <div class="modal-footer">
            <button class="btn btn-primary" name="saveSpeciality" type="submit">Save</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </form>   
    </div>
    </div>
</div>
<!-- End Speciality -->




<?php
    if(isset($_POST['addDoctor'])){
        $doctor_name = $_POST['doctor_name'];
        $doctor_special = $_POST['doctor_special'];
        $query_update = mysqli_query($con,"INSERT INTO doctor(Doctor_Name, Doctor_Specialist) VALUES ('$doctor_name','$doctor_special')");

        $_SESSION['message'] = 'Successfully update information';   
        echo '<script>window.location.href="User_Add.php?msg=success"</script>';

    }

    if(isset($_POST['addStaff'])){
        $Staff_Name = $_POST['Staff_Name'];
        $Staff_Title = $_POST['Staff_Title'];
        $fk_dept = $_POST['fk_dept'];
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $todayDate = date('d/m/Y');
        $todayTime = date('h:i a');

        $query_addStaff = mysqli_query($con, "INSERT INTO staff(Staff_Name, Staff_Title, FK_Dept_ID)
         VALUES ('$Staff_Name','$Staff_Title','$fk_dept')");

        $_SESSION['message'] = 'Successfully update information';   
        echo '<script>window.location.href="User_Add.php?msg=success"</script>';

    }

    if(isset($_POST['saveSpeciality'])){
        $speciality_name = $_POST['add_speciality'];
        $check_name = mysqli_query($con,"SELECT * FROM speciality WHERE Speciality_Name = '$speciality_name'");
        $result_name = mysqli_fetch_array($check_name);
        if($result_name>0){
            $_SESSION['message'] = 'Duplicated Speciality, Please add other speciality';   
        }else{
            //If username not exist insert into 'login' db
            $query_update = mysqli_query($con,"INSERT INTO speciality(Speciality_Name) VALUES ('$speciality_name')");
            $_SESSION['message'] = 'Successfully update information';   
            echo '<script>window.location.href="User_Add.php?msg=success"</script>';
            //$_SESSION['message'] = 'Successfully update information';   
            //echo '<script>window.location.href="User_Add.php?msg=success"</script>';   
        }

    }

    if(isset($_POST['saveDepartment'])){
        $dept_name = $_POST['dept_name'];
        $dept_level = $_POST['dept_level'];
        $check_name = mysqli_query($con,"SELECT * FROM department WHERE Dept_Name = '$dept_name'");
        $result_name = mysqli_fetch_array($check_name);

        if($result_name>0){
            $_SESSION['message'] = 'Duplicated Department, Please add other department';   
        }else{
            //If username not exist insert into 'login' db
            $query_update = mysqli_query($con,"INSERT INTO department(Dept_Name,Dept_Floor) VALUES ('$dept_name','$dept_level')");
            $_SESSION['message'] = 'Successfully update information';   
            echo '<script>window.location.href="User_Add.php?msg=success"</script>';
            //$_SESSION['message'] = 'Successfully update information';   
            //echo '<script>window.location.href="User_Add.php?msg=success"</script>';   
        }

    }
?>
<?php include("Interface/footer.php"); ?>