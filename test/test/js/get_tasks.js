var task_table = document.getElementById("task_table");
//task_table.innerHTML = "";

var task_string = document.getElementById("task_string").innerHTML;


var obj = $.parseJSON(task_string);

for (var i = 0 ; i < obj.length ; i++)
    {
	var counter = obj[i];
	var tr = document.createElement("tr");
	var td = document.createElement("td");
	var index = parseInt(i) + parseInt(1);
        
	var createA = document.createElement('a');
	var url = "";
	createA.setAttribute('href', url);
	var div = document.createElement("div");
	div.innerHTML = index;
	createA.appendChild(div);
	td.appendChild(createA);
	tr.appendChild(td);
	



	td = document.createElement("td");
	td.innerHTML = counter.Assigner;
	tr.appendChild(td);

	td = document.createElement("td");
        td.innerHTML = counter.Assignee;
        tr.appendChild(td);


	td = document.createElement("td");
	td.innerHTML = counter.Assignment;
	tr.appendChild(td);


	table.appendChild(tr);

    }


document.getElementById("task_string").innerHTML = "";
