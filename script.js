// Ambil semua elemen yang mau dianimasikan
const elements = document.querySelectorAll('header, section, footer');

// Aktifkan animasi setelah delay
window.addEventListener('load', () => {
    elements.forEach((el, index) => {
        setTimeout(() => {
            el.classList.add('show');
        }, index * 300); // Delay antar elemen
    });
});