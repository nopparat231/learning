
<?php

$choice_id = $_GET['choice_id'];
$user_id = $_GET['user_id'];

$score =0;

$line = $_GET['line']+1;
for ($i=1; $i < $line; $i++) { 

	
	if($_GET["c$i"] == $_GET["answer$i"])
	{
		$score=$score+1;
	}
	
}


?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
	
	var $ws = 'watch.php?choice_id=<?php echo $choice_id ?>&user_id=<?php echo $user_id ?>';
	alert("คะแนนก่อนเรียน <?php echo $score ?> คะแนน");

	window.location.href = ($ws);




</script>
