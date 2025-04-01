document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".section-select-brand-header-top-search-paragraph-box");
    const brandItems = document.querySelectorAll(".section-select-brand-header-bottom-box");
    const brandCount = document.getElementById("brand-count");
    const clearButton = document.querySelector(".section-select-brand-header-top-clear");
    const noBrandMessage = document.querySelector(".no-brand-message");

    // ฟังก์ชันอัปเดตจำนวนแบรนด์
    function updateBrandCount() {
        const visibleBrands = document.querySelectorAll(".section-select-brand-header-bottom-box:not([style*='display: none'])");
        brandCount.textContent = `(${visibleBrands.length} แบรนด์)`;
    }

    // ฟังก์ชันกรองแบรนด์ตามตัวอักษรที่เลือก
    filterButtons.forEach(button => {
        button.addEventListener("click", function () {
            document.querySelector(".section-select-brand-header-top-search-paragraph-box.active")?.classList.remove("active");
            this.classList.add("active");

            const selectedLetter = this.getAttribute("data-letter");
            let hasVisibleBrand = false;

            brandItems.forEach(item => {
                const brandLetter = item.getAttribute("data-letter");

                if (selectedLetter === "all" || brandLetter === selectedLetter) {
                    item.style.display = "flex"; // แสดงแบรนด์ที่ตรงกับตัวอักษร
                    hasVisibleBrand = true;
                } else {
                    item.style.display = "none"; // ซ่อนแบรนด์ที่ไม่ตรงกับตัวอักษร
                }
            });

            // แสดงหรือซ่อนข้อความ "ไม่พบแบรนด์"
            noBrandMessage.style.display = hasVisibleBrand ? "none" : "block";

            updateBrandCount(); // อัปเดตจำนวนแบรนด์ที่มองเห็น
        });
    });

    // ปุ่มล้างตัวกรอง
    clearButton.addEventListener("click", function () {
        brandItems.forEach(item => item.style.display = "flex"); // แสดงทุกแบรนด์
        document.querySelector(".section-select-brand-header-top-search-paragraph-box.active")?.classList.remove("active");
        filterButtons[0].classList.add("active"); // เซ็ตค่าเริ่มต้นให้เลือก "ทั้งหมด"
        noBrandMessage.style.display = "none"; // ซ่อนข้อความแจ้งเตือน
        updateBrandCount(); // อัปเดตจำนวนแบรนด์
    });

    // โหลดหน้าครั้งแรก อัปเดตจำนวนแบรนด์
    updateBrandCount();
});
