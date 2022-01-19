document.querySelectorAll('.close').forEach(function(element) {
    element.onclick = function(e) {
       let parent = element.parentElement;
       parent.remove();
    }
});