
 
<script>
document.addEventListener("DOMContentLoaded", () => {
    openTab(null, 'tab4'); // Display Tab 1 after page loads
});

function openTab(evt, tabName) {
    // Hide all tab contents
    const tabcontent = document.getElementsByClassName("tabcontent");
    for (let i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove active class from all tab links
    const tablinks = document.getElementsByClassName("tablinks");
    for (let i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }

    // Show the current tab content and add active class to the clicked tab link
    document.getElementById(tabName).style.display = "block";
    if (evt) {
        evt.currentTarget.classList.add("active");
    } else {
        // Set the default active tab on page load
        document.querySelector(`button[onclick="openTab(event, '${tabName}')"]`).classList.add("active");
    }

    // Load paginated content for the active tab
    switch (tabName) {
        case 'tab1':
            loadContentWithPagination('paginationTab1', 'Tab 1 Content ', 1, 5);
            break;
        case 'tab2':
            loadContentWithPagination('paginationTab2', 'Tab 2 Content ', 1, 5);
            break;
        case 'tab3':
            loadContentWithPagination('paginationTab3', 'Tab 3 Content ', 1, 5);
            break;
    }
}

function loadContentWithPagination(containerId, contentPrefix, currentPage, itemsPerPage) {
    const container = document.getElementById(containerId);
    if (!container) {
        console.error(`Container with ID ${containerId} not found.`);
        return;
    }

    const totalItems = 30; // Example total items for each tab
    const totalPages = Math.ceil(totalItems / itemsPerPage);

    container.innerHTML = ''; // Clear previous content

    // Create content for the current page
    const startItem = (currentPage - 1) * itemsPerPage + 1;
    const endItem = Math.min(startItem + itemsPerPage - 1, totalItems);
    for (let i = startItem; i <= endItem; i++) {
        const div = document.createElement('div');
        div.className = 'page-item';
        div.innerText = contentPrefix + i;
        container.appendChild(div);
    }

    // Create pagination controls
    const paginationControls = document.createElement('div');
    paginationControls.className = 'pagination-controls';

    for (let i = 1; i <= totalPages; i++) {
        const pageButton = document.createElement('button');
        pageButton.className = 'page-item' + (i === currentPage ? ' active' : '');
        pageButton.innerText = i;
        pageButton.onclick = () => loadContentWithPagination(containerId, contentPrefix, i, itemsPerPage);
        paginationControls.appendChild(pageButton);
    }

    container.appendChild(paginationControls);
}



</script>

 <script type="text/javascript">
        window.onload = function() {
            // Replace 'submitBtn' with the actual ID of your submit button
            document.getElementById('loadbtn').click();
        };
    </script>