// My Custom JS
document.querySelector('.language-switch button').addEventListener('click', function (e) {
   e.stopPropagation(); // Mencegah klik ini menutup dropdown
   const dropdown = this.nextElementSibling; // Elemen <ul> setelah tombol
   dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
});

// Menutup dropdown jika klik di luar
document.addEventListener('click', function () {
   const dropdown = document.querySelector('.language-switch ul');
   if (dropdown) {
       dropdown.style.display = 'none';
   }
});