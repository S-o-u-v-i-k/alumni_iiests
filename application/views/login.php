<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Alumni | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7CPlayfair+Display:400,400i,700,700i%7CRoboto:400,400i,500,700" rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/themify-icons/css/themify-icons.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/swiper/css/swiper.min.css" />
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
</head>
<body>
	<div class="preloader">
        <img src="<?php echo base_url(); ?>assets/images/preloader.svg" alt="Pre-loader">
    </div>
    <?php require('header.php'); ?>
    <div class="container">
    	<div class="col-12 col-md-10 col-lg-5 text-left align-items-center" style="width: 70%; margin: 0 auto;">
                <br>
				<h2>Register to Alumni Network</h2>
			</div>
            <div class="row">
			  <div class="col-12 col-md-10 col-lg-5 text-left mx-auto d-flex align-items-center" style="width: 80%; margin: 0 auto;">
                <form name="loginForm" id="loginForm" action="<?php echo base_url(); ?>Alumni/SignIn" >
                                <div class="row form-group">
                                <div class="col-sm-10 col-md-10">
                                    <label>Email Address *</label>
                                    <input type="Email" class="form-control" name="email" id="email">
                                </div>
                                </div>
                                <div class="row form-group">
                                <div class="col-sm-10 col-md-10">
                                    <label>Password *</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                            <div class="text-center mx-auto d-flex align-items-center">
                                <button class="btn btn-success loginbtn">Login</button>
                                <button class="btn btn-default">Get Registered</button>
                            </div>
                        </form>
                    </div>
                </div>     
    </div>

    <?php include('footer.php'); ?>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/jquery.form-validator.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
	<?php if($this->session->flashdata('success')){ ?>
		swal({
			title: "Congratulation!",
			text: `<?php echo $this->session->flashdata('success'); ?>`,
			icon: "success",
		});
	<?php } if($this->session->flashdata('error')){ ?>
		swal({
			title: "Oops!",
			text: `<?php echo $this->session->flashdata('error'); ?>`,
			icon: "danger",
		});
	<?php } ?>
</script>
<script>

  var config = {
        form: 'form',
        validate: {
            email: {
                'validation': "required email",
                'url': '<?php echo base_url(); ?>CRF/ReduntEmailCheck',
                'error-msg': "Enter Valid Email",
                '_data-sanitize': 'trim'
            },
            password: {
                'validation': "required custom", 
                'length': "min6",
                'error-msg': "Enter Valid Password"
            }
        }
    }  
    $.validate({
        form : '#FloginForm',
        modules : 'jsconf, security, date',
        onModulesLoaded : function() {
            $.setupValidation(config);
        },
        onError : function($form) {
        	alert('Validation of form '+$form.attr('id')+' failed!');
        },
        onSuccess : function($form) {
          //alert('The form '+$form.attr('id')+' is valid!');
          return true; // Will stop the submission of the form
        }
    });
    </script>
</body>
</html>