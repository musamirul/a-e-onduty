<?php include("interface/header.php"); ?>
<?php
$ITEMS_PER_PAGE= 10;

// Count total records
$sql = "SELECT COUNT(*) AS total FROM aedash";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$totalItems = $row['total'];
$totalPages = ceil($totalItems / $ITEMS_PER_PAGE);
?>


<?php
// Get current page number from URL
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;
}

// Calculate the offset
$offset = ($currentPage - 1) * $ITEMS_PER_PAGE;

// Fetch data for the current page
$sql = mysqli_query($con,"SELECT * FROM aedash LIMIT $offset, $ITEMS_PER_PAGE");
?>
<div class="row">
    <div class="col-12 bg-white shadow-sm p-3 mb-2 bg-body rounded me-5">
        <div class="row p-3">
            <div class="d-flex flex-row">
                <div class=""><center><i style="font-size: 40px; color: rgb(99, 157, 243);" class="bi bi-clipboard-data pt-2"></i></center></div>
                <div class="text-start ms-3">
                    <span style="font-size: 23px;font-weight: bold;">Dashboard History</span> <br/>
                    <span style="font-size: 14px; color: grey;">View all updated dashboard</span>
                </div>
            </div>
        </div>
        <span class="d-grid mx-auto mt-3 mb-3" style="border-bottom:0.5px solid rgb(241, 240, 240);"></span>
        <div class="row pt-2 ps-5 pe-5 ms-5 me-5">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date Update</th>
                        <th>Day Update</th>
                        <th>TimeStamp</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($sql)) {
                        $dateUpdate = $row['Aedash_DateUpdate'];
                        $dashboardID = $row['Aedash_ID'];
                    ?>
                        <tr>
                        <td><?php echo $row['Aedash_ID'] ?></td>
                        <td><?php echo $row['Aedash_DateUpdate'] ?></td>
                        <td><?php echo date('l', strtotime($dateUpdate)) ?></td>
                        <td><?php echo $row['Aedash_TimeStamp'] ?></td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#aedashModal<?php echo $dashboardID ?>">View Data</button>
                            <!-- Start Modal -->
                            <div class="modal fade" id="aedashModal<?php echo $dashboardID ?>" tabindex="-1" aria-labelledby="editModalLabel" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                    <div class="modal-body">
                                    <?php 
                                        $query_DashboardShow = mysqli_query($con,"SELECT * FROM aedash WHERE Aedash_ID = '$dashboardID'");
                                        while($result_DashboardShow = mysqli_fetch_array($query_DashboardShow)){
                                            $anaesthetist = $result_DashboardShow['Aedash_Anaesthetic'];$cardiac = $result_DashboardShow['Aedash_Cardiac'];$cardiology = $result_DashboardShow['Aedash_Cardiology']; $ent = $result_DashboardShow['Aedash_Ent'];  $surgeon = $result_DashboardShow['Aedash_Surgeon'];$nephrologist = $result_DashboardShow['Aedash_Nephrologist']; $gastro = $result_DashboardShow['Aedash_Gastro'];
                                            $neuro = $result_DashboardShow['Aedash_Neuro']; $obstetric = $result_DashboardShow['Aedash_Obstetric']; $ophthal = $result_DashboardShow['Aedash_Ophthalmology']; $ortho = $result_DashboardShow['Aedash_Ortho'];
                                            $paed = $result_DashboardShow['Aedash_Paed']; $plastic = $result_DashboardShow['Aedash_Plastic']; $urology = $result_DashboardShow['Aedash_Urology'];  $psychiatrist = $result_DashboardShow['Aedash_Psychiatrist']; $physician = $result_DashboardShow['Aedash_Physician']; $um_am = $result_DashboardShow['Aedash_Um_Am'];
                                            $um_pm = $result_DashboardShow['Aedash_Um_Pm'];$um_night = $result_DashboardShow['Aedash_Um_Night']; $mo_morning1 = $result_DashboardShow['Aedash_Mo_Morning1'];  $mo_morning2 = $result_DashboardShow['Aedash_Mo_Morning2']; $mo_evening1 = $result_DashboardShow['Aedash_Mo_Evening1']; $mo_evening2 = $result_DashboardShow['Aedash_Mo_Evening2'];
                                            $mo_night1 = $result_DashboardShow['Aedash_Mo_Night1']; $mo_night2 = $result_DashboardShow['Aedash_Mo_Night2']; $lab1 = $result_DashboardShow['Aedash_lab1'];$lab1PM = $result_DashboardShow['Aedash_lab1PM'];  $lab2 = $result_DashboardShow['Aedash_lab2']; $cathlab = $result_DashboardShow['Aedash_Cathlab']; $radiologist = $result_DashboardShow['Aedash_Radiologist']; $radiographer = $result_DashboardShow['Aedash_Radiographer'];
                                            $maintenance = $result_DashboardShow['Aedash_Maintenance']; $onleave1 = $result_DashboardShow['Aedash_OnLeave1']; $onleave2 = $result_DashboardShow['Aedash_OnLeave2']; $onleave3 = $result_DashboardShow['Aedash_OnLeave3']; $onleave4 = $result_DashboardShow['Aedash_OnLeave4']; $onleave5 = $result_DashboardShow['Aedash_OnLeave5']; $coverby1 = $result_DashboardShow['Aedash_CoverBy1'];
                                            $coverby2 = $result_DashboardShow['Aedash_CoverBy2'];  $coverby3 = $result_DashboardShow['Aedash_CoverBy3']; $coverby4 = $result_DashboardShow['Aedash_CoverBy4']; $coverby5 = $result_DashboardShow['Aedash_CoverBy5'];  $datefilter1 = $result_DashboardShow['Aedash_DateFilter1']; $datefilter2 = $result_DashboardShow['Aedash_DateFilter2']; $datefilter3 = $result_DashboardShow['Aedash_DateFilter3']; $datefilter4 = $result_DashboardShow['Aedash_DateFilter4'];
                                            $datefilter5 = $result_DashboardShow['Aedash_DateFilter5'];  $nurse_am1 = $result_DashboardShow['Nurse_Am1']; $nurse_am2 = $result_DashboardShow['Nurse_Am2'];  $nurse_am3 = $result_DashboardShow['Nurse_Am3']; $nurse_am4 = $result_DashboardShow['Nurse_Am4']; $nurse_am5 = $result_DashboardShow['Nurse_Am5']; $nurse_pm1 = $result_DashboardShow['Nurse_Pm1'];
                                            $nurse_pm2 = $result_DashboardShow['Nurse_Pm2']; $nurse_pm3 = $result_DashboardShow['Nurse_Pm3']; $nurse_pm4 = $result_DashboardShow['Nurse_Pm4'];  $nurse_pm5 = $result_DashboardShow['Nurse_Pm5'];
                                            $nurse_night1 = $result_DashboardShow['Nurse_Night1']; $nurse_night2 = $result_DashboardShow['Nurse_Night2']; $nurse_night3 = $result_DashboardShow['Nurse_Night3']; $nurse_night4 = $result_DashboardShow['Nurse_Night4']; $nurse_night5 = $result_DashboardShow['Nurse_Night5']; $dateupdate = $result_DashboardShow['Aedash_DateUpdate']; $timestamp = $result_DashboardShow['Aedash_TimeStamp'];
                                        };   
                                    ?>
                                        
                                            <!--date and day-->
                                            <div class="row bg-dark text-white">
                                                <div class="d-flex justify-content-end">
                                                    <div class="p-1"><b>DATE</b> : <?php echo date("d/m/Y", strtotime($dateupdate));  ?></div>
                                                    <div class="p-1"><b>DAY</b> : <?php echo date('l', strtotime($dateupdate)); ?></div>
                                                </div>
                                            </div>
                                            <!--content-->
                                            <div class="row pt-2">
                                                <div class="col-5 border shadow-sm rounded me-3">
                                                    <div class="row">
                                                        <div class="col fs-4"><b>CONSULTANT ON CALL</b></div>
                                                    </div>
                                                    <div class="row pt-2">
                                                        <div class="col-sm-6 fw-semibold">ANAESTHETIST</div>
                                                        <div class="col-sm-6"><?php echo $anaesthetist ?></div>
                                                    </div>
                                                    <div class="row pt-1">
                                                        <div class="col-sm-6 fw-semibold">CARDIAC SURGEON</div>
                                                        <div class="col-sm-6"><?php echo $cardiac ?></div>
                                                    </div>
                                                    <div class="row pt-1">
                                                        <div class="col-sm-6 fw-semibold">CARDIOLOGIST</div>
                                                        <div class="col-sm-6"><?php echo $cardiology ?></div>
                                                    </div>
                                                    <div class="row pt-1">
                                                        <div class="col-sm-6 fw-semibold">EAR, NOSE & THROAT SURGEON</div>
                                                        <div class="col-sm-6"><?php echo $ent ?></div>
                                                    </div>
                                                    <div class="row pt-1">
                                                        <div class="col-sm-6 fw-semibold">GENERAL SURGEON</div>
                                                        <div class="col-sm-6"><?php echo $surgeon ?></div>
                                                    </div>
                                                    <div class="row pt-1">
                                                        <div class="col-sm-6 fw-semibold">NEPHROLOGIST</div>
                                                        <div class="col-sm-6"><?php echo $nephrologist ?></div>
                                                    </div>
                                                    <div class="row pt-1">
                                                        <div class="col-sm-6 fw-semibold">GASTROENTEROLOGIST</div>
                                                        <div class="col-sm-6"><?php echo $gastro ?></div>
                                                    </div>
                                                    <div class="row pt-1">
                                                        <div class="col-sm-6 fw-semibold">NEUROSURGEON</div>
                                                        <div class="col-sm-6"><?php echo $neuro ?></div>
                                                    </div>
                                                    <div class="row pt-1">
                                                        <div class="col-sm-6 fw-semibold">OBSTETRICIAN & GYNAECOLOGIST</div>
                                                        <div class="col-sm-6"><?php echo $obstetric ?></div>
                                                    </div>
                                                    <div class="row pt-1">
                                                        <div class="col-sm-6 fw-semibold">OPHTHALMOLOGIST</div>
                                                        <div class="col-sm-6"><?php echo $ophthal ?></div>
                                                    </div>
                                                    <div class="row pt-1">
                                                        <div class="col-sm-6 fw-semibold">ORTHOPAEDIC SURGEON</div>
                                                        <div class="col-sm-6"><?php echo $ortho ?></div>
                                                    </div>
                                                    <div class="row pt-1">
                                                        <div class="col-sm-6 fw-semibold">PAEDIATRICIAN</div>
                                                        <div class="col-sm-6"><?php echo $paed ?></div>
                                                    </div>
                                                    <div class="row pt-1">
                                                        <div class="col-sm-6 fw-semibold">PLASTIC SURGEON</div>
                                                        <div class="col-sm-6"><?php echo $plastic ?></div>
                                                    </div>
                                                    <div class="row pt-1">
                                                        <div class="col-sm-6 fw-semibold">UROLOGIST</div>
                                                        <div class="col-sm-6"><?php echo $urology ?></div>
                                                    </div>
                                                    <div class="row pt-1">
                                                        <div class="col-sm-6 fw-semibold">PSYCHIATRIST</div>
                                                        <div class="col-sm-6"><?php echo $psychiatrist ?></div>
                                                    </div>
                                                    <div class="row pt-1">
                                                        <div class="col-sm-6 fw-semibold">PSYCHIATRIST</div>
                                                        <div class="col-sm-6"><?php echo $physician ?></div>
                                                    </div>
                                                    <div class="row pt-1">
                                                        <div class="col-sm-6 fw-semibold">RADIOLOGIST</div>
                                                        <div class="col-sm-6"><?php echo $radiologist ?></div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="row border shadow-sm rounded mb-2">
                                                        <div class="row">
                                                            <div class="col fs-4"><b>HOSPITAL PERSONNEL ON-CALL</b></div>
                                                        </div>
                                                        <div class="row ms-1">
                                                            <div class="col-sm-6 fw-semibold">UNIT MANAGER AM</div>
                                                            <div class="col-sm-6"><?php echo $um_am ?></div>
                                                        </div>
                                                        <div class="row ms-1">
                                                            <div class="col-sm-6 fw-semibold">UNIT MANAGER PM</div>
                                                            <div class="col-sm-6"><?php echo $um_pm ?></div>
                                                        </div>
                                                        <div class="row ms-1">
                                                            <div class="col-sm-6 fw-semibold">UNIT MANAGER NIGHT</div>
                                                            <div class="col-sm-6"><?php echo $um_night ?></div>
                                                        </div>
                                                        <div class="row shadow-sm border rounded ms-1 pb-2 mt-1 mb-1 bg-secondary-subtle">
                                                            <div class="row border rounded text-white ms-1 mt-1 pt-1 pb-1 bg-secondary fw-bold">
                                                                <center>MEDICAL OFFICER</center>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <div class="row fw-semibold ps-3">AM</div>
                                                                    <div class="row fw-semibold ps-3">PM</div>
                                                                    <div class="row fw-semibold ps-3">NIGHT</div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="row">1) <?php echo $mo_morning1 ?></div>
                                                                    <div class="row">1) <?php echo $mo_evening1 ?></div>
                                                                    <div class="row">1) <?php echo $mo_night1 ?></div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="row">2) <?php echo $mo_morning2 ?></div>
                                                                    <div class="row">2) <?php echo $mo_evening2 ?></div>
                                                                    <div class="row">2) <?php echo $mo_night2 ?></div>
                                                                </div>
                                                            </div>    
                                                        </div>
                                                        
                                                        <div class="row shadow-sm border rounded ms-1 pb-1 mt-1 mb-2 bg-secondary-subtle">
                                                            <div class="row border rounded text-white ms-1 mt-1 pt-1 pb-1 bg-secondary fw-bold">
                                                                <center>NURSES</center>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-2">
                                                                    <div class="row fw-semibold ps-3">AM</div>
                                                                    <div class="row fw-semibold ps-3">PM</div>
                                                                    <div class="row fw-semibold ps-3">NIGHT</div>
                                                                </div>
                                                                <div class="col-2">
                                                                    <div class="row"><?php echo $nurse_am1 ?></div>
                                                                    <div class="row"><?php echo $nurse_pm1 ?></div>
                                                                    <div class="row"><?php echo $nurse_night1 ?></div>
                                                                </div>
                                                                <div class="col-2">
                                                                    <div class="row"><?php echo $nurse_am2 ?></div>
                                                                    <div class="row"><?php echo $nurse_pm2 ?></div>
                                                                    <div class="row"><?php echo $nurse_night2 ?></div>
                                                                </div>
                                                                <div class="col-2">
                                                                    <div class="row"><?php echo $nurse_am3 ?></div>
                                                                    <div class="row"><?php echo $nurse_pm3 ?></div>
                                                                    <div class="row"><?php echo $nurse_night3 ?></div>
                                                                </div>   
                                                                <div class="col-2">
                                                                    <div class="row"><?php echo $nurse_am4 ?></div>
                                                                    <div class="row"><?php echo $nurse_pm4 ?></div>
                                                                    <div class="row"><?php echo $nurse_night4 ?></div>
                                                                </div>
                                                                <div class="col-2">
                                                                    <div class="row"><?php echo $nurse_am5 ?></div>
                                                                    <div class="row"><?php echo $nurse_pm5 ?></div>
                                                                    <div class="row"><?php echo $nurse_night5 ?></div>
                                                                </div>
                                                            </div>    
                                                        </div>


                                                        <div class="row ms-1">
                                                            <div class="col-sm-6 fw-semibold">LAB PM</div>
                                                            <div class="col-sm-3"><?php echo $lab1 ?></div>
                                                            <div class="col-sm-3"><?php echo $lab1PM ?></div>
                                                        </div>
                                                        <div class="row ms-1">
                                                            <div class="col-sm-6 fw-semibold">LAB NIGHT</div>
                                                            <div class="col-sm-6"><?php echo $lab2 ?></div>
                                                        </div>
                                                        <div class="row ms-1">
                                                            <div class="col-sm-6 fw-semibold">CATHLAB</div>
                                                            <div class="col-sm-6"><?php echo $cathlab ?></div>
                                                        </div>
                                                        <div class="row ms-1">
                                                            <div class="col-sm-6 fw-semibold">RADIOGRAPHER</div>
                                                            <div class="col-sm-6"><?php echo $radiographer ?></div>
                                                        </div>
                                                        <div class="row pb-2 ms-1">
                                                            <div class="col-sm-6 fw-semibold">MAINTENANCE</div>
                                                            <div class="col-sm-6"><?php echo $maintenance ?></div>
                                                        </div>
                                                    </div>
                                                    <!--consultant on-leave-->
                                                    <div class="row pt-1 pb-1 border shadow-sm rounded">
                                                        <div class="row">
                                                            <div class="col fs-4"><b>CONSULTANT ON LEAVE</b></div>
                                                        </div>
                                                        <div class="row pt-1 ms-1 bg-secondary-subtle shadow-sm border rounded">
                                                            <div class="col-4">
                                                                <div class="row rounded text-white p-1 bg-secondary  me-1 ms-1"><b><center>DOCTOR</center></b></div>
                                                                <div class="row"><center><?php echo $onleave1 ?></center></div>
                                                                <div class="row"><center><?php echo $onleave2 ?></center></div>
                                                                <div class="row"><center><?php echo $onleave3 ?></center></div>
                                                                <div class="row"><center><?php echo $onleave4 ?></center></div>
                                                                <div class="row"><center><?php echo $onleave5 ?></center></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="row rounded text-white p-1 bg-secondary  me-1 ms-1"><b><center>DATE</center></b></div>
                                                                <div class="row"><center><?php echo $datefilter1 ?></center></div>
                                                                <div class="row"><center><?php echo $datefilter2 ?></center></div>
                                                                <div class="row"><center><?php echo $datefilter3 ?></center></div>
                                                                <div class="row"><center><?php echo $datefilter4 ?></center></div>
                                                                <div class="row"><center><?php echo $datefilter5 ?></center></div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="row rounded text-white p-1 bg-secondary  me-1 ms-1"><b><center>COVER BY</center></b></div>
                                                                <div class="row"><center><?php echo $coverby1 ?></center></div>
                                                                <div class="row"><center><?php echo $coverby2 ?></center></div>
                                                                <div class="row"><center><?php echo $coverby3 ?></center></div>
                                                                <div class="row"><center><?php echo $coverby4 ?></center></div>
                                                                <div class="row"><center><?php echo $coverby5 ?></center></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                            <button class="btn btn-primary btn-sm ms-2">Print</button>
                        </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <!-- Pagination Links -->
            <ul class="pagination">
                <?php
                for ($page = 1; $page <= $totalPages; $page++) {
                    echo "<li class='page-item";
                    if ($page == $currentPage) {
                        echo " active";
                    }
                    echo "'><a class='page-link' href='?page={$page}'>$page</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
</div>

        
   

<?php include("interface/footer.php"); ?>
