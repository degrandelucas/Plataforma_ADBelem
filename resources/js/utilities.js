function updateYearCopyright(idYearCopyright) {
    const currentYear = new Date().getFullYear();
    const yearCopyright = document.getElementById(idYearCopyright);
    yearCopyright.textContent = currentYear;
}

updateYearCopyright('year-copyright');
