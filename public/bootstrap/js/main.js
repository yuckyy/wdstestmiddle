
document.addEventListener('click', function (event) {
    var dropdowns = document.querySelectorAll('.dropdown-menu');
    var target = event.target;
    var isDropdownClick = false;

    while (target !== null && target !== document) {
        if (target.matches('.dropdown-toggle')) {
            isDropdownClick = true;
            break;
        }
        target = target.parentNode;
    }

    if (!isDropdownClick) {
        dropdowns.forEach(function (dropdown) {
            dropdown.style.display = 'none';
        });
    }
});

var dropdowns = document.querySelectorAll('.dropdown-toggle');
dropdowns.forEach(function (dd) {
    dd.addEventListener('click', function (e) {
        var dropdownMenu = this.nextElementSibling;
        var otherDropdowns = document.querySelectorAll('.dropdown-menu');

        otherDropdowns.forEach(function (dropdown) {
            if (dropdown !== dropdownMenu && !dropdown.contains(e.target)) {
                dropdown.style.display = 'none';
            }
        });

        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';

        if (dropdownMenu.style.display === 'block') {
            otherDropdowns.forEach(function (dropdown) {
                if (dropdown !== dropdownMenu && !dropdown.contains(e.target)) {
                    dropdown.style.display = 'none';
                }
            });
        }
    });
});

document.addEventListener('click', function (event) {
    var target = event.target;
    var isInsideDropdown = false;

    while (target !== null && target !== document) {
        if (target.matches('.dropdown-toggle') || target.matches('.dropdown-menu')) {
            isInsideDropdown = true;
            break;
        }
        target = target.parentNode;
    }

    if (!isInsideDropdown) {
        dropdowns.forEach(function (dd) {
            var dropdownMenu = dd.nextElementSibling;
            dropdownMenu.style.display = 'none';
        });
    }
});
