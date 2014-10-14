client_search("", "", "");

var result;

var records_each_page = 20;



var exist_page_number = document.getElementById("exist_page_number")
exist_page_number.addEventListener("change", function()
	{
		var index = exist_page_number.selectedIndex;
		var value= exist_page_number.options[index].value;
		if (value != "page number")
                                     {
                                         document.getElementById("exist_count").value = parseInt(value) - 1;
                                         show_data();
                                     }
	
	}
);


//select on change 
var page_number = document.getElementById("page_number");
page_number.addEventListener("change",function()
			     {

				 var index = page_number.selectedIndex;
				 var value = page_number.options[index].value;
				 if (value != "page number")
				     {
					 document.getElementById("count").value = parseInt(value) - 1;
					 show_data();
				     }
			       
			     }
			     );

function show_data()
{
    var table_body = document.getElementById("table_body");
    table_body.innerHTML = "";
    var exist_table_body = document.getElementById("exist_table_body");
	exist_table.body.innerHTML = "";
	
	var exist_count = document.getElementById("exist_count").value;
	
	var exist_sublength = parseInt(exist_count) * records_each_page;
	ver exist_length = exist_result.length - exist_sublength;
	if(exist_length > records_each_page)
		exist_length = 20 + exist_sublength;

	for (var i = exist_sublength ; i < exist_length ; i++)
	{
            var id = exist_result[i].id;
            var name = exist_result[i].last
            var exist_table_body = document.getElementById("table_body");
            var tr = document.createElement('tr');
            var td = document.createElement('td');



            td.innerHTML = id;
            tr.appendChild(td);

            td = document.createElement('td');
            td.innerHTML = name;
            tr.appendChild(td);

            exist_table_body.appendChild(tr);
	}


    var count = document.getElementById("count").value;

    var sublength = parseInt(count) * records_each_page;
    var length = result.length - sublength;
    if (length > records_each_page)
	length = 20 + sublength;



    for (var i = sublength ; i < length ; i++ )
	{
	    var id = result[i].id;	         
	    var name = result[i].last
	    var table_body = document.getElementById("table_body"); 
	    var tr = document.createElement('tr');
	    var td = document.createElement('td');
	    


	    td.innerHTML = id;
	    tr.appendChild(td);
 
	    td = document.createElement('td');
	    td.innerHTML = name;  
	    tr.appendChild(td);

	    table_body.appendChild(tr);
	}


}

exist_table()

function exist_table()
{
     $.post( "php/client_search.php", function( data ) {
	    var table_body = document.getElementById("exist_table_body");
	    table_body.innerHTML = "";

	    exist_result = data;
	    var count = document.getElementById("exist_count").value;
	    var sublength = parseInt(count) * records_each_page;
	    var length = data.length - sublength;
	    var maximum = data.length / records_each_page + 1;
	    var select = document.getElementById("exist_page_number");
	    if (length > records_each_page)
		length = 20 + sublength;


	   	    select.innerHTML = "";
	    
	    for (var i = 1 ; i<= maximum ; i++)
		{
		    var option = document.createElement('option');
		    option.innerHTML = i;
		    select.appendChild(option);
		}

	    
	    for (var i = sublength; i < length ; i++)
		{
		    var id = data[i].id;
		    var name = data[i].last;
		    var username = data[i].username;

		    var table_body = document.getElementById("exist_table_body");
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
       
	}, "json");

}



function client_search (first, last, user)
{

     $.post( "php/client_search.php", { first_name: first, last_name : last, username : user }, function( data ) {
	    var table_body = document.getElementById("table_body");
	    table_body.innerHTML = "";

	    result = data;
	    var count = document.getElementById("count").value;
	    var sublength = parseInt(count) * records_each_page;
	    var length = data.length - sublength;
	    var maximum = data.length / records_each_page + 1;
	    var select = document.getElementById("page_number");
	    if (length > records_each_page)
		length = 20 + sublength;


	   	    select.innerHTML = "";
	    
	    for (var i = 1 ; i<= maximum ; i++)
		{
		    var option = document.createElement('option');
		    option.innerHTML = i;
		    select.appendChild(option);
		}

	    
	    for (var i = sublength; i < length ; i++)
		{
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
       
	}, "json");
}



var first_name = document.getElementById ("first_name");
var last_name =   document.getElementById("last_name");
var username =  document.getElementById("username");


var client_button = document.getElementById("client");
client_button.addEventListener("click", function()
			       {
				   client_search(first_name.value, last_name.value, username.value);
			       }
			       );





