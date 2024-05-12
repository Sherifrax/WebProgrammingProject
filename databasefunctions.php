<?php
    function getServices(){
        $conn = mysqli_connect(SERVER,DBUSER,DBPASS,DBNAME);
        if(!$conn){
            exit("Error: ".mysqli_connect_error());
        }

        $stat = "SELECT * FROM `csservice`";
        $query = mysqli_query($conn,$stat);

        $services = [];
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                $services[] = $row;
            }
        }

        mysqli_close($conn);
        return $services;
    }

    function fabricate($string){

        return $string;
    }

    function getUser($id){
        //1 - connection
        $conn  = mysqli_connect(SERVER,DBUSER,DBPASS,DBNAME);
        if(!$conn)
            exit("ERROR : ".mysqli_connect_error());
        //2- query
        $customer = [];
        $query = mysqli_query($conn,"SELECT * FROM `cscustomer` WHERE `C_ID`='$id'");
        if(mysqli_num_rows($query)>0){
            $row = mysqli_fetch_assoc($query);
            $customer = $row;
            
        }
    }

    function userLogin($username,$userpass){
        //1 - connection
        $conn  = mysqli_connect(SERVER,DBUSER,DBPASS,DBNAME);
        if(!$conn)
            exit("ERROR : ".mysqli_connect_error());
        //2- query
        $query = mysqli_query($conn,"SELECT * FROM `cscustomer` WHERE `C_UserName`='$username' AND `C_Pass`='$userpass'");
        if(mysqli_num_rows($query)>0)
        {
            $row = mysqli_fetch_assoc($query);
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $row['C_ID'];
            mysqli_close($conn);
            return true;
        }
        else
        {
            mysqli_close($conn);
            return false;
        }
    }

    function userSign($username,$useremail,$userpass){
        
        $conn = mysqli_connect(SERVER,DBUSER,DBPASS,DBNAME);
        if(!$conn){
            exit("Error : ".mysqli_connect_error());
        }

        $stat = "INSERT INTO `cscustomer`(`C_UserName`,`C_Email`,`C_Pass`) VALUES ('$username','$useremail','$userpass')";
        $query = mysqli_query($conn,$stat);

        if(mysqli_affected_rows($conn) > 0){
            mysqli_close($conn);
            return true;
        }
        mysqli_close($conn);
        return false;

    }

    function empLogin($username,$userpass){
        //1 - connection
        $conn  = mysqli_connect(SERVER,DBUSER,DBPASS,DBNAME);
        if(!$conn)
            exit("ERROR : ".mysqli_connect_error());
        //2- query
        $query = mysqli_query($conn,"SELECT * FROM `csemployee` WHERE `E_Username`='$username' AND `E_Password`='$userpass'");
        if(mysqli_num_rows($query)>0)
        {
            $row = mysqli_fetch_assoc($query);
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $row['E_ID'];
            $_SESSION['Manager'] = $row['isManager'];
            $_SESSION['Admin'] = $row['isAdmin'];
            mysqli_close($conn);
            return true;
        }
        else
        {
            mysqli_close($conn);
            return false;
        }
    }

    function logout()
    {
	    session_destroy();
    }

?>