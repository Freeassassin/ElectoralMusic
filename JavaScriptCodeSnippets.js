/*

IMPORTANT REFERENCE CODE FOR JAVASCRIPT

*/

// loop code for every intervel of time 
setInterval(function(){ update(); update_requests();update_chatrooms();}, 250);

// make variable instances of document elements like divs/text boxes/buttons/etc to be referenced by methods
var requests = document.getElementById("requests");
var chatrooms = document.getElementById("chatrooms");
var msginput = document.getElementById("msginput");
var msgarea = document.getElementById("msg-area");

// a function to get the value of a cookie 
function getcookie(cname) 
{
  	var name = cname + "=";
  	var ca = document.cookie.split(';');

	for(var i=0; i<ca.length; i++) 
	{
		var c = ca[i];

		while (c.charAt(0)==' ')
		{ 
			c = c.substring(1);
		}

		if (c.indexOf(name) == 0)
		{
			return c.substring(name.length,c.length);
		}
	}
  	return "";
}

// a function to get rid of html characters get rid of sql injectors
function escapehtml(text) 
{
  return text
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;")
      .replace(/'/g, "&#039;");
}

// a function to play a sound based on a file name *using javascript injection*
function playSound(filename)
{
        var mp3Source = '<source src="' + filename + '.mp3" type="audio/mpeg">';
        var oggSource = '<source src="' + filename + '.ogg" type="audio/ogg">';
        var embedSource = '<embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3">';
        // JavaScript injection
        document.getElementById("sound").innerHTML='<audio autoplay="autoplay">' + mp3Source + oggSource + embedSource + '</audio>';
}

// a function to update the document *using JavaScript injection* based on a sql server change 
function update() 
{
	var xmlhttp= new XMLHttpRequest();
	var username = getcookie("messengerUname");
    var threadid = getcookie("ThreadId");
	var output = "";
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			var response = xmlhttp.responseText.split("\n")
			var rl = response.length
			var item = "";
			for (var i = 0; i < rl; i++) 
			{
				item = response[i].split("\\")
				if (item[1] != undefined)
				{
					if (item[0] == username)
					{
						output += "<div class=\"msgc\" style=\"margin-bottom: 30px;\"><div class=\"msg msgfrom\">" + item[1] + "</div><div class=\"msgsentby msgsentbyfrom\">Sent by " + item[0] + "</div> </div>";
					} 
					else 
					{
						output += "<div class=\"msgc\"><div class=\"msg\"> " + item[1] + "</div> <div class=\"msgarr\"></div> <div class=\"msgsentby\"><a href= 'http://theravenbox.com/combined/includes/send_request.inc.php?sentto="+item[0]+"&sentfrom="+username+"'>"+item[0]+" </a></div> </div>";
                        var res1 = item[1].charAt(0);
						
            			if(res1 =="@")
            			{
                     		check_at(item[1],item[2],username); 
                        }
                    }
				}
			}

			msgarea.innerHTML = output;
			msgarea.scrollTop = msgarea.scrollHeight;

		}
	}
    xmlhttp.open("GET","get-messages.php?username=" + username+"&ThreadId="+threadid,true);
    xmlhttp.send();
}

// play sound based on if a user has been "@"ed by another user *non-functional* 
function check_at(item1,item2,username)
{
 	var today = new Date();
	var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
	var tn = time.split(":");
    var minn = tn[1];
    var secondsn = tn[2];
    var td = item2.split(":");
    var secondsd = td[2];
    var mind = td[1];
    dif = secondsn-secondsd;
  	if (dif <=4 && dif >= -4 && minn==mind)
  	{
    	var res2 = item1.replace("@", "");
   		if(res2 == username)
   		{
			playSound("to-the-point.mp3");
	   	}
	}
}

// a funtion to update requests sent to a person from the sql server/check for new chat requests
function update_requests() 
{
	var xmlhttp=new XMLHttpRequest();
	var username = getcookie("messengerUname");
	var output = "";
	xmlhttp.onreadystatechange=function() 
	{
	  	if (xmlhttp.readyState==4 && xmlhttp.status==200) 
	  	{
	    	var response = xmlhttp.responseText.split("\n")
	    	var rl = response.length
	    	var item = "";
	    	for (var i = 0; i < rl; i++) 
	    	{
		    	item = response[i].split("\\")
		    	if (item[1] != undefined) 
	    		{
	    		    output +="<p>Request from "+item[0]+"</p><a href = 'includes/accept_req.inc.php?username="+username+"&sent_from="+item[0]+"&yorn=1'><button class = 'yes'>Accept</button></a><a href = 'includes/accept_req.inc.php?username="+username+"&sent_from="+item[0]+"&yorn=2'><button class = 'no'>Reject</button></a>";
	    		}
			}
			requests.innerHTML = output;
		}
	}
	xmlhttp.open("GET","get-requests.php?username=" + username,true);
	xmlhttp.send();
}

//Check for available chatrooms 
function update_chatrooms() 
{
  
  	var xmlhttp=new XMLHttpRequest();
  	var username = getcookie("messengerUname");
  	var output = "<p><a onclick='change_chatroom(1)'>School Thread</a></p>";
	xmlhttp.onreadystatechange=function() 
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) 
	  	{
	    	var response = xmlhttp.responseText.split("\n")
	    	var rl = response.length
	    	var item = "";

	    	for (var i = 0; i < rl; i++) 
	    	{
	    	  	item = response[i].split("\\")
	    	  	if (item[1] != undefined) 
	    	  	{
	    	    	if (item[2] != "0")
	    	    	{
	    	      	output +="<p><a onclick='change_chatroom("+item[3]+")'>IM:"+item[0]+" </a></p>";               
	    	    	}
	    	  	}
	    	}
	    	chatrooms.innerHTML = output;
	  	}
	}
	xmlhttp.open("GET","update-chatrooms.php?username=" + username,true);
	xmlhttp.send();
}

// send new messages to the database
function sendmsg() 
{
	var message = msginput.value;
  	var threadid = getcookie("ThreadId");
	if (message != "") 
    {
		var username = getcookie("messengerUname");
		var xmlhttp=new XMLHttpRequest();
    	msginput.value = "";
	  	xmlhttp.open("GET","update-messages.php?username="+username+"&message=" + message+"&ThreadId="+threadid,true);
    	xmlhttp.send();
	}
}

// change the chatroom coockie
function change_chatroom(threadid)
{
  //Change the the chatroom to a diffrent one
  document.cookie="ThreadId=" + threadid;
  update();
}

// loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict 
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;
for (i = 0; i < dropdown.length; i++) 
{
	dropdown[i].addEventListener("click", function() 
	{
		this.classList.toggle("active");
		var dropdownContent = this.nextElementSibling;
		if (dropdownContent.style.display === "block") 
		{
		  	dropdownContent.style.display = "none";
		} 
		else 
		{
		  	dropdownContent.style.display = "block";
		}
	});
}

// jquary code to change an elements class / Show/hide the sidebar
$(".sidehide").on('click',function()
{
  $('.doc').toggleClass("show");
});
//Hide the sidebar
$(".ff").on('click',function()
{
  $('.doc').toggleClass("show");
});