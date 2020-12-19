<!doctype html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
<form id="loginform" method="post">
    <div>
        Username:
        <input type="text" name="username" id="username" />
        Password:
        <input type="password" name="password" id="password" />    
        <input type="submit" name="loginBtn" id="loginBtn" value="Login" />
        <h3 id="waiting"></h3>
        <h4 id="confirm"></h4>
    </div>
</form>
<script type="text/javascript">
$(document).ready(function() {
    $('#loginform').submit(function(e) {
       $('#confirm').text('');
         $('#waiting').text('waiting...');
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'login.php',
            data: $(this).serialize(),
            success: function(response)
            {
                debugger;
                var jsonData = JSON.parse(response);

                // user is logged in successfully in the back-end
                // let's redirect
                if (jsonData == "1")
                {
                    setTimeout(function() {
                    $('#waiting').text('');
                    $('#confirm').text('Login Success');
                }, 3000);
                     
                }
                else
                {
                   setTimeout(function() {
                    $('#waiting').text('');
                    $('#confirm').text('Login Failed');
                }, 3000);
                }
           }
       });
     });
});
</script>
</body>
</html>