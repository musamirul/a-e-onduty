<?php
  session_start();
  include("includes/config.php");
  //Get Current File Name for Navbar active button
  $current_file_name = basename($_SERVER['PHP_SELF']); 
  date_default_timezone_set("Asia/Kuala_Lumpur");

?>

<?php 
    $NA = 'N/A';

    $query_DashboardShow = mysqli_query($con,"SELECT * FROM aedash ORDER BY Aedash_ID DESC LIMIT 1");
    while($result_DashboardShow = mysqli_fetch_array($query_DashboardShow)){
        $anaesthetist = $result_DashboardShow['Aedash_Anaesthetic'];
        $cardiac = $result_DashboardShow['Aedash_Cardiac'];
        $cardiology = $result_DashboardShow['Aedash_Cardiology'];
        $ent = $result_DashboardShow['Aedash_Ent'];
        $surgeon = $result_DashboardShow['Aedash_Surgeon'];
        $nephrologist = $result_DashboardShow['Aedash_Nephrologist'];
        $gastro = $result_DashboardShow['Aedash_Gastro'];
        $neuro = $result_DashboardShow['Aedash_Neuro'];
        $obstetric = $result_DashboardShow['Aedash_Obstetric'];
        $ophthal = $result_DashboardShow['Aedash_Ophthalmology'];
        $ortho = $result_DashboardShow['Aedash_Ortho'];
        $paed = $result_DashboardShow['Aedash_Paed'];
        $plastic = $result_DashboardShow['Aedash_Plastic'];
        $urology = $result_DashboardShow['Aedash_Urology'];
        $psychiatrist = $result_DashboardShow['Aedash_Psychiatrist'];
        $physician = $result_DashboardShow['Aedash_Physician'];
        $um_am = $result_DashboardShow['Aedash_Um_Am'];
        $um_pm = $result_DashboardShow['Aedash_Um_Pm'];
        $um_night = $result_DashboardShow['Aedash_Um_Night'];
        $mo_morning1 = $result_DashboardShow['Aedash_Mo_Morning1'];
        $mo_morning2 = $result_DashboardShow['Aedash_Mo_Morning2'];
        $mo_evening1 = $result_DashboardShow['Aedash_Mo_Evening1'];
        $mo_evening2 = $result_DashboardShow['Aedash_Mo_Evening2'];
        $mo_night1 = $result_DashboardShow['Aedash_Mo_Night1'];
        $mo_night2 = $result_DashboardShow['Aedash_Mo_Night2'];
        $mo_wakaf = $result_DashboardShow['Aedash_Mo_Wakaf'];
        $lab1 = $result_DashboardShow['Aedash_lab1'];
        $lab1_pm = $result_DashboardShow['Aedash_lab1PM'];
        $lab2 = $result_DashboardShow['Aedash_lab2'];
        $cathlab = $result_DashboardShow['Aedash_Cathlab'];
        $radiologist = $result_DashboardShow['Aedash_Radiologist'];
        $radiographer = $result_DashboardShow['Aedash_Radiographer'];
        $maintenance = $result_DashboardShow['Aedash_Maintenance'];
        $onleave1 = $result_DashboardShow['Aedash_OnLeave1'];
        $onleave2 = $result_DashboardShow['Aedash_OnLeave2'];
        $onleave3 = $result_DashboardShow['Aedash_OnLeave3'];
        $onleave4 = $result_DashboardShow['Aedash_OnLeave4'];
        $onleave5 = $result_DashboardShow['Aedash_OnLeave5'];
        $coverby1 = $result_DashboardShow['Aedash_CoverBy1'];
        $coverby2 = $result_DashboardShow['Aedash_CoverBy2'];
        $coverby3 = $result_DashboardShow['Aedash_CoverBy3'];
        $coverby4 = $result_DashboardShow['Aedash_CoverBy4'];
        $coverby5 = $result_DashboardShow['Aedash_CoverBy5'];
        $datefilter1 = $result_DashboardShow['Aedash_DateFilter1'];
        $datefilter2 = $result_DashboardShow['Aedash_DateFilter2'];
        $datefilter3 = $result_DashboardShow['Aedash_DateFilter3'];
        $datefilter4 = $result_DashboardShow['Aedash_DateFilter4'];
        $datefilter5 = $result_DashboardShow['Aedash_DateFilter5'];
        $nurse_am1 = $result_DashboardShow['Nurse_Am1'];
        $nurse_am2 = $result_DashboardShow['Nurse_Am2'];
        $nurse_am3 = $result_DashboardShow['Nurse_Am3'];
        $nurse_am4 = $result_DashboardShow['Nurse_Am4'];
        $nurse_am5 = $result_DashboardShow['Nurse_Am5'];
        $nurse_am6 = $result_DashboardShow['Nurse_Am6'];
        $nurse_pm1 = $result_DashboardShow['Nurse_Pm1'];
        $nurse_pm2 = $result_DashboardShow['Nurse_Pm2'];
        $nurse_pm3 = $result_DashboardShow['Nurse_Pm3'];
        $nurse_pm4 = $result_DashboardShow['Nurse_Pm4'];
        $nurse_pm5 = $result_DashboardShow['Nurse_Pm5'];
        $nurse_pm6 = $result_DashboardShow['Nurse_Pm6'];
        $nurse_night1 = $result_DashboardShow['Nurse_Night1'];
        $nurse_night2 = $result_DashboardShow['Nurse_Night2'];
        $nurse_night3 = $result_DashboardShow['Nurse_Night3'];
        $nurse_night4 = $result_DashboardShow['Nurse_Night4'];
        $nurse_night5 = $result_DashboardShow['Nurse_Night5'];
        $nurse_night6 = $result_DashboardShow['Nurse_Night6'];
        $dateupdate = $result_DashboardShow['Aedash_DateUpdate'];
        $sd_anaes = $result_DashboardShow['sd_anaes'];
        $sd_cardiac = $result_DashboardShow['sd_cardiac'];
        $sd_cardio = $result_DashboardShow['sd_cardio'];
        $sd_ent = $result_DashboardShow['sd_ent'];
        $sd_surgeon = $result_DashboardShow['sd_surgeon'];
        $sd_nephro = $result_DashboardShow['sd_nephro'];
        $sd_gastro = $result_DashboardShow['sd_gastro'];
        $sd_neuro = $result_DashboardShow['sd_neuro'];
        $sd_obstetric = $result_DashboardShow['sd_obstetric'];
        $sd_ophthal = $result_DashboardShow['sd_ophthal'];
        $sd_ortho = $result_DashboardShow['sd_ortho'];
        $sd_paed = $result_DashboardShow['sd_paed'];
        $sd_plastic = $result_DashboardShow['sd_plastic'];
        $sd_urology = $result_DashboardShow['sd_urology'];
        $sd_psy = $result_DashboardShow['sd_psy'];
        $sd_physician = $result_DashboardShow['sd_physician'];
        $sd_radiologist = $result_DashboardShow['sd_radiologist'];
        $sd_um_am = $result_DashboardShow['sd_um_am'];
        $sd_um_pm = $result_DashboardShow['sd_um_pm'];
        $sd_um_night = $result_DashboardShow['sd_um_night'];
        $sd_mo_am1 = $result_DashboardShow['sd_mo_am1'];
        $sd_mo_am2 = $result_DashboardShow['sd_mo_am2'];
        $sd_mo_pm1 = $result_DashboardShow['sd_mo_pm1'];
        $sd_mo_pm2 = $result_DashboardShow['sd_mo_pm2'];
        $sd_mo_night1 = $result_DashboardShow['sd_mo_night1'];
        $sd_mo_night2 = $result_DashboardShow['sd_mo_night2'];
        $sd_mo_wakaf = $result_DashboardShow['sd_mo_wakaf'];
        $sd_lab_pm1 = $result_DashboardShow['sd_lab_pm1'];
        $sd_lab_pm2 = $result_DashboardShow['sd_lab_pm2'];
        $sd_lab_night = $result_DashboardShow['sd_lab_night'];
        $sd_did = $result_DashboardShow['sd_did'];
        $timestamp = $result_DashboardShow['Aedash_TimeStamp'];

    };

    

    
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css" media="screen">
    <style>
    /* Custom CSS for the progress bar */
    #progress-bar-container {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 9999;
    }

  </style>
  </head>
