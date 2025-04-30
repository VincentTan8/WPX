document.querySelectorAll('.dropdown').forEach(li => {
    console.log("dropdown")
    const submenu = li.querySelector('.submenu');
    if (submenu) {
        console.log("submenu")
    }
    const links = submenu ? submenu.querySelectorAll('a') : [];


    // Hover (desktop) for main dropdown and nested dropdowns
    li.addEventListener('mouseover', () => {
        submenu.style.maxHeight = submenu.scrollHeight + 'px'; // Enable sliding transition
        submenu.style.opacity = '1';
        submenu.style.visibility = 'visible'; // Ensure it's visible
        links.forEach((item, index) => {
            item.style.transitionDelay = `${index * 0.1}s`; // Staggered link appearance
            item.style.opacity = '1';
        });
    });

    li.addEventListener('mouseleave', () => {
        submenu.style.maxHeight = '0'; // Collapse the dropdown
        submenu.style.opacity = '0';
        submenu.style.visibility = 'hidden'; // Hide it after collapse
        links.forEach(item => {
            item.style.transitionDelay = '0s';
            item.style.opacity = '0';
        });
    });
});

const coursedropdown = document.getElementById('course-dropdown');
const submenu = coursedropdown.querySelector('.submenu');
const links = submenu ? submenu.querySelectorAll('a') : [];
coursedropdown.addEventListener('mouseover', () => {
    submenu.style.maxHeight = submenu.scrollHeight + 'px'; // Enable sliding transition
    submenu.style.opacity = '1';
    submenu.style.visibility = 'visible'; // Ensure it's visible
    links.forEach((item, index) => {
        item.style.transitionDelay = `${index * 0.1}s`; // Staggered link appearance
        item.style.opacity = '1';
    });
});

coursedropdown.addEventListener('mouseleave', () => {
    submenu.style.maxHeight = '0'; // Collapse the dropdown
    submenu.style.opacity = '0';
    submenu.style.visibility = 'hidden'; // Hide it after collapse
    links.forEach(item => {
        item.style.transitionDelay = '0s';
        item.style.opacity = '0';
    });
});
