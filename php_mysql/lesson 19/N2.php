<div id="test">
<p>hello</p>
</div>
<button type="submit" id="btn">  click</button>

<script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  
  <?php
  
  $a = fopen("test.txt","W+");
  $c =$_POST;
  $d =  json_encode($c);
  fwrite($a,$d);
  fclose($a);
  ?>
 
  
  <script>
   
	
	$(document).ready(function(){
		$("#btn").click(function(){
			$("#test").load("test.txt");
	
			});
		});
	
</script>
