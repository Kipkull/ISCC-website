var consultant_id = document.getElementById("ConsID").value;

var result;


$.post("https://iub.edu/~isccint/test/php/consultant_project.php" , { ID: consultant_id}, function(data){
	result = data;
	var length = data.length;
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


var filter_button = document.getElementById("filter");
filter_button.onclick = function(){ filter_function();  }
function filter_function()
{
	 var project_table = document.getElementById("project_table");
	project_table.innerHTML = "";
	
var start = document.getElementById("start").value;
var end = document.getElementById("end").value;

	

	console.log(result);
	for ( i = 0; i< result.length; i ++)
	{
		var hours = parseInt(result[i].Hours);
		console.log (hours);
		console.log(start);
		console.log(end);
		if ( hours > parseInt(start) && hours < parseInt(end))
			{
			console.log("succ");
			 var tr = document.createElement("tr");
	                var td = document.createElement("td");
        	        var createA = document.createElement('a');
               		 var projid = result[i].ProjID;

                var url = "https://iub.edu/~isccint/test/php/project_info.php?ProjID=" + projid;
                createA.setAttribute('href', url);
                var div = document.createElement("div");
                div.innerHTML = result[i].ProjectTitle;
                createA.appendChild(div);
                td.appendChild(createA);
                tr.appendChild(td);

                td = document.createElement("td");
                td.innerHTML =result[i].Start;
                tr.appendChild(td);

                td = document.createElement("td");
                td.innerHTML = result[i].Latest;
                tr.appendChild(td);


                project_table.appendChild(tr);








				
			}
	}
	




}




