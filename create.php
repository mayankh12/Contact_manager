<!DOCTYPE html>
<html>

        <?php

              include ('Work.php');

              $userName = $_POST['fname'] ;
              $userAge = $_POST['uage'] ;
              $userPhone = $_POST['unum'] ;
              $userEmail = $_POST['umail'] ;

              if (!$_POST['submit']){
                echo "All fields are required!";
              }

              else{
                $sql = "INSERT into Contacts (Full_name, Age, Phone_number, Email)
                values ('$userName', '$userAge', '$userPhone', '$userEmail')";

                  if (mysqli_query($conn, $sql)){
                  echo "Data creation successful";
                  }
                  else{
                  echo "Something went wrong!";
                  }
              }
        ?>
  <head>
    <title> Create members </title>
  </head>

   <body>
      <form action="create.php" method="POST">

          Full_name : <input type="text" name="fname" required>
          Age : <input type="number" name="uage" required>
          Phone_number : <input type="number" name="unum" required>
          Email : <input type="text" name="umail" required>
          <input type="submit" name="submit" value="Create">
      </form>
   </body>

</html>
