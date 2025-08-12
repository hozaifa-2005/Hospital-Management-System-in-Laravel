<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>مستشفى السلام - تسجيل الدخول</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            font-family: 'Tajawal', sans-serif;
            background: linear-gradient(135deg, #f5f9ff 0%, #e6f0ff 100%);
            color: #333;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

        .slide {
            width: 100vw;
            height: 100vh;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #f5f9ff 0%, #e6f0ff 100%);
            display: flex;
            flex-direction: column;
        }

        /* Header Styles */
        .header {
            background-color: #2c63acfa;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            position: relative;
            z-index: 10;
            width: 100vw;
            /* جعل الهيدر يملأ عرض الشاشة بالكامل */
            box-sizing: border-box;
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
            color: #c5d2d2;
            font-size: 32px;
            margin-left: 10px;
        }

        .logo h1 {
            color: #dee9f3;
            font-size: 24px;
            font-weight: 700;
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-menu li {
            margin-left: 25px;
            color: #c5d2d2;
            font-size: large;
        }

        .nav-menu a {
            text-decoration: none;
            color: #eae3e3;
            font-weight: 500;
            font-size: 18px;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: #3888e4;
        }

        /* Login Container */
        .login-container {
            display: flex;
            flex-grow: 1;
            align-items: center;
            justify-content: center;
            padding: 40px 0;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            box-sizing: border-box;
        }

        .login-card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            padding: 40px;
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 150px;
            height: 150px;
            background-color: rgba(25, 118, 210, 0.1);
            border-radius: 0 0 0 150px;
            z-index: 0;
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
        }

        .login-header i {
            font-size: 48px;
            color: #1976d2;
            margin-bottom: 15px;
        }

        .login-header h2 {
            font-size: 32px;
            color: #1976d2;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .login-header p {
            font-size: 16px;
            color: #666;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
            z-index: 1;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .input-group {
            position: relative;
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #1976d2;
            font-size: 18px;
        }

        .form-control {
            width: 100%;
            padding: 15px 45px 15px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            font-family: 'Tajawal', sans-serif;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .form-control:focus {
            border-color: #1976d2;
            box-shadow: 0 0 0 3px rgba(25, 118, 210, 0.1);
            outline: none;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            position: relative;
            z-index: 1;
        }

        .remember-me {
            display: flex;
            align-items: center;
        }

        .remember-me input {
            margin-left: 8px;
        }

        .remember-me label {
            font-size: 14px;
            color: #666;
            cursor: pointer;
        }

        .forgot-password {
            font-size: 14px;
            color: #1976d2;
            text-decoration: none;
            transition: color 0.3s;
        }

        .forgot-password:hover {
            color: #1565c0;
            text-decoration: underline;
        }

        .btn-login {
            display: block;
            width: 100%;
            background-color: #1976d2;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            font-family: 'Tajawal', sans-serif;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .btn-login:hover {
            background-color: #1565c0;
        }

        .divider {
            text-align: center;
            margin: 25px 0;
            position: relative;
            z-index: 1;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            right: 0;
            left: 0;
            height: 1px;
            background-color: #ddd;
        }

        .divider span {
            background-color: white;
            padding: 0 15px;
            color: #666;
            font-size: 14px;
            position: relative;
        }

        .social-login {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 25px;
            position: relative;
            z-index: 1;
        }

        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 1px solid #ddd;
            background-color: white;
            color: #666;
            font-size: 20px;
            transition: all 0.3s;
            text-decoration: none;
        }

        .social-btn:hover {
            background-color: #f5f5f5;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .social-btn.facebook:hover {
            color: #3b5998;
            border-color: #3b5998;
        }

        .social-btn.twitter:hover {
            color: #1da1f2;
            border-color: #1da1f2;
        }

        .social-btn.google:hover {
            color: #ea4335;
            border-color: #ea4335;
        }

        .signup-link {
            text-align: center;
            font-size: 16px;
            color: #666;
            position: relative;
            z-index: 1;
        }

        .signup-link a {
            color: #1976d2;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .signup-link a:hover {
            color: #1565c0;
            text-decoration: underline;
        }

        /* Side Image */
        .side-image {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 40px;
        }

        .side-image img {
            max-width: 100%;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .login-container {
                flex-direction: column;
            }

            .side-image {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="slide">
        <!-- Header -->
        <header class="header">
            <div class="nav-container">
                <div class="logo">
                    <i class="fas fa-hospital"></i>
                    <h1>مستشفى السلام</h1>
                </div>
                <ul class="nav-menu">
                    <li><a href="/">الرئيسية</a></li>
                    <li><a href="/departments">الأقسام الطبية</a></li>
                    <li><a href="/doctors">الأطباء</a></li>
                    <li><a href="/login">تسجيل الدخول</a></li>
                </ul>
            </div>
        </header>

        <!-- Login Container -->
        <div class="login-container">
            <div class="login-card">
                <div class="login-header">
                    <i class="fas fa-user-circle"></i>
                    <h2>تسجيل الدخول</h2>
                    <p>أدخل بياناتك للوصول إلى حسابك</p>
                </div>

                <form>
                    <div class="form-group">
                        <label for="username">اسم المستخدم</label>
                        <div class="input-group">
                            <i class="fas fa-user"></i>
                            <input type="text" id="username" class="form-control" placeholder="أدخل اسم المستخدم" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">كلمة المرور</label>
                        <div class="input-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="password" class="form-control" placeholder="أدخل كلمة المرور" />
                        </div>
                    </div>

                    <button type="submit" class="btn-login">تسجيل الدخول</button>
                </form>
            </div>

            <div class="side-image">
                <img src="images/login.png"
                    alt="تسجيل الدخول" width="600" height="600" />
            </div>
        </div>
    </div>
</body>

</html>
