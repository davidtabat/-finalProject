<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Sign Up</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <link rel="stylesheet" href="style.css">
</head> 
<body>
<div class="cont">
  <div class="form">
    <form>
      <h1>Sign Up</h1>
      <input type="text"
             name="fname"
             class="user"
             placeholder="First Name"/>
      <input type="text"
             name="lname" 
             class="pass"
             placeholder="Last Name"/>
      <input type="email"
             name="email" 
             class="pass"
             placeholder="E-mail"/>
      <div class="login">Sign up</div>
      <script>
    	$(document).ready(function(){
    	  $(".login").on('click', function(){
    	    $.ajax({type: 'POST', url: "script.php", data: $('form').serialize(),success: function(result){
            console.log(result);
    	      alert(result);
    	    }});
    	  });
    	});
      </script>
    </form>
  </div>  
</div>
</body>
</html>
