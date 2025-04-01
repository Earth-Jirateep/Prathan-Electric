document.addEventListener('DOMContentLoaded', function () {
    const homeCategoryWrapper = document.getElementById('home-category-wrapper');
    const categoryBoxes = document.querySelectorAll('.section-our-products-item-select-box');
    const categories = document.querySelectorAll('.section-our-products-item-more-information-container');
    
    // ดึงค่าหมวดหมู่เริ่มต้นจาก data-attribute ใน HTML
    const defaultCategory = homeCategoryWrapper.getAttribute('data-default-category') || "ทั้งหมด"; 

    // ฟังก์ชันกำหนดค่าเริ่มต้น
    function setDefaultCategory() {
        updateCategoryDisplay(defaultCategory);
    }

    // ฟังก์ชันอัปเดตการแสดงผลตามหมวดหมู่
    function updateCategoryDisplay(selectedCategory) {
        let found = false; // ตัวแปรตรวจสอบว่าพบข้อมูลหรือไม่

        // อัปเดต class active ในหมวดหมู่ที่เลือก
        categoryBoxes.forEach(box => {
            const categoryName = box.querySelector('.section-our-products-item-select-paragraph').textContent.trim();
            if (categoryName === selectedCategory) {
                box.classList.add('active'); // เพิ่ม class active
            } else {
                box.classList.remove('active'); // ลบ class active
            }
        });
    }

    // เรียกใช้งานฟังก์ชันกำหนดค่าเริ่มต้น
    setDefaultCategory();

    // เมื่อคลิกที่หมวดหมู่
    categoryBoxes.forEach(box => {
        box.addEventListener('click', function () {
            const selectedCategory = box.querySelector('.section-our-products-item-select-paragraph').textContent.trim();
            updateCategoryDisplay(selectedCategory); // อัปเดตการแสดงผลตามหมวดหมู่ที่เลือก
        });
    });
});


document.addEventListener('DOMContentLoaded', function () {
    // เลือกทุก element ที่มี class 'section-frequently-asked-questions-content-box'
    const faqBoxes = document.querySelectorAll('.section-frequently-asked-questions-content-box');

    faqBoxes.forEach(box => {
        box.addEventListener('click', function () {
            // เช็คว่ามี class 'active' อยู่หรือไม่
            if (box.classList.contains('active')) {
                // ถ้ามีให้ลบ class 'active'
                box.classList.remove('active');
            } else {
                // ถ้ายังไม่มีให้เพิ่ม class 'active'
                box.classList.add('active');
            }
        });
    });
});

