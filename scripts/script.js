function sortSectionsFromRightToLeft(className) {
    // Check if the window width is less than 920 pixels
    if (window.innerWidth < 920) {
        console.log("Sorting elements...");
        var sections = document.querySelectorAll('.' + className);

        for (var i = 0; i < sections.length; i++) {
            var elements = sections[i].children;
            var elementsArray = Array.prototype.slice.call(elements);
            elementsArray.reverse();
            // Clear original HTML content
            while (sections[i].firstChild) {
                sections[i].removeChild(sections[i].firstChild);
            }
            // Append sorted elements back to the section
            for (var j = 0; j < elementsArray.length; j++) {
                sections[i].appendChild(elementsArray[j]);
            }
        }
    }
}