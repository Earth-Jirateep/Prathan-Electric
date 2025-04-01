<?php
/**
 * Template Name: Single Article
 * Description: A custom home page template for the website.
 */

get_header(); 
?>

<main id="main" class="site-main">
    
    <section class="section-pagination">
        <div class="section-pagination-wrapper">
            <a href="#" class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">หน้าแรก</p>
            </a>
            <div class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">/</p>
            </div>
            <a href="#" class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">บทความ</p>
            </a>
            <div class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">/</p>
            </div>
            <a href="#" class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">ปลั๊กเพาเวอร์ เลือกแบบไหนดี? เจาะลึกทุกประเภทและฟังก์ชัน</p>
            </a>
        </div>
    </section>

    <section class="article-content">
        <div class="article-content-wrapper">
            <div class="article-content-header">
                <h1>ปลั๊กเพาเวอร์ เลือกแบบไหนดี? เจาะลึกทุกประเภทและฟังก์ชัน</h1>
                <div class="article-content-header-detail">
                    <p class="article-content-header-date">28 พฤศจิกายน 2567</p>
                    <div class="article-content-header-pipe">|</div>
                    <p class="article-content-header-poster">By Admin</p>
                </div>
                <div class="article-content-header-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-article/single-article-image-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                </div>
            </div>
            <div class="article-content-container">
                <h2>ปลั๊กเพาเวอร์คืออะไร? ทำไมต้องใช้?</h2>
                <p>ปลั๊กเพาเวอร์ หรือที่เรียกกันติดปากว่า "ปลั๊กพ่วง" เป็นอุปกรณ์ไฟฟ้าที่ใช้เสียบปลั๊กไฟหลายๆ อันเข้ากับปลั๊กไฟเพียงอันเดียว ทำให้เราสามารถต่ออุปกรณ์ไฟฟ้าได้หลายเครื่องพร้อมกันในจุดเดียว สะดวกต่อการใช้งานและจัดระเบียบสายไฟ</p>
                <h3>ปลั๊กเพาเวอร์แบบมีสายดิน</h3>
                <p>เป็นประเภทที่พบเห็นได้ทั่วไป มีช่องเสียบปลั๊กไฟหลายช่อง เหมาะสำหรับใช้งานทั่วไปในบ้าน สำนักงาน หรือสถานที่ต่างๆ</p>
                <div class="article-content-container-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-article/single-article-image-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                </div>
                <h3>ปลั๊กเพาเวอร์แบบไม่มีสายดิน</h3>
                <p>มีช่องเสียบสายดินเพิ่มเติม ช่วยป้องกันไฟฟ้าช็อตและอุปกรณ์เสียหาย เหมาะสำหรับใช้งานกับอุปกรณ์ไฟฟ้าที่มีความละเอียดอ่อน เช่น คอมพิวเตอร์ หรืออุปกรณ์อิเล็กทรอนิกส์</p>
                <div class="article-content-container-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-article/single-article-image-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                </div>
                <h3>ปลั๊กเพาเวอร์แบบมีฟิวส์</h3>
                <p>มีฟิวส์ป้องกันกระแสไฟฟ้าเกิน ช่วยป้องกันอุปกรณ์ไฟฟ้าเสียหายจากไฟกระชาก เหมาะสำหรับใช้งานกับอุปกรณ์ไฟฟ้าที่มีราคาแพง</p>
                <div class="article-content-container-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-article/single-article-image-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                </div>
                <h3>ปลั๊กเพาเวอร์แบบมีสวิตช์ควบคุม</h3>
                <p>มีสวิตช์สำหรับเปิด-ปิดการจ่ายไฟแต่ละช่อง สามารถควบคุมการทำงานของอุปกรณ์ไฟฟ้าแต่ละเครื่องได้อย่างอิสระ</p>
                <div class="article-content-container-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-article/single-article-image-5.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                </div>
                <h3>ปลั๊กเพาเวอร์แบบมี USB</h3>
                <p>มีช่องเสียบ USB สำหรับชาร์จโทรศัพท์มือถือ แท็บเล็ต หรืออุปกรณ์อิเล็กทรอนิกส์อื่นๆ ที่ใช้พอร์ต USB สะดวกและรวดเร็ว</p>
                <h2>วิธีเลือกปลั๊กเพาเวอร์ให้เหมาะสม</h2>
                <ul>
                    <li>จำนวนช่องเสียบ: เลือกให้มีจำนวนช่องเสียบเพียงพอต่อการใช้งาน</li>
                    <li>ความยาวของสายไฟ: เลือกให้มีความยาวสายไฟที่เหมาะสมกับตำแหน่งที่ต้องการใช้งาน</li>
                    <li>กำลังไฟสูงสุด: เลือกให้มีกำลังไฟสูงสุดเพียงพอต่อการใช้งานอุปกรณ์ไฟฟ้าทั้งหมด</li>
                    <li>ฟังก์ชันเสริม: เลือกฟังก์ชันเสริมที่ต้องการ เช่น สายดิน ฟิวส์ สวิตช์ควบคุม หรือพอร์ต USB</li>
                    <li>วัสดุที่ใช้ผลิต: เลือกผลิตภัณฑ์ที่ทำจากวัสดุที่มีคุณภาพ ทนทาน และปลอดภัย</li>
                </ul>
                <h2>คำแนะนำในการใช้งานปลั๊กเพาเวอร์</h2>
                <ul>
                    <li>ไม่ควรเสียบปลั๊กไฟเกินจำนวนที่กำหนดน</li>
                    <li>ไม่ควรใช้ปลั๊กเพาเวอร์ที่ชำรุดเสียหาย</li>
                    <li>ไม่ควรวางปลั๊กเพาเวอร์ในที่ชื้นหรือใกล้แหล่งความร้อน</li>
                    <li>ควรเลือกตำแหน่งในการวางปลั๊กเพาเวอร์ที่สะดวกต่อการใช้งานและปลอดภัย</li>
                </ul>
                <h2>สรุป</h2>
                <p>การเลือกปลั๊กเพาเวอร์ให้เหมาะสมนั้นขึ้นอยู่กับความต้องการในการใช้งานและประเภทของอุปกรณ์ไฟฟ้าที่ต้องการต่อ โดยควรพิจารณาถึงจำนวนช่องเสียบ ความยาวของสายไฟ กำลังไฟสูงสุด ฟังก์ชันเสริม และวัสดุที่ใช้ผลิต เพื่อให้ได้ปลั๊กเพาเวอร์ที่ใช้งานได้อย่างปลอดภัยและมีประสิทธิภาพสูงสุด</p>
            </div>
        
        </div>

    </section>    

    <section class="section-innovation-picture">
        <div class="section-innovation-picture-wrapper">
            <div class="section-innovation-picture-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/electrical-innovation/image-electrical-innovation-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <a href="#" class="section-innovation-picture-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article/image-innovation-article.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </a>
            <div class="section-innovation-picture-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/electrical-innovation/image-electrical-innovation-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-innovation-picture-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/electrical-innovation/image-electrical-innovation-7.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
        </div>
    </section>

    <section class="section-featured-articles">
        <div class="section-featured-articles-wrapper">

            <div class="section-featured-articles-header-box">
                <h2 class="section-featured-articles-header">บทความแนะนำ</h2>
            </div>

            <div class="section-featured-articles-cover-container">
                <div class="section-featured-articles-cover">

                    <div class="section-article-content-box">
                        <div class="section-article-content-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article/image-article-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-article-content-detail-wrapper">
                            <div class="section-article-content-header-box">
                                <h3 class="section-article-content-header">ปลั๊กเพาเวอร์ แบบต่างๆ</h3>
                            </div>
                            <div class="section-article-content-paragraph-box">
                                <p class="section-article-content-paragraph">ปลั๊กเพาเวอร์ หรือ ปลั๊กไฟอุตสาหกรรม เป็นอุปกรณ์ที่ใช้เชื่อมต่ออุปกรณ์ไฟฟ้าขนาดใหญ่เข้ากับแหล่งจ่ายไฟฟ้า โดยมีหลากหลายแบบให้เลือกใช้ตามความเหมาะสมของอุปกร โดยมีหลากหลายแบบให้เลือกใช้ตามความเหมาะสมของอุปกร</p>
                            </div>
                            <div class="section-article-content-bottom-box">
                                <div class="section-article-content-date-box">
                                    <p class="section-article-content-date">23 ก.ค. 67</p>
                                </div>
                                <div class="section-article-content-read-more-box">
                                    <a href="<?php echo site_url('/single-artile/'); ?>" class="section-article-content-read-more">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-article-content-box">
                        <div class="section-article-content-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article/image-article-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-article-content-detail-wrapper">
                            <div class="section-article-content-header-box">
                                <h3 class="section-article-content-header">ปลั๊กเพาเวอร์ แบบต่างๆ</h3>
                            </div>
                            <div class="section-article-content-paragraph-box">
                                <p class="section-article-content-paragraph">ปลั๊กเพาเวอร์ หรือ ปลั๊กไฟอุตสาหกรรม เป็นอุปกรณ์ที่ใช้เชื่อมต่ออุปกรณ์ไฟฟ้าขนาดใหญ่เข้ากับแหล่งจ่ายไฟฟ้า โดยมีหลากหลายแบบให้เลือกใช้ตามความเหมาะสมของอุปกร โดยมีหลากหลายแบบให้เลือกใช้ตามความเหมาะสมของอุปกร</p>
                            </div>
                            <div class="section-article-content-bottom-box">
                                <div class="section-article-content-date-box">
                                    <p class="section-article-content-date">23 ก.ค. 67</p>
                                </div>
                                <div class="section-article-content-read-more-box">
                                    <a href="<?php echo site_url('/single-artile/'); ?>" class="section-article-content-read-more">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-article-content-box">
                        <div class="section-article-content-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article/image-article-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-article-content-detail-wrapper">
                            <div class="section-article-content-header-box">
                                <h3 class="section-article-content-header">ปลั๊กเพาเวอร์ แบบต่างๆ</h3>
                            </div>
                            <div class="section-article-content-paragraph-box">
                                <p class="section-article-content-paragraph">ปลั๊กเพาเวอร์ หรือ ปลั๊กไฟอุตสาหกรรม เป็นอุปกรณ์ที่ใช้เชื่อมต่ออุปกรณ์ไฟฟ้าขนาดใหญ่เข้ากับแหล่งจ่ายไฟฟ้า โดยมีหลากหลายแบบให้เลือกใช้ตามความเหมาะสมของอุปกร โดยมีหลากหลายแบบให้เลือกใช้ตามความเหมาะสมของอุปกร</p>
                            </div>
                            <div class="section-article-content-bottom-box">
                                <div class="section-article-content-date-box">
                                    <p class="section-article-content-date">23 ก.ค. 67</p>
                                </div>
                                <div class="section-article-content-read-more-box">
                                    <a href="<?php echo site_url('/single-artile/'); ?>" class="section-article-content-read-more">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>

    
</main>

<?php
get_footer(); 
?>
