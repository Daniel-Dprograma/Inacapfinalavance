document.addEventListener('DOMContentLoaded', function() {
    const userIcon = document.querySelector('.user-icon');
    const cartIcon = document.querySelector('.cart-icon');
    const deseosIcon = document.querySelector('.deseos-icon');
    const divisasIcon = document.querySelector('.divisas-icon');

    // Toggle dropdown menus
    function toggleDropdown(event) {
        const dropdownMenu = event.currentTarget.querySelector('.dropdown-menu');
        const isVisible = dropdownMenu.style.display === 'block';
        document.querySelectorAll('.dropdown-menu').forEach(menu => menu.style.display = 'none');
        dropdownMenu.style.display = isVisible ? 'none' : 'block';
    }

    if (userIcon) {
        userIcon.addEventListener('click', toggleDropdown);
    }
    if (cartIcon) {
        cartIcon.addEventListener('click', toggleDropdown);
    }
    if (deseosIcon) {
        deseosIcon.addEventListener('click', toggleDropdown);
    }
    if (divisasIcon) {
        divisasIcon.addEventListener('click', toggleDropdown);
    }

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.user-cart-icons')) {
            document.querySelectorAll('.dropdown-menu').forEach(menu => menu.style.display = 'none');
        }
    });
});