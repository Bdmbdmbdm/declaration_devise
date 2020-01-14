alert("zmer :3");
$(function(){
	$("#nompren_error_message").hide();
	$("#profession_error_message").hide();
	$("#nationalite_error_message").hide();
	$("#passport_error_message").hide();

	var error_nompren;
	var error_profession;
	var error_nationalite;
	var error_passport;

	$("#form_nompren").focusout(function(){
		check_nompren();
	});
	$("#form_profession").focusout(function(){
		check_profession();
	});
	$("#form_nationalite").focusout(function(){
		check_nationalite();
	});
	$("#form_passport").focusout(function(){
		check_passport();
	});

	function check_nompren(){
		var nom = $("#form_nompren").val();
		var check = /[0-9]/g;
		var res = nom.search(check));
		if (res == 0) {
			$("#nompren_error_message").html("numéros sont interdits.");
			$("#nompren_error_message").show();
			error_nompren = true;
		}
		else{
			$("#nompren_error_message").hide();
		}
	}

	function check_profession(){
		var prof = $("#form_profession").val();
		var check = /[0-9]/g;
		var res = prof.search(check));
		if (res == 0) {
			$("#profession_error_message").html("numéros sont interdits.");
			$("#profession_error_message").show();
			error_nompren = true;
		}
		else{
			$("#profession_error_message").hide();
		}
	}

	function check_nationalite(){
		var nat = $("#form_nationalite").val();
		var check = /[0-9]/g;
		var res = nat.search(check));
		if (res == 0) {
			$("#nationalite_error_message").html("numéros sont interdits.");
			$("#nationalite_error_message").show();
			error_nompren = true;
		}
		else{
			$("#nationalite_error_message").hide();
		}
	}

	function check_passport(){
		var pass = $("#form_passport").val();
		var long = strlen(pass);
		if (long != 9) {
			$("#passport_error_message").html("format incorrect.");
			$("#passport_error_message").show();
			error_nompren = true;
			for (var i = 0; i<9 ; i++) {
				if (isNaN(pass[i])) {
					$("#passport_error_message").html("format incorrect.");
					$("#passport_error_message").show();
					error_nompren = true;
				}
			}
		}
		else{
			$("#nationalite_error_message").hide();
		}
	}
});