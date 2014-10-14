//add client button
var add_client = document.getElementById("add_client_button");

add_client.addEventListener("click", function()
			    {
				// get post value;
				var lastname = document.getElementById("lastname").value;
				var firstname = document.getElementById("firstname").value;
				var username = document.getElementById("username").value;
				var campus_select = document.getElementById("campus");
				var campus = campus_select.options[campus_select.selectedIndex].value;
				var school_select = document.getElementById("school");
				var school = school_select.options[school_select.selectedIndex].value;
				var department = document.getElementById("depart").value;
				var status_select = document.getElementById("status");
				var status = status_select.options[status_select.selectedIndex].value;
				var rank_select = document.getElementById("rank");
				var rank = rank_select.options[rank_select.selectedIndex].value;
				var email = document.getElementById("email").value;
				var note = document.getElementById("note").value;
				console.log(lastname + "  " + firstname + " " + username + " " + campus + " " + school + " " + department + " " + status + " " + rank + " " + email);
				


				$.post( "php/client_add.php", { lastname: lastname, firstname: firstname, username:  username, campus : campus, school : school, department : department, status : status, rank : rank , email : email })
				    .done(function( data ) {
					    window.location.replace("https://iub.edu/~isccint/test/Client.html");

					});


			    }

)
