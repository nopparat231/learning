


<?php


for ($i=1; $i < 21; $i++) { 



  $id = $_REQUEST["id$i"];


  $sqla="SELECT * From testing WHERE id =".$id;
  $db_querya=mysqli_query($con,$sqla) or die(mysqli_error());
  //$resulta=mysqli_fetch_array($db_querya);

  while($resulta=mysqli_fetch_array($db_querya))
  {

    $an = $_REQUEST["answer$i"];
    $cn = $_REQUEST["c$i"];

    echo "<h3>" . $i . " )  ".$resulta['question']."</h3>";


    $cnn = $resulta["c$cn"];

    ?>

    <h3>

      <?php  echo "คำตอบของคุณ :   ".$cnn; ?>

    </h3>

    <?php  if($cn == $an) {
      echo "<h4>ผลลัพธ์ :<u> ถูก </u> </h4>";
    }elseif ($cn <> $an) {
      echo "<h4>ผลลัพธ์ :<u> ผิด </u> </h4>";
    }
    echo "<hr>";

   
  }

}


?>