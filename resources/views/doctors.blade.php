<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>الأطباء - مستشفى السلام</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        /* نفس التنسيقات الأصلية بدون تغيير */
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

        header {
            background-color: #005792;
            color: white;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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

        .hero {
            background: linear-gradient(rgba(0, 87, 146, 0.8), rgba(0, 87, 146, 0.8));
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
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .doctor-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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
            font-size: 14px;
            color: #777;
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
                <ul class="nav-menu">
                    <li><a href="/">الرئيسية</a></li>
                    <li><a href="/departments">الأقسام الطبية</a></li>
                    <li><a href="/doctors" class="active">الأطباء</a></li>
                    <li><a href="/login">تسجيل الدخول</a></li>
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
                <input type="text" placeholder="ابحث عن طبيب حسب التخصص أو الاسم..." />
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
                @foreach ($doctors as $doctor)
                <div class="doctor-card">
                    <div class="doctor-image">
                        @if (!empty($doctor->photo_url))
                        <img src="{{ $doctor->photo_url }}" alt="صورة الطبيب" />
                        @else
                        <i class="fas fa-user-circle" style="font-size:150px; color:#ccc;"></i>
                        @endif
                    </div>
                    <div class="doctor-info">
                        <h3 class="doctor-name">د.{{ $doctor->employee->first_name }}
                            {{ $doctor->employee->last_name }}</h3>
                        <p class="doctor-specialty">اختصاص في {{ $doctor->specialization }}</p>
                        <div class="doctor-meta">
                            <span>رقم التواصل : {{ $doctor->employee->phone_number }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
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
                    <p class="feature-description">أطباؤنا يتمتعون بخبرة طويلة في مجالات تخصصهم وإجراء آلاف العمليات
                        الناجحة</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3 class="feature-title">شهادات عالمية</h3>
                    <p class="feature-description">حاصلون على شهادات من أفضل الجامعات والمستشفيات السورية</p>
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
                    <p>يعمل فريقنا الطبي على توفير بيئة طبية متكاملة تركز على راحة المريض وتقديم أفضل رعاية
                        ممكنة.</p>
                    <ul class="role-list">
                        <li><i class="fas fa-check-circle"></i> توفير استشارات سريعة ودقيقة</li>
                        <li><i class="fas fa-check-circle"></i> متابعة الحالات الصحية بشكل مستمر</li>
                        <li><i class="fas fa-check-circle"></i> التنسيق بين الأقسام المختلفة لتقديم رعاية متكاملة</li>
                        <li><i class="fas fa-check-circle"></i> استخدام أنظمة متطورة لحجز المواعيد والمتابعة</li>
                        <li><i class="fas fa-check-circle"></i> توفير خيارات علاجية متعددة تناسب احتياجات المرضى</li>
                    </ul>
                </div>
                <div class="role-image">
                    <img src="https://sfile.chatglm.cn/images-ppt/2ced2028bc19.jpg" alt="فريق العمل الطبي" />
                </div>
            </div>
        </div>
    </section>

    <script>
        const searchInput = document.querySelector('.search-box input');
        const searchButton = document.querySelector('.search-box button');
        const doctorCards = document.querySelectorAll('.doctor-card');

        // بحث عند الضغط على الزر
        searchButton.addEventListener('click', function (e) {
            e.preventDefault();
            filterDoctors(searchInput.value);
        });

        // بحث مباشر عند الكتابة
        searchInput.addEventListener('input', function () {
            filterDoctors(this.value);
        });

        function filterDoctors(searchTerm) {
            const term = searchTerm.toLowerCase();
            let found = false;

            doctorCards.forEach(card => {
                const name = card.querySelector('.doctor-name').textContent.toLowerCase();
                const specialty = card.querySelector('.doctor-specialty').textContent.toLowerCase();

                if (name.includes(term) || specialty.includes(term) || term === '') {
                    card.style.display = 'block';
                    found = true;
                } else {
                    card.style.display = 'none';
                }
            });

            if (!found && term !== '') {

                // لو ما لاقى شيء يعرض رسالة أو ممكن تضيف تحذير هنا
                // مثلاً تقدر تعرض كرت أو رسالة ديناميكية "لا يوجد أطباء مطابقين"
                // بس حالياً ببساطة نخفي الكل (ما في شيء يظهر)
            }
        }
    </script>
</body>

</html>

