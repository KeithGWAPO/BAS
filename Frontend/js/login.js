function handleResize() {
    const desktopText = document.querySelectorAll('.desktop-text');
    const mobileText = document.querySelector('.mobile-text');
    if (window.innerWidth <= 768) {
        // Hide the desktop titles and show the mobile title
        desktopText.forEach(element => element.style.display = 'none');
        mobileText.style.display = 'block';
    } else {
        // Show the desktop titles and hide the mobile title
        desktopText.forEach(element => element.style.display = 'block');
        mobileText.style.display = 'none';
    }
}

// Run the function initially
handleResize();

// Add an event listener to handle window resizing
window.addEventListener('resize', handleResize);