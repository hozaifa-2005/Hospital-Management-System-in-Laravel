<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مستشفى السلام - الصفحة الرئيسية</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet">
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
            width: 1280px;
            min-height: 720px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #f5f9ff 0%, #e6f0ff 100%);
        }

        /* Header Styles */
        .header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            position: relative;
            z-index: 10;
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
        }

        .logo i {
            color: #1976d2;
            font-size: 32px;
            margin-left: 10px;
        }

        .logo h1 {
            color: #1976d2;
            font-size: 24px;
            font-weight: 700;
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
            color: #333;
            font-weight: 500;
            font-size: 18px;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: #1976d2;
        }

        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            padding: 60px 70px;
            position: relative;
        }

        .hero-content {
            flex: 1;
            z-index: 2;
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
            align-items: center;
        }

        .hero-image img {
            max-width: 90%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Stats Section */
        .stats {
            display: flex;
            justify-content: space-around;
            background-color: #1976d2;
            padding: 30px 0;
            margin-top: 40px;
        }

        .stat-item {
            text-align: center;
            color: white;
        }

        .stat-number {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 18px;
        }

        /* Services Section */
        .services {
            padding: 60px 70px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h3 {
            font-size: 36px;
            color: #1976d2;
            margin-bottom: 10px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .service-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            color: #1976d2;
            font-size: 48px;
            margin-bottom: 20px;
        }

        .service-card h4 {
            font-size: 22px;
            margin-bottom: 15px;
            color: #333;
        }

        .service-card p {
            font-size: 16px;
            color: #666;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="slide">
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
                    <li><a href="/services">الأقسام الطبية</a></li>
                    <li><a href="/doctors">الأطباء</a></li>
                    <li><a href="/login">تسجيل الدخول</a></li>
                </ul>
            </nav>
        </div>
    </header>


        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h2>رعاية صحية متميزة</h2>
                <p>نقدم لكم أفضل الخدمات الطبية بأحدث التقنيات وبأيدي خبراء متخصصين في جميع المجالات الطبية</p>
                <a href="login.html" class="btn">احجز موعداً الآن</a>
            </div>
            <div class="hero-image">
                <img src="../assets_task_01k1ve4z6newktmkwswa7jszzc_1754341340_img_0.webp" alt="مبنى المستشفى">
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats">
            <div class="stat-item">
                <div class="stat-number">150+</div>
                <div class="stat-label">طبيب متخصص</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">25+</div>
                <div class="stat-label">قسم طبي</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">500+</div>
                <div class="stat-label">سرير متاح</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">50+</div>
                <div class="stat-label">ممرض</div>
            </div>
        </section>


    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مستشفى السلام - من نحن والأطباء</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet">
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
            width: 1280px;
            min-height: 720px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #f5f9ff 0%, #e6f0ff 100%);
            display: flex;
            flex-direction: column;
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

        /* Content Container */
        .content-container {
            display: flex;
            flex-grow: 1;
            padding: 30px 70px;
        }

        /* About Section */
        .about-section {
            flex: 1;
            padding-right: 30px;
        }

        .section-title {
            margin-bottom: 25px;
            position: relative;
        }

        .section-title h2 {
            font-size: 36px;
            color: #1976d2;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .section-title::after {
            content: '';
            position: absolute;
            right: 0;
            bottom: -10px;
            width: 80px;
            height: 4px;
            background-color: #1976d2;
        }

        .about-content {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
        }

        .about-content p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 15px;
            color: #555;
        }

        .mission-vision {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .mission, .vision {
            flex: 1;
            background-color: #f0f7ff;
            border-radius: 8px;
            padding: 20px;
        }

        .mission h3, .vision h3 {
            font-size: 22px;
            color: #1976d2;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .mission h3 i, .vision h3 i {
            margin-left: 8px;
            color: #1976d2;
        }

        .mission p, .vision p {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }

        /* Doctors Section */
        .doctors-section {
            flex: 1;
            padding-left: 30px;
        }

        .doctors-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .doctor-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .doctor-card:hover {
            transform: translateY(-5px);
        }

        .doctor-image {
            height: 160px;
            overflow: hidden;
        }

        .doctor-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .doctor-info {
            padding: 15px;
        }

        .doctor-name {
            font-size: 20px;
            font-weight: 700;
            color: #333;
            margin-bottom: 5px;
        }

        .doctor-specialty {
            font-size: 16px;
            color: #1976d2;
            margin-bottom: 10px;
        }

        .doctor-bio {
            font-size: 14px;
            color: #666;
            line-height: 1.4;
        }
    </style>
</head>
<body>
    <div class="slide">
        <!-- Header -->



</body>
</html>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مستشفى السلام - الخدمات والاتصال</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
            width: 1280px;
            min-height: 720px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #f5f9ff 0%, #e6f0ff 100%);
            display: flex;
            flex-direction: column;
        }

        /* Header Styles */
        .header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            position: relative;
            z-index: 10;
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
        }

        .logo i {
            color: #1976d2;
            font-size: 32px;
            margin-left: 10px;
        }

        .logo h1 {
            color: #1976d2;
            font-size: 24px;
            font-weight: 700;
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
            color: #333;
            font-weight: 500;
            font-size: 18px;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: #1976d2;
        }

        /* Content Container */
        .content-container {
            display: flex;
            flex-grow: 1;
            padding: 30px 70px;
        }

        /* Services Section */
        .services-section {
            flex: 1;
            padding-right: 30px;
        }

        .section-title {
            margin-bottom: 25px;
            position: relative;
        }

        .section-title h2 {
            font-size: 36px;
            color: #1976d2;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .section-title::after {
            content: '';
            position: absolute;
            right: 0;
            bottom: -10px;
            width: 80px;
            height: 4px;
            background-color: #1976d2;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .service-card {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
            display: flex;
            align-items: flex-start;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-icon {
            color: #1976d2;
            font-size: 36px;
            margin-left: 15px;
            flex-shrink: 0;
        }

        .service-info h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .service-info p {
            font-size: 16px;
            color: #666;
            line-height: 1.4;
        }

        .appointment-form {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-top: 25px;
        }

        .appointment-form h3 {
            font-size: 24px;
            color: #1976d2;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            font-family: 'Tajawal', sans-serif;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .btn-submit {
            display: block;
            width: 100%;
            background-color: #1976d2;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            font-family: 'Tajawal', sans-serif;
        }

        .btn-submit:hover {
            background-color: #1565c0;
        }

        /* Contact Section */
        .contact-section {
            flex: 1;
            padding-left: 30px;
        }

        .contact-info {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .contact-item:last-child {
            margin-bottom: 0;
        }

        .contact-icon {
            color: #1976d2;
            font-size: 28px;
            margin-left: 15px;
            flex-shrink: 0;
        }

        .contact-text h4 {
            font-size: 18px;
            color: #333;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .contact-text p {
            font-size: 16px;
            color: #666;
            line-height: 1.4;
        }

        .map-container {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: 300px;
            position: relative;
        }

        .map-placeholder {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .map-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(25, 118, 210, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .map-icon {
            color: #1976d2;
            font-size: 48px;
        }
    </style>
</head>
<body>
    <div class="slide">
        <!-- Header -->
        </div>
    </div>
</body>
</html>



