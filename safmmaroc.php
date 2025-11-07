<!DOCTYPE html>
<html lang="ar" dir="rtl" id="htmlElement">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إحصائيات وأرشيف كرة القدم المغربية | Statistiques Football Marocain</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #0ea5e9;
            --secondary: #0284c7;
            --accent: #06b6d4;
            --success: #10b981;
            --warning: #f59e0b;
            --dark: #0f172a;
            --darker: #020617;
            --light: #f8fafc;
            --gray: #64748b;
            --gray-light: #cbd5e1;
            --gradient-1: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            --gradient-2: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);
            --gradient-3: linear-gradient(135deg, #334155 0%, #475569 100%);
            --gradient-4: linear-gradient(135deg, #0c4a6e 0%, #075985 100%);
            --gradient-5: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            --gradient-main: linear-gradient(135deg, #0f172a 0%, #1e40af 40%, #0ea5e9 100%);
            --gradient-card: linear-gradient(135deg, #1e293b 0%, #334155 100%);
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }

        header {
            background: var(--gradient-main);
            color: white;
            padding: 1.2rem 0;
            box-shadow: 0 10px 40px rgba(102, 126, 234, 0.3);
            position: sticky;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(10px);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .logo {
            display: flex;
            flex-direction: column;
            gap: 0.3rem;
        }

        .logo h1 {
            font-size: 1.6rem;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .logo-ar {
            font-size: 1.1rem;
            opacity: 0.95;
            direction: rtl;
            font-weight: 600;
        }

        .language-selector {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-left: 1rem;
        }

        .language-selector select {
            padding: 0.5rem;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.1);
            color: white;
            cursor: pointer;
            font-weight: 600;
        }

        .language-selector select option {
            background: var(--dark);
            color: white;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 1rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            padding: 0.7rem 1.5rem;
            border-radius: 12px;
            font-size: 0.95rem;
        }

        nav a:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-2px);
        }

        nav a.active {
            background: rgba(255,255,255,0.3);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        main {
            padding: 3rem 0;
            min-height: calc(100vh - 200px);
        }

        #accueil {
            display: block;
        }

        #head-to-head {
            display: none;
        }

        .hero {
            background: white;
            border-radius: 24px;
            padding: 4rem 3rem;
            margin-bottom: 3rem;
            box-shadow: 0 20px 60px rgba(0,0,0,0.08);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: var(--gradient-main);
        }

        .hero h2 {
            font-size: 2.8rem;
            background: var(--gradient-main);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            font-weight: 800;
        }

        .hero p {
            font-size: 1.3rem;
            color: var(--gray);
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
        }

        .news-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            cursor: pointer;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .news-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        }

        .news-image {
            width: 100%;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
            position: relative;
        }

        .news-card:nth-child(1) .news-image { 
            background: linear-gradient(135deg, #0f172a 0%, #1e40af 100%);
        }
        .news-card:nth-child(2) .news-image { 
            background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);
        }
        .news-card:nth-child(3) .news-image { 
            background: linear-gradient(135deg, #334155 0%, #475569 100%);
        }
        .news-card:nth-child(4) .news-image { 
            background: linear-gradient(135deg, #0c4a6e 0%, #075985 100%);
        }
        .news-card:nth-child(5) .news-image { 
            background: linear-gradient(135deg, #1e293b 0%, #0ea5e9 100%);
        }
        .news-card:nth-child(6) .news-image { 
            background: linear-gradient(135deg, #475569 0%, #64748b 100%);
        }

        .news-content {
            padding: 1.8rem;
        }

        .news-date {
            color: var(--primary);
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .news-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 1rem;
            line-height: 1.4;
        }

        .news-description {
            color: var(--gray);
            line-height: 1.7;
            font-size: 0.95rem;
        }

        .h2h-container {
            background: white;
            border-radius: 24px;
            padding: 3rem;
            box-shadow: 0 20px 60px rgba(0,0,0,0.08);
            border: 1px solid rgba(0,0,0,0.05);
        }

        .section-title {
            font-size: 2.5rem;
            background: var(--gradient-main);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 3rem;
            text-align: center;
            font-weight: 800;
            position: relative;
            padding-bottom: 1.5rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 5px;
            background: var(--gradient-main);
            border-radius: 3px;
        }

        .filters {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.8rem;
            margin-bottom: 3rem;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 0.7rem;
        }

        .filter-group label {
            font-weight: 700;
            color: var(--dark);
            font-size: 0.95rem;
            letter-spacing: -0.2px;
        }

        .filter-group select {
            padding: 1rem 1.2rem;
            border: 2px solid #e2e8f0;
            border-radius: 14px;
            font-size: 1rem;
            background: white;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 500;
            color: var(--dark);
        }

        .filter-group select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
        }

        .btn-compare {
            grid-column: 1 / -1;
            padding: 1.3rem 2.5rem;
            background: var(--gradient-main);
            color: white;
            border: none;
            border-radius: 16px;
            font-size: 1.2rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.4s;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
            letter-spacing: 0.3px;
        }

        .btn-compare:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
        }

        .btn-compare:active {
            transform: translateY(-2px);
        }

        .results {
            margin-top: 4rem;
            display: none;
        }

        .results.show {
            display: block;
            animation: fadeInUp 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        @keyframes fadeInUp {
            from { 
                opacity: 0; 
                transform: translateY(40px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }

        .teams-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 3rem;
            background: var(--gradient-main);
            border-radius: 20px;
            margin-bottom: 3rem;
            color: white;
            box-shadow: 0 15px 50px rgba(102, 126, 234, 0.3);
        }

        .team-info {
            text-align: center;
            flex: 1;
        }

        .team-name {
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            letter-spacing: -0.5px;
        }

        .team-logo {
            font-size: 5rem;
            margin-bottom: 1rem;
            filter: drop-shadow(0 4px 10px rgba(0,0,0,0.2));
        }

        .vs {
            font-size: 2.5rem;
            font-weight: 800;
            opacity: 0.9;
            padding: 0 2rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .stat-card {
            padding: 2rem;
            border-radius: 18px;
            text-align: center;
            color: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255,255,255,0.1);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .stat-card:hover::before {
            opacity: 1;
        }

        .stat-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 50px rgba(0,0,0,0.25);
        }

        .stat-card:nth-child(1) { background: var(--gradient-1); }
        .stat-card:nth-child(2) { background: var(--gradient-2); }
        .stat-card:nth-child(3) { background: var(--gradient-3); }
        .stat-card:nth-child(4) { background: var(--gradient-4); }
        .stat-card:nth-child(5) { background: var(--gradient-5); }

        .stat-value {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 0.7rem;
            line-height: 1;
        }

        .stat-label {
            font-size: 1rem;
            opacity: 0.95;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .advanced-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .stat-box {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            padding: 2rem;
            border-radius: 18px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .stat-box h4 {
            color: var(--primary);
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .stat-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(0,0,0,0.08);
        }

        .stat-row:last-child {
            border-bottom: none;
        }

        .stat-row-label {
            color: var(--gray);
            font-weight: 600;
            font-size: 0.95rem;
        }

        .stat-row-value {
            font-weight: 700;
            color: var(--dark);
            font-size: 1.2rem;
        }

        .progress-bar {
            margin-top: 0.5rem;
            height: 8px;
            background: rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: var(--gradient-main);
            border-radius: 10px;
            transition: width 1s ease;
        }

        .matches-section {
            background: #f8fafc;
            padding: 2.5rem;
            border-radius: 20px;
            border: 1px solid #e2e8f0;
        }

        .matches-section h3 {
            background: var(--gradient-main);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 2rem;
            font-size: 1.8rem;
            font-weight: 800;
        }

        .match-row {
            background: white;
            padding: 1.5rem;
            border-radius: 14px;
            margin-bottom: 1rem;
            display: grid;
            grid-template-columns: 120px 1fr 100px 150px;
            gap: 1rem;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: all 0.3s;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .match-row:hover {
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
            transform: translateX(8px);
            border-color: var(--primary);
        }

        .match-date {
            color: var(--gray);
            font-size: 0.9rem;
            font-weight: 600;
        }

        .match-teams {
            font-weight: 700;
            color: var(--dark);
            font-size: 1.05rem;
        }

        .match-score {
            font-size: 1.5rem;
            font-weight: 800;
            background: var(--gradient-main);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-align: center;
        }

        .match-competition {
            color: var(--primary);
            font-size: 0.85rem;
            font-weight: 600;
            background: rgba(99, 102, 241, 0.1);
            padding: 0.4rem 0.8rem;
            border-radius: 8px;
            text-align: center;
        }

        footer {
            background: var(--dark);
            color: white;
            text-align: center;
            padding: 3rem 0;
            margin-top: 5rem;
        }

        footer p {
            opacity: 0.9;
            line-height: 1.8;
        }

        .loading {
            display: none;
            text-align: center;
            padding: 3rem;
        }

        .loading.show {
            display: block;
        }

        .spinner {
            border: 5px solid rgba(99, 102, 241, 0.1);
            border-top: 5px solid var(--primary);
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 0.8s linear infinite;
            margin: 0 auto;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @media (max-width: 968px) {
            .header-content {
                flex-direction: column;
                text-align: center;
            }

            nav ul {
                gap: 0.5rem;
            }

            .hero h2 {
                font-size: 2rem;
            }

            .teams-header {
                flex-direction: column;
                gap: 2rem;
            }

            .match-row {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 0.8rem;
            }

            .filters {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <h1 data-translate="site_title">إحصائيات وأرشيف كرة القدم المغربية</h1>
                    <div class="logo-ar" data-translate="site_subtitle">Statistiques et Archives du Football Marocain</div>
                </div>
                <div class="language-selector">
                    <select id="language-select">
                        <option value="ar">العربية</option>
                        <option value="fr">Français</option>
                    </select>
                </div>
                <nav>
                    <ul>
                        <li><a href="#" class="nav-link active" data-page="accueil" data-translate="nav_home">🏠 الرئيسية</a></li>
                        <li><a href="#" class="nav-link" data-page="head-to-head" data-translate="nav_head_to_head">⚔️ وجها لوجه</a></li> 
                        <!-- Face à Face Accueil // Statistiques Avancées Performances Défensives -->
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="container">
        <section id="accueil">
            <div class="hero">
                <h2 data-translate="hero_title">🇲🇦 منصة إحصائيات كرة القدم المغربية</h2>
                <p data-translate="hero_subtitle">اكتشف جميع الإحصائيات والأرشيف لكرة القدم المغربية</p>
            </div>

            <div class="news-grid">
                <div class="news-card">
                    <div class="news-image">⚽</div>
                    <div class="news-content">
                        <div class="news-date">01 نوفمبر 2025</div>
                        <h3 class="news-title" data-translate="news_title_1">البطولة الاحترافية 2024-2025</h3>
                        <p class="news-description" data-translate="news_desc_1">موسم 2024-2025 يستمر بمباريات مثيرة وأداء استثنائي للفرق المغربية.</p>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">🏆</div>
                    <div class="news-content">
                        <div class="news-date">28 أكتوبر 2025</div>
                        <h3 class="news-title" data-translate="news_title_2">كأس العرش</h3>
                        <p class="news-description" data-translate="news_desc_2">ربع النهائي يعد بمواجهات ملحمية بين أفضل فرق المملكة.</p>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">📊</div>
                    <div class="news-content">
                        <div class="news-date">25 أكتوبر 2025</div>
                        <h3 class="news-title" data-translate="news_title_3">إحصائيات متقدمة</h3>
                        <p class="news-description" data-translate="news_desc_3">اطلع على الإحصائيات التفصيلية: الهدافين، صناع الأهداف، الشباك النظيفة وأداء الفرق.</p>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">🎯</div>
                    <div class="news-content">
                        <div class="news-date">20 أكتوبر 2025</div>
                        <h3 class="news-title" data-translate="news_title_4">أرشيف كامل</h3>
                        <p class="news-description" data-translate="news_desc_4">الوصول إلى السجل الكامل للمباريات والنتائج منذ عدة عقود.</p>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">🌟</div>
                    <div class="news-content">
                        <div class="news-date">15 أكتوبر 2025</div>
                        <h3 class="news-title" data-translate="news_title_5">أداء الشهر</h3>
                        <p class="news-description" data-translate="news_desc_5">اكتشف اللاعبين الذين ميزوا أكتوبر بأدائهم الاستثنائي.</p>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-image">📈</div>
                    <div class="news-content">
                        <div class="news-date">10 أكتوبر 2025</div>
                        <h3 class="news-title" data-translate="news_title_6">تحليلات تكتيكية</h3>
                        <p class="news-description" data-translate="news_desc_6">تحليلات مفصلة للتكتيكات والاستراتيجيات المستخدمة من قبل الفرق المغربية.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="head-to-head">
            <div class="h2h-container">
                <h2 class="section-title" data-translate="h2h_title">⚔️ وجهاً لوجه | Face à Face</h2>

                <div class="filters">
                    <div class="filter-group">
                        <label for="team1" data-translate="team1_label">🏟️ الفريق 1</label>
                        <select id="team1">
                            <option value="0" data-translate="select_team">اختر فريق...</option>
                            <option value="wydad">الوداد البيضاوي</option>
                            <option value="raja">الرجاء الرياضي</option>
                            <option value="far">الجيش الملكي</option>
                            <option value="rsb">الرشاد البركاني</option>
                            <option value="mas">المغرب الفاسي</option>
                            <option value="fus">الاتحاد الرياضي</option>
                            <option value="mca">المغرب التطواني</option>
                            <option value="hassania">الحسنية أكادير</option>
                        </select>
                    </div>

                    <div class="filter-group">
                        <label for="team2" data-translate="team2_label">🏟️ الفريق 2</label>
                        <select id="team2">
                            <option value="0" data-translate="select_team">اختر فريق...</option>
                            <option value="wydad">الوداد البيضاوي</option>
                            <option value="raja">الرجاء الرياضي</option>
                            <option value="far">الجيش الملكي</option>
                            <option value="rsb">الرشاد البركاني</option>
                            <option value="mas">المغرب الفاسي</option>
                            <option value="fus">الاتحاد الرياضي</option>
                            <option value="mca">المغرب التطواني</option>
                            <option value="hassania">الحسنية أكادير</option>
                        </select>
                    </div>

                    <div class="filter-group">
                        <label for="competition" data-translate="competition_label">🏆 المسابقة</label>
                        <select id="competition">
                            <option value="0" data-translate="all_competitions">كل المسابقات</option>
                            <option value="botola">البطولة الاحترافية</option>
                            <option value="coupe">كأس العرش</option>
                            <option value="champions">دوري الأبطال</option>
                            <option value="confederation">كأس الكونفيدرالية</option>
                        </select>
                    </div>

                    <div class="filter-group">
                        <label for="season-from" data-translate="season_from_label">📅 من موسم</label>
                        <select id="season-from">
                            <option value="" data-translate="all_seasons">كل المواسم</option>
                            <option value="2024">2024-2025</option>
                            <option value="2023">2023-2024</option>
                            <option value="2022">2022-2023</option>
                            <option value="2021">2021-2022</option>
                            <option value="2020">2020-2021</option>
                        </select>
                    </div>

                    <div class="filter-group">
                        <label for="season-to" data-translate="season_to_label">📅 إلى موسم</label>
                        <select id="season-to">
                            <option value="" data-translate="all_seasons">كل المواسم</option>
                            <option value="2024">2024-2025</option>
                            <option value="2023">2023-2024</option>
                            <option value="2022">2022-2023</option>
                            <option value="2021">2021-2022</option>
                            <option value="2020">2020-2021</option>
                        </select>
                    </div>

                    <button class="btn-compare" onclick="compareTeams()" data-translate="compare_button">
                        🔍 استخرج المواجهات المباشرة
                    </button>
                </div>

                <div class="loading" id="loading">
                    <div class="spinner"></div>
                    <p style="margin-top: 1.5rem; color: var(--gray); font-weight: 600;" data-translate="loading_text">جاري تحميل الإحصائيات...</p>
                </div>

                <div class="results" id="results"></div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p style="font-size: 1.1rem; font-weight: 600;" data-translate="footer_copyright">© 2025 إحصائيات وأرشيف كرة القدم المغربية</p>
            <p style="margin-top: 0.5rem;" data-translate="footer_subtitle">Statistiques et Archives du Football Marocain</p>
            <p style="margin-top: 1rem; opacity: 0.7; font-size: 0.9rem;" data-translate="footer_rights">جميع الحقوق محفوظة</p>
        </div>
    </footer>

    <script>
        // نظام الترجمة
        const translations = {
            ar: {
                site_title: "إحصائيات وأرشيف كرة القدم المغربية",
                site_subtitle: "Statistiques et Archives du Football Marocain",
                nav_home: "🏠 الرئيسية",
                nav_head_to_head: "⚔️ وجها لوجه",
                hero_title: "🇲🇦 منصة إحصائيات كرة القدم المغربية",
                hero_subtitle: "اكتشف جميع الإحصائيات والأرشيف لكرة القدم المغربية",
                news_title_1: "البطولة الاحترافية 2024-2025",
                news_desc_1: "موسم 2024-2025 يستمر بمباريات مثيرة وأداء استثنائي للفرق المغربية.",
                news_title_2: "كأس العرش",
                news_desc_2: "ربع النهائي يعد بمواجهات ملحمية بين أفضل فرق المملكة.",
                news_title_3: "إحصائيات متقدمة",
                news_desc_3: "اطلع على الإحصائيات التفصيلية: الهدافين، صناع الأهداف، الشباك النظيفة وأداء الفرق.",
                news_title_4: "أرشيف كامل",
                news_desc_4: "الوصول إلى السجل الكامل للمباريات والنتائج منذ عدة عقود.",
                news_title_5: "أداء الشهر",
                news_desc_5: "اكتشف اللاعبين الذين ميزوا أكتوبر بأدائهم الاستثنائي.",
                news_title_6: "تحليلات تكتيكية",
                news_desc_6: "تحليلات مفصلة للتكتيكات والاستراتيجيات المستخدمة من قبل الفرق المغربية.",
                h2h_title: "⚔️ وجهاً لوجه | Face à Face",
                team1_label: "🏟️ الفريق 1",
                team2_label: "🏟️ الفريق 2",
                competition_label: "🏆 المسابقة",
                season_from_label: "📅 من موسم",
                season_to_label: "📅 إلى موسم",
                select_team: "اختر فريق...",
                all_competitions: "كل المسابقات",
                all_seasons: "كل المواسم",
                compare_button: "🔍 استخرج المواجهات المباشرة",
                loading_text: "جاري تحميل الإحصائيات...",
                footer_copyright: "© 2025 إحصائيات وأرشيف كرة القدم المغربية",
                footer_subtitle: "Statistiques et Archives du Football Marocain",
                footer_rights: "جميع الحقوق محفوظة",
                // ترجمات للإحصائيات
                total_matches: "مجموع المباريات",
                team_wins: "انتصارات",
                draws: "تعادلات",
                total_goals: "مجموع الأهداف",
                advanced_stats: "📊 إحصائيات متقدمة",
                biggest_win: "أكبر انتصار ل",
                highest_scoring: "أكثر مباراة تسجيلاً للأهداف",
                over_25_goals: "مباريات بأكثر من 2.5 هدف",
                goals_scored: "🥅 الأهداف المسجلة",
                goals_per_match: "معدل أهداف في المباراة",
                defensive_stats: "🛡️ الإحصائيات الدفاعية",
                clean_sheets: "نظافة الشباك",
                scoreless_draws: "مباريات دون أهداف (0-0)",
                clean_sheet_rate: "معدل نظافة الشباك",
                match_history: "📋 سجل المواجهات",
                no_matches_found: "لم يتم العثور على مباريات لهذا الاختيار",
                date: "التاريخ",
                teams: "الفرق",
                score: "النتيجة",
                competition: "المسابقة"
            },
            fr: {
                site_title: "Statistiques et Archives du Football Marocain",
                site_subtitle: "إحصائيات وأرشيف كرة القدم المغربية",
                nav_home: "🏠 Accueil",
                nav_head_to_head: "⚔️ Face à Face",
                hero_title: "🇲🇦 Plateforme Statistiques Football Marocain",
                hero_subtitle: "Découvrez toutes les statistiques et archives du football marocain",
                news_title_1: "Botola Pro D1 2024-2025",
                news_desc_1: "La saison 2024-2025 continue avec des matchs passionnants et des performances exceptionnelles des équipes marocaines.",
                news_title_2: "Coupe du Trône",
                news_desc_2: "Les quarts de finale promettent des confrontations épiques entre les meilleures équipes du royaume.",
                news_title_3: "Statistiques Avancées",
                news_desc_3: "Consultez les statistiques détaillées : buteurs, passeurs, clean sheets et performances des équipes.",
                news_title_4: "Archives Complètes",
                news_desc_4: "Accédez à l'historique complet des matchs et résultats depuis plusieurs décennies.",
                news_title_5: "Performances du Mois",
                news_desc_5: "Découvrez les joueurs qui ont marqué octobre par leurs performances exceptionnelles.",
                news_title_6: "Analyses Tactiques",
                news_desc_6: "Des analyses détaillées des tactiques et stratégies utilisées par les équipes marocaines.",
                h2h_title: "⚔️ Face à Face | وجهاً لوجه",
                team1_label: "🏟️ Équipe 1",
                team2_label: "🏟️ Équipe 2",
                competition_label: "🏆 Compétition",
                season_from_label: "📅 De saison",
                season_to_label: "📅 À saison",
                select_team: "Choisir une équipe...",
                all_competitions: "Toutes les compétitions",
                all_seasons: "Toutes les saisons",
                compare_button: "🔍 Extraire les confrontations directes",
                loading_text: "Chargement des statistiques...",
                footer_copyright: "© 2025 Statistiques et Archives du Football Marocain",
                footer_subtitle: "إحصائيات وأرشيف كرة القدم المغربية",
                footer_rights: "Tous droits réservés",
                // ترجمات للإحصائيات
                total_matches: "Total des matchs",
                team_wins: "Victoires",
                draws: "Matchs nuls",
                total_goals: "Total des buts",
                advanced_stats: "📊 Statistiques avancées",
                biggest_win: "Plus grande victoire pour",
                highest_scoring: "Match le plus prolifique",
                over_25_goals: "Matchs avec + de 2.5 buts",
                goals_scored: "🥅 Buts marqués",
                goals_per_match: "Moyenne de buts par match",
                defensive_stats: "🛡️ Statistiques défensives",
                clean_sheets: "Clean sheets",
                scoreless_draws: "Matchs nuls 0-0",
                clean_sheet_rate: "Taux de clean sheet",
                match_history: "📋 Historique des matchs",
                no_matches_found: "Aucun match trouvé pour cette sélection",
                date: "Date",
                teams: "Équipes",
                score: "Score",
                competition: "Compétition"
            }
        };

        // متغير لتخزين اللغة الحالية
        let currentLanguage = 'ar';

        // وظيفة تغيير اللغة
        function changeLanguage(lang) {
            currentLanguage = lang;
            
            // تحديث سمة HTML
            document.getElementById('htmlElement').setAttribute('lang', lang);
            document.getElementById('htmlElement').setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');
            
            // تحديث جميع العناصر التي تحتوي على data-translate
            document.querySelectorAll('[data-translate]').forEach(element => {
                const key = element.getAttribute('data-translate');
                if (translations[lang] && translations[lang][key]) {
                    element.textContent = translations[lang][key];
                }
            });
            
            // تحديث قيمة المحدد
            document.getElementById('language-select').value = lang;
            
            // إعادة ترجمة النتائج إذا كانت معروضة
            if (document.getElementById('results').classList.contains('show')) {
                retranslateResults();
            }
            
            // حفظ اللغة المختارة
            localStorage.setItem('selectedLanguage', lang);
        }

        // وظيفة إعادة ترجمة النتائج
        function retranslateResults() {
            const resultsElement = document.getElementById('results');
            if (resultsElement.innerHTML) {
                // إعادة إنشاء النتائج باللغة الحالية
                const team1 = document.getElementById('team1').value;
                const team2 = document.getElementById('team2').value;
                const competition = document.getElementById('competition').value;
                
                if (team1 && team2 && team1 !== team2) {
                    generateResults(team1, team2, competition);
                }
            }
        }

        // تهيئة اللغة عند تحميل الصفحة
        document.addEventListener('DOMContentLoaded', function() {
            const savedLanguage = localStorage.getItem('selectedLanguage') || 'ar';
            changeLanguage(savedLanguage);
            
            // إضافة مستمع الحدث لمحدد اللغة
            document.getElementById('language-select').addEventListener('change', function() {
                changeLanguage(this.value);
            });
        });

        let dataCache = null;
        const selectteam2=document.getElementById('team2');
        const selectteam1=document.getElementById('team1');
        const selectcompetition=document.getElementById('competition');

        getdatacodint().then(data => { dataCache = data; });
       
        // استخدام سريع
        function getArnom(table, id,col) {
            return dataCache?.[table]?.find(obj => obj.id == id)?.[col] || null;
        }

        const serverpg='http://localhost:9050/query';
        const sendQueries = async (queries, resultType = 'NUM',TypedeQuery='select') => {
           
        if (queries.length>0){
            try {
                    //  console.log(serverpg)
                // إرسال الطلب إلى الخادم
                const response = await fetch(serverpg, {
                  method: 'POST',
                  headers: {
                    'Content-Type': 'application/json',
                  },
                  body: JSON.stringify({ queries, resultType }), 
                });
            
               
                if (!response.ok) {
                  throw new Error('Erreur de réponse :' + response.statusText);
                }
            
           
                const dt = await response.json();
                // console.log(dt)
                let data;
                data= dt.data
                // console.log(data)
                
          if(TypedeQuery ==='select'){
              data=dt.data;
          }else if(TypedeQuery ==='selecthed') {
            data=dt.head;
          }else{


              data=[dt.message,dt.rs];
          
          }
          // console.log(data)
                return data;
            
              } catch (error) {
                console.error(`Erreur lors de l'envoi de la requête :`, error);
              }


        }else{
            return 'Vous n avez envoyé aucune Query'
        }
          
            
          };

        //##############################################  Insertion
        function getdatabros(){
            (async () => {
               
              const query=["select * from matches_new"];
            //   console.log(query);
                const data = await sendQueries(query,'nu');
           
        //     console.log(data);
        // console.log(dataCache);
         

           })();  

        }

        function remplireselect (idselect,table){
            const data=dataCache[table];
            const myselect =document.getElementById(idselect);
                  myselect.innerHTML ='';

            //  <option value="">Toutes les saisons</option>
            if ( table==="clubs"){
                          const option = document.createElement('option');
                 option.value =`0`;
                 option.text = currentLanguage === 'ar' ? "اختر فريق..." : "Choisir une équipe...";
                 myselect.appendChild(option);

                    for (const row of data){
                if (row.idpays==83 ) {
                 const option = document.createElement('option');
                 option.value =row.id;
                 option.text = currentLanguage === 'ar' ? row.arnom : row.nom;
                 myselect.appendChild(option);
                }
            }
            }else if(table==='comp'){
               
                          const option = document.createElement('option');
                 option.value =`0`;
                 option.text = currentLanguage === 'ar' ? "كل البطولات" : "Toutes les compétitions";
                 myselect.appendChild(option);

                    for (const row of data){
               
                 const option = document.createElement('option');
                 option.value =row.id;
                 option.text = currentLanguage === 'ar' ? row.arnom : row.nom;
                 myselect.appendChild(option);
                
            }
            
        }
         
        }

        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                 getdatabros();

                  remplireselect ('team1','clubs');
                  remplireselect ('team2','clubs');
                  remplireselect ('competition','comp');
                e.preventDefault();
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
                const page = this.dataset.page;
                document.getElementById('accueil').style.display = page === 'accueil' ? 'block' : 'none';
                document.getElementById('head-to-head').style.display = page === 'head-to-head' ? 'block' : 'none';
            });
        });

        const matchesDatabase = {
            'wydad-raja': [
                { date: '15/10/2024', home: 'Wydad', away: 'Raja', scoreHome: 2, scoreAway: 1, competition: 'Botola Pro' },
                { date: '20/05/2024', home: 'Raja', away: 'Wydad', scoreHome: 0, scoreAway: 0, competition: 'Coupe du Trône' },
                { date: '10/03/2024', home: 'Wydad', away: 'Raja', scoreHome: 3, scoreAway: 2, competition: 'Botola Pro' },
                { date: '05/12/2023', home: 'Raja', away: 'Wydad', scoreHome: 1, scoreAway: 1, competition: 'Botola Pro' },
                { date: '15/08/2023', home: 'Wydad', away: 'Raja', scoreHome: 2, scoreAway: 0, competition: 'Botola Pro' },
                { date: '22/04/2023', home: 'Raja', away: 'Wydad', scoreHome: 1, scoreAway: 2, competition: 'Botola Pro' },
                { date: '18/01/2023', home: 'Wydad', away: 'Raja', scoreHome: 1, scoreAway: 0, competition: 'Botola Pro' },
                { date: '12/11/2022', home: 'Raja', away: 'Wydad', scoreHome: 2, scoreAway: 2, competition: 'Botola Pro' }
            ],
            'wydad-far': [
                { date: '25/09/2024', home: 'Wydad', away: 'AS FAR', scoreHome: 1, scoreAway: 1, competition: 'Botola Pro' },
                { date: '15/04/2024', home: 'AS FAR', away: 'Wydad', scoreHome: 0, scoreAway: 2, competition: 'Botola Pro' },
                { date: '10/01/2024', home: 'Wydad', away: 'AS FAR', scoreHome: 3, scoreAway: 1, competition: 'Coupe du Trône' },
                { date: '05/10/2023', home: 'AS FAR', away: 'Wydad', scoreHome: 1, scoreAway: 1, competition: 'Botola Pro' },
                { date: '20/05/2023', home: 'Wydad', away: 'AS FAR', scoreHome: 2, scoreAway: 0, competition: 'Botola Pro' }
            ],
            'raja-far': [
                { date: '30/10/2024', home: 'Raja', away: 'AS FAR', scoreHome: 2, scoreAway: 2, competition: 'Botola Pro' },
                { date: '20/06/2024', home: 'AS FAR', away: 'Raja', scoreHome: 1, scoreAway: 0, competition: 'Botola Pro' },
                { date: '05/02/2024', home: 'Raja', away: 'AS FAR', scoreHome: 1, scoreAway: 1, competition: 'Botola Pro' },
                { date: '15/09/2023', home: 'AS FAR', away: 'Raja', scoreHome: 0, scoreAway: 2, competition: 'Botola Pro' },
                { date: '10/04/2023', home: 'Raja', away: 'AS FAR', scoreHome: 3, scoreAway: 1, competition: 'Botola Pro' }
            ],
            'wydad-rsb': [
                { date: '05/11/2024', home: 'Wydad', away: 'RSB Berkane', scoreHome: 2, scoreAway: 1, competition: 'Botola Pro' },
                { date: '20/07/2024', home: 'RSB Berkane', away: 'Wydad', scoreHome: 1, scoreAway: 1, competition: 'Botola Pro' },
                { date: '12/03/2024', home: 'Wydad', away: 'RSB Berkane', scoreHome: 3, scoreAway: 0, competition: 'Botola Pro' },
                { date: '30/11/2023', home: 'RSB Berkane', away: 'Wydad', scoreHome: 0, scoreAway: 1, competition: 'Botola Pro' }
            ],
            'raja-rsb': [
                { date: '15/10/2024', home: 'Raja', away: 'RSB Berkane', scoreHome: 1, scoreAway: 0, competition: 'Botola Pro' },
                { date: '28/05/2024', home: 'RSB Berkane', away: 'Raja', scoreHome: 2, scoreAway: 2, competition: 'Botola Pro' },
                { date: '18/02/2024', home: 'Raja', away: 'RSB Berkane', scoreHome: 1, scoreAway: 1, competition: 'Botola Pro' },
                { date: '05/10/2023', home: 'RSB Berkane', away: 'Raja', scoreHome: 0, scoreAway: 3, competition: 'Botola Pro' }
            ]
        };

        function compareTeams() {
            const team1 = document.getElementById('team1').value;
            const team2 = document.getElementById('team2').value;
            const competition = document.getElementById('competition').value;

            if (!team1 || !team2) {
                alert(currentLanguage === 'ar' ? 'الرجاء اختيار الفريقين!' : 'Veuillez sélectionner les deux équipes!');
                return;
            }

            if (team1 === team2) {
                alert(currentLanguage === 'ar' ? 'الرجاء اختيار فريقين مختلفين!' : 'Veuillez sélectionner deux équipes différentes!');
                return;
            }

            document.getElementById('loading').classList.add('show');
            document.getElementById('results').classList.remove('show');

            setTimeout(() => {
                generateResults(team1, team2, competition);
                document.getElementById('loading').classList.remove('show');
                document.getElementById('results').classList.add('show');
            }, 1200);
        }

        function generateResults(team1, team2, competition) {
          const query=  get_query(1270, 1258, '0');
          const teamNames={};
            let stats = {};
              (async () => {
       
      console.log(query);
        const data = await sendQueries(query,'nu');
        console.log(data);

        stats=calculateStats(data[0][0]);
        console.log(stats);
        AppHtml(stats);
   
   })();  
        }

        function AppHtml(stats){
            const t = translations[currentLanguage];
            
            const resultsHTML = `
                <div class="teams-header">
                    <div class="team-info">
                        <div class="team-logo">🔴</div>
                        <div class="team-name">${stats.team1}</div>
                    </div>
                    <div class="vs">VS</div>
                    <div class="team-info">
                        <div class="team-logo">🟢</div>
                        <div class="team-name">${stats.team2}</div>
                    </div>
                </div>

                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-value">${stats.totalMatches}</div>
                        <div class="stat-label">${t.total_matches}</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value">${stats.team1Wins}</div>
                        <div class="stat-label">${t.team_wins} ${stats.team1}</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value">${stats.draws}</div>
                        <div class="stat-label">${t.draws}</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value">${stats.team2Wins}</div>
                        <div class="stat-label">${t.team_wins} ${stats.team2}</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value">${stats.totalGoals}</div>
                        <div class="stat-label">${t.total_goals}</div>
                    </div>
                </div>

                <div class="advanced-stats">
                    <div class="stat-box">
                        <h4>${t.advanced_stats}</h4>
                        <div class="stat-row">
                            <span class="stat-row-label">${t.biggest_win} ${stats.team1}</span>
                            <span class="stat-row-value">${stats.team1BiggestWin}</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-row-label">${t.biggest_win} ${stats.team2}</span>
                            <span class="stat-row-value">${stats.team2BiggestWin}</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-row-label">${t.highest_scoring}</span>
                            <span class="stat-row-value">${stats.highestScoring}</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-row-label">${t.over_25_goals}</span>
                            <span class="stat-row-value">${stats.over25}</span>
                        </div>
                    </div>

                    <div class="stat-box">
                        <h4>${t.goals_scored}</h4>
                        <div class="stat-row">
                            <span class="stat-row-label">${stats.team1}</span>
                            <span class="stat-row-value">${stats.team1Goals}</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: ${(stats.team1Goals / (stats.team1Goals + stats.team2Goals)) * 100}%"></div>
                        </div>
                        <div class="stat-row" style="margin-top: 1rem;">
                            <span class="stat-row-label">${stats.team2}</span>
                            <span class="stat-row-value">${stats.team2Goals}</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: ${(stats.team2Goals / (stats.team1Goals + stats.team2Goals)) * 100}%"></div>
                        </div>
                        <div class="stat-row" style="margin-top: 1rem;">
                            <span class="stat-row-label">${t.goals_per_match}</span>
                            <span class="stat-row-value">${stats.avgGoals}</span>
                        </div>
                    </div>

                    <div class="stat-box">
                        <h4>${t.defensive_stats}</h4>
                        <div class="stat-row">
                            <span class="stat-row-label">${t.clean_sheets} ${stats.team1}</span>
                            <span class="stat-row-value">${stats.team1CleanSheets}</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-row-label">${t.clean_sheets} ${stats.team2}</span>
                            <span class="stat-row-value">${stats.team2CleanSheets}</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-row-label">${t.scoreless_draws}</span>
                            <span class="stat-row-value">${stats.scorelessDraws}</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-row-label">${t.clean_sheet_rate}</span>
                            <span class="stat-row-value">${stats.touxcline}%</span>
                        </div>
                    </div>
                </div>

                <div class="matches-section">
                    <h3>${t.match_history} (${stats.totalMatches} ${currentLanguage === 'ar' ? 'مباراة' : 'matchs'})</h3>
                    <p style="text-align: center; color: var(--gray); padding: 2rem;">${t.no_matches_found}</p>
                </div>
            `;

            document.getElementById('results').innerHTML = resultsHTML;
        }

        function calculateStats(data) {
            let team1Wins = data.wins, team2Wins = data.losses, draws = data.draws;
            let mj = data.total_matches;
            let team1Goals = data.total_bp, team2Goals = data.total_bc;
            let team1CleanSheets = data.clean_sheets, team2CleanSheets = data.no_goals;
            let scorelessDraws = data.draws0;
            let over25 = 0;
            let biggestWin1 = data.bigwin_rst, biggestWin2 = data.bigloss_arrst;

            return {
                totalMatches: mj,
                team1: currentLanguage === 'ar' ? data.ep_arnom : data.ep_frnom,
                team2: currentLanguage === 'ar' ? data.ec_arnom : data.ec_frnom,
                team1Wins,
                team2Wins,
                draws,
                team1Goals,
                team2Goals,
                totalGoals: team1Goals + team2Goals,
                touxcline: Math.round(((team1CleanSheets + team2CleanSheets) / (mj * 2)) * 100),
                avgGoals: Math.round((team1Goals + team2Goals) / (mj)),
                team1CleanSheets,
                team2CleanSheets,
                scorelessDraws,
                over25,
                team1BiggestWin: biggestWin1,
                team2BiggestWin: biggestWin2,
                highestScoring: 'N/A'
            };
        }

        function get_query(eqp1,eqp2,idcomp){
            const ep=(eqp1 !=='0') ? ` AND k.eqp in (${eqp1})` : '';
            const ec=(eqp1 !=='0') ? ` AND k.eqc in (${eqp2})` : '';
            const comp=(idcomp !=='0') ? ` AND k.comp in (${idcomp})` : '';
            const condidtion = ` ${ep} ${ec} ${comp}` ;
            const query =`WITH matches AS (
    SELECT 
        m.id AS idm, m.dat, mm.homway, m.saison, m.comp,
		CASE WHEN comp<100 AND idrd<51 THEN 0 ELSE idrd END AS rdd,
		m.idrd, m.manche,
        m.idphase, m.idstage, m.valid, m.rs,
        m.mnt, m.stade, m.arbt,
        CASE WHEN mm.homway = 1 THEN m.eqpdom ELSE m.eqpext END AS eqp,
        CASE WHEN mm.homway = 1 THEN m.butdom ELSE m.butext END AS bp,
        CASE WHEN mm.homway = 1 THEN m.butext ELSE m.butdom END AS bc,
		CASE WHEN mm.homway = 1 THEN m.butdom-m.butext ELSE m.butext-m.butdom END AS dif,
        CASE WHEN mm.homway = 1 THEN m.eqpext ELSE m.eqpdom END AS eqc,
        CASE WHEN mm.homway = 1 THEN m.pendom ELSE m.penext END AS penp,
        CASE WHEN mm.homway = 1 THEN m.penext ELSE m.pendom END AS penc,
	     CASE WHEN mm.homway = 1 THEN m.ctgdom ELSE m.ctgext END AS ctgp,
        CASE WHEN mm.homway = 1 THEN m.ctgext ELSE m.ctgdom END AS ctgc,
        CASE WHEN mm.homway = 1 THEN m.lieu ELSE 
              CASE WHEN m.lieu = 1 THEN 2 
              WHEN m.lieu = 2 THEN 1 ELSE 3 END END AS lieu,
        CASE WHEN mm.homway = 1 THEN m.pts 
             ELSE CASE WHEN m.pts = 1 THEN 2 
                       WHEN m.pts = 2 THEN 1 
                       ELSE 3 END END AS pts
    FROM matches_new m

    CROSS JOIN (SELECT 1 AS homway UNION ALL SELECT 2) mm

),
team_stats AS (
SELECT 
        ep.id AS ide, ec.id AS idc, 
		ep.nom AS ep_frnom,ep.arnom AS ep_arnom,
		ec.nom AS ec_frnom,ec.arnom AS ec_arnom,
        COUNT(DISTINCT saison) AS saison,
        COUNT(*) AS total_matches,
        SUM(CASE WHEN bp > bc THEN 1 ELSE 0 END) AS wins,
        SUM(CASE WHEN bp < bc THEN 1 ELSE 0 END) AS losses,
        SUM(CASE WHEN bp = bc THEN 1 ELSE 0 END) AS draws,
        SUM(CASE WHEN bp = bc AND bc = 0 THEN 1 ELSE 0 END) AS draws0,
        SUM(bp) AS total_bp,
        SUM(bc) AS total_bc,
        SUM(CASE WHEN bc = 0 THEN 1 ELSE 0 END) AS clean_sheets,
        SUM(CASE WHEN bp = 0 THEN 1 ELSE 0 END) AS no_goals,
        SUM(CASE WHEN bp > bc AND lieu = 2 THEN 1 ELSE 0 END) AS away_wins,
		SUM(CASE WHEN bp < bc AND lieu = 1 THEN 1 ELSE 0 END) AS home_losses,
        SUM(bp - bc) AS dif
FROM matches k
    INNER JOIN clubs ep ON ep.id = k.eqp
    INNER JOIN clubs ec ON ec.id = k.eqc
    INNER JOIN clbcomp c ON c.id = k.comp
    INNER JOIN pays pp ON pp.id = ep.idpays
    INNER JOIN pays pc ON pc.id = ec.idpays
    WHERE k.idm > 0 AND k.valid=1
	AND ctgp  in (1,2)  ${condidtion}
  
GROUP BY ep.id,ec.id,ep.nom,ep.arnom,ec.nom,ec.arnom),

max_victory AS (
    SELECT 
        CASE WHEN k.bp =k.bc THEN '-' ELSE CONCAT(k.bp,'-',k.bc) END rst,
        CASE WHEN k.bp =k.bc THEN '-' ELSE CONCAT(k.bc,'-',k.bp) END arrst,
        k.dif,
        k.bp,k.bc,
        COUNT(*) AS repetition_count
    FROM 
        matches k
    WHERE k.idm > 0 AND k.valid=1
	AND ctgp  in (1,2)  ${condidtion}
    GROUP BY
     k.dif,k.bp,k.bc
    ORDER BY 
        k.dif DESC, k.bp DESC ,k.bc ASC
    LIMIT 1
),
max_defeat AS (
    SELECT 
        CASE WHEN k.bp =k.bc THEN '-' ELSE CONCAT(k.bp,'-',k.bc) END rst,
        CASE WHEN k.bp =k.bc THEN '-' ELSE CONCAT(k.bc,'-',k.bp) END arrst,
        k.dif,
        k.bp,k.bc,
        COUNT(*) AS repetition_count
    FROM 
	      matches k
	  WHERE k.idm > 0 AND k.valid=1
	AND ctgp  in (1,2) ${condidtion}
    GROUP BY
        k.dif,k.bp,k.bc
    ORDER BY 
        k.dif ASC, k.bc DESC ,k.bp ASC
    LIMIT 1
)
SELECT 
ts.*,
    
    -- أكبر انتصار
    mv.rst AS bigwin_rst,
    mv.arrst AS bigwin_arrst,
    mv.repetition_count AS bigwin_count,
    
    -- أكبر هزيمة

    md.rst AS bigloss_rst,
    md.arrst AS bigloss_arrst,
    md.repetition_count AS bigloss_count
FROM team_stats ts
CROSS JOIN max_victory mv
CROSS JOIN max_defeat md
`;
return [query];
        }

        async function getdatacodint() {
    try {
      const response = await fetch('http://localhost:3011/api/init');
      const data = await response.json();
      if (data.success) {
        return data;
      } else {
        console.error("فشل في تحميل البيانات.");
      }
    } catch (err) {
      console.error("خطأ في الاتصال بالخادم:", err);
    }
  }

  function autrefetchservercode(){
    console.log(getdatacodint());
    fetch('http://localhost:3011/api/init')
    .then(response => response.json())
    .then(data => {
      if (data.success) {
      } else {
        console.error("فشل في تحميل البيانات.");
      }
    })
    .catch(err => {
      console.error("خطأ في الاتصال بالخادم:", err);
    });
  }

    </script>
</body>
</html>