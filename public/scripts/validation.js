const contact_form = document.querySelector("#contact-form");
contact_form.onsubmit = (event) => {
	const first_name = document.querySelector("#first-name");
	const last_name = document.querySelector("#last-name");
	if (!first_name.value.match(/^[a-z ,.'-]+$/i)) {
		first_name.classList.add("is-invalid");
		event.preventDefault();
	} else {
		first_name.classList.remove("is-invalid");
	}
	if (!last_name.value.match(/^[a-z ,.'-]+$/i)) {
		last_name.classList.add("is-invalid");
		event.preventDefault();
	} else {
		last_name.classList.remove("is-invalid");
	}
};