document.querySelectorAll('.dropdown-btn').forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();

        const submenu = button.nextElementSibling;
        const links = submenu?.querySelectorAll('a') || [];

        if (!submenu || !submenu.classList.contains('submenu')) return;

        const isActive = submenu.classList.contains('active');

        // Close all submenus inside this one if it's already open
        if (isActive) {
            closeSubmenu(submenu);
        } else {
            submenu.style.maxHeight = submenu.scrollHeight + 100 + 'px'; // buffer
            submenu.style.opacity = '1';
            submenu.style.visibility = 'visible';
            links.forEach((item, index) => {
                item.style.transitionDelay = `${index * 0.1}s`;
                item.style.opacity = '1';
            });
            submenu.classList.add('active');
        }
    });
});

function closeSubmenu(submenu) {
    submenu.style.maxHeight = '0';
    submenu.style.opacity = '0';
    submenu.style.visibility = 'hidden';

    submenu.querySelectorAll('a').forEach(item => {
        item.style.transitionDelay = '0s';
        item.style.opacity = '0';
    });

    submenu.classList.remove('active');

    // Recursively close any nested submenus
    submenu.querySelectorAll('.submenu.active').forEach(nested => {
        closeSubmenu(nested);
    });
}
