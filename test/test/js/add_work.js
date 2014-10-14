var add_task = document.getElementById("add_work");

add_work.onclick = function(){  add_work_fun()};

function add_work_fun()
{
    var date = document.getElementById("Date").value;
    var type  = document.getElementById("Type").value;
    var hours = document.getElementById("Hours").value;
    var note = document.getElementById("add_note").value;
    var bill = document.getElementById("Billable");
    var billable = bill.options[bill.selectedIndex].innerHTML;
    var id = document.getElementById("projid").value;

    $.post("https://iub.edu/~isccint/test/php/add_work.php",{ProjID :id, date: date, type: type, hours: hours, note : note , bill : billable}, function (data){
	    //show it at the last
		console.log(data);
	    var length = data.length;
	    var work_table  = document.getElementById("work_table");
	    var work_add = document.getElementById("work_add");
	    	    
	    var index = length + 1;;
	    
	    var tr = document.createElement("tr");
	    var td = document.createElement("td");
	    
	    td.innerHTML = index;
	    tr.appendChild(td);

	    td = document.createElement("td");
	    td.innerHTML = date;
	    tr.appendChild(td);
	    
	    td = document.createElement("td");
	    td.innerHTML = type;
	    tr.appendChild(td);
	    
	    td = document.createElement("td");
	    td.innerHTML = hours;
	    tr.appendChild(td);

	    td = document.createElement("td");
	    td.innerHTML = billable;
	    tr.appendChild(td);


	    work_table.insertBefore(tr, work_add);


	    var tr_note = document.createElement("tr");
	    td = document.createElement("td");
	    td.innerHTML = "Note:";
	    tr_note.appendChild(td);

	    td = document.createElement("td");
	    td.colSpan = "4";
	    td.innerHTML = note;
	    tr_note.appendChild(td);

	    work_table.insertBefore(tr_note, work_add);

	}, "json");
}
