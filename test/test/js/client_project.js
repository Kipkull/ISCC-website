var client_id = document.getElementById("ISSID").value;

console.log(client_id);
var a;
var length;
$.post( "https://iub.edu/~isccint/test/php/client_project.php", { ID: client_id }, function( data ) {
	console.log(data[0].ProjID);
	console.log(data.length);
	length = data.length;
	var project_table = document.getElementById("project_table");
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

		
		project_table.appendChild(tr);
		
	    }
	
    }, "json");
