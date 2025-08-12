<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خدمات المستشفى</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        :root {
            --primary-color: #0288d1;
            --secondary-color: #03a9f4;
            --accent-color: #29b6f6;
            --text-color: #37474f;
            --light-gray: #f5f7fa;
            --medium-gray: #eceff1;
            --dark-gray: #78909c;
            --white: #ffffff;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Header Styles */
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


        body {
            font-family: 'Tajawal', sans-serif;
            background-color: var(--light-gray);
            color: var(--text-color);
            line-height: 1.6;
            direction: rtl;
        }

        .services-section {
            padding: 80px 0;
            background-color: var(--white);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 40px;
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            right: 0;
            width: 80px;
            height: 4px;
            background-color: var(--accent-color);
        }

        .section-title p {
            font-size: 18px;
            color: var(--dark-gray);
            max-width: 700px;
            margin: 20px auto 0;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .service-card {
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: var(--shadow);
            padding: 30px;
            text-align: center;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 5px;
            height: 100%;
            background-color: var(--primary-color);
            transform: scaleY(0);
            transition: var(--transition);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .service-card:hover::before {
            transform: scaleY(1);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background-color: var(--light-gray);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            transition: var(--transition);
        }

        .service-card:hover .service-icon {
            background-color: var(--primary-color);
            color: var(--white);
        }

        .service-icon i {
            font-size: 36px;
            color: var(--primary-color);
            transition: var(--transition);
        }

        .service-card:hover .service-icon i {
            color: var(--white);
        }

        .service-title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary-color);
        }

        .service-description {
            font-size: 16px;
            color: var(--dark-gray);
            margin-bottom: 20px;
        }

        .service-link {
            display: inline-block;
            color: var(--primary-color);
            font-weight: 500;
            text-decoration: none;
            transition: var(--transition);
        }

        .service-link:hover {
            color: var(--secondary-color);
        }

        .service-link i {
            font-size: 18px;
            vertical-align: middle;
            margin-right: 5px;
        }



        @media (max-width: 768px) {
            .services-section {
                padding: 60px 0;
            }

            .section-title h2 {
                font-size: 32px;
            }

            .services-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
            }

            .service-card {
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .section-title h2 {
                font-size: 28px;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
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
                    <li><a href="/doctors">الأطباء</a></li>
                    <li><a href="/login">تسجيل الدخول</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="services-section">
        <div class="container">
            <div class="section-title">
                <h2>الأقسام الطبية</h2>
                <p>نقدم مجموعة واسعة من الخدمات الطبية المتخصصة باستخدام أحدث التقنيات وأفضل الممارسات الطبية</p>
            </div>
            <div class="services-grid">
                @foreach ($departments as $department)
                    <div class="service-card">
                        <div class="service-icon">
                        <i class="material-icons">local_hospital</i>
                        </div>
                        <h3 class="service-title">{{ $department->name }}</h3>
                        <p class="service-description">{{ $department->description ?? '' }}</p>
                    </div>
                @endforeach
            </div>


        </div>
        </div>
    </section>
</body>

</html>
