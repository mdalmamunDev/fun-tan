let lastScrollTop = 0;
window.addEventListener('scroll', function () {
    const header = document.getElementById('header');
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
        // Scrolling down
        header.classList.add('transform', '-translate-y-full');
    } else {
        // Scrolling up
        header.classList.remove('transform', '-translate-y-full');
    }
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
});

function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
};

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