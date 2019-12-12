<tbody>
	<tr>
	  <th colspan="2">Details</th>
	</tr>
	<tr>
	    <th> Plan Name </th>
	    <th>Endowment Plan</th>
	</tr>
	<tr>
	  <th> Term  </th>
	  <th>10</th>
	</tr>
	<tr>
	  <th> Age  </th>
	  <th>15</th>
	</tr>
	<tr>
	  <th> Yearly Premium </th>
	  <th>10500</th>
	</tr>
	<tr>
	  <th> Half Yearly Premium </th>
	  <th>10710</th>
	</tr>
	<tr>
	  <th> Quarterly Premium </th>
	  <th>10794</th>
	</tr>
	<tr>
	  <td colspan="2"> Please note Accident Premium and Term Rider are not 
	    included.<br> Premium quoted are standard rate and may vary at time of underwriting based on Health, Habit and Other Risks
	  </td>
	</tr>
</tbody>

<?php 
// echo $_POST['plan_name'].'<br>';
// echo $_POST['term'].'<br>';
// echo $_POST['sumAssured'].'<br>';
// echo $_POST['age'];
// die();


// require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php' );
// require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-includes/wp-db.php' );
// global $wpdb;
// echo " i m here ";
// if ((10000000 % 1000)==0)
// { echo " zero";}
// 	else {
// 	echo "one";}


// 	if( isset($_POST["plan_name"])) {
// 		$name=$_POST["plan_name"]; }else{ $name=0;}
// 	if(isset($_POST["term"]) ) {
// 		$term=$_POST["term"]; }else{ $term=0;}
// 	if(isset($_POST["sumAssured"]) ) {
// 		$sumassd=$_POST["sumAssured"]; }else{ $sumassd=0;}
// 	if(isset($_POST["age"]) ) {
// 		$age=$_POST["age"]; }else{ $age=0;}
// echo $name;
// echo $term;
// echo $sumassd;
// echo $age;
// echo "xxxx" . $sumassd;

// /* $name="Endowment Plan";
// $age=0;
// $term=15;
// $sumassd=200000;   */

// echo $age;

// $new_row="";
// $premrate=0;
// $planno=getPlan($name);


// chkSumassd($sumassd,$planno);
// $sarebate=getSARebate();


// $fivesdrafts = $wpdb->get_results( 
// 	"
// 	SELECT * 
// 	FROM wp_rate where plan=$planno and age=$age and term=$term

// 	"
// );
// foreach ( $fivesdrafts as $fivesdraft ) 
// {
//  $fivesdraft->rate;
// }
//  $premrate= $fivesdraft->rate;
//  echo $premrate;
// if ($premrate > 0){
// 	setPremium($premrate);
// }



// function getPlan($name){
// 	global $new_row;
// 	if (strcmp($name,'Endowment Plan')==0){
// 		$planno=333;
// 	}elseif( strcmp($name,'Jeevan Anand')==0){
// 		$planno=342;
// 	}elseif( strcmp($name,'Childrens Endowment Plan')==0){
// 		$planno=349;
// 	}elseif( strcmp($name,'Jeevan Saathi')==0){
// 		$planno=357;
// 	}elseif( strcmp($name,'Jeevan Tarang')==0){
// 		$planno=345;
// 	}elseif( strcmp($name,'Child Plan-Bal Mamta')==0){
// 		$planno=340;
// 	}elseif( strcmp($name,'Child Plan-Bal Sneha')==0){
// 		$planno=341;
//     }else {
// 		$planno=0;
// 		$new_row = "<tr><th> Error  </th><th> This Plan not Allowed </th>" ;
// 	}
// 	echo $new_row;
// 	return $planno;
// }

