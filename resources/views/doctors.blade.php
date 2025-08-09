<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الأطباء - مستشفى السلام</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header Styles */
        header {
            background-color: #005792;
            color: white;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-left: 10px;
            font-size: 28px;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav ul li a:hover,
        nav ul li a.active {
            color: #64b5f6;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 87, 146, 0.8), rgba(0, 87, 146, 0.8)), url('');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            max-width: 800px;
            margin: 0 auto 30px;
        }

        .search-box {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            background-color: white;
            border-radius: 50px;
            overflow: hidden;
        }

        .search-box input {
            flex: 1;
            border: none;
            padding: 15px 25px;
            font-size: 16px;
            font-family: 'Tajawal', sans-serif;
        }

        .search-box button {
            background-color: #64b5f6;
            color: white;
            border: none;
            padding: 0 25px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-box button:hover {
            background-color: #42a5f5;
        }

        /* Section Styles */
        section {
            padding: 60px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 36px;
            color: #005792;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: #64b5f6;
        }

        .section-title p {
            font-size: 18px;
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Doctors Grid */
        .doctors-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .doctor-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .doctor-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .doctor-image {
            height: 250px;
            overflow: hidden;
        }

        .doctor-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .doctor-card:hover .doctor-image img {
            transform: scale(1.1);
        }

        .doctor-info {
            padding: 25px;
        }

        .doctor-name {
            font-size: 22px;
            font-weight: 700;
            color: #005792;
            margin-bottom: 5px;
        }

        .doctor-specialty {
            color: #64b5f6;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .doctor-bio {
            color: #666;
            margin-bottom: 15px;
            font-size: 15px;
        }

        .doctor-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            font-size: 14px;
            color: #777;
        }

        .doctor-meta span {
            display: flex;
            align-items: center;
        }

        .doctor-meta i {
            margin-left: 5px;
            color: #64b5f6;
        }

        .doctor-actions {
            display: flex;
            justify-content: space-between;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #005792;
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background-color: #004575;
        }

        .btn-outline {
            background-color: transparent;
            color: #005792;
            border: 1px solid #005792;
        }

        .btn-outline:hover {
            background-color: #005792;
            color: white;
        }

        /* Features Section */
        .features {
            background-color: #f0f7ff;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            font-size: 40px;
            color: #64b5f6;
            margin-bottom: 20px;
        }

        .feature-title {
            font-size: 20px;
            font-weight: 700;
            color: #005792;
            margin-bottom: 10px;
        }

        .feature-description {
            color: #666;
            font-size: 15px;
        }

        /* Role Section */
        .role-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .role-text h3 {
            font-size: 28px;
            color: #005792;
            margin-bottom: 20px;
        }

        .role-text p {
            margin-bottom: 20px;
            color: #555;
        }

        .role-list {
            list-style: none;
            margin-bottom: 30px;
        }

        .role-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }

        .role-list li i {
            color: #64b5f6;
            margin-left: 10px;
            margin-top: 5px;
        }

        .role-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .role-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Appointment Section */
        .appointment {
            background: linear-gradient(rgba(0, 87, 146, 0.9), rgba(0, 87, 146, 0.9)), url('https://sfile.chatglm.cn/images-ppt/2ced2028bc19.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .appointment-form {
            max-width: 800px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 10px;
            backdrop-filter: blur(5px);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: none;
            border-radius: 5px;
            font-family: 'Tajawal', sans-serif;
            font-size: 16px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .btn-submit {
            background-color: #64b5f6;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: 500;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        .btn-submit:hover {
            background-color: #42a5f5;
        }

        /* Footer */
        footer {
            background-color: #003d6b;
            color: white;
            padding: 40px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-column h3 {
            font-size: 20px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50px;
            height: 2px;
            background-color: #64b5f6;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: #64b5f6;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #ccc;
            font-size: 14px;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .role-content {
                grid-template-columns: 1fr;
            }

            .role-image {
                order: -1;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
            }

            nav ul {
                margin-top: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            nav ul li {
                margin: 5px 10px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .doctors-grid {
                grid-template-columns: 1fr;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <i class="fas fa-hospital"></i>
                <span>مستشفى السلام</span>
            </div>
            <nav>
                <ul>
                    <li><a href="/">الرئيسية</a></li>
                    <li><a href="services">الأقسام الطبية</a></li>
                    <li><a href="doctors">الأطباء</a></li>
                    <li><a href="login">تسجيل الدخول</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>فريقنا الطبي المتميز</h1>
            <p>نقدم لكم أفضل الأطباء المتخصصين ذوي الخبرة والكفاءة العالية لتقديم الرعاية الصحية المتكاملة</p>
            <div class="search-box">
                <input type="text" placeholder="ابحث عن طبيب حسب التخصص أو الاسم...">
                <button type="button"><i class="fas fa-search"></i> بحث</button>
            </div>
        </div>
    </section>

    <!-- Doctors Section -->
    <section class="doctors">
        <div class="container">
            <div class="section-title">
                <h2>الأطباء المتخصصون</h2>
                <p>تعرف على فريقنا الطبي المتميز من ذوي الخبرة والكفاءة في مختلف التخصصات الطبية</p>
            </div>
            <div class="doctors-grid">
                <!-- Doctor Card 1 -->
                <div class="doctor-card">
                    <div class="doctor-image">
                        <img src="../d.ahmad muhamad.png" alt="د.عيسى مقطفي">
                    </div>
                    <div class="doctor-info">
                        <h3 class="doctor-name">د.عيسى مقطفي</h3>
                        <p class="doctor-specialty">استشاري جراحة القلب المفتوح</p>
                        <p class="doctor-bio">خبرة تزيد عن 15 عاماً في جراحات القلب المعقدة وإجراء أكثر من 2000 عملية ناجحة.</p>
                        <div class="doctor-meta">
                            <span>رقم التواصل : 443345456656</span>
                        </div>

                    </div>
                </div>

                <!-- Doctor Card 2 -->
                <div class="doctor-card">
                    <div class="doctor-image">
                        <img src="C:\Users\Osama Alfares\Desktop\Al Salam Hospital\doctor2.jpg" alt="د. سارة أحمد">
                    </div>
                    <div class="doctor-info">
                        <h3 class="doctor-name">د. سارة أحمد</h3>
                        <p class="doctor-specialty">استشارية أمراض النساء والتوليد</p>
                        <p class="doctor-bio">متخصصة في طب الأمومة والجنين وعلاج العقم وأمراض النساء المعقدة.</p>
                        <div class="doctor-meta">
                            <span>رقم التواصل : 43345456656</span>
                        </div>

                    </div>
                </div>

                <!-- Doctor Card 3 -->
                <div class="doctor-card">
                    <div class="doctor-image">
                        <img src="https://sfile.chatglm.cn/images-ppt/6ec88cd3c0a9.jpg" alt="د. محمد علي">
                    </div>
                    <div class="doctor-info">
                        <h3 class="doctor-name">د. محمد علي</h3>
                        <p class="doctor-specialty">استشاري جراحة العظام والمفاصل</p>
                        <p class="doctor-bio">خبير في جراحات المنظار واستبدال المفاصل وعلاج إصابات الرياضيين.</p>
                        <div class="doctor-meta">
                            <span>رقم التواصل : 443345456656</span>
                        </div>

                    </div>
                </div>

                <!-- Doctor Card 4 -->
                <div class="doctor-card">
                    <div class="doctor-image">
                        <img src="C:\Users\Osama Alfares\Desktop\Al Salam Hospital\OIP.webp" alt="د. فاطمة خالد">
                    </div>
                    <div class="doctor-info">
                        <h3 class="doctor-name">د. فاطمة خالد</h3>
                        <p class="doctor-specialty">استشارية طب الأطفال وحديثي الولادة</p>
                        <p class="doctor-bio">متخصصة في علاج الأمراض المزمنة لدى الأطفال والتغذية العلاجية.</p>
                        <div class="doctor-meta">
                            <span>رقم التواصل : 443345456656</span>
                        </div>

                    </div>
                </div>

                <!-- Doctor Card 5 -->
                <div class="doctor-card">
                    <div class="doctor-image">
                        <img src="https://sfile.chatglm.cn/images-ppt/9f6f91afd52d.jpg" alt="د. خالد سالم">
                    </div>
                    <div class="doctor-info">
                        <h3 class="doctor-name">د. خالد سالم</h3>
                        <p class="doctor-specialty">استشاري الأمراض الباطنة والجهاز الهضمي</p>
                        <p class="doctor-bio">خبير في تشخيص وعلاج أمراض الجهاز الهضمي والكبد والمناظير الدقيقة.</p>
                        <div class="doctor-meta">
                            <span>رقم التواصل : 443345456656</span>
                        </div>

                    </div>
                </div>

                <!-- Doctor Card 6 -->
                <div class="doctor-card">
                    <div class="doctor-image">
                        <img src="https://sfile.chatglm.cn/images-ppt/ec645e7ee4fe.jpg" alt="د. يوسف إبراهيم">
                    </div>
                    <div class="doctor-info">
                        <h3 class="doctor-name">د. يوسف إبراهيم</h3>
                        <p class="doctor-specialty">استشاري طب العيون والجراحات الدقيقة</p>
                        <p class="doctor-bio">متخصص في جراحات الليزر وعلاج الشبكية والجلوكوما والكتاراكت.</p>
                        <div class="doctor-meta">
                            <span> رقم التواصل : 443345456656</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>مميزات أطبائنا</h2>
                <p>نقدم لكم أفضل الخدمات الطبية من خلال فريقنا المتميز الذي يتميز بالعديد من المزايا</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3 class="feature-title">خبرة عالية</h3>
                    <p class="feature-description">أطباؤنا يتمتعون بخبرة طويلة في مجالات تخصصهم وإجراء آلاف العمليات الناجحة</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3 class="feature-title">شهادات عالمية</h3>
                    <p class="feature-description">حاصلون على شهادات  من أفضل الجامعات والمستشفيات السورية</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-procedures"></i>
                    </div>
                    <h3 class="feature-title">أحدث التقنيات</h3>
                    <p class="feature-description">نستخدم أحدث التقنيات والأجهزة الطبية في التشخيص والعلاج</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="feature-title">رعاية متكاملة</h3>
                    <p class="feature-description">نقدم رعاية صحية متكاملة تشمل التشخيص والعلاج والمتابعة</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Role Section -->
    <section class="role">
        <div class="container">
            <div class="section-title">
                <h2>دور الأطباء في تسهيل العمل</h2>
                <p>يلعب أطباؤنا دوراً محورياً في تسهيل سير العمل وتقديم أفضل الخدمات الطبية</p>
            </div>
            <div class="role-content">
                <div class="role-text">
                    <h3>كيف يساهم أطباؤنا في تحسين تجربتك؟</h3>
                    <p>يعمل فريقنا الطبي على توفير بيئة طبية متكاملة تركز على راحة المريض وتقديم أفضل رعاية ممكنة.</p>
                    <ul class="role-list">
                        <li><i class="fas fa-check-circle"></i> توفير استشارات سريعة ودقيقة</li>
                        <li><i class="fas fa-check-circle"></i> متابعة الحالات الصحية بشكل مستمر</li>
                        <li><i class="fas fa-check-circle"></i> التنسيق بين الأقسام المختلفة لتقديم رعاية متكاملة</li>
                        <li><i class="fas fa-check-circle"></i> استخدام أنظمة متطورة لحجز المواعيد والمتابعة</li>
                        <li><i class="fas fa-check-circle"></i> توفير خيارات علاجية متعددة تناسب احتياجات المرضى</li>
                    </ul>

                </div>
                <div class="role-image">
                    <img src="https://sfile.chatglm.cn/images-ppt/2ced2028bc19.jpg" alt="فريق العمل الطبي">
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>مستشفى السلام</h3>
                    <p>نقدم لكم أفضل الخدمات الطبية من خلال فريقنا المتميز من الأطباء والاستشاريين في مختلف التخصصات.</p>
                </div>
                <div class="footer-column">
                    <h3>روابط سريعة</h3>
                    <ul>
                        <li><a href="index.html">الرئيسية</a></li>
                        <li><a href="doctors.html">الأطباء</a></li>
                        <li><a href="services.html">الأقسام الطبية</a></li>
                        <li><a href="login.html">تسجيل الدخول</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>التخصصات</h3>
                    <ul>
                        <li><a href="#">جراحة القلب</a></li>
                        <li><a href="#">أمراض النساء والتوليد</a></li>
                        <li><a href="#">جراحة العظام</a></li>
                        <li><a href="#">طب الأطفال</a></li>
                        <li><a href="#">الأمراض الباطنة</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>معلومات الاتصال</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> دمشق , الجمهورية العربية السورية </li>
                        <li><i class="fas fa-phone"></i>095 341 364 963+</li>
                        <li><i class="fas fa-envelope"></i> info@elitehospital.com</li>
                        <li><i class="fas fa-clock"></i> 24/24 خدمة الطوارئ</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 مستشفى السلام. جميع الحقوق محفوظة.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple form validation
        document.querySelector('.appointment-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const doctor = document.getElementById('doctor').value;
            const date = document.getElementById('date').value;

            if (!name || !phone || !doctor || !date) {
                alert('يرجى ملء جميع الحقول المطلوبة');
                return;
            }

            // Show success message
            const successMessage = document.createElement('div');
            successMessage.style.position = 'fixed';
            successMessage.style.top = '20px';
            successMessage.style.right = '20px';
            successMessage.style.backgroundColor = '#4CAF50';
            successMessage.style.color = 'white';
            successMessage.style.padding = '15px 20px';
            successMessage.style.borderRadius = '5px';
            successMessage.style.boxShadow = '0 4px 8px rgba(0,0,0,0.1)';
            successMessage.style.zIndex = '10000';
            successMessage.textContent = 'تم حجز موعدك بنجاح! سنتواصل معك قريباً.';

            document.body.appendChild(successMessage);

            // Reset form
            this.reset();

            // Remove message after 5 seconds
            setTimeout(() => {
                successMessage.remove();
            }, 5000);
        });

        // Search functionality
        document.querySelector('.search-box button').addEventListener('click', function() {
            const searchTerm = document.querySelector('.search-box input').value.toLowerCase();

            if (!searchTerm) {
                alert('يرجى إدخال كلمة للبحث');
                return;
            }

            const doctorCards = document.querySelectorAll('.doctor-card');
            let found = false;

            doctorCards.forEach(card => {
                const name = card.querySelector('.doctor-name').textContent.toLowerCase();
                const specialty = card.querySelector('.doctor-specialty').textContent.toLowerCase();

                if (name.includes(searchTerm) || specialty.includes(searchTerm)) {
                    card.style.display = 'block';
                    found = true;
                } else {
                    card.style.display = 'none';
                }
            });

            if (!found) {
                alert('لم يتم العثور على نتائج مطابقة');
            }
        });

        // Reset search when input is cleared
        document.querySelector('.search-box input').addEventListener('input', function() {
            if (this.value === '') {
                document.querySelectorAll('.doctor-card').forEach(card => {
                    card.style.display = 'block';
                });
            }
        });
    </script>
</body>
</html>
