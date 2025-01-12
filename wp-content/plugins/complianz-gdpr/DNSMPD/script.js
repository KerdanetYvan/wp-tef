	/**
	* Close Form
	*/
	var cmplz_close_button = document.querySelector(".cmplz-datarequest.cmplz-alert .cmplz-close");
	if ( cmplz_close_button != undefined ) {
		cmplz_close_button.addEventListener("click", function() {
			this.parentNode.style.display = 'none';
		});
	}

/**
* Submit Form
*/
let cmplz_submit_button = document.querySelector("#cmplz-datarequest-submit");
if ( cmplz_submit_button ) {
	cmplz_submit_button.addEventListener("click", function(e) {
		e.preventDefault();
		var cmplz_datarequests_request = new XMLHttpRequest();
		cmplz_datarequests_request.open('POST', cmplz_datarequests.url, true);
		let cmplz_datarequests_data = {};
		let cmplz_elements = document.querySelector('#cmplz-datarequest-form').elements;
		for (var i = 0, element; element = cmplz_elements[i++];) {
			cmplz_datarequests_data[element.name] = element.type==='checkbox' ? element.checked : element.value;
		}

		cmplz_datarequests_request.setRequestHeader('Content-type', 'application/json');
		cmplz_datarequests_request.send( JSON.stringify(cmplz_datarequests_data) );
		cmplz_datarequests_request.onreadystatechange = function() {
			if (cmplz_datarequests_request.readyState === XMLHttpRequest.DONE) {
				var response = JSON.parse(cmplz_datarequests_request.responseText);
				var cmplz_alert = document.querySelector(".cmplz-datarequest.cmplz-alert");
				if ( cmplz_alert !== undefined ) {
					cmplz_alert.querySelector("#cmplz-message").innerHTML = response.message;
					if ( response.success ) {
						document.querySelector("#cmplz-datarequest-form").style.display = 'none';
						cmplz_alert.classList.remove("cmplz-error");
						cmplz_alert.classList.add("cmplz-success");
						cmplz_alert.style.display = 'block';
						window.cmplz_deny_all();
					} else {
						cmplz_alert.classList.remove("cmplz-success");
						cmplz_alert.classList.add("cmplz-error");
						cmplz_alert.style.display = 'block';
					}
				}
			}
		};
	});
}
