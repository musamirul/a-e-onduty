<?php include("Interface/header.php"); ?>

<?php include("Message_Notification.php")?>
<div class="row">
    <div class="col-12 bg-white shadow-sm p-3 mb-5 bg-body rounded me-5">
        <div class="row p-3">
            <div class="d-flex flex-row">
                <div class=""><center><i style="font-size: 40px; color: rgb(99, 157, 243);" class="bi bi-clipboard pt-2"></i></center></div>
                <div class="text-start ms-3">
                    <span style="font-size: 23px;font-weight: bold;">BOR</span> <br/>
                    <span style="font-size: 14px; color: grey;">View and update BOR Status</span>
                </div>
            </div>
        </div>
        <span class="d-grid mx-auto mt-3 mb-3" style="border-bottom:0.5px solid rgb(241, 240, 240);"></span>
        <form method="post">
        <div class="row pt-2 ps-5 pe-5 ms-5 me-5">
            <div style="background-color: rgb(249, 250, 215); " class="col-5">
                <div class="row p-3">
                    <div class="ms-3">
                        <center><span style="font-size: 23px;font-weight: bold;">Operational Bed</span></center> <br/>
                    </div>
                </div>
               
                <div class="row mb-3">
                    <label class="col-sm-5 col-form-label">Bed Occupied </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="O_occupied" required/>
                    </div>
                </div>
            </div>
            <div style="background-color: rgb(219, 250, 215); " class="col-5 ms-5">
                <div class="row p-3">
                    <div class="ms-3">
                        <center><span style="font-size: 23px;font-weight: bold;">Licensed Bed</span></center> <br/>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-5 col-form-label">Bed Occupied </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="L_occupied" required/>
                    </div>
                </div>

                
            </div>
        </div>
        <div class="row pt-2 ps-5 pe-5 ms-5 me-5">
                <div class="col-10">
                <button type="submit" name="updateInfoBtn" class="btn btn-primary">Save</button>
                </div>
        </div>
        </form> 
    </div>
    <div class="col-12 bg-white shadow-sm p-3 mb-5 bg-body rounded me-5">
        <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Date</th>
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">Capacity</th>
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">Occupied</th>
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">Available</th>
                        <th scope="col" style="background-color: rgb(249, 250, 215); ">Rate</th>
                        <th scope="col" style="background-color: rgb(219, 250, 215); ">Capacity</th>
                        <th scope="col" style="background-color: rgb(219, 250, 215); ">Occupied</th>
                        <th scope="col" style="background-color: rgb(219, 250, 215); ">Available</th>
                        <th scope="col" style="background-color: rgb(219, 250, 215); ">Rate</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query_showData = mysqli_query($con, "SELECT * FROM bor ORDER BY Bor_ID DESC LIMIT 4");
                        while($result_showData = mysqli_fetch_array($query_showData)){
                    ?>
                    <tr>
                        <th scope="col"><?php echo $result_showData['Bor_ID']; ?></th>
                        <th scope="col"><?php echo $result_showData['Bor_Date']; ?></th>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['O_Capacity']; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['O_Occupied']; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['O_Available']; ?></td>
                        <td scope="col" style="background-color: rgb(249, 250, 215); "><?php echo $result_showData['O_Rate']; ?></td>
                        <td scope="col" style="background-color: rgb(219, 250, 215); "><?php echo $result_showData['L_Capacity']; ?></td>
                        <td scope="col" style="background-color: rgb(219, 250, 215); "><?php echo $result_showData['L_Occupied']; ?></td>
                        <td scope="col" style="background-color: rgb(219, 250, 215); "><?php echo $result_showData['L_Available']; ?></td>
                        <td scope="col" style="background-color: rgb(219, 250, 215); "><?php echo $result_showData['L_Rate']; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            
        </div>
    </div>
</div>


<?php
    if(isset($_POST['updateInfoBtn'])){
        $O_capacity = 137;
        $O_occupied = $_POST['O_occupied'];

        $L_capacity = 123;
		$L_occupied = $_POST['L_occupied'];

        date_default_timezone_set("Asia/Kuala_Lumpur");
        $todayDate = date('d/m/Y');
        $todayTime = date('h:i a');
		
		
		$O_available = $O_capacity - $O_occupied;
		$L_available = $L_capacity - $L_occupied;
        $O_rate = round(($O_occupied/$O_capacity)*100,0);
		$L_rate = round(($L_occupied/$L_capacity)*100,0);
		
		

        $query_bor = mysqli_query($con,"INSERT INTO bor(O_Capacity, O_Occupied, O_Available, O_Rate, L_Capacity, L_Occupied, L_Available, L_Rate, Bor_Date, Bor_Time) 
        VALUES ('$O_capacity','$O_occupied','$O_available','$O_rate','$L_capacity','$L_occupied','$L_available','$L_rate','$todayDate','$todayTime')");
        
        $_SESSION['message'] = 'Successfully update information';   
        echo '<script>window.location.href="BOR_Add.php?msg=success"</script>';

    }
?>
<?php include("Interface/footer.php"); ?>