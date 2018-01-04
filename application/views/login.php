<?php ?>
<html>
<head>

<title>Login</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"
	href="<?php echo base_url('assets/css/base.css');?>">
<!-- jQuery library -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet"
	href=" <?php echo base_url('assets/css/baseLogin.css');?> ">

</head>
<body >
<div>
   
            <div class="row" style="margin-top:10%">
                <div class="col-md-4">
                  
                </div>
                
                
                <div class="col-md-4 formContainer">
            <form method="get" id="fmoto" name="fmoto" action="" style=" margin:0 auto;width:250px"> 
                <fieldset id="Usuario"><h3>Login</h3> 
                <br>
                    <input type="text" name="tUser" id="tUser"   placeholder="User"><br><br>
                    <input type="password" name="tPass" id="tPass" placeholder="Palavra passe"/><br><br>
                    <input type="button" onclick="alert('Lerby Langa')" value="Entrar" class="btn btn-success" />
            </fieldset> 
                
            </form>
                    </div>
            <div class="col-md-4"></div>
            </div>
      
        </div>     
	<a href=" <?php echo site_url('Index_ctrl')?>">Entrar</a>


</body>
</html>