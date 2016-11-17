
var g_user_id = 0;
var g_sort_key = "room_number";
var g_num_page = 10;
var g_date="";
var g_startitem;
var g_room="";
var g_seed=1;

function msg(room, start) {
	var start_h=start+":00";
	var end_h=start+1;
	end_h = end_h+":00";
	
	var txt = "Reserve room "+room+" from "+start_h+" to "+end_h+"?";
	
    var r = confirm(txt);
    if (r == true) {
		g_user_id = document.getElementById("current-user-id").value;
	
		window.location=("reserve-redirect.php?g_date="+g_date+"&room="+room+"&start="+start+"&user="+g_user_id);
    } else {
		1+1;
    }
}

function prevWeek() {
	g_seed = g_seed-1;
	
	
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		http=new XMLHttpRequest();
	} else { // code for IE6, IE5
		http=new ActiveXObject("Microsoft.XMLHTTP");
	}

	http.onreadystatechange=function() {
		if (http.readyState==4 && http.status==200) {
		document.getElementById("the-current-week").innerHTML=http.responseText;
		}
	}

	var params = "g_seed="+g_seed;
	http.open("POST","selected-days.php",true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.setRequestHeader("Content-length", params.length);
	http.setRequestHeader("Connection", "close");
	http.send(params);

}

function nextWeek() {
	g_seed = g_seed+1;
	
	
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		http=new XMLHttpRequest();
	} else { // code for IE6, IE5
		http=new ActiveXObject("Microsoft.XMLHTTP");
	}

	http.onreadystatechange=function() {
		if (http.readyState==4 && http.status==200) {
		document.getElementById("the-current-week").innerHTML=http.responseText;
		}
	}

	var params = "g_seed="+g_seed;
	http.open("POST","selected-days.php",true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.setRequestHeader("Content-length", params.length);
	http.setRequestHeader("Connection", "close");
	http.send(params);

}

function selectRoom() {
	g_room=document.getElementById("selective-room").value;

	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		http=new XMLHttpRequest();
	} else { // code for IE6, IE5
		http=new ActiveXObject("Microsoft.XMLHTTP");
	}

	http.onreadystatechange=function() {
		if (http.readyState==4 && http.status==200) {
		document.getElementById("table-contents").innerHTML=http.responseText;
		}
	}

	var params = "g_sort_key="+g_sort_key+"&g_num_page="+g_num_page+"&g_date="+g_date+"&g_room="+g_room;
	http.open("POST","sql-query-data.php",true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.setRequestHeader("Content-length", params.length);
	http.setRequestHeader("Connection", "close");
	http.send(params);

}

function selectFloor() {
	g_room=document.getElementById("selective-floor").value;

	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		http=new XMLHttpRequest();
	} else { // code for IE6, IE5
		http=new ActiveXObject("Microsoft.XMLHTTP");
	}

	http.onreadystatechange=function() {
		if (http.readyState==4 && http.status==200) {
		document.getElementById("table-contents").innerHTML=http.responseText;
		}
	}

	var params = "g_sort_key="+g_sort_key+"&g_num_page="+g_num_page+"&g_date="+g_date+"&g_room="+g_room;
	http.open("POST","sql-query-data.php",true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.setRequestHeader("Content-length", params.length);
	http.setRequestHeader("Connection", "close");
	http.send(params);
	

	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		http2=new XMLHttpRequest();
	} else { // code for IE6, IE5
		http2=new ActiveXObject("Microsoft.XMLHTTP");
	}

	http2.onreadystatechange=function() {
		if (http2.readyState==4 && http2.status==200) {
		document.getElementById("room-select-form").innerHTML=http2.responseText;
		}
	}

	var params = "g_room="+g_room;
	http2.open("POST","option-room.php",true);
	http2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http2.setRequestHeader("Content-length", params.length);
	http2.setRequestHeader("Connection", "close");
	http2.send(params);

}

function filter(sorting) {
	
	if(sorting!=' ') g_sort_key = sorting;

	if (window.XMLHttpRequest) {
	    // code for IE7+, Firefox, Chrome, Opera, Safari
	    http=new XMLHttpRequest();
	} else { // code for IE6, IE5
	    http=new ActiveXObject("Microsoft.XMLHTTP");
	}

	http.onreadystatechange=function() {
	    if (http.readyState==4 && http.status==200) {
		document.getElementById("table-contents").innerHTML=http.responseText;
	    }
	}

	var params = "g_sort_key="+g_sort_key+"&g_num_page="+g_num_page+"&g_date="+g_date+"&g_room="+g_room;

	http.open("POST","sql-query-data.php",true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.setRequestHeader("Content-length", params.length);
	http.setRequestHeader("Connection", "close");
	http.send(params);
}

function selectDate(thedate) {
	

    var pre_g_date = g_date;
	g_date = thedate+"";


	var d = new Date();
	var yy = d.getFullYear();
	var mm = d.getMonth()+1;
	var dd = d.getUTCDate();
	var curr = yy+""+mm;
	if(dd<10) curr = curr+"0"+dd;
	else curr = curr+""+dd;
	
	if(g_date<curr) g_date=curr;
	else {
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			http=new XMLHttpRequest();
		} else { // code for IE6, IE5
			http=new ActiveXObject("Microsoft.XMLHTTP");
		}

		http.onreadystatechange=function() {
			if (http.readyState==4 && http.status==200) {
			document.getElementById("table-contents").innerHTML=http.responseText;
			}
		}

		var params = "g_sort_key="+g_sort_key+"&g_num_page="+g_num_page+"&g_date="+g_date+"&g_room="+g_room;
		http.open("POST","sql-query-data.php",true);
		http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		http.setRequestHeader("Content-length", params.length);
		http.setRequestHeader("Connection", "close");
		http.send(params);
	}
	
	
	if(pre_g_date!='') document.getElementById(pre_g_date).style.backgroundColor="#f15500";
	document.getElementById(g_date).style.backgroundColor="#FFE5CC";
}


function selectRow(num) {
	g_num_page = num;

	if (window.XMLHttpRequest) {
	    // code for IE7+, Firefox, Chrome, Opera, Safari
	    http=new XMLHttpRequest();
	} else { // code for IE6, IE5
	    http=new ActiveXObject("Microsoft.XMLHTTP");
	}

	http.onreadystatechange=function() {
	    if (http.readyState==4 && http.status==200) {
		document.getElementById("table-contents").innerHTML=http.responseText;
	    }
	}

	var params = "g_sort_key="+g_sort_key+"&g_num_page="+g_num_page+"&g_date="+g_date+"&g_room="+g_room;
	http.open("POST","sql-query-data.php",true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.setRequestHeader("Content-length", params.length);
	http.setRequestHeader("Connection", "close");
	http.send(params);

}

function navigation(nav) {

	g_startitem = nav;

	if (window.XMLHttpRequest) {
	    // code for IE7+, Firefox, Chrome, Opera, Safari
	    http=new XMLHttpRequest();
	} else { // code for IE6, IE5
	    http=new ActiveXObject("Microsoft.XMLHTTP");
	}

	http.onreadystatechange=function() {
	    if (http.readyState==4 && http.status==200) {
		document.getElementById("table-contents").innerHTML=http.responseText;
	    }
	}

	var params = "g_sort_key="+g_sort_key+"&g_num_page="+g_num_page+"&g_startitem="+g_startitem+"&g_date="+g_date+"&g_room="+g_room;
	http.open("POST","sql-query-data.php",true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	http.setRequestHeader("Content-length", params.length);
	http.setRequestHeader("Connection", "close");
	http.send(params);

}

