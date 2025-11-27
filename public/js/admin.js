document.addEventListener('DOMContentLoaded', function () {
    // Get all tab links
    const tabLinks = document.querySelectorAll('.nav-link'); // assume aapke tabs nav-link class me hain
    const tabPanes = document.querySelectorAll('.tab-pane');

    // Load last active tab from localStorage
    const lastActiveTab = localStorage.getItem('activeTab');
    if (lastActiveTab) {
        // Remove active from all tabs & panes
        tabLinks.forEach(link => link.classList.remove('active'));
        tabPanes.forEach(pane => pane.classList.remove('show', 'active'));

        // Activate the stored tab
        const activeLink = document.querySelector(`.nav-link[href="${lastActiveTab}"]`);
        const activePane = document.querySelector(lastActiveTab);

        if (activeLink && activePane) {
            activeLink.classList.add('active');
            activePane.classList.add('show', 'active');
        }
    }

    // Listen for tab clicks
    tabLinks.forEach(link => {
        link.addEventListener('click', function () {
            localStorage.setItem('activeTab', this.getAttribute('href'));
        });
    });
});