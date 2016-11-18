<?php

$seed=1;
if(!empty($_POST['g_seed'])) {
	$seed = $_POST['g_seed'];
}
?>


<?php

if($seed<=1) echo "
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Monday'>
		<input id='20141201' type='button' class='calendar-bottom' value='DEC 01' onclick='javascript: selectDate(20141201)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Tuesday'>
		<input  id='20141202' type='button' class='calendar-bottom' value='DEC 02' onclick='javascript: selectDate(20141202)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Wednesday'>
		<input  id='20141203' type='button' class='calendar-bottom' value='DEC 03' onclick='javascript: selectDate(20141203)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Tursday'>
		<input  id='20141204' type='button' class='calendar-bottom' value='DEC 04' onclick='javascript: selectDate(20141204)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Friday'>
		<input  id='20141205' type='button' class='calendar-bottom' value='DEC 05' onclick='javascript: selectDate(20141205)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Saturaday'>
		<input  id='20141206' type='button' class='calendar-bottom' value='DEC 06' onclick='javascript: selectDate(20141206)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Sunday'>
		<input  id='20141207' type='button' class='calendar-bottom' value='DEC 07' onclick='javascript: selectDate(20141207)'>
	</div>
	";
else if($seed==2) echo "
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Monday'>
		<input id='20141208' type='button' class='calendar-bottom' value='DEC 08' onclick='javascript: selectDate(20141208)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Tuesday'>
		<input  id='20141209' type='button' class='calendar-bottom' value='DEC 09' onclick='javascript: selectDate(20141209)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Wednesday'>
		<input  id='20141210' type='button' class='calendar-bottom' value='DEC 10' onclick='javascript: selectDate(20141210)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Tursday'>
		<input  id='20141211' type='button' class='calendar-bottom' value='DEC 11' onclick='javascript: selectDate(20141211)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Friday'>
		<input  id='20141212' type='button' class='calendar-bottom' value='DEC 12' onclick='javascript: selectDate(20141212)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Saturaday'>
		<input  id='20141213' type='button' class='calendar-bottom' value='DEC 13' onclick='javascript: selectDate(20141213)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Sunday'>
		<input  id='20141214' type='button' class='calendar-bottom' value='DEC 14' onclick='javascript: selectDate(20141214)'>
	</div>
	";
else if($seed==3) echo "
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Monday'>
		<input id='20141215' type='button' class='calendar-bottom' value='DEC 15' onclick='javascript: selectDate(20141215)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Tuesday'>
		<input  id='20141216' type='button' class='calendar-bottom' value='DEC 16' onclick='javascript: selectDate(20141216)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Wednesday'>
		<input  id='20141217' type='button' class='calendar-bottom' value='DEC 17' onclick='javascript: selectDate(20141217)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Tursday'>
		<input  id='20141218' type='button' class='calendar-bottom' value='DEC 18' onclick='javascript: selectDate(20141218)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Friday'>
		<input  id='20141219' type='button' class='calendar-bottom' value='DEC 19' onclick='javascript: selectDate(20141219)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Saturaday'>
		<input  id='20141220' type='button' class='calendar-bottom' value='DEC 20' onclick='javascript: selectDate(20141220)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Sunday'>
		<input  id='20141221' type='button' class='calendar-bottom' value='DEC 21' onclick='javascript: selectDate(20141221)'>
	</div>
	";	
else if($seed==4) echo "
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Monday'>
		<input id='20141222' type='button' class='calendar-bottom' value='DEC 22' onclick='javascript: selectDate(20141222)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Tuesday'>
		<input  id='20141223' type='button' class='calendar-bottom' value='DEC 23' onclick='javascript: selectDate(20141223)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Wednesday'>
		<input  id='20141224' type='button' class='calendar-bottom' value='DEC 24' onclick='javascript: selectDate(20141224)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Tursday'>
		<input  id='20141225' type='button' class='calendar-bottom' value='DEC 25' onclick='javascript: selectDate(20141225)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Friday'>
		<input  id='20141226' type='button' class='calendar-bottom' value='DEC 26' onclick='javascript: selectDate(20141226)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Saturaday'>
		<input  id='20141227' type='button' class='calendar-bottom' value='DEC 27' onclick='javascript: selectDate(20141227)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Sunday'>
		<input  id='20141228' type='button' class='calendar-bottom' value='DEC 28' onclick='javascript: selectDate(20141228)'>
	</div>
	";
else if($seed>=5) echo "
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Monday'>
		<input id='20141229' type='button' class='calendar-bottom' value='DEC 29' onclick='javascript: selectDate(20141229)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Tuesday'>
		<input  id='20141230' type='button' class='calendar-bottom' value='DEC 30' onclick='javascript: selectDate(20141230)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Wednesday'>
		<input  id='201412231' type='button' class='calendar-bottom' value='DEC 31' onclick='javascript: selectDate(20141231)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Tursday'>
		<input  id='20150101' type='button' class='calendar-bottom' value='Jan 01' onclick='javascript: selectDate(20150101)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Friday'>
		<input  id='20150102' type='button' class='calendar-bottom' value='Jan 02' onclick='javascript: selectDate(20150102)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Saturaday'>
		<input  id='20150103' type='button' class='calendar-bottom' value='Jan 03' onclick='javascript: selectDate(20150103)'>
	</div>
	<div class='calendar-day'>
		<input type='button' class='calendar-top' value='Sunday'>
		<input  id='20150104' type='button' class='calendar-bottom' value='Jan 04' onclick='javascript: selectDate(20150104)'>
	</div>
	";
	?>