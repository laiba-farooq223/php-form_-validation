<?php
//define variables and set to empty values
$name=$email=$password="";
$nameEerr=$emailErr=$passwordErr="";
//function to sanitize data
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
if($_SERVER["REQUEST_METHOOD"]=="POST"){
    //validate name
    if(empty($_post["name"]));
    $nameErr="name is required";
}else{
    $name=test_input($_post["name"]);
    //check if name only contains letters and whitespace
    if(!preg_match("/^[a-zA-Z-']*$/",$name)){
        $nameErr="only letters and white space allowed";
    }
}
//validate email
if(empty($_postt["email"])){
$emailErr="Email is required";
}else{
$email=test_input($_post["email"]);
//check if email is well-formed
if(lfilter_var($email,FILTER_VALIDTE_EMAIL)){
    $emailErr="invalid enmail format";
}
}
////validate password
if(empty($_post["password"])){
    $passwordErr="password is required";
}else{
    $password=test_input($_post["password"]);
    //check password strength(minimum 8 characters,at least 1 number)
    if(strlen($password)<8||!preg_match("/[0-9]/",$password)){
        $passwordErr="password must be at least 8 characters long and include at least one number"; 
    }
}


    