let menu_button = document.getElementById('menu-button');
let sort = document.getElementById('sort-list');

function toggleDisplay(element) {
    if (element.classList.contains('hidden')) {
        element.classList.remove('hidden');
    } else {
        element.classList.add('hidden');
    }
}

menu_button.onclick = function(e) {
    toggleDisplay(sort);
}

document.querySelectorAll('.filter-button').forEach(function(element) {
    element.onclick = function(e) {
       let next = element.nextElementSibling;
        toggleDisplay(next);
    }
});
