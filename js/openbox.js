window.onload= function() {
	document.getElementById('toggler').onclick = function() {
		openbox('box', this);
		return false;
	};
};
function openbox(id, toggler) {
	var div = document.getElementById(id);
	if(div.style.display == 'block') {
		div.style.display = 'none';
		// toggler.innerHTML = 'Добавить новую запись';
	}
	else {
		div.style.display = 'block';
		// toggler.innerHTML = 'Добавить новую запись';
	}
}