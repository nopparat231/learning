
<?php

$score =0;

$line = $_GET['line']+1;
for ($i=1; $i < $line; $i++) { 

	
	if($_GET["c$i"] == $_GET["answer$i"])
	{
		$score=$score+1;
	}
	
}


?>
<script type="text/javascript">

	alert("คะแนนก่อนเรียน <?php echo $score ?> คะแนน");
	window.location.href ="watch.php?test=tt"


</script>
