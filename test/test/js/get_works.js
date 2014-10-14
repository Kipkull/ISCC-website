var work_table = document.getElementById("work_table");
//work_table.innerHTML = "";

var work_string = document.getElementById("work_string").innerHTML;

var work_add = document.getElementById("work_add");

var work_note = document.getElementById("work_note_add");
var note_content = document.getElementById("work_note_content");
work_table.innerHTML = "";
work_table.appendChild(work_add);
work_table.appendChild(work_note);
work_table.appendChild(note_content);
var obj = $.parseJSON(work_string);
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
	td.innerHTML = counter.date;
	tr.appendChild(td);

	td = document.createElement("td");
        td.innerHTML = counter.type;
        tr.appendChild(td);


	td = document.createElement("td");
	td.innerHTML = counter.hours;
	tr.appendChild(td);
	

	td = document.createElement("td");
	td.innerHTML = counter.billable;
	tr.appendChild(td);

	work_table.insertBefore(tr,work_add);

	var tr_note = document.createElement("tr");
	td = document.createElement("td");
	td.innerHTML = "Note:";
	tr_note.appendChild(td);

	td = document.createElement("td");
	td.colSpan = "4";
	td.innerHTML = counter.note;
	tr_note.appendChild(td);

	work_table.insertBefore(tr_note, work_add);



    }


document.getElementById("work_string").innerHTML = "";
