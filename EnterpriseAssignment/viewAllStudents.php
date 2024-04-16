<?php
	include "connect.php";
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View All Students</title>
            <style>
                #table1, th, td
                {
                    border: 1px solid black;                
                    border-collapse: collapse;
                    padding: 0.5rem;
                }
            </style>
    </head>

    <body>
        <h1> View All Students</h1>

        <?php
        #studentID,fname,mname,lname,Semail,Pemail,address,Mtele,Htele,Wtele,nextOfKin,nextOfKinContact,program,GPA
        $query="select * from Students"; 
        $result=mysqli_query($connection,$query)or die('Error query not working');
        if($result->num_rows>0)
        { 
            echo"<table id='table1'>";
            echo"<tr><th>Student ID</th><th>Full Name</th><th>Student Email</th><th>Address</th><th> Mobile </th><th> Home </th><th> Work </th><th>Program</th></tr>";
            while($row=$result->fetch_assoc())
            { //2nd open 
                echo"<tr><td><a href='viewSingleStudent.php?id=$row[studentID]'>$row[studentID]<a/></td><td>$row[fname] $row[mname] $row[lname]</td><td>$row[Semail]</td><td>$row[address]</td><td>$row[Mtele]</td><td>$row[Htele]</td><td>$row[Wtele]</td><td>$row[program]</td></tr>";
            } //2nd close
            echo"</table";
        } //1st close
        ?>
        
    </body>
</html>