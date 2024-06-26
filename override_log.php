<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Override Vital Statistics - FitToRide</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Override Vital Statistics</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="process_register.php">
                                        <div class="mb-3">
                                            <label>Override Vital Statistics</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="email" type="text" placeholder="Enter your first name" name="email" />
                                                    <label for="email">Email Address</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="systolic" type="number" placeholder="Systolic" name="systolic_bp" />
                                                    <label for="systolic">Systolic</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="email" type="text" placeholder="Diastolic" name="diastolic_bp" />
                                                    <label for="Diastolic">Diastolic</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="heart_rate" type="number" placeholder="Systolic" name="heart_rate_bpm" />
                                                    <label for="Heart Rate">Heart Rate</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="respiration" type="text" placeholder="Respiration" name="respiration_rate" />
                                                    <label for="Respiration">Respiration</label>
                                                </div>
                                            </div>
                                        </div>    
                                        
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="respiration" type="text" placeholder="Respiration" name="hrv" />
                                                    <label for="HRV">HRV</label>
                                                </div>
                                            </div>
                                        </div>   

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="respiration" type="text" placeholder="Respiration" name="blood_oxygen_level" />
                                                    <label for="Blood Oxygen Level">Blood Oxygen Level</label>
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="respiration" type="text" placeholder="Respiration" name="ambient_temperature" />
                                                    <label for="Ambient Temperature">Ambient Temperature</label>
                                                </div>
                                            </div>
                                        </div> 
                                                                                
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="respiration" type="text" placeholder="Respiration" name="ambient_noise_level" />
                                                    <label for="Ambient Noise Level">Ambient Noise Level</label>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="respiration" type="text" placeholder="Respiration" name="previous_activity_level" />
                                                    <label for="Previous Activity Level">Previous Activity Level</label>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="mt-4 mb-0">
                                            <button class="d-grid btn btn-primary btn-block" type="submit" name="override_vitals">
                                                Submit Vital Scores
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; FitToRide <?php echo date("Y"); ?></div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>