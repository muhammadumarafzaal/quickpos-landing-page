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

        <!-- Pricing Section (SA-10) -->
        <section id="pricing" class="pricing">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Simple, <span>Transparent</span> Pricing</h2>
                    <p class="section-description">Choose the plan that's right for your business. No hidden fees, ever.</p>
                </div>

                <div class="pricing-grid">
                    <!-- Basic Plan -->
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Basic</h3>
                            <div class="price">$29<span>/mo</span></div>
                            <p>For small boutique shops</p>
                        </div>
                        <ul class="pricing-features">
                            <li>1 Store Location</li>
                            <li>5 Staff Accounts</li>
                            <li>Standard Analytics</li>
                            <li>Email Support</li>
                            <li class="disabled">Custom Integrations</li>
                        </ul>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-outline">Choose Basic</a>
                        </div>
                    </div>

                    <!-- Pro Plan (Popular) -->
                    <div class="pricing-card popular">
                        <div class="popular-badge">Most Popular</div>
                        <div class="pricing-header">
                            <h3>Pro</h3>
                            <div class="price">$99<span>/mo</span></div>
                            <p>For growing retail businesses</p>
                        </div>
                        <ul class="pricing-features">
                            <li>5 Store Locations</li>
                            <li>Unlimited Staff</li>
                            <li>Advanced Analytics</li>
                            <li>24/7 Priority Support</li>
                            <li>Inventory Forecasting</li>
                        </ul>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-primary">Choose Pro</a>
                        </div>
                    </div>

                    <!-- Enterprise Plan -->
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3>Enterprise</h3>
                            <div class="price">Custom</div>
                            <p>For large retail chains</p>
                        </div>
                        <ul class="pricing-features">
                            <li>Unlimited Locations</li>
                            <li>Custom Staff Roles</li>
                            <li>Dedicated Account Manager</li>
                            <li>API Access</li>
                            <li>Custom Integrations</li>
                        </ul>
                        <div class="pricing-footer">
                            <a href="#" class="btn btn-outline">Contact Sales</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Us Section (SA-11) -->
        <section id="contact" class="contact">
            <div class="container contact-grid">
                <div class="contact-info">
                    <h2 class="section-title">Get in <span>Touch</span></h2>
                    <p class="section-description">Have questions about QuickPOS? Our team is here to help you find the perfect solution for your business.</p>
                    
                    <div class="contact-details">
                        <div class="detail-item">
                            <div class="detail-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                            </div>
                            <div>
                                <h4>Email Us</h4>
                                <p>support@quickpos.com</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            </div>
                            <div>
                                <h4>Call Us</h4>
                                <p>+1 (555) 000-0000</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-form-wrapper">
                    <form action="process.php" method="POST" class="contact-form">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" placeholder="How can we help you?" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-full">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container footer-grid">
            <div class="footer-brand">
                <div class="logo">
                    <h1>Quick<span>POS</span></h1>
                </div>
                <p>The next-generation POS solution for modern retail and businesses. Cloud-based, secure, and infinitely scalable.</p>
                <div class="social-links">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg></a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg></a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg></a>
                </div>
            </div>
            
            <div class="footer-links">
                <h4>Product</h4>
                <ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#">Solutions</a></li>
                    <li><a href="#">Security</a></li>
                </ul>
            </div>
            
            <div class="footer-links">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; <?php echo date("Y"); ?> QuickPOS. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
