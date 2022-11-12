<?php 
session_start();
        if(isset($_POST['username'])){
                  include("condb.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM login 
                  WHERE  username='".$username."' 
                  AND  password='".$password."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["ID"] = $row["ID"];
                      $_SESSION["name"] = $row["name"];
                      $_SESSION["level"] = $row["level"];

                      if($_SESSION["level"]=="admin"){ 

                        Header("Location: admin.php");
                      }
                
                      if ($_SESSION["level"]=="memone"){ 

                        Header("Location: inner/11/index3.php");
                      }
                  
                  
                      if ($_SESSION["level"]=="memtwo"){ 

                        Header("Location: inner/12/index3.php");
                      }
                  
                                       
                      if ($_SESSION["level"]=="memthree"){ 

                        Header("Location: inner/13/index3.php");
                      }
                                   
                      if ($_SESSION["level"]=="memfour"){ 

                        Header("Location: inner/14/index3.php");
                      }
                                   
                      if ($_SESSION["level"]=="memfive"){ 

                        Header("Location: inner/15/index3.php");
                      }
                                   
                      if ($_SESSION["level"]=="memsix"){ 

                        Header("Location: inner/16/index3.php");
                      }
                                   
                      if ($_SESSION["level"]=="memseven"){ 

                        Header("Location: inner/17/index3.php");
                      }
                                   
                      if ($_SESSION["level"]=="memeight"){ 

                        Header("Location: inner/18/index3.php");
                      }
                                   
                      if ($_SESSION["level"]=="memnine"){ 

                        Header("Location: inner/19/index3.php");
                      }
                                   
                      if ($_SESSION["level"]=="memten"){ 

                        Header("Location: inner/20/index3.php");
                      }
                                   
                      if ($_SESSION["level"]=="memberone"){ 

                        Header("Location: inner/21/index3.php");
                      }
                                   
                      if ($_SESSION["level"]=="membertwo"){ 

                        Header("Location: inner/22/index3.php");
                      }
                  
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: login.php"); //user & password incorrect back to login again
 
        }
?>