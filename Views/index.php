<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="<?php echo base_url; ?>/Assets/css/styles.css" rel="stylesheet" />
        <link href="<?php echo base_url; ?>/Assets/css/sweetalert2.min.css" rel="stylesheet" />
        <script src="<?php echo base_url; ?>/Assets/js/all.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url; ?>/Assets/js/sweetalert2.all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form id="frmLogin">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">User</label>
                                                <input class="form-control py-4" id="user" name="user" type="text" placeholder="Enter your user" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="psw" name="psw" type="password" placeholder="Enter password" />
                                            </div>
                                            <div class="form-group ">
                                                <button class="btn btn-primary btn-block" type="submit" onclick="frmLogin(event)">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="<?php echo base_url; ?>/Assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url; ?>/Assets/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url; ?>/Assets/js/scripts.js"></script>
        <script src="<?php echo base_url; ?>/Assets/js/functions.js"></script>
        <script>
            const base_url = "<?php echo base_url; ?>";
        </script>
    </body>
</html>
