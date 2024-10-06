const sidebar = document.getElementById('sidebar');

sidebar.addEventListener('mouseenter', () => {
    sidebar.style.width = '250px'; // Expand on hover
});

sidebar.addEventListener('mouseleave', () => {
    sidebar.style.width = '60px'; // Collapse when mouse leaves
});
