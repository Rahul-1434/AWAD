<?php 
    require_once "dbconn.php"; 

    $fn = $_POST["fname"]; 
    $sn = $_POST["mname"]; 
    $ln = $_POST["lname"]; 
    $surname = $_POST["surname"]; 
    $gen = $_POST["gender"];
    $dob = $_POST["dob"]; 
    $uid = $_POST["id"]; 
    $pwd = $_POST["pass"]; 
    $repwd = $_POST["repass"]; 
 
    $name = $surname.' '.$fn.' '.$sn.' '.$ln; 
    if($pwd===$repwd and $fn!=NULL && $surname!=NULL && $dob!=NULL && $uid!=NULL) 
    { 
        $sql = "insert into registration_info(name, gender, dob, userID, password)values('$name','$gen','$dob','$uid','$pwd')"; 
        if($conn->query($sql) === TRUE) 
        { 
            echo "<div style='position:absoulte;text-align:right'><a href='signin.htm' style='textdecoration:none;font-size:20px;'>signin</a></div>"; 
 
            echo "<p>Welcome ! $name <br>Congratulations ! Registered Successfully!</p>"; 
        } 
    } 
    else 
    { 
        echo "Password mismatch !"; 
        echo "<div style='top: 150px;left: 300px; position:absolute'> 
                <a href='signup.htm' style='text-decoration:none'>Click here</a> to register again 
              </div>"; 
    } 
?>