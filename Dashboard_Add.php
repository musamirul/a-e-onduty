<?php include("Interface/header.php"); ?>

<?php 
    $date = date("Y/m/d")
?>

<form method="POST">
<div class="container">
    <!--date and day-->
    <div class="row bg-dark text-white">
        <div class="d-flex justify-content-end">
            <div class="p-1"><b>DATE</b> : <?php echo date("d/m/Y") ?></div>
            <div class="p-1"><b>DAY</b> : <?php echo date('l', strtotime($date)); ?></div>
        </div>
    </div>
    <!--content-->
    <div class="row">
        <div class="col-5 border shadow-sm rounded me-3">
            <div class="row">
                <div class="col fs-5"><b>CONSULTANT ON CALL</b></div>
            </div>
            <div class="row">
                <div class="col-sm-6 fw-semibold">ANAESTHETIST</div>
                <div class="col-sm-6">
                    <select name="anaesthetic" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='Anaesthetic' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-6 fw-semibold">CARDIAC SURGEON</div>
                <div class="col-sm-6">
                    <select name="cardiac" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='Cardiac Surgeon' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-6 fw-semibold">CARDIOLOGIST</div>
                <div class="col-sm-6">
                    <select name="cardiology" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='Cardiology' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-6 fw-semibold">EAR, NOSE & THROAT SURGEON</div>
                <div class="col-sm-6">
                    <select name="ent" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='ENT' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-6 fw-semibold">GENERAL SURGEON</div>
                <div class="col-sm-6">
                    <select name="surgeon" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='General Surgeon' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-6 fw-semibold">NEPHROLOGIST</div>
                <div class="col-sm-6">
                    <select name="nephrologist" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='Nephrologist' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-6 fw-semibold">GASTROENTEROLOGIST</div>
                <div class="col-sm-6">
                    <select name="gastroenterologist" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='Gastroenterologist' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-6 fw-semibold">NEUROSURGEON</div>
                <div class="col-sm-6">
                    <select name="neurosurgeon" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='Neurosurgeon' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-6 fw-semibold">OBSTETRICIAN & GYNAECOLOGIST</div>
                <div class="col-sm-6">
                    <select name="obstetrician" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='Obstetric & Gynaecology' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-6 fw-semibold">OPHTHALMOLOGIST</div>
                <div class="col-sm-6">
                    <select name="ophthalmology" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='Ophthalmology' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                    </select></div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-6 fw-semibold">ORTHOPAEDIC SURGEON</div>
                <div class="col-sm-6">
                    <select name="orthopaedic" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='Orthopaedic' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-6 fw-semibold">PAEDIATRICIAN</div>
                <div class="col-sm-6">
                    <select name="paediatrician" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='Paediatrics' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-6 fw-semibold">PLASTIC SURGEON</div>
                <div class="col-sm-6">
                    <select name="plastic" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='Plastic Surgeon' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-6 fw-semibold">UROLOGIST</div>
                <div class="col-sm-6">
                    <select name="urologist" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='Urologist' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-6 fw-semibold">PSYCHIATRIST</div>
                <div class="col-sm-6">
                    <select name="psychiatrist" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='Psychiatrist' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-sm-6 fw-semibold">GENERAL PHYSICIAN</div>
                <div class="col-sm-6">
                    <select name="physician" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='Physician' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row pt-1">
                    <div class="col-sm-6 fw-semibold">RADIOLOGIST</div>
                    <div class="col-sm-6">
                        <select name="radiologist" class="form-select form-select-sm">
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM doctor WHERE Doctor_Specialist='Radiologist' ORDER BY Doctor_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
        </div>
        <div class="col">
            <div class="row border shadow-sm rounded mb-1">
                <div class="row">
                    <div class="col fs-5"><b>HOSPITAL PERSONNEL ON-CALL</b></div>
                </div>
                <div class="row ms-1">
                    <div class="col-sm-6 fw-semibold">UNIT MANAGER AM</div>
                    <div class="col-sm-6">
                        <select name="um_am" class="form-select form-select-sm">
                            <option value="NULL">N/A</option>
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title='Unit Manager' ORDER BY Staff_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row ms-1">
                    <div class="col-sm-6 fw-semibold">UNIT MANAGER PM</div>
                    <div class="col-sm-6">
                        <select name="um_pm" class="form-select form-select-sm">
                            <option value="NULL">N/A</option>
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title='Unit Manager' ORDER BY Staff_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row ms-1">
                    <div class="col-sm-6 fw-semibold">UNIT MANAGER NIGHT</div>
                    <div class="col-sm-6">
                        <select name="um_night" class="form-select form-select-sm">
                            <option value="NULL">N/A</option>
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title='Unit Manager' ORDER BY Staff_Name ");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row shadow-sm border rounded ms-1 bg-light">
                    <div class="row border rounded text-white  bg-secondary fw-bold">
                        <center>MEDICAL OFFICER</center>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="row fw-semibold ps-3">AM</div>
                            <div class="row fw-semibold ps-3">PM</div>
                            <div class="row fw-semibold ps-3">NIGHT</div>
                        </div>
                        <div class="col-4">
                            <?php
                            // select department id named medical officer
                            $query_showMO = mysqli_query($con,"SELECT * from department WHERE Dept_Name = 'MEDICAL OFFICER'");
                            while($result_showMO = mysqli_fetch_array($query_showMO)){
                                $MO_ID = $result_showMO['Dept_ID'];
                            }

                            ?>
                            <div class="row"> 
                                <select name="Mo_morning1" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE FK_Dept_ID = '$MO_ID' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <select name="Mo_evening1" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE FK_Dept_ID = '$MO_ID' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <select name="Mo_night1" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE FK_Dept_ID = '$MO_ID' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <select name="Mo_morning2" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE FK_Dept_ID = '$MO_ID' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <select name="Mo_evening2" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE FK_Dept_ID = '$MO_ID' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <select name="Mo_night2" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE FK_Dept_ID = '$MO_ID' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>    
                </div>

                <div class="row shadow-sm border rounded ms-1 bg-light">
                    <div class="row border rounded text-white bg-secondary fw-bold">
                        <center>NURSES</center>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="row fw-semibold ps-3">AM</div>
                            <div class="row fw-semibold ps-3">PM</div>
                            <div class="row fw-semibold ps-3">NIGHT</div>
                        </div>
                        <div class="col-2">
                            <div class="row"> 
                                <select name="Nurse_Am1" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title = 'Nurse' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <select name="Nurse_Pm1" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title = 'Nurse' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <select name="Nurse_Night1" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title = 'Nurse' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                        <div class="row">
                                <select name="Nurse_Am2" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title = 'Nurse' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <select name="Nurse_Pm2" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title = 'Nurse' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <select name="Nurse_Night2" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title = 'Nurse' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                        <div class="row">
                                <select name="Nurse_Am3" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title = 'Nurse' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <select name="Nurse_Pm3" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title = 'Nurse' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <select name="Nurse_Night3" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title = 'Nurse' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="row">
                                <select name="Nurse_Am4" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title = 'Nurse' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <select name="Nurse_Pm4" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title = 'Nurse' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <select name="Nurse_Night4" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title = 'Nurse' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="row">
                                <select name="Nurse_Am5" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title = 'Nurse' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <select name="Nurse_Pm5" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title = 'Nurse' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <select name="Nurse_Night5" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE Staff_Title = 'Nurse' ORDER BY Staff_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>    
                </div>


                <div class="row ms-1">
                    <?php
                        // select department id named laboratory
                        $query_showLab = mysqli_query($con,"SELECT * from department WHERE Dept_Name = 'LABORATORY'");
                        while($result_showLab = mysqli_fetch_array($query_showLab)){
                            $lab_ID = $result_showLab['Dept_ID'];
                        }

                    ?>
                    <div class="col-sm-6 fw-semibold">LAB PM</div>
                    <div class="col-sm-3">
                        <select name="lab1" class="form-select form-select-sm">
                            <option value="NULL">N/A</option>
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE FK_Dept_ID = '$lab_ID' ORDER BY Staff_Name");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select name="lab1PM" class="form-select form-select-sm">
                            <option value="NULL">N/A</option>
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE FK_Dept_ID = '$lab_ID' ORDER BY Staff_Name");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row ms-1">
                    <div class="col-sm-6 fw-semibold">LAB NIGHT</div>
                    <div class="col-sm-6">
                        <select name="lab2" class="form-select form-select-sm">
                            <option value="NULL">N/A</option>
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE FK_Dept_ID = '$lab_ID' ORDER BY Staff_Name");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row ms-1">
                    <?php
                        // select department id named spd/cathlab
                        $query_showCath = mysqli_query($con,"SELECT * from department WHERE Dept_Name = 'SPD/CATHLAB'");
                        while($result_showCath = mysqli_fetch_array($query_showCath)){
                            $cath_ID = $result_showCath['Dept_ID'];
                        }

                    ?>
                    <div class="col-sm-6 fw-semibold">CATHLAB</div>
                    <div class="col-sm-6">
                        <select name="cath" class="form-select form-select-sm">
                            <option value="NULL">N/A</option>
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE FK_Dept_ID = '$cath_ID' ORDER BY Staff_Name");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row ms-1">
                    <?php
                        // select department id named did
                        $query_showdid = mysqli_query($con,"SELECT * from department WHERE Dept_Name = 'DID'");
                        while($result_showdid = mysqli_fetch_array($query_showdid)){
                            $did_ID = $result_showdid['Dept_ID'];
                        }

                    ?>
                    <div class="col-sm-6 fw-semibold">RADIOGRAPHER</div>
                    <div class="col-sm-6">
                        <select name="radiographer" class="form-select form-select-sm">
                            <option value="NULL">N/A</option>
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM staff WHERE FK_Dept_ID = '$did_ID' ORDER BY Staff_Name");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row ms-1">
                    <?php
                        // select department id named maintenance
                        $query_showMaint = mysqli_query($con,"SELECT * from department WHERE Dept_Name = 'MAINTENANCE & ENGINEERING'");
                        while($result_showMaint = mysqli_fetch_array($query_showMaint)){
                            $maint_ID = $result_showMaint['Dept_ID'];
                        }

                    ?>
                    <div class="col-sm-6 fw-semibold">MAINTENANCE</div>
                    <div class="col-sm-6">
                        <select name="maint" class="form-select form-select-sm">
                            <option value="NULL">N/A</option>
                            <?php
                                $query_deptShow = mysqli_query($con,"SELECT * FROM staff  WHERE FK_Dept_ID = '$maint_ID' ORDER BY Staff_Name");
                                while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                            ?>
                            <option value="<?php echo $result_deptShow['Staff_Name']; ?>"><?php echo $result_deptShow['Staff_Name']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <!--consultant on-leave-->
            <div class="row border shadow-sm rounded">
                <div class="row">
                    <div class="col fs-5"><b>CONSULTANT ON LEAVE</b></div>
                </div>
                <div class="row ms-1 bg-light shadow-sm border rounded">
                    <div class="col-4">
                        <div class="row rounded text-white bg-secondary me-1 ms-1"><b><center>DOCTOR</center></b></div>
                        <div class="row">
                            <center>
                                <select name="doc_onleave1" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM doctor ORDER BY Doctor_Name");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </center>
                        </div>
                        <div class="row">
                            <center>
                                <select name="doc_onleave2" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM doctor ORDER BY Doctor_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </center>
                        </div>
                        <div class="row">
                            <center>
                                <select name="doc_onleave3" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM doctor ORDER BY Doctor_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </center>
                        </div>
                        <div class="row">
                            <center>
                                <select name="doc_onleave4" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM doctor ORDER BY Doctor_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </center>
                        </div>
                        <div class="row">
                            <center>
                                <select name="doc_onleave5" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM doctor ORDER BY Doctor_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row rounded text-white bg-secondary  me-1 ms-1"><b><center>DATE</center></b></div>
                        <div class="row"><center><input class="filterdate" type="text" name="datefilter1"  value="0000-00-00"/></center></div>
                        <div class="row"><center><input class="filterdate"  type="text" name="datefilter2"  value="0000-00-00"/></center></div>
                        <div class="row"><center><input class="filterdate"  type="text" name="datefilter3"  value="0000-00-00"/></center></div>
                        <div class="row"><center><input class="filterdate"  type="text" name="datefilter4"  value="0000-00-00"/></center></div>
                        <div class="row"><center><input class="filterdate"  type="text" name="datefilter5"  value="0000-00-00"/></center></div>
                    </div>
                    <div class="col-4">
                        <div class="row rounded text-white bg-secondary  me-1 ms-1"><b><center>COVER BY</center></b></div>
                        <div class="row">
                            <center>
                                <select name="doc_coverby1" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM doctor ORDER BY Doctor_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </center>
                        </div>
                        <div class="row">
                            <center>
                                <select name="doc_coverby2" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM doctor ORDER BY Doctor_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </center>
                        </div>
                        <div class="row">
                            <center>
                                <select name="doc_coverby3" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM doctor ORDER BY Doctor_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </center>
                        </div>
                        <div class="row">
                            <center>
                                <select name="doc_coverby4" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM doctor ORDER BY Doctor_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </center>
                        </div>
                        <div class="row">
                            <center>
                                <select name="doc_coverby5" class="form-select form-select-sm">
                                    <option value="NULL">N/A</option>
                                    <?php
                                        $query_deptShow = mysqli_query($con,"SELECT * FROM doctor ORDER BY Doctor_Name ");
                                        while($result_deptShow = mysqli_fetch_array($query_deptShow)){
                                    ?>
                                    <option value="<?php echo $result_deptShow['Doctor_Name']; ?>"><?php echo $result_deptShow['Doctor_Name']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <button class="btn btn-primary" name="SubmitBtn" type="submit">Save</button>
    </div>
    
</div>
</form>

<?php
    if(isset($_POST['SubmitBtn'])){
        //consultant
        $anaesthetic = $_POST['anaesthetic'];
        $cardiac = $_POST['cardiac'];
        $cardiology = $_POST['cardiology'];
        $ent = $_POST['ent'];
        $surgeon = $_POST['surgeon'];
        $nephrologist = $_POST['nephrologist'];
        $gastroenterologist = $_POST['gastroenterologist'];
        $neurosurgeon = $_POST['neurosurgeon'];
        $obstetrician = $_POST['obstetrician'];
        $ophthalmology = $_POST['ophthalmology'];
        $orthopaedic = $_POST['orthopaedic'];
        $paediatrician = $_POST['paediatrician'];
        $plastic = $_POST['plastic'];
        $urologist = $_POST['urologist'];
        $psychiatrist = $_POST['psychiatrist'];

        //hospital on-call
        $um_am = $_POST['um_am'];
        $um_pm = $_POST['um_pm'];
        $Mo_morning1 = $_POST['Mo_morning1'];
        $Mo_evening1 = $_POST['Mo_evening1'];
        $Mo_night1 = $_POST['Mo_night1'];
        $Mo_morning2 = $_POST['Mo_morning2'];
        $Mo_evening2 = $_POST['Mo_evening2'];
        $Mo_night2 = $_POST['Mo_night2'];

        $lab1 = $_POST['lab1'];
        $lab1PM = $_POST['lab1PM'];
        $lab2 = $_POST['lab2'];
        $radiologist = $_POST['radiologist'];
        $radiographer = $_POST['radiographer'];

        //consultant on leave
        $doc_onleave1 = $_POST['doc_onleave1'];
        $doc_onleave2 = $_POST['doc_onleave2'];
        $doc_onleave3 = $_POST['doc_onleave3'];
        $doc_onleave4 = $_POST['doc_onleave4'];
        $doc_onleave5 = $_POST['doc_onleave5'];

        $doc_coverby1 = $_POST['doc_coverby1'];
        $doc_coverby2 = $_POST['doc_coverby2'];
        $doc_coverby3 = $_POST['doc_coverby3'];
        $doc_coverby4 = $_POST['doc_coverby4'];
        $doc_coverby5 = $_POST['doc_coverby5'];

        $datefilter1 = $_POST['datefilter1'];
        $datefilter2 = $_POST['datefilter2'];
        $datefilter3 = $_POST['datefilter3'];
        $datefilter4 = $_POST['datefilter4'];
        $datefilter5 = $_POST['datefilter5'];

        $cath = $_POST['cath'];
        $maint = $_POST['maint'];
        $physician = $_POST['physician'];
        $um_night = $_POST['um_night'];

        $Nurse_Am1 = $_POST['Nurse_Am1'];
        $Nurse_Am2 = $_POST['Nurse_Am2'];
        $Nurse_Am3 = $_POST['Nurse_Am3'];
        $Nurse_Am4 = $_POST['Nurse_Am4'];
        $Nurse_Am5 = $_POST['Nurse_Am5'];

        $Nurse_Pm1 = $_POST['Nurse_Pm1'];
        $Nurse_Pm2 = $_POST['Nurse_Pm2'];
        $Nurse_Pm3 = $_POST['Nurse_Pm3'];
        $Nurse_Pm4 = $_POST['Nurse_Pm4'];
        $Nurse_Pm5 = $_POST['Nurse_Pm5'];

        $Nurse_Night1 = $_POST['Nurse_Night1'];
        $Nurse_Night2 = $_POST['Nurse_Night2'];
        $Nurse_Night3 = $_POST['Nurse_Night3'];
        $Nurse_Night4 = $_POST['Nurse_Night4'];
        $Nurse_Night5 = $_POST['Nurse_Night5'];

        

        $query_update = mysqli_query($con,"INSERT INTO aedash(Aedash_Anaesthetic, Aedash_Cardiac, Aedash_Cardiology, Aedash_Ent, 
        Aedash_Surgeon, Aedash_Nephrologist, Aedash_Gastro, Aedash_Neuro, Aedash_Obstetric, Aedash_Ophthalmology, Aedash_Ortho, Aedash_Paed,
         Aedash_Plastic, Aedash_Urology, Aedash_Psychiatrist, Aedash_Physician, Aedash_Um_Am, Aedash_Um_Pm, Aedash_Um_Night, Aedash_Mo_Morning1, Aedash_Mo_Morning2, 
         Aedash_Mo_Evening1, Aedash_Mo_Evening2, Aedash_Mo_Night1, Aedash_Mo_Night2, Aedash_lab1, Aedash_lab1PM, Aedash_lab2, Aedash_Cathlab, Aedash_Radiologist, 
         Aedash_Radiographer, Aedash_Maintenance, Aedash_OnLeave1, Aedash_OnLeave2, Aedash_OnLeave3, Aedash_OnLeave4, Aedash_OnLeave5, Aedash_CoverBy1, 
         Aedash_CoverBy2, Aedash_CoverBy3, Aedash_CoverBy4, Aedash_CoverBy5, Aedash_DateFilter1, Aedash_DateFilter2, Aedash_DateFilter3,
         Aedash_DateFilter4, Aedash_DateFilter5,
         Nurse_Am1, Nurse_Am2, Nurse_Am3, Nurse_Am4, Nurse_Am5, Nurse_Pm1,Nurse_Pm2, Nurse_Pm3, Nurse_Pm4, Nurse_Pm5, Nurse_Night1,Nurse_Night2, 
         Nurse_Night3, Nurse_Night4, Nurse_Night5,  Aedash_DateUpdate) 
          VALUES ('$anaesthetic','$cardiac','$cardiology','$ent','$surgeon','$nephrologist','$gastroenterologist',
          '$neurosurgeon','$obstetrician','$ophthalmology','$orthopaedic','$paediatrician','$plastic','$urologist','$psychiatrist', 
          '$physician','$um_am','$um_pm','$um_night','$Mo_morning1','$Mo_morning2','$Mo_evening1','$Mo_evening2','$Mo_night1','$Mo_night2',
          '$lab1', '$lab1PM', '$lab2', '$cath', '$radiologist','$radiographer', '$maint', '$doc_onleave1','$doc_onleave2','$doc_onleave3','$doc_onleave4',
          '$doc_onleave5','$doc_coverby1','$doc_coverby2','$doc_coverby3','$doc_coverby4','$doc_coverby5','$datefilter1','$datefilter2',
          '$datefilter3','$datefilter4','$datefilter5',
          '$Nurse_Am1','$Nurse_Am2','$Nurse_Am3','$Nurse_Am4','$Nurse_Am5','$Nurse_Pm1','$Nurse_Pm2','$Nurse_Pm3','$Nurse_Pm4','$Nurse_Pm5',
          '$Nurse_Night1','$Nurse_Night2','$Nurse_Night3','$Nurse_Night4','$Nurse_Night5','$date')");

        echo "<script>
        window.parent.postMessage('newRowInserted', '*');
        </script>";

        $_SESSION['message'] = 'Successfully update information';   
        //echo '<script>window.location.href="Phone_Edit.php?msg=success"</script>';

    }
?>
<?php include("Interface/footer.php"); ?>
<script type="text/javascript">
  $(function() {

    $('input[class="filterdate"]').daterangepicker({
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear'
        }
    });

    $('input[class="filterdate"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
    });

    $('input[class="filterdate"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });

  });
</script>