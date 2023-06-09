// Dark Mode Switch
const themeSwitch = document.getElementById('theme_switch');
window.addEventListener('load', function() {
    if (themeSwitch) {
        themeToggle();
        themeSwitch.addEventListener('change', function() {
            themeSet();
        });
    }
});

function themeToggle() {
    const themeSelect = localStorage.getItem('themeSwitch') !== null && localStorage.getItem('themeSwitch') === 'dark';
    themeSwitch.checked = themeSelect;
    if (themeSelect) {
        document.body.setAttribute('data-bs-theme', 'dark');
    } else {
        document.body.setAttribute('data-bs-theme', 'light');
    }
}

function themeSet() {
    if (themeSwitch.checked) {
        document.body.setAttribute('data-bs-theme', 'dark');
        localStorage.setItem('themeSwitch', 'dark');
    } else {
        document.body.setAttribute('data-bs-theme', 'light');
        localStorage.setItem('themeSwitch', 'light');
    }
}