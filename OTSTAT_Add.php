<?php include("Interface/header.php"); ?>

<?php include("Message_Notification.php")?>
<div class="row">
    <div class="col-12 bg-white shadow-sm p-3 mb-2 bg-body rounded me-5">
        <div class="row p-3">
            <div class="d-flex flex-row">
                <div class=""><center><i style="font-size: 40px; color: rgb(99, 157, 243);" class="fa-solid fa-heart-pulse pt-2"></i></center></div>
                <div class="text-start ms-3">
                    <span style="font-size: 23px;font-weight: bold;">OT Status</span> <br/>
                    <span style="font-size: 14px; color: grey;">View and update OT Status</span>
                </div>
            </div>
        </div>
        <span class="d-grid mx-auto mt-3 mb-3" style="border-bottom:0.5px solid rgb(241, 240, 240);"></span>
        <div class="row pt-2 ps-5 pe-5 ms-5 me-5">
            <div style="background-color: rgb(249, 250, 215); " class="col-5">
                <div class="row pt-3">
                    <div class="ms-3">
                        <center><span style="font-size: 23px;font-weight: bold;">Add OT Stats</span></center> <br/>
                    </div>
                </div>
                <form method="post">
                <div class="row mb-3">
                    <div class="col-sm-7">
                        <label class="form-label">Select Doctor</label>
                        <input class="form-control" list="datalistOptions" name="doctor_id" placeholder="Type to search doctor">
                        <datalist name="doctor_id" id="datalistOptions">
                        <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor ORDER BY Doctor_Name");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_ID']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                        </datalist>
                    </div>
                    <div class="col-sm-3">
                        <label class="form-label">OT Room </label>
                        <select name="ot_room" class="form-select">
                            <option value="OT1">OT1</option>
                            <option value="OT2">OT2</option>
                            <option value="OT3">OT3</option>
                            <option value="OT4">OT4</option>
                        </select>
                    </div>
                    <div class="col-sm-2 mt-3">
                        <div class="p-2 bd-highlight"><button type="submit" name="addStats" class="btn btn-primary mt-2">Save</button></div>
                    </div>
                </div>
                </form>
            </div>
            <div style="background-color: rgb(219, 250, 215); " class="col-5 ms-5">
                <div class="row pt-3">
                    <div class="ms-3">
                        <center><span style="font-size: 23px;font-weight: bold;">Add Doctors</span></center> <br/>
                    </div>
                </div>
                <div class="row mb-3">
                <form method="post">
                    <div class="d-flex flex-row bd-highlight">
                        <div class="p-2 bd-highlight"><label class="form-label">Doctor Name</label><input type="text" class="form-control form-control" name="doctor_name" placeholder="Doctor Name" required/></div>
                        <div class="p-2 bd-highlight"><label class="form-label">Speciality</label><input type="text" class="form-control form-control" name="doctor_special" placeholder="Doctor Speciality" required/></div>
                        <div class="p-2 mt-4 bd-highlight"><button type="submit" name="addDepartment" class="btn btn-primary btn-sm mt-2">Add</button></div>
                    </div>
                </form>
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
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">Date</th>
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">Time</th>
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">Doctor</th>
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">OT Room</th>
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">Status</th>
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query_showData = mysqli_query($con, "SELECT * FROM otstat WHERE Otstat_status <>'completed'");
                        while($result_showData = mysqli_fetch_array($query_showData)){

                            $fk_doctor_id = $result_showData['FK_Otstat_Doctor_ID'];
                            $query_showDoctor = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_ID = '$fk_doctor_id'");
                            $result_showDoctor = mysqli_fetch_array($query_showDoctor);
                            
                    ?>
                    <tr>
                        <th scope="col"><?php echo $result_showData['Otstat_ID']; ?></th>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['Otstat_Date']; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['Otstat_Time']; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showDoctor['Doctor_Name'] ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['Otstat_Room']; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['Otstat_status']; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); ">
                            <form method="post">
                            <input type="hidden" name="otstat_id" value="<?php echo $result_showData['Otstat_ID']; ?>" />
                            <input type="hidden" name="otstat_status" value="<?php echo $result_showData['Otstat_status']; ?>" />
                            <button type="submit" name="updateStatus">
                                <?php 
                                    if($result_showData['Otstat_status']=='holding'){
                                        echo "Go Operation";
                                    }elseif($result_showData['Otstat_status']=='recovery'){
                                        echo "Completed";
                                    }elseif($result_showData['Otstat_status']=='operation'){
                                        echo "Go recovery";
                                    }
                                ?>
                            </button>
                            </form>
                        </td>
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
        $doctor_name = $_POST['doctor_name'];
        $doctor_special = $_POST['doctor_special'];
        $query_update = mysqli_query($con,"INSERT INTO doctor(Doctor_Name, Doctor_Specialist) VALUES ('$doctor_name','$doctor_special')");

        $_SESSION['message'] = 'Successfully update information';   
        echo '<script>window.location.href="OTSTAT_Add.php?msg=success"</script>';

    }

    if(isset($_POST['addStats'])){
        $doctor_id = $_POST['doctor_id'];
        $ot_room = $_POST['ot_room'];
        date_default_timezone_set("Asia/Kuala_Lumpur");
        $todayDate = date('d/m/Y');
        $todayTime = date('h:i a');

        $query_addOtStat = mysqli_query($con, "INSERT INTO otstat(Otstat_Room, Otstat_Date, Otstat_Time, Otstat_status, FK_Otstat_Doctor_ID) 
        VALUES ('$ot_room','$todayDate','$todayTime','holding','$doctor_id')");

        $_SESSION['message'] = 'Successfully update information';   
        echo '<script>window.location.href="OTSTAT_Add.php?msg=success"</script>';

    }

    if(isset($_POST['updateStatus'])){
        $otstat_id = $_POST['otstat_id'];
        $otstat_status = $_POST['otstat_status'];
        $todayDate = date('d/m/Y');
        $todayTime = date('h:i a');
        $new_status = "";

        if($otstat_status == "holding"){
            $new_status = "operation";
        }elseif($otstat_status == "recovery"){
            $new_status = "completed";
        }elseif($otstat_status == "operation"){
            $new_status = "recovery";
        }

        $query_updateOtStat = mysqli_query($con, "UPDATE otstat SET Otstat_Date='$todayDate',Otstat_Time='$todayTime',Otstat_status='$new_status' WHERE Otstat_ID = '$otstat_id'");
        $_SESSION['message'] = 'Successfully update information';   
        echo '<script>window.location.href="OTSTAT_Add.php?msg=success"</script>';
    }
?>
<?php include("Interface/footer.php"); ?>