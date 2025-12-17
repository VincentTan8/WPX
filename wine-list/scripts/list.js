function toggle(id) {
    const row = document.getElementById(id);
    row.style.display = row.style.display === 'table-row' ? 'none' : 'table-row';
}