<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>JOG DIGITAL INNOVATIONS</title>

    <!-- Bootstrap -->
    <link href="<?=base_url('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url('assets/admin/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url('assets/admin/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=base_url('assets/admin/vendors/iCheck/skins/flat/green.css')?>" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?=base_url('assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?=base_url('assets/admin/vendors/jqvmap/dist/jqvmap.min.css')?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?=base_url('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url('assets/admin/build/css/custom.min.css')?>" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style type="text/css">
      .login_form
      {
        background: #133b55;
      }
      body {
        color: #ffffff;
      }
      a
      {
        color: #ffffff;
      }
      .btn,.btn:hover
      {
        text-decoration: none !important;
        background: #ebb014;
        color:white;
      }
    </style>
  </head>


  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form card">
          <section class="login_content">
            <form id="login_user">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name="email" placeholder="email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-lg" >Log in</button>
                <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
               <!--  href="<?=base_url('admin/Home')?>" -->
              </div>

              <div class="clearfix"></div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
<script type="text/javascript">
$("#login_user").submit(function(e){
        e.preventDefault();
        var formData= new FormData($(this)[0]);
        $.ajax({
            url:"<?=base_url('admin/Login/checklogin')?>",
             type:"post",
             data:formData,
             contentType:false,
             processData:false,
             cache:false,
            success:function(response)
            {
               var response=JSON.parse(response);
              // alert(response.msg);
              if(response.status==1){
                window.location.href='<?=base_url('admin/Home')?>';
              }
              else if(response.status=="0"){
                alert(response.msg);
              }
            }
        });
    });
</script>