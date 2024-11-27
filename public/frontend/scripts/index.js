function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
}

// for FAQ
function toggleCollapse(selected) {
    // Close all other collapse items
    document.querySelectorAll('.collapse').forEach((collapse) => {
        if (collapse !== selected) {
            collapse.querySelector('.collapse-checkbox').checked = false;
        }
    });

    // Toggle the selected collapse item
    const checkbox = selected.querySelector('.collapse-checkbox');
    checkbox.checked = !checkbox.checked;
}



function scrollLay(containerId, scrollAmount) {
    const container = document.getElementById(containerId);
    container.scrollBy({
        left: scrollAmount,  // Move right
        behavior: 'smooth',  // Smooth scroll
    });
}