document.addEventListener("DOMContentLoaded", function() {
    const hamburger = document.querySelector('.hamburger-menu');
    const navMenu = document.querySelector('.navigation-bar');
    const mainNavigation = document.querySelector('.main-navigation');
    const languageButton = document.querySelector('.language-switch');
    const closeMenuImage = document.querySelector('.close-menu-image');

    // Toggle menu when clicking the hamburger menu
    hamburger.addEventListener('click', function(event) {
        event.stopPropagation(); // ป้องกัน event ไหลไปที่ document
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
        languageButton.classList.toggle('active');
    });

    // Close menu when clicking the close button
    closeMenuImage.addEventListener('click', function(event) {
        event.stopPropagation();
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
        languageButton.classList.remove('active');
    });

    // Close menu when clicking outside main-navigation
    document.addEventListener('click', function(event) {
        if (!mainNavigation.contains(event.target) && !hamburger.contains(event.target)) {
            // ปิดเมนู ถ้าคลิกนอกพื้นที่ .main-navigation และ hamburger menu
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
            languageButton.classList.remove('active');
        }
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('toggle-floating');
    const wrapper = document.querySelector('.header-call-to-action-floating-wrapper');
  
    toggleButton.addEventListener('click', function (event) {
      event.stopPropagation(); // ป้องกันไม่ให้คลิกนี้ถือว่าเป็นการคลิก "ข้างนอก"
      wrapper.classList.toggle('active'); // เปิด/ปิด class
    });
  
    // ปิดเมื่อคลิกข้างนอก
    document.addEventListener('click', function (event) {
      if (!wrapper.contains(event.target)) {
        wrapper.classList.remove('active');
      }
    });
});
  

