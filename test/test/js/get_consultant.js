var consultant_table = document.getElementById("consultant_table");


var client_string = document.getElementById("consultant_string").innerHTML;
consultant_table.innerHTML = "";
//document.getElementById("consultant_string").innerHTML = "";


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
	var url = "https://iub.edu/~isccint/test/php/consultant_info.php?ConsID=" + counter.ID; 
	createA.setAttribute('href', url);
	var div = document.createElement("div");
	div.innerHTML = counter.name;
	createA.appendChild(div);
	td.appendChild(createA);
	tr.appendChild(td);

	td = document.createElement("td");
	td.innerHTML = counter.role;
	tr.appendChild(td);

	td = document.createElement("td");
	td.innerHTML = counter.department;
	tr.appendChild(td);

	consultant_table.appendChild(tr);

    }


document.getElementById("consultant_string").innerHTML = "";
