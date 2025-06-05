import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

function updateYearCopyright(idYearCopyright) {
    const currentYear = new Date().getFullYear();
    const yearCopyright = document.getElementById(idYearCopyright);
    yearCopyright.textContent = currentYear;
}

document.addEventListener('DOMContentLoaded', function() {
    updateYearCopyright('year-copyright');
});
