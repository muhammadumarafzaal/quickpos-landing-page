<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS | The Last POS System You’ll Ever Need</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation & Header (SA-7) -->
    <header class="header">
        <nav class="container nav">
            <div class="logo">
                <h1>Quick<span>POS</span></h1>
            </div>
            <ul class="nav-links">
                <li><a href="#features">Features</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="nav-cta">
                <a href="#" class="btn btn-primary">Sign Up</a>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section (SA-8) -->
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-content">
                    <span class="badge">Next-Gen POS Solution</span>
                    <h2 class="hero-title">The Last POS System <br><span>You’ll Ever Need</span></h2>
                    <p class="hero-subtitle">Simplify your sales, manage inventory, and grow your business with our all-in-one cloud platform designed for modern retailers.</p>
                    <div class="hero-actions">
                        <a href="#signup" class="btn btn-primary btn-large">Get Started for Free</a>
                        <a href="#demo" class="btn btn-outline btn-large">Watch Demo</a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat">
                            <strong>10k+</strong>
                            <span>Active Users</span>
                        </div>
                        <div class="stat">
                            <strong>99.9%</strong>
                            <span>Uptime</span>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="image-wrapper">
                        <img src="hero-mockup.png" alt="QuickPOS Dashboard Mockup">
                    </div>
                    <div class="glow"></div>
                </div>
            </div>
        </section>

        <!-- Features Section (SA-9) -->
        <section id="features" class="features">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Everything You Need to <span>Scale</span></h2>
                    <p class="section-description">Powerful tools designed to help you manage your business more efficiently and provide a better experience for your customers.</p>
                </div>
                
                <div class="features-grid">
                    <!-- Feature 1 -->
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package-search"><path d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"/><path d="m7.5 4.27 9 5.15"/><polyline points="3.29 7 12 12 20.71 7"/><line x1="12" x2="12" y1="22" y2="12"/><circle cx="18.5" cy="15.5" r="2.5"/><path d="M20.27 17.27 22 19"/></svg>
                        </div>
                        <h3>Inventory Management</h3>
                        <p>Track stock levels in real-time, set low-stock alerts, and manage vendors seamlessly across all your locations.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                        </div>
                        <h3>Sales Analytics</h3>
                        <p>Gain deep insights into your business performance with customized reports, trends, and seasonal forecasting.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layers-2"><path d="m16.02 12 5.48 3.13a2 2 0 0 1 0 3.47l-7.75 4.43a2 2 0 0 1-2.5 0l-7.75-4.43a2 2 0 0 1 0-3.47L8.98 12"/><path d="M12 2 4.5 6.27a2 2 0 0 0 0 3.46l7.75 4.43a2 2 0 0 0 2.5 0l7.75-4.43a2 2 0 0 0 0-3.46L12 2z"/></svg>
                        </div>
                        <h3>Easy Integration</h3>
                        <p>Connect QuickPOS with your favorite accounting, marketing, and payments platforms in just a few clicks.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cloud-lock"><path d="M12 2a3 3 0 0 0-3 3v2"/><circle cx="12" cy="17" r="2"/><path d="M20 16.33a4 4 0 0 0-1.5-7.83 6 6 0 1 0-11.5 1.5 4 4 0 0 0-1.5 7.83"/><rect width="8" height="5" x="8" y="15" rx="1"/><path d="M15 15v-2a3 3 0 0 0-6 0v2"/></svg>
                        </div>
                        <h3>Cloud Security</h3>
                        <p>Rest easy knowing your data is always backed up and protected with enterprise-grade encryption and 99.9% uptime.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <!-- Footer will go here -->
    </footer>
</body>
</html>
