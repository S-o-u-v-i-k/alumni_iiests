<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Alumni | Register</title>
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
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <div class="preloader">
        <img src="<?php echo base_url(); ?>assets/images/preloader.svg" alt="Pre-loader">
    </div>
    <?php require('header.php'); ?>
    <div class="container">
			<div class="text-center col-12 col-md-10 col-lg-5 text-left align-items-center" style="width: 70%; margin: 0 auto;">
                <br>
				<h2>Register to Alumni Network</h2>
			</div>
                    <div class="text-center " style="width: 80%; margin: 0 auto;">
                        <form name="loginForm" id="loginForm" role="form" action="<?php echo base_url().'Alumni/RegisterAlumni'; ?>" enctype="multipart/form-data">
                           <!--  <input type="hidden" value="0" name="loop" id="loop"> -->
                                <div class="row form-group">
                                <div class="col-sm-10 col-md-10">
                                    <label>Email Address *</label>
                                    <input type="Email" class="form-control" name="email" id="email">
                                 </div>
                                </div>
                                <div class="row form-group">
                                <div class="col-md-5">
                                    <label>Password *</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                                <div class="col-md-5">
                                    <label>Confirm Password *</label>
                                    <input type="password" class="form-control" name="cpass" id="cpass">
                                </div>
                                </div >
                                <div class="row form-group">
                                <div class="col-md-3 col-lg-3">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="fname" id="fname">
                                </div>
                                <div class="col-md-3 col-lg-4">
                                    <label>Middle Name</label>
                                    <input type="text" class="form-control" name="mname" id="mname">
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lname" id="lname">
                                </div>
                                </div>
                                <div class="row form-group">
                                <div class="col-lg-5">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" name="pnum" id="pnum">
                                </div>
                                <div class="col-lg-5">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control" name="mnum" id="mnum">
                                </div>
                                </div>
                                <div class="row form-group">
                                <div class="form-select-list col-md-5">
                                    <label>Gender</label>
                                    <select class="form-control " name="gender" id="gender">
                                    <option></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label>Date Of Birth *</label>
                                    <input type="Date" class="form-control" name="dob" id="dob">
                                </div>
                                </div>
                                <div class="row form-group">
                                <div class="col-md-5">
                                    <label>Enter Current Address</label>
                                    <textarea class="form-control" name="cadd" id="cadd"></textarea> 
                                </div>
                                <div class="col-md-5">
                                    <label>Enter Permanent Address</label>
                                    <textarea class="form-control" name="padd" id="padd"></textarea>
                                    <input type="checkbox" class="icheckbox_square" name="check" id="check"> Same as present address 
                                </div>
                                </div>
                                <div class="row form-group">
                                <div class="col-md-5">
                                    <label>Enter Current Organization</label>
                                    <input type="text" class="form-control" name="cur_org" id="cur_org">
                                </div>
                                <div class="col-md-5">
                                    <label>Enter Current Role</label>
                                    <input type="text" class="form-control" name="cur_role" id="cur_role">
                                </div>
                                </div>
                                <div class="row form-group">
                                <div class="col-md-5">
                                    <label>Enter Current Organization</label>
                                    <input type="text" class="form-control" name="cur_organization" id="cur_organization">
                                </div>
                                <div class="col-md-5">
                                    <label>Enter Current Role</label>
                                    <input type="text" class="form-control" name="cur_role" id="cur_role">
                                </div>
                                </div>
                                <div id="field">
                                 <div id="field0">   
                                <div class="row form-group">
                                <div class="form-select-list col-md-10">
                                    <label>Qualification</label>
                                    <select class="form-control custom-select-value" name="qualification0" id="qualification0">
                                    <option value=""></option>    
                                    <?php foreach ($degree as $row) { ?>    
                                    <option value="<?php echo $row->degree_name?>"><?php echo $row->degree_name?></option>
                                    <?php } ?>
                                    </select>

                                </div>
                                </div>
                                 <div class="row form-group">
                                <div class="form-select-list col-lg-10">
                                    <label>Department</label>                                    
                                    <select class="form-control custom-select-value" name="dept0" id="dept0">
                                    <option value=""></option>    
                                    <?php foreach ($dept as $row) { ?>    
                                    <option value="<?php echo $row->name ?>"><?php echo $row->name ?></option>
                                    <?php } ?>
                                    </select>    
                                </div>
                                </div>
                                </div>
                                 <div class="row form-group">
                                <div class="col-lg-5">
                                    <label>Enter Institute Name</label>
                                    <input type="text" class="form-control" name="institute" id="institute">
                                </div>
                                <div class="col-lg-5">
                                    <label>Year Of Passing</label>
                                    <select class="form-control custom-select-value" name="yop" id="yop">
                                    <option value=""></option>    
                                    <?php for ($i=2019; $i>1859; $i--) { ?>
                                     <option><?php echo $i ?></option>
                                   <?php } ?>
                                    </select> 
                                </div>
                                </div>                             
                                <!-- <div class="form-group">
                                    <a id="add-more" name="add-more" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span></a>
                                </div> -->
                                <!-- </div> -->
                                <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Profile Image * (less than 5M)</label>
                                    <input type="file" name="profile" onChange="readURL(this)" id="profile" class="form-control" accept="image/png, image/jpg, image/jpeg">
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <img src="<?php echo base_url().'assets/images/uploads/noimage.jpg'; ?>" id="pimage" class="img-responsive" style="width: 60px; height: 60px;">
                                </div>
                                <div class="col-md-3">
                                    <label>Enter your Website</label>
                                    <input type="text" class="form-control" name="website" id="website">
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">Register</button>
                                <button class="btn btn-default">Login</button>
                            </div>
                        </form>
                    </div> 
    </div>
    <?php include('footer.php'); ?>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/jquery.form-validator.min.js"></script>
