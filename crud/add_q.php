

<?php
$connect=mysqli_connect('localhost','root','','crud');
mysqli_select_db($connect,'crud');

$conn=mysqli_connect('localhost','root','','crud');
$mysqli=new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
mysqli_select_db($conn,'crud');

$ival=1;
$answer="";


if(isset($_POST['addQ']))
{
    $question=$_POST['question'];
    $answer=$_POST['answer'];
    
  
    
    $query="INSERT INTO queries (question,answer) VALUES ('$question','$answer')";
    mysqli_query($conn,$query);       
    echo "<script> alert('Data Added Successfully!'); window.location.href='add_q.php'; </script>";


}



?>








<html>
    <head>
        <title>Create/Add Data</title>
        <link rel="stylesheet" href="stylecss.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>

      

        <div class='dashboard-app'>
            <div class='dashboard-content'>
                <div class='container'>
                <br><br>
                <a class="btn btn-warning" href="manage_q.php" style="margin:10px;">Manage Data</a>

                    <div class='card'>
                        <div class='card-header'>
                        <h5 style="color:black;"><center><b> <i style="color:black;" class="fa fa-edit"></i> Add Data </b></center></h5>


                        <form  action="" method="POST">


        <center>  <input style="margin-bottom:8px;display:inline-block; width:30%; " type="text" class="form-control"  placeholder="Question" name="question"    required></center>

         <center>  <input style="margin-bottom:8px;display:inline-block; width:30%;  " type="text" class="form-control"  placeholder="Answer" name="answer"  required></center>
<center> <button class="btn btn-primary" type="submit" name="addQ">Add Data</button>
 </center> 
</form>


<br>
 <?php 

$query3="SELECT * FROM queries";

$result3=mysqli_query($connect,$query3);
?>

<center>
         <table style="border:3px solid white;  width:auto; color:black;" id="exam" class="table table-striped">

            <thead style="background-color:powderblue; color:black;">
                <tr>
                    <th>S.L No</th>
                   <th>Question</th>
                   <th>Answer</th>
                  <!-- <th>Options</th>-->

               </tr>
             </thead>

<?php


while($row=mysqli_fetch_object($result3))

{ //$ival=1;
    ?>

<tr>
               <td><?php echo $ival;?></td>                                                            
               <td><?php echo $row->question?></td>                                                            
               <td><?php echo $row->answer?></td>                                                            
                                                                          
                                                          
    <!--<td>
<a class="btn btn-success" href="manage_q.php?edit=<?php echo $row->id?>">Edit</a>
  <a class="btn btn-danger" href="manage_q.php?delete=<?php echo $row->id?>">Delete</a>
   </td>-->
        </tr>

<?php 
$ival++;

}
 
  ?>

</table></center>




                        </div>
                        <div class='card-body'>
                          <!--<center><textarea style="width:70%;" class="form-control" placeholder="Type here..." id="" name="" rows="2" cols="50"></textarea></center>-->
                          <br>

                         <!-- <p>Your account type is: Administrator</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







          <script src="stylejs.js"></script>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

