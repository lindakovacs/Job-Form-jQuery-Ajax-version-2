<?php


  error_reporting(E_ALL ^ E_DEPRECATED);

  mysql_connect("localhost","root","");
  mysql_select_db("test1_ajax");

 // echo ("hi");


 // var_dump($_POST);

 //  exit();
// validate_email($email) {
//     if (empty($email) ||  !filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
//       {
//         return false;
//     }

//     else {
//       return true;
//     }
//  } 

  // define variables and initialize with empty values
  $firstname = ""; // Sender Name
  $lastname = ""; // Lastname
  $email = ""; 
  $phone_number = '';
  $message = '';
  $firstnameError = "";
  $lastnameError = "";
  $emailError = "";
  $phonenumberError="";
  $fileError ="";
  $errors = 0;
  

  $firstname=$_POST["firstname"];
  $lastname=$_POST["lastname"];
  $email=$_POST["email"];
  $phonenumber=$_POST["phonenumber"];
  $message=$_POST["message"];




  //storing file in filename variable
  // $fileName = $_FILES['file']['name'];


  //validation
if(empty($firstname) || empty($lastname) || empty($email) || empty($phonenumber))
  {
    echo "These fields are mandatory - from PHP!";
    exit();
  
  }


  // validate_email($email);

  // if (validate_email($email) == false)
  // {
  //   echo "Email not valid";
  //   exit();
  // } 



  //destination directory
  // $to="resume/".$fileName; // make sure you create this folder
  // move_uploaded_file($_FILES['file']['tmp_name'],$to); //Moves an uploaded file to a new location

  $query=mysql_query("INSERT INTO common(firstname,lastname, email, phonenumber, message) values('$firstname','$lastname','$email','$phonenumber', '$message') ");

// removed file upload for the time being
//, destination
// , '$to'

  if($query){
    echo "Success! Your details was successfully added! Thank you for sending your details.";
  }
  else{
    echo "Error in sending your details";
  }

?>
