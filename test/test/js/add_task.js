var add_task = document.getElementById("add_task");

add_task.onclick = function(){  add_task_fun()};

var id = document.getElementById("projid").value;

function add_task_fun()
{
    var Assigner = document.getElementById("Assigner").value;
    var Assignee = document.getElementById("Assignee").value;
    var Assignment = document.getElementById("Assignment").value;

    $.post("https://iub.edu/~isccint/test/php/add_task.php",{ProjID : id, Assigner: Assigner, Assignee: Assignee, Assignment: Assignment }, function (data){

	    //show it at the last

	    
	    var length = data.length;

	    
	    var task_table = document.getElementById("task_table");
	    var task_add = document.getElementById("task_add");
	    
	    var index = length + 1;;
	    
	    var tr = document.createElement("tr");
	    var td = document.createElement("td");
	    
	    td.innerHTML = length;
	    tr.appendChild(td);

	    td = document.createElement("td");
	    td.innerHTML = Assigner;
	    tr.appendChild(td);
	    
	    td = document.createElement("td");
	    td.innerHTML = Assignee;
	    tr.appendChild(td);
	    
	    td = document.createElement("td");
	    td.innerHTML = Assignment;
	    tr.appendChild(td);

	    task_table.insertBefore(tr, task_add);
	    	    
	}, "json");
}
    
   
