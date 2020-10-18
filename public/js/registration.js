$(document).ready(function() {
	$('#registration_form').on('submit', function(event){
		event.preventDefault()

		var fname_req = true
		var fname_char = true
		var lname_req = true
		var lname_char = true
		var address_req = true
		var gender_req = true
		var bday_req = true
		var email_req = true
		var email_valid = true
		var size_req = true

		$('.first_name').each(function(index, el) {
			let first_name = el.value
			if ($.trim(first_name) === "") {
				let error = `
					<div class="alert">
					  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
					  <strong>Danger!</strong> Your first name is required
					</div>`;
				$('#error').append(error)
				fname_req = false
			} else if (first_name.length < 3) {
				let error = `
					<div class="alert">
					  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
					  <strong>Danger!</strong> Your first name should be atleast 2-characters long
					</div>`;
				$('#error').append(error)
				fname_char = false
			}
		});
		

		$('.last_name').each(function(index, el) {
			let last_name = el.value
			if ($.trim(last_name) === "") {
				let error = `
					<div class="alert">
					  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
					  <strong>Danger!</strong> Your last name is required
					</div>`;
				$('#error').append(error)
				lname_req = false
			} else if (last_name.length < 3) {
				let error = `
					<div class="alert">
					  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
					  <strong>Danger!</strong> Your last name should be atleast 2-characters long
					</div>`;
				$('#error').append(error)
				lname_char = false
			}
		});


		$('.complete_address').each(function(index, el) {
			let complete_address = el.value
			if ($.trim(complete_address) === "") {
				let error = `
					<div class="alert">
					  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
					  <strong>Danger!</strong> Your complete address is required
					</div>`;
				$('#error').append(error)
				address_req = false
			}
		});


		$('.gender').each(function(index, el) {
			let gender = el.value
			if ($.trim(gender) === "") {
				let error = `
					<div class="alert">
					  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
					  <strong>Danger!</strong> Your gender is required
					</div>`;
				$('#error').append(error)
				gender_req = false
			}
		});


		$('.birthday').each(function(index, el) {
			let birthday = el.value
			if ($.trim(birthday) === "") {
				let error = `
					<div class="alert">
					  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
					  <strong>Danger!</strong> Your birthday is required
					</div>`;
				$('#error').append(error)
				bday_req = false
			}
		});


		$('.email_address').each(function(index, el) {
			let email_address = el.value
			if ($.trim(email_address) === "") {
				let error = `
					<div class="alert">
					  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
					  <strong>Danger!</strong> Your email address is required
					</div>`;
				$('#error').append(error)
				email_req = false
			} else if (!validateEmail(email_address)) {
				let error = `
					<div class="alert">
					  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
					  <strong>Danger!</strong> Your email should be a valid email address format
					</div>`;
				$('#error').append(error)
				email_valid = false
			}
		});


		$('.shirt_size').each(function(index, el) {
			let shirt_size = el.value
			if ($.trim(shirt_size) === "") {
				let error = `
					<div class="alert">
					  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
					  <strong>Danger!</strong> Your shirt size is required
					</div>`;
				$('#error').append(error)
				size_req = false
			}
		});

		let terms_and_condition = $('input[type="checkbox"]:checked').val()

		if (!terms_and_condition) {
			let error = `
				<div class="alert">
				  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
				  <strong>Danger!</strong> You have to agree on the Terms and Conditions
				</div>`;
			$('#error').append(error)
		}

		if (fname_req && fname_char && lname_req && lname_char && address_req && bday_req && email_req && email_valid && size_req && terms_and_condition) {
			$("#registration_form").unbind("submit").submit()
		}

	})

	function validateEmail(email) {
	    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	    return re.test(String(email).toLowerCase());
	}

	$('#add_more').on('click', function(event){
		event.preventDefault()
		let form_inputs = $('#form_inputs').html()
		$('#inputs_added').append(`<br><br><br>`+form_inputs)
	})
});