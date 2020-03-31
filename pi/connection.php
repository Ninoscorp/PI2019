<?php
/** * Created by PhpStorm. * User: Spot_PC * Date: 08-Apr-17 * Time: 17:59 *//*
Attempt MySQL server connection. Assuming you are running
MySQLserver with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "classicmodels");
//Check connection
//if($link === false){die("ERROR: Could not connect. " . mysqli_connect_error());}
 //Check if the paramerter is set and it is not equal to NULL
 if(isset($_POST['queryTextBox']) && $_POST['queryTextBox'] != NULL){
   //now load the variable$insertedQuery = $_POST['queryTextBox'];
   //Execute the query and store in $result
   $sql = $_POST["queryTextBox"];
   if($result = mysqli_query($link, $sql)){
     if(mysqli_num_rows($result) > 0){
       echo "<table>";
       echo "<tr>";
       //            echo "<th>customerNumber</th>";
       echo "<th>customerName</th>";
       echo "<th>contactLastName</th>";
       echo "<th>contactFirstName</th>";
       echo "</tr>";
       while($row = mysqli_fetch_array($result)){
         echo "<tr>";
         //              echo "<td>" . $row['customerNumber'] . "</td>";
         echo "<td>" . $row['customerName'] . "</td>";
         echo "<td>" . $row['contactLastName'] . "</td>";
         echo "<td>" . $row['contactFirstName'] . "</td>";
         echo "<tr>";}
         echo "</table>";
         mysqli_free_result($result);}
         else{echo "No records matching your query were found.";}    } else{echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
       }
       mysqli_close($link);
     }else
     ?>
     
