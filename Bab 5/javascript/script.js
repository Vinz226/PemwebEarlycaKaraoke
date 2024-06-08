const navbar = document.getElementById('navbar');

// Tambahkan event listener ketika halaman di-scroll
window.addEventListener('scroll', function() {
    // Jika posisi scroll lebih besar dari 50px, tambahkan class untuk mengubah warna latar belakang navbar
    if (window.scrollY > 5) {
        navbar.classList.add('navbar-bg');
    } else {
        navbar.classList.remove('navbar-bg');
    }
});

document.addEventListener("DOMContentLoaded", function() {
    const slide = document.querySelector(".carousel-slide");
    const dotsContainer = document.querySelector(".carousel-dots");
  
    const images = slide.querySelectorAll("img");
    const totalSlides = images.length;
  
    let currentSlide = 0;
  
    function showSlide(n) {
      currentSlide = (n + totalSlides) % totalSlides;
      slide.style.transform = `translateX(-${currentSlide * 100}%)`;
      updateDots();
    }
  
    function updateDots() {
      const dots = Array.from(dotsContainer.children);
      dots.forEach((dot, index) => {
        index === currentSlide ? dot.classList.add("active") : dot.classList.remove("active");
      });
    }
  
    function createDots() {
      for (let i = 0; i < totalSlides; i++) {
        const dot = document.createElement("span");
        dot.classList.add("carousel-dot");
        dotsContainer.appendChild(dot);
        dot.addEventListener("click", () => showSlide(i));
      }
      updateDots();
    }
  
    createDots();
  
    setInterval(() => {
      currentSlide++;
      showSlide(currentSlide);
    }, 3000); // Ganti gambar setiap 3 detik
  });
  
  // Function to toggle popup visibility
  function togglePopup() {
    var popup = document.getElementById("popup");
    popup.style.display = (popup.style.display === "none") ? "block" : "none";
}

document.addEventListener('DOMContentLoaded', function() {
  const openPopupBtn = document.getElementById('openPopupBtn');
  const closePopupBtn = document.getElementById('closePopupBtn');
  const popupForm = document.getElementById('popupForm');
  const myForm = document.getElementById('myForm');

  // Open popup form
  openPopupBtn.addEventListener('click', function() {
      popupForm.style.display = 'flex';
  });

  // Close popup form
  closePopupBtn.addEventListener('click', function() {
      popupForm.style.display = 'none';
  });

  // Submit form data via Ajax
  myForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent default form submission

      // Mengambil data dari form
      const formData = new FormData(myForm);

      // Mengirimkan data form menggunakan Fetch API
      fetch('member.php', {
          method: 'POST',
          body: formData
      })
      .then(response => response.json()) // Mengonversi respons ke JSON
      .then(data => {
          // Menangani respons dari server
          console.log(data); // Anda dapat menambahkan penanganan respons sesuai kebutuhan
          // Contoh: jika respons berisi pesan sukses, Anda bisa menampilkan pesan sukses kepada pengguna
          alert('Data berhasil disimpan!');
          popupForm.style.display = 'none'; // Menutup popup setelah pengiriman data berhasil
      })
      .catch(error => {
          // Menangani kesalahan jika pengiriman data gagal
          console.error('Error:', error);
          // Contoh: menampilkan pesan error kepada pengguna
          alert('Terjadi kesalahan, silakan coba lagi.');
      });
  });
});


