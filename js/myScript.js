var dropdownToggle = document.querySelectorAll('.dropdown > a');
for (var i = 0; i < dropdownToggle.length; i++) {
    dropdownToggle[i].addEventListener('click', function (event) {
        var dropdown = this.parentNode;
        if (dropdown.classList.contains('active')) {
            dropdown.classList.remove('active');
        } else {
            var activeDropdowns = document.querySelectorAll('.dropdown.active');
            for (var j = 0; j < activeDropdowns.length; j++) {
                activeDropdowns[j].classList.remove('active');
            }
            dropdown.classList.add('active');
        }
        event.preventDefault();
    });
}
document.addEventListener('click', function (event) {
    var dropdowns = document.querySelectorAll('.dropdown.active');
    for (var i = 0; i < dropdowns.length; i++) {
        if (!dropdowns[i].contains(event.target)) {
            dropdowns[i].classList.remove('active');
        }
    }
});

var dropdownSubmenuToggle = document.querySelectorAll('.sub-dropdown > a');
for (var i = 0; i < dropdownSubmenuToggle.length; i++) {
	dropdownSubmenuToggle[i].addEventListener('click', function (event) {
		var dropdownSubmenu = this.parentNode;
		if (dropdownSubmenu.classList.contains('active')) {
			dropdownSubmenu.classList.remove('active');
		} else {
			var activeDropdownSubmenus = document.querySelectorAll('.dropdown-submenu.active');
			for (var j = 0; j < activeDropdownSubmenus.length; j++) {
				activeDropdownSubmenus[j].classList.remove('active');
			}
			dropdownSubmenu.classList.add('active');
		}
		event.preventDefault();
	});
}