<script>
  // var config = {
  //       form: 'form',
  //       validate: {
  //           fname: {
  //               'validation': "required length",
  //               'length': "3-50",
  //               'error-msg': "Enter your Firstname",
  //               '_data-sanitize': 'trim'
  //           },
  //           lname: {
  //               'validation': "required length",
  //               'length': "3-50",
  //               'error-msg': "Enter your Firstname",
  //               '_data-sanitize': 'trim'
  //           },
  //           desig: {
  //               'validation': "required length",
  //               'length': "3-50",
  //               'error-msg': "Enter your Designation",
  //               '_data-sanitize': 'trim'
  //           },
  //           org: {
  //               'validation': "Enter your organisation",
  //               'length': "3-50",
  //               'error-msg': "Enter your Firstname",
  //               '_data-sanitize': 'trim'
  //           },
  //           phone: {
  //               'validation': "required number",
  //               'error-msg': "Enter Valid Phone No (10 Digits)"
  //           },
  //           dob: {
  //               'validation': "required date",
  //               'error-msg': "Enter Date Of Birth"
  //           },
  //           email: {
  //               'validation': "required email",
  //               'error-msg': "Enter Valid Email",
  //               '_data-sanitize': 'trim'
  //           },
  //           password: {
  //               'validation': "required custom", 
  //               'length': "min6",
  //               'error-msg': "Enter Valid Password"
  //           },
  //           cpass: {
  //               'validation': "required custom", 
  //               'length': "min6",
  //               'equalTo':"#password",
  //               'error-msg': "Enter Valid Password"
  //           }
  //       }
  //   }  
    $.validate({
        form : '#FloginForm',
        modules : 'jsconf, security, date',
        onModulesLoaded : function() {
            $.setupValidation(config);
        },
        onError : function($form) {
          //alert('Validation of form '+$form.attr('id')+' failed!');
        },
        onSuccess : function($form) {
          //alert('The form '+$form.attr('id')+' is valid!');
          return true; // Will stop the submission of the form
        }
    });
    </script>
    <script>
        
        // var add=0;
        // $('#add-more').on('click', ()=>{
        //     $.ajax({
        //         url: '<?php echo base_url(); ?>Alumni/AddEducation/?cq='+(add+1),
        //         type: 'GET',
        //         async: false,
        //         success: function(data){
        //             var newIn = JSON.parse(data);
        //             var addto = "#field" + add;
        //             var addRemove = "#field" + (add);
        //             add = add + 1;
        //             $('#loop').val(add);
        //             newIn = '<div id="field'+ add +'" name="field'+ add +'"><div class="form-group">'+newIn+'</div></div>';
        //             var newInput = $(newIn);
        //             var removeBtn = '<button id="remove' + (add - 1) + '" class="btn btn-danger remove-me" ><span class="glyphicon glyphicon-remove"></span></button></div></div><div id="field">';
        //             var removeButton = $(removeBtn);
        //             $(addto).after(newInput);
        //             $(addRemove).after(removeButton);
        //             $("#field" + add).attr('data-source',$(addto).attr('data-source'));
        //             $("#count").val(add);
                    
        //             $('.remove-me').click(function(e){
        //                 e.preventDefault();
        //                 var fieldNum = this.id.substr(6,(this.id.length));
        //                 var fieldID = "#field" + fieldNum;
        //                 $(this).remove();
        //                 $(fieldID).remove();
        //             });
        //         },
        //         error: function(errors){
        //             console.log(errors);
        //         }
        //     });
        // });

        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
              $('#pimage').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
          }
        }
    </script>

</body>
</html>