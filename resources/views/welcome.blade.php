<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>مستشفى السلام - الصفحة الرئيسية</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- إضافة مكتبة Font Awesome للأيقونات -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #f5f9ff;
            color: #333;
        }

        .slide {
            width: 100%;
            min-height: 100vh;
            background: linear-gradient(135deg, #f5f9ff 0%, #e6f0ff 100%);
        }

        header {
            background-color: #005792;
            color: white;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 24px;
        }

        .logo i {
            margin-left: 10px;
            font-size: 28px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-menu li {
            margin-left: 25px;
        }

        .nav-menu a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            font-size: 18px;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: #64b5f6;
        }

        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px 70px;
            gap: 30px;
            flex-wrap: wrap;
        }

        .hero-content {
            flex: 1;
        }

        .hero h2 {
            font-size: 48px;
            color: #1976d2;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero p {
            font-size: 20px;
            line-height: 1.6;
            margin-bottom: 30px;
            color: #555;
        }

        .btn {
            display: inline-block;
            background-color: #1976d2;
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 500;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #1565c0;
        }

        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .hero-image img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .stats {
            display: flex;
            justify-content: space-around;
            background-color: #1976d2;
            padding: 30px 0;
            flex-wrap: wrap;
        }

        .stat-item {
            text-align: center;
            color: white;
            margin: 10px;
        }

        .stat-number {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 18px;
        }

        /* Footer Styles */
        footer {
            background-color: #003d6b;
            color: white;
            padding: 40px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto 30px;
            padding: 0 20px;
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
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #ccc;
            font-size: 14px;
            padding-top: 15px;
        }
    </style>
</head>

<body>
    <div class="slide">
        <header>
            <div class="nav-container">
                <div class="logo">
                    <i class="fas fa-hospital"></i> مستشفى السلام
                </div>
                <ul class="nav-menu">
                    <li><a href="/">الرئيسية</a></li>
                    <li><a href="/departments">الأقسام الطبية</a></li>
                    <li><a href="/doctors">الأطباء</a></li>
                    <li><a href="/login">تسجيل الدخول</a></li>
                </ul>
            </div>
        </header>

        <section class="hero">
            <div class="hero-content">
                <h2>رعاية صحية متميزة</h2>
                <p>نقدم لكم أفضل الخدمات الطبية بأحدث التقنيات وبأيدي خبراء متخصصين في جميع المجالات الطبية</p>
                <a href="Book an appointment.html" class="btn">احجز موعداً الآن</a>
            </div>
            <div class="hero-image">
                <img src={{ asset('images/welcome.png') }} alt="مبنى المستشفى" />
            </div>
        </section>

        <section class="stats">
            <div class="stat-item">
                <div class="stat-number">{{ $departmentsCount }}</div>
                <div class="stat-label">قسم طبي</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">{{ $doctorsCount }}</div>
                <div class="stat-label">طبيب متخصص</div>
            </div>

            <div class="stat-item">
                <div class="stat-number">{{ $nurseCount }}</div>
                <div class="stat-label">ممرض</div>
            </div>
        </section>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>مستشفى السلام</h3>
                    <p>نقدم لكم أفضل الخدمات الطبية من خلال فريقنا المتميز من الأطباء والاستشاريين في مختلف التخصصات.
                    </p>
                </div>
                <div class="footer-column">
                    <h3>روابط سريعة</h3>
                    <ul>
                        <li><a href="/">الرئيسية</a></li>
                        <li><a href="/departments">الأقسام الطبية</a></li>
                        <li><a href="/doctors">الأطباء</a></li>
                        <li><a href="/login">تسجيل الدخول</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>التخصصات</h3>
                    <section class="departments">
                        <ul>
                            @foreach ($departments as $department)
                                <li>{{ $department->name }}</li>
                            @endforeach
                        </ul>
                    </section>
                </div>
                <div class="footer-column">
                    <h3>معلومات الاتصال</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> دمشق , الجمهورية العربية السورية </li>
                        <li><i class="fas fa-phone"></i> {{ $admin->phone_number ?? 'غير متوفر' }}</li>
                        <li><i class="fas fa-envelope"></i> {{ $admin->email ?? 'غير متوفر' }}</li>
                        <li><i class="fas fa-clock"></i> 24/24 خدمة الطوارئ</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 مستشفى السلام. جميع الحقوق محفوظة.</p>
            </div>
        </div>
    </footer>
</body>

</html>
