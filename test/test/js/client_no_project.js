var client_id = document.getElementById("ISSID").value;
var key = document.getElementById("key").value;
console.log(client_id);
var a;
var length;
$.post( "https://iub.edu/~isccint/test/php/client_no_project.php", { ID: client_id, key:key }, function( data ) {
	console.log(data[0].ProjID);
	console.log(data.length);
	length = data.length;
	var project_table = document.getElementById("new_project_table");
	project_table.innerHTML = "";

	for ( i = 0 ; i < length ; i++)
	    {
		var tr = document.createElement("tr");
		var td = document.createElement("td");
		var createA = document.createElement('a');
		var projid = data[i].ProjID;
		
		var url = "https://iub.edu/~isccint/test/php/project_info.php?ProjID=" + projid;
		createA.setAttribute('href', url);
		var div = document.createElement("div");
		div.innerHTML = data[i].ProjectTitle;
		createA.appendChild(div);
		td.appendChild(createA);
                tr.appendChild(td);

		td = document.createElement("td");
		td.innerHTML = data[i].Start;
		tr.appendChild(td);
		
		td = document.createElement("td");
		td.innerHTML = data[i].Latest;
		tr.appendChild(td);

		td = document.createElement("td");
		button = document.createElement("input");
		button.setAttribute("type", "button");
		var p_id = "proid_" + i + "_" + projid; 
		button.setAttribute("id", p_id);
		button.setAttribute("value","ADD");
		button.setAttribute("class","project_add");
		td.appendChild(button);
		tr.appendChild(td);		
		


			
	
		project_table.appendChild(tr);
		
	    }
	
    }, "json");

var buttons = document.getElementsByClassName("project_add");

for (var i = 0 ; i < buttons.length; i++)
{
	var button = buttons[i];
	button.onclick = function(){
		
	}		
}


;