// function chkSumassd($sumassd,$planno){
// 	global $new_row;
// 	if ($planno == 333 ) {
// 		if ($sumassd > 9999 ) {
// 			if (($sumassd % 1000) == 0){
// 			}else {
// 			$new_row = $new_row . "<tr><th> Error  </th><th> Sum Assured should be in mulitiple of 1000 </th>" ;	
// 			}
// 		}
// 	}else if ($planno == 340 ) {
// 		if ($sumassd > 49999 && $sumassd < 5000001 ) {
// 			if (($sumassd % 5000) == 0){
// 			}else {
// 			$new_row = $new_row . "<tr><th> Error  </th><th> Sum Assured should be in mulitiple of 5000 </th>"; 	
// 			}
// 		}
// 	}else if ($planno == 341 ) {
// 		if ($sumassd > 49999 && $sumassd < 5000001 ) {
// 			if (($sumassd % 5000) == 0){
// 			}else {
// 			$new_row = $new_row . "<tr><th> Error  </th><th> Sum Assured should be in mulitiple of 1000 </th>" ;	
// 			}
// 		}
// 	}else if ($planno == 342 ) {
// 		if ($sumassd > 99999 ) {
// 			if (($sumassd % 10000) == 0){
// 			}else {
// 			$new_row = $new_row . "<tr><th> Error  </th><th> Sum Assured should be in mulitiple of 1000 </th>" ;	
// 			}
// 		}
// 		}else if ($planno == 345 ) {
// 		if ($sumassd > 99999 && $sumassd < 10000001 ) {
// 			if (($sumassd % 10000) == 0){
// 			}else {
// 			$new_row = $new_row . "<tr><th> Error  </th><th> Sum Assured should be in mulitiple of 1000 </th>" ;	
// 			}
// 		}
// 		}else if ($planno == 349 ) {
// 		if ($sumassd > 49999 && $sumassd < 5000001 ) {
// 			if (($sumassd % 5000) == 0){
// 			}else {
// 			$new_row = $new_row . "<tr><th> Error  </th><th> Sum Assured should be in mulitiple of 1000 </th>"; 	
// 			}
// 		}
// 		}else if ($planno == 357 ) {
// 		if ($sumassd > 199999 && $sumassd < 5000001 ) {
// 			if (($sumassd % 1000) == 0){
// 			}else {
// 			$new_row = $new_row . "<tr><th> Error  </th><th> Sum Assured should be in mulitiple of 1000 </th>" ;	
// 			}
// 		}
// } else {
// 	$new_row = $new_row . "<tr><th> Error  </th><th> Sum Assured Not allowed </th>"; 
// }
// echo $new_row;
// }


// function getSARebate(){
// 	$sarebate=0;
// if ($planno ==333 ){ 
// 	if ($sumassd > 24999 && $sumassd < 50000) 
// 	{ $sarebate=0.5; }	
// 	else if($sumassd > 49999 && $sumassd < 100000)
// 	{ $sarebate=1.0; }	
// 	else if($sumassd > 99999 && $sumassd < 200000)
// 	{ $sarebate=1.5; }
// 	else if($sumassd > 99999 && $sumassd < 200000)
// 	{ $sarebate=2.0; }
// }
// if ($planno ==340 || $planno ==341 || $planno ==349){ 
// 	if ($sumassd > 199999) 
// 	{ $sarebate=1.0; }	
// 	}
// if ($planno ==349 ){ 
// 	if ($sumassd > 199999 && $sumassd < 300000) 
// 	{ $sarebate=1.0; }	
// 	else if($sumassd > 299999)
// 	{ $sarebate=2.0; }	
// }
//   return $sarebate;
// }

// function setPremium(){
// global $premrate,$sarebate,$sumassd,$name,$term,$age,$new_row;
// $yly = $sumassd*($premrate-$sarebate)/1000;
// $hly = $sumassd*(($premrate*1.02)-$sarebate)/1000;
// $qly = $sumassd*(($premrate*1.028)-$sarebate)/1000;
// $mly = $sumassd*(($premrate*1.044)-$sarebate)/1000;

	

// if($new_row==""){
//   $new_row = "<tr><th> Plan Name </th><th>".$name."</th>"  .
// 			              "<tr><th> Term  </th><th>".$term."</th>"  .
// 						  "<tr><th> Age  </th><th>".$age."</th>"  .
// 						  "<tr><th> Yearly Premium </th><th>".$yly."</th>"  .
// 						  "<tr><th> Half Yearly Premium </th><th>".$hly."</th>"  .
// 						  "<tr><th> Quarterly Premium </th><th>".$qly."</th>"  .
// 						  "<tr><td colspan=2> Please note Accident Premium and Term Rider are not included.<br>
// 						  Premium quoted are standard rate and may vary at time of underwriting based on Health, Habit and Other Risks</td></tr>";
						   
 
 
 

// echo $new_row;
// }

// }


/* $fivesdrafts = $wpdb->get_results( 
	"
	SELECT ID, post_title 
	FROM $wpdb->posts

	"
); */
/* foreach ( $fivesdrafts as $fivesdraft ) 
{
	echo $fivesdraft->post_title;
	echo "<br>";
}
echo "1250.00"; */
?>