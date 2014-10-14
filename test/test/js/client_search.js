

function client_search (first, last, user)
{
	var jsonstrong = document.getElementById("jsonstring")
	var data = JSON.parse(jsonString);
	for (var i = 0; i < data.length ; i++)
	{
		var table_body = document.getElementById("table_body");
	    	table_body.innerHTML = "";
		    var id = data[i].id;
		    var name = data[i].last;
		    var username = data[i].username;

		    var table_body = document.getElementById("table_body");
  	 	    var url = "https://iub.edu/~isccint/test/php/client_info.php?ISCCID=" + id; 
		    var tr = document.createElement('tr');
		    var td = document.createElement('td');
		    td.innerHTML = "<a href=\"" + url + "\">    <div style=\"height:100%;width:100%\"> " + id + " </div></a>";
		    tr.appendChild(td);

		    td = document.createElement('td');
		    td.innerHTML = name;  
		    tr.appendChild(td);

		    td = document.createElement('td');
		    td.innerHTML = data[i].ContactPhone;
	            tr.appendChild(td);
		    table_body.appendChild(tr); 
	}
}



var first_name = document.getElementById ("first_name");
var last_name =   document.getElementById("last_name");
var username =  document.getElementById("username");


var client_button = document.getElementById("client");
client_button.addEventListener("click", function()	 
{
	var fisrtname = document.getElementById("firstname")
	var lastname = document.getElementById("lastname")
	url = "https://iub.edu/~isccint/test/php/client_search.php?firstname="+firstname+"&lastname" + lastname
	window.location.href = url

}
			       );

