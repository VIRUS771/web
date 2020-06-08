<?php
session_start();
mysql_connect("localhost,root,root");
mysql_select_db("login")
$username=mysql_real_escape_string($_POST['username'])
$password=mysql_real_escape_string($_POST['password']])
if (!empty($username)){
    if (!empty($password)){
      $sql=" SELECT * FROM users Where `username` ='$username'"
      $query=mysql_query($sql);
      while ($row=mysql_fetch_array($query)) {
          $db_username=$row['username']
          $db_password=$row['password']
      }
     if ($username===$db_username && $password===$db_password) {
         $_SESSION['username']=$username
         $_SESSION['password']=$password

         header("Location: 404.html")

      }else{
          echo "erroe in login";
      }

    } else{
     echo "error in password";
    }
}else{
     echo "error in username";
}
?>





,######################################################################################
,#░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░#
,#░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░#
,#░░░░░██╗░░░██╗░██╗░██████╗░░██╗░░░██╗░░██████╗░░░░░███╗░░██╗░███████╗░████████╗░░░░░#
,#░░░░░██║░░░██║░██║░██╔══██╗░██║░░░██║░██╔════╝░░░░░████╗░██║░██╔════╝░╚══██╔══╝░░░░░#
,#░░░░░╚██╗░██╔╝░██║░██████╔╝░██║░░░██║░╚█████╗░░░░░░██╔██╗██║░█████╗░░░░░░██║░░░░░░░░#
,#░░░░░░╚████╔╝░░██║░██╔══██╗░██║░░░██║░░╚═══██╗░░░░░██║╚████║░██╔══╝░░░░░░██║░░░░░░░░#
,#░░░░░░░╚██╔╝░░░██║░██║░░██║░╚██████╔╝░██████╔╝░██╗░██║░╚███║░███████╗░░░░██║░░░░░░░░#
,#░░░░░░░░╚═╝░░░░╚═╝░╚═╝░░╚═╝░░╚═════╝░░╚═════╝░░╚═╝░╚═╝░░╚══╝░╚══════╝░░░░╚═╝░░░░░░░░#
,#░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░#
,#░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░#
,######################################################################################

Optional Settings: SmallImage, LargeImageTooltip, SmallImageTooltip,
 StartTimestamp, EndTimestamp, partySize, partyMax,