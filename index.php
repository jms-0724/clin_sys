<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container">
    <!-- <h1>Login Form</h1> -->
    <form id="login">

    <div class="logo">
               <img src="foldr.png" alt="image">
            </div>
        <h2>VitalCare Clinic Operations Management System</h2>    
        <input type="text" name="uname" id="uname" placeholder="Username">
        <label for="uname">Username</label>
        <input type="password" name="pword" id="pword" placeholder="Password">
        <label for="pword">Password</label>
        <button type="submit">LOGIN</button> <br>
    </form>
</div>
<script src="jquery-3.7.1.min.js"></script>
<script>
        $(document).ready(function(){
            
        });
        $("#login").submit(function(e){
            e.preventDefault();
            $uname = $("#uname").val();
            $pword = $("#pword").val();
            $.ajax({
                url:"login.php",
                type:"POST",
                data: {
                    uname:$uname,
                    pword:$pword
                },
                success: function(data){
                    if(data === "admin"){
                        window.location.href = "admin/index.php";
                    } 
                     else if (data === "doctor") 
                    {
                        window.location.href = "doctor/index.php"
                    } else if (data === "pharmacist") {
                        window.location.href = "pharmacist/index.php"
                    } else {
                        alert("failed");
                    }
                    
                    
                }
                    

            })
        });
</script>

</body>
</html>