<body style="font-size:80%">
<div id="progress-bar-container">
    <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%"></div>
    </div>
  </div>
<div class="bg-dark">
    <div class="container fs-2 fw-semibold pt-1 pb-1 mb-1 text-white">
        <center>A&E ONDUTY LIST</center>
    </div>
</div>
<div class="container">
    <!--date and day-->
    <div class="row bg-dark text-white">
        <div class="d-flex justify-content-end">
            <div class="p-1"><b>DATE</b> : <?php echo date("d/m/Y", strtotime($dateupdate));  ?></div>
            <div class="p-1"><b>DAY</b> : <?php echo date('l', strtotime($dateupdate)); ?></div>
        </div>
    </div>
    <!--content-->
    <div class="row pt-2">
        <div class="col-4 border shadow-sm rounded me-3">
            <div class="row bg-primary text-white">
                <div class="col fs-5 p-1 "><b><center>CONSULTANT ON CALL</center></b></div>
            </div>
            <div class="row pt-2">
                <div class="col-sm-5 pt-1 pb-1 fw-semibold bg-info-subtle">ANAESTHETIST</div>
                <div class="col-sm-5 pt-1 pb-1 ">Dr <?php echo $anaesthetist ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_anaes ?></div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-5 pt-1 pb-1  fw-semibold bg-info-subtle">CARDIAC SURGEON</div>
                <div class="col-sm-5 pt-1 pb-1 ">Dr <?php echo $cardiac ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_cardiac ?></div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-5 pt-1 pb-1  fw-semibold bg-info-subtle">CARDIOLOGIST</div>
                <div class="col-sm-5 pt-1 pb-1 ">Dr <?php echo $cardiology ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_cardio ?></div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-5 pt-1 pb-1  fw-semibold bg-info-subtle">ENT</div>
                <div class="col-sm-5 pt-1 pb-1 ">Dr <?php echo $ent ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_ent ?></div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-5 pt-1 pb-1  fw-semibold bg-info-subtle">GENERAL SURGEON</div>
                <div class="col-sm-5 pt-1 pb-1 ">Dr <?php echo $surgeon ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_surgeon ?></div>

            </div>
            <div class="row pt-1">
                <div class="col-sm-5 pt-1 pb-1  fw-semibold bg-info-subtle">NEPHROLOGIST</div>
                <div class="col-sm-5 pt-1 pb-1 ">Dr <?php echo $nephrologist ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_nephro ?></div>

            </div>
            <div class="row pt-1">
                <div class="col-sm-5 pt-1 pb-1  fw-semibold bg-info-subtle">GASTROENTEROLOGIST</div>
                <div class="col-sm-5 pt-1 pb-1 ">Dr <?php echo $gastro ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_gastro ?></div>

            </div>
            <div class="row pt-1">
                <div class="col-sm-5 pt-1 pb-1  fw-semibold bg-info-subtle">NEUROSURGEON</div>
                <div class="col-sm-5 pt-1 pb-1 ">Dr <?php echo $neuro ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_neuro ?></div>

            </div>
            <div class="row pt-1">
                <div class="col-sm-5 pt-1 pb-1  fw-semibold bg-info-subtle">O&G</div>
                <div class="col-sm-5 pt-1 pb-1 ">Dr <?php echo $obstetric ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_obstetric ?></div>

            </div>
            <div class="row pt-1">
                <div class="col-sm-5 pt-1 pb-1  fw-semibold bg-info-subtle">OPHTHALMOLOGIST</div>
                <div class="col-sm-5 pt-1 pb-1 ">Dr <?php echo $ophthal ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_ophthal ?></div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-5 pt-1 pb-1  fw-semibold bg-info-subtle">ORTHOPEDIC SURGEON</div>
                <div class="col-sm-5 pt-1 pb-1 ">Dr <?php echo $ortho ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_ortho ?></div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-5 pt-1 pb-1  fw-semibold bg-info-subtle">PAEDIATRICIAN</div>
                <div class="col-sm-5 pt-1 pb-1 ">Dr <?php echo $paed ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_paed ?></div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-5 fw-semibold bg-info-subtle">PLASTIC SURGEON</div>
                <div class="col-sm-5">Dr <?php echo $plastic ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_plastic ?></div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-5 pt-1 pb-1  fw-semibold bg-info-subtle">UROLOGIST</div>
                <div class="col-sm-5 pt-1 pb-1 ">Dr <?php echo $urology ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_urology ?></div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-5 pt-1 pb-1  fw-semibold bg-info-subtle">PSYCHIATRIST</div>
                <div class="col-sm-5 pt-1 pb-1 ">Dr <?php echo $psychiatrist ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_psy ?></div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-5 pt-1 pb-1  fw-semibold bg-info-subtle">PHYSICIAN</div>
                <div class="col-sm-5 pt-1 pb-1 ">Dr <?php echo $physician ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_physician ?></div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-5 pt-1 pb-1  fw-semibold bg-info-subtle">RADIOLOGIST</div>
                <div class="col-sm-5 pt-1 pb-1 ">Dr <?php echo $radiologist ?></div>
                <div class="col-sm-2 pt-1 pb-1 text-danger"><?php echo $sd_radiologist ?></div>
                
            </div>
        </div>
        <div class="col border shadow-sm rounded mb-2">
            <div>
                <div class="row bg-primary  bg-gradient text-white">
                    <div class="col fs-5 p-1"><b><center>HOSPITAL PERSONNEL ON-CALL</center></b></div>
                </div>
                <div class="row">
                    <div class="col-sm-3 fw-semibold bg-primary bg-gradient text-white"><center>UNIT MANAGER AM</center></div>
                    <div class="col-sm-3">
                         <div class="ms-3"><?php if($um_am == 'NULL'){echo "N/A";}else{ echo $um_am;} ?></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-danger"><?php if($sd_um_am == 'NULL'){echo "N/A";}else{ echo $sd_um_am;} ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 fw-semibold  bg-primary bg-gradient text-white"><center>UNIT MANAGER PM</center></div>
                    <div class="col-sm-3">
                        <div class="ms-3"><?php if($um_pm == 'NULL'){echo $NA;}else{echo $um_pm;} ?></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-danger"><?php if($sd_um_pm == 'NULL'){echo "N/A";}else{ echo $sd_um_pm;} ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 fw-semibold  bg-primary bg-gradient text-white"><center>UNIT MANAGER NIGHT</center></div>
                    <div class="col-sm-3">
                        <div class="ms-3"><?php if($um_night == 'NULL'){echo $NA;}else{echo $um_night;} ?></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-danger"><?php if($sd_um_night == 'NULL'){echo "N/A";}else{ echo $sd_um_night;} ?></div>
                    </div>
                </div>
                <div class="row shadow-sm border rounded bg-secondary bg-opacity-10">
                    <div class="text-white mt-1 pt-1 pb-1 bg-primary bg-opacity-75 bg-gradient fw-bold">
                        <center>MEDICAL OFFICER</center>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="row fw-semibold  bg-primary bg-opacity-75 bg-gradient text-white"><center>AM (7-2)</center></div>
                            <div class="row fw-semibold  bg-primary bg-opacity-75 bg-gradient text-white"><center>PM (2-9)</center></div>
                            <div class="row fw-semibold bg-primary bg-opacity-75 bg-gradient text-white"><center>NIGHT (9-7)</center></div>
                            <div class="row fw-semibold bg-primary bg-opacity-75 bg-gradient text-white"><center>WAKAF</center></div>
                        </div>
                        <div class="col-3">
                            <div class="row ps-3">1) <?php if($mo_morning1 == 'NULL'){echo $NA;}else{echo $mo_morning1;} ?></div>
                            <div class="row ps-3">1) <?php if($mo_evening1 == 'NULL'){echo $NA;}else{echo $mo_evening1;} ?></div>
                            <div class="row ps-3">1) <?php if($mo_night1 == 'NULL'){echo $NA;}else{echo $mo_night1;} ?></div>
                            <div class="row ps-3">1) <?php if($mo_wakaf == 'NULL'){echo $NA;}else{echo $mo_wakaf;} ?></div>
                        </div>
                        <div class="col-2">
                            <div class="row ps-4 text-danger"><?php if($sd_mo_am1 == 'NULL'){echo $NA;}else{echo $sd_mo_am1;} ?></div>
                            <div class="row ps-4 text-danger"><?php if($sd_mo_pm1 == 'NULL'){echo $NA;}else{echo $sd_mo_pm1;} ?></div>
                            <div class="row ps-4 text-danger"><?php if($sd_mo_night1 == 'NULL'){echo $NA;}else{echo $sd_mo_night1;} ?></div>
                            <div class="row ps-4 text-danger"><?php if($sd_mo_wakaf == 'NULL'){echo $NA;}else{echo $sd_mo_wakaf;} ?></div>
                        </div>
                        <div class="col-2">
                            <div class="row ">2) <?php if($mo_morning2 == 'NULL'){echo $NA;}else{echo $mo_morning2;} ?></div>
                            <div class="row ">2) <?php if($mo_evening2 == 'NULL'){echo $NA;}else{echo $mo_evening2;} ?></div>
                            <div class="row ">2) <?php if($mo_night2 == 'NULL'){echo $NA;}else{echo $mo_night2;} ?></div>
                        </div>
                        <div class="col-2">
                            <div class="row ps-4 text-danger"><?php if($sd_mo_am2 == 'NULL'){echo $NA;}else{echo $sd_mo_am2;} ?></div>
                            <div class="row ps-4 text-danger"><?php if($sd_mo_pm2 == 'NULL'){echo $NA;}else{echo $sd_mo_pm2;} ?></div>
                            <div class="row ps-4 text-danger"><?php if($sd_mo_night2 == 'NULL'){echo $NA;}else{echo $sd_mo_night2;} ?></div>
                        </div>
                    </div>    
                </div>
                
                <div class="row shadow-sm border rounded bg-secondary bg-opacity-10">
                    <div class="col">
                        <div class="row text-white mt-1 pt-1 pb-1 bg-primary bg-opacity-75 bg-gradient fw-bold">
                            <center>NURSES</center>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <div class="row border fw-semibold bg-primary bg-opacity-75 bg-gradient text-white"><center>Shift</center></div>
                                <div class="row border fw-semibold bg-primary bg-opacity-75 bg-gradient text-white"><center>AM</center></div>
                                <div class="row border fw-semibold bg-primary bg-opacity-75 bg-gradient text-white"><center>PM</center></div>
                                <div class="row border fw-semibold bg-primary bg-opacity-75 bg-gradient text-white"><center>NIGHT</center></div>
                            </div>
                            <div class="col-2">
                                <div class="row border bg-white fw-semibold"><center>Coordinator</center></div>
                                <div class="row border ps-2"><?php if($nurse_am1 == 'NULL'){echo $NA;}else{echo $nurse_am1;} ?></div>
                                <div class="row border ps-2"><?php if($nurse_pm1 == 'NULL'){echo $NA;}else{echo $nurse_pm1;} ?></div>
                                <div class="row border ps-2"><?php if($nurse_night1 == 'NULL'){echo $NA;}else{echo $nurse_night1;} ?></div>
                            </div>
                            <div class="col-2">
                                <div class="row border bg-danger fw-semibold"><center>Red</center></div>
                                <div class="row border ps-2"><?php if($nurse_am2 == 'NULL'){echo $NA;}else{echo $nurse_am2;} ?></div>
                                <div class="row border ps-2"><?php if($nurse_pm2 == 'NULL'){echo $NA;}else{echo $nurse_pm2;} ?></div>
                                <div class="row border ps-2"><?php if($nurse_night2 == 'NULL'){echo $NA;}else{echo $nurse_night2;} ?></div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <div class="bg-warning fw-semibold border"><center>Yellow</center></div>
                                    <div class="col-6">
                                        <div class="row border ps-2"><?php if($nurse_am3 == 'NULL'){echo $NA;}else{echo $nurse_am3;} ?></div>
                                        <div class="row border ps-2"><?php if($nurse_pm3 == 'NULL'){echo $NA;}else{echo $nurse_pm3;} ?></div>
                                        <div class="row border ps-2"><?php if($nurse_night3 == 'NULL'){echo $NA;}else{echo $nurse_night3;} ?></div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row border ps-2"><?php if($nurse_am4 == 'NULL'){echo $NA;}else{echo $nurse_am4;} ?></div>
                                        <div class="row border ps-2"><?php if($nurse_pm4 == 'NULL'){echo $NA;}else{echo $nurse_pm4;} ?></div>
                                        <div class="row border ps-2"><?php if($nurse_night4 == 'NULL'){echo $NA;}else{echo $nurse_night4;} ?></div>
                                    </div>
                                </div>
                                
                            </div>   
                            <div class="col-2">
                                <div class="row border bg-success fw-semibold"><center>Triage</center></div>
                                <div class="row border ps-2"><?php if($nurse_am5 == 'NULL'){echo $NA;}else{echo $nurse_am5;} ?></div>
                                <div class="row border ps-2"><?php if($nurse_pm5 == 'NULL'){echo $NA;}else{echo $nurse_pm5;} ?></div>
                                <div class="row border ps-2"><?php if($nurse_night5 == 'NULL'){echo $NA;}else{echo $nurse_night5;} ?></div>
                            </div>
                            <div class="col-2">
                                <div class="row border bg-white fw-semibold"><center>Runners</center></div>
                                <div class="row border ps-2"><?php if($nurse_am6 == 'NULL'){echo $NA;}else{echo $nurse_am6;} ?></div>
                                <div class="row border ps-2"><?php if($nurse_pm6 == 'NULL'){echo $NA;}else{echo $nurse_pm6;} ?></div>
                                <div class="row border ps-2"><?php if($nurse_night6 == 'NULL'){echo $NA;}else{echo $nurse_night6;} ?></div>
                            </div>
                        </div>
                    </div>    
                </div>

                <div class="row shadow-sm border rounded bg-secondary bg-opacity-10">
                    <div class="col">
                        <div class="row text-white mt-1 pt-1 pb-1 bg-primary bg-opacity-75 bg-gradient fw-bold">
                            <center>CLINICAL ON CALL</center>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 fw-semibold bg-primary bg-opacity-75 bg-gradient text-white"><center>LAB PM</center></div>
                            <div class="col-sm-2"><?php if($lab1 == 'NULL'){echo $NA;}else{echo $lab1;} ?></div>
                            <div class="col-sm-1 text-danger"><?php if($sd_lab_pm1 == 'NULL'){echo $NA;}else{echo $sd_lab_pm1;} ?></div>
                            <div class="col-sm-3 ps-5"><?php if($lab1_pm == 'NULL'){echo $NA;}else{echo $lab1_pm;} ?></div>
                            <div class="col-sm-1 text-danger"><?php if($sd_lab_pm2 == 'NULL'){echo $NA;}else{echo $sd_lab_pm2;} ?></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 fw-semibold bg-primary bg-opacity-75 bg-gradient text-white"><center>LAB NIGHT</center></div>
                            <div class="col-sm-2"><?php if($lab2 == 'NULL'){echo $NA;}else{echo $lab2;} ?></div>
                            <div class="col-sm-1 text-danger"><?php if($sd_lab_night == 'NULL'){echo $NA;}else{echo $sd_lab_night;} ?></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 fw-semibold bg-primary bg-opacity-75 bg-gradient text-white"><center>RADIOGRAPHER</center></div>
                            <div class="col-sm-2"><?php if($radiographer == 'NULL'){echo $NA;}else{echo $radiographer;} ?></div>
                            <div class="col-sm-1 text-danger"><?php if($sd_did == 'NULL'){echo $NA;}else{echo $sd_did;} ?></div>
                        </div>
                    </div>
                </div>
                <!-- 
                <div class="row ms-1">
                    <div class="col-sm-6 fw-semibold">CATHLAB</div>
                    <div class="col-sm-6"><?php if($cathlab == 'NULL'){echo $NA;}else{echo $cathlab;} ?></div>
                </div>
                <div class="row pb-2 ms-1">
                    <div class="col-sm-6 fw-semibold">MAINTENANCE</div>
                    <div class="col-sm-6"><?php if($maintenance == 'NULL'){echo $NA;}else{echo $maintenance;} ?></div>
                </div>-->
            </div>
            <!--consultant on-leave-->
            <div class="row bg-primary mt-1 bg-gradient text-white">
                    <div class="col fs-5 p-1"><b><center>CONSULTANT ON LEAVE</center></b></div>
                </div>
                <div class="row pt-1 bg-primary-subtle pb-2 shadow-sm border rounded">
                    <div class="col-4">
                        <div class="row text-white bg-primary bg-gradient bg-opacity-75 p-1 bg-primary me-1 "><b><center>DOCTOR</center></b></div>
                        <div class="row"><center><?php if($onleave1 == 'NULL'){echo $NA;}else{echo 'Dr '.$onleave1;} ?></center></div>
                        <div class="row"><center><?php if($onleave2 == 'NULL'){echo $NA;}else{echo 'Dr '.$onleave2;} ?></center></div>
                        <div class="row"><center><?php if($onleave3 == 'NULL'){echo $NA;}else{echo 'Dr '.$onleave3;} ?></center></div>
                        <div class="row"><center><?php if($onleave4 == 'NULL'){echo $NA;}else{echo 'Dr '.$onleave4;} ?></center></div>
                        <div class="row"><center><?php if($onleave5 == 'NULL'){echo $NA;}else{echo 'Dr '.$onleave5;} ?></center></div>
                    </div>
                    <div class="col-4">
                        <div class="row text-white p-1 bg-gradient bg-opacity-75 p-1 me-1 bg-primary"><b><center>DATE</center></b></div>
                        <div class="row"><center><?php echo $datefilter1 ?></center></div>
                        <div class="row"><center><?php echo $datefilter2 ?></center></div>
                        <div class="row"><center><?php echo $datefilter3 ?></center></div>
                        <div class="row"><center><?php echo $datefilter4 ?></center></div>
                        <div class="row"><center><?php echo $datefilter5 ?></center></div>
                    </div>
                    <div class="col-4">
                        <div class="row text-white p-1 bg-gradient bg-opacity-75 p-1 bg-primary"><b><center>COVER BY</center></b></div>
                        <div class="row"><center><?php if($coverby1 == 'NULL'){echo $NA;}else{echo 'Dr '.$coverby1;} ?></center></div>
                        <div class="row"><center><?php if($coverby2 == 'NULL'){echo $NA;}else{echo 'Dr '.$coverby2;} ?></center></div>
                        <div class="row"><center><?php if($coverby3 == 'NULL'){echo $NA;}else{echo 'Dr '.$coverby3;} ?></center></div>
                        <div class="row"><center><?php if($coverby4 == 'NULL'){echo $NA;}else{echo 'Dr '.$coverby4;} ?></center></div>
                        <div class="row"><center><?php if($coverby5 == 'NULL'){echo $NA;}else{echo 'Dr '.$coverby5;} ?></center></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


<!--
<footer class="text-center text-white fixed-bottom bg-dark mt-2">
    <div class="text-center p-1" style="background-color:rgba(0,0,0,0.2);">IT Services @ 2023 Copyright :<a class="text-white text-decoration-none" href="#">A&E Dashboard</a></div>
</footer>-->
    <script src="static/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Interface/style/jQuery/jquery-3.6.0.min.js"></script>
    <script>
    function checkForUpdates() {
        const progressBarContainer = document.getElementById('progress-bar-container');
        const contentContainer = document.getElementById('contentContainer');
            // Make an AJAX request to the server
            $.ajax({
                url: 'check_for_updates.php',
                type: 'POST',
                dataType: 'json',
                success: function (response) {
                    if (response.newRowInserted) {
                        
                        progressBarContainer.style.display = 'block';

                        // Start the progress bar animation
                        
                        const progressBar = progressBarContainer.querySelector('.progress-bar');
                        progressBar.style.width = '0%';
                        // Reload the page after a short delay
                        setTimeout(() => {
                            
                            location.reload();
                        }, 2000);
                    }
                },
                complete: function () {
                    // Schedule the next check
                    setTimeout(checkForUpdates, 5000); // Check every 5 seconds
                }
            });
        }

        // Start checking for updates when the page loads
        $(document).ready(function () {
            checkForUpdates();

        });

    //Progress bar hidden
    window.addEventListener('load', () => {
    progressBarContainer.style.display = 'none';
    });
</script>
<!--
<script>
	addEventListener("click", function() {
    	var
          el = document.documentElement
        , rfs =
               el.requestFullScreen
            || el.webkitRequestFullScreen
            || el.mozRequestFullScreen
    		;
    	rfs.call(el);
	});
</script>
-->

  </body>
</html>
