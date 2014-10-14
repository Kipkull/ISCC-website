var table = document.getElementById("client_table");
var client_string = document.getElementById("client_string").innerHTML;
table.innerHTML = "";

var obj = $.parseJSON(client_string);
for (var i = 0 ; i < obj.length ; i++)
    {
	var counter = obj[i];
	var tr = document.createElement("tr");
	var td = document.createElement("td");
	var index = parseInt(i) + parseInt(1);
	td.innerHTML = index;
	tr.appendChild(td);

	td = document.createElement("td");
	var createA = document.createElement('a');
	var url = "https://iub.edu/~isccint/test/php/client_info.php?ISCCID=" + counter.ID; 
	createA.setAttribute('href', url);
	var div = document.createElement("div");
	div.innerHTML = counter.name;
	createA.appendChild(div);
	td.appendChild(createA);
	tr.appendChild(td);

	td = document.createElement("td");
	td.innerHTML = counter.username;
	tr.appendChild(td);

	td = document.createElement("td");
	td.innerHTML = counter.department;
	tr.appendChild(td);

	table.appendChild(tr);

    }
document.getElementById("client_string").innerHTML = "";
