<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Herald John N. Leyson Portfolio</title>
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <meta name="description"
        content="Portfolio of Mark Herald John N. Leyson, IT Operations Associate, Software Engineer, and AWS Certified Cloud Engineer.">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&family=Outfit:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Main CSS -->
    <style> :root{ --bg-base:#080c16;--bg-surface:#0e1626;--bg-card:rgba(17,27,47,0.75);--border-color:rgba(99,102,241,0.2);--border-glow:rgba(0,242,254,0.5);--text-primary:#ffffff;--text-secondary:#cbd5e1;--text-muted:#8492a6;--clr-cyan:#00f2fe;--clr-blue:#3b82f6;--clr-purple:#a855f7;--clr-green:#10b981;--clr-yellow:#eab308;--gradient-primary:linear-gradient(135deg,#00f2fe 0%,#3b82f6 100%);--font-sans:'Space Grotesk',sans-serif;--font-body:'Outfit',sans-serif;--font-mono:'Fira Code',monospace;--glow-cyan:0 0 30px rgba(0,242,254,0.3);--transition-fast:all 0.2s ease;--transition-smooth:all 0.4s cubic-bezier(0.16,1,0.3,1);} *{ margin:0;padding:0;box-sizing:border-box;scroll-behavior:smooth;} body{ background-color:transparent;color:var(--text-primary);font-family:var(--font-body);line-height:1.6;overflow-x:hidden;} h1,h2,h3,h4,.logo,.section-tag{ font-family:var(--font-sans);} a{ color:inherit;text-decoration:none;transition:var(--transition-smooth);} .container{ max-width:1200px;margin:0 auto;padding:0 2rem;} section{ padding:8rem 0;position:relative;} .text-gradient{ background:var(--gradient-primary);-webkit-background-clip:text;-webkit-text-fill-color:transparent;font-weight:700;} .interactive-bg{ position:fixed;top:0;left:0;width:100vw;height:100vh;z-index:-1;overflow:hidden;pointer-events:none;background-color:var(--bg-base);} #particlesCanvas{ position:absolute;top:0;left:0;width:100%;height:100%;} .glow-orb{ position:absolute;border-radius:50%;filter:blur(150px);opacity:0.15;animation:bounce 25s infinite alternate ease-in-out;} .orb-cyan{ top:-10%;left:10%;width:45vw;height:45vw;background:var(--clr-cyan);} .orb-blue{ bottom:-15%;right:5%;width:50vw;height:50vw;background:var(--clr-blue);animation-delay:-5s;} .orb-orange{ top:35%;left:45%;width:30vw;height:30vw;background:var(--clr-orange);opacity:0.08;animation-delay:-10s;} @keyframes bounce{ 0%{ transform:translate(0,0) scale(1);} 50%{ transform:translate(5%,10%) scale(1.1);} 100%{ transform:translate(-5%,-5%) scale(0.9);} } .navbar{ position:fixed;top:0;left:0;width:100%;z-index:100;backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px);border-bottom:1px solid var(--border-color);background-color:rgba(8,12,22,0.85);transition:var(--transition-smooth);} .nav-container{ max-width:1200px;margin:0 auto;display:flex;justify-content:space-between;align-items:center;padding:1.1rem 2rem;} .logo{ font-size:1.5rem;font-weight:700;letter-spacing:-1px;color:var(--text-primary);} .logo .bracket{ color:var(--clr-cyan);font-weight:400;} .logo-m{ color:#ffffff;} .logo-text{ background:var(--gradient-primary);-webkit-background-clip:text;-webkit-text-fill-color:transparent;} .nav-menu{ display:flex;align-items:center;gap:1.5rem;} .nav-link{ font-size:0.95rem;font-weight:500;color:var(--text-secondary);padding:0.5rem 0.75rem;border-radius:6px;transition:var(--transition-fast);} .nav-link i{ font-size:0.85rem;opacity:0.8;margin-right:0.30rem;} .nav-link:hover,.nav-link.active{ color:var(--clr-cyan);background:rgba(0,242,254,0.06);} .contact-btn{ border:1px solid var(--clr-cyan);color:var(--clr-cyan) !important;background:transparent;padding:0.5rem 1.25rem !important;box-shadow:0 0 15px rgba(0,242,254,0.1);} .contact-btn:hover{ background:var(--clr-cyan) !important;color:var(--bg-base) !important;box-shadow:var(--glow-cyan);} .menu-toggle{ display:none;background:none;border:none;color:var(--clr-cyan);font-size:1.5rem;cursor:pointer;} .hero-section{ padding-top:10rem;min-height:90vh;display:flex;align-items:center;} .hero-grid{ display:grid;grid-template-columns:1fr;gap:2.5rem;align-items:center;width:100%;} .hero-content{ width:100%;display:flex;flex-direction:column;align-items:center;} .hero-visual-profile{ display:flex;justify-content:center;position:relative;} .profile-image-container{ width:320px;height:320px;border-radius:50%;position:relative;padding:8px;background:radial-gradient(circle,rgba(0,242,254,0.15) 0%,rgba(14,22,38,0.95) 80%);border:1px solid var(--border-color);box-shadow:0 20px 40px rgba(0,0,0,0.5);z-index:5;overflow:hidden;} .profile-image-main{ width:100%;height:100%;object-fit:cover;border-radius:50%;z-index:10;position:relative;border:1px solid rgba(255,255,255,0.05);filter:grayscale(100%) contrast(1.2) brightness(0.95);mix-blend-mode:luminosity;-webkit-mask-image:radial-gradient(circle,rgba(0,0,0,1) 50%,rgba(0,0,0,0) 90%);mask-image:radial-gradient(circle,rgba(0,0,0,1) 50%,rgba(0,0,0,0) 90%);transition:var(--transition-smooth);} .profile-image-container:hover .profile-image-main{ filter:grayscale(20%) contrast(1.1) brightness(1.0);mix-blend-mode:normal;} .image-border-glow{ position:absolute;top:-5px;left:-5px;right:-5px;bottom:-5px;background:linear-gradient(135deg,var(--clr-cyan),var(--clr-blue),var(--clr-purple));border-radius:28px;z-index:1;opacity:0.5;filter:blur(15px);transition:var(--transition-smooth);} .profile-image-container:hover .image-border-glow{ opacity:0.95;filter:blur(25px);transform:scale(1.02);} .tech-badge-overlay{ position:absolute;bottom:20px;right:-15px;background:var(--bg-surface);border:1px solid var(--clr-orange);color:var(--clr-orange);padding:0.4rem 1rem;border-radius:50px;display:flex;align-items:center;gap:0.5rem;font-weight:700;font-size:0.85rem;box-shadow:0 10px 20px rgba(0,0,0,0.4);z-index:15;animation:floating 3s ease-in-out infinite;} @keyframes floating{ 0%,100%{ transform:translateY(0);} 50%{ transform:translateY(-8px);} } .hero-profile-header{ display:flex;flex-direction:column;align-items:center;gap:1.5rem;margin-bottom:2rem;text-align:center;justify-content:center;width:100%;} .hero-profile-text{ display:flex;flex-direction:column;gap:0.5rem;} @media (min-width:640px){ .hero-profile-header{ flex-direction:row;text-align:left;align-items:center;gap:2.5rem;justify-content:center;} } .profile-avatar-container{ position:relative;width:140px;height:140px;border-radius:50%;padding:3px;background:linear-gradient(135deg,var(--clr-cyan),var(--clr-blue));box-shadow:var(--glow-cyan);transition:var(--transition-smooth);} .profile-avatar-img{ width:100%;height:100%;object-fit:cover;border-radius:50%;background:radial-gradient(circle,rgba(0,242,254,0.15) 0%,rgba(14,22,38,0.95) 80%);transition:var(--transition-smooth);} .tech-badge-overlay-avatar{ position:absolute;bottom:8px;left:8px;background:#ff9900;color:white;width:32px;height:32px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1rem;border:2px solid var(--bg-base);box-shadow:0 0 10px rgba(255,153,0,0.7);z-index:10;transition:var(--transition-smooth);} .status-indicator-dot{ position:absolute;bottom:8px;right:8px;width:20px;height:20px;background-color:var(--clr-green);border-radius:50%;border:2px solid var(--bg-base);box-shadow:0 0 8px var(--clr-green);animation:blink 2s infinite;cursor:pointer;z-index:15;transition:var(--transition-smooth);} .status-indicator-dot:hover{ transform:scale(1.25);box-shadow:0 0 18px var(--clr-green);} .status-indicator-dot::after{ content:"Available for Work";position:absolute;bottom:140%;right:50%;transform:translateX(50%) scale(0.85);background:rgba(8,12,22,0.95);border:1px solid var(--clr-green);color:var(--clr-green);padding:0.4rem 0.8rem;border-radius:6px;font-size:0.75rem;font-weight:700;white-space:nowrap;opacity:0;pointer-events:none;box-shadow:0 5px 15px rgba(16,185,129,0.25);transition:all 0.3s cubic-bezier(0.16,1,0.3,1);z-index:100;} .status-indicator-dot::before{ content:"";position:absolute;bottom:120%;right:50%;transform:translateX(50%) scale(0.85);border-width:5px;border-style:solid;border-color:var(--clr-green) transparent transparent transparent;opacity:0;pointer-events:none;transition:all 0.3s cubic-bezier(0.16,1,0.3,1);z-index:100;} .status-indicator-dot:hover::after,.status-indicator-dot:hover::before{ opacity:1;transform:translateX(50%) scale(1) translateY(-5px);} @media (min-width:768px){ .profile-avatar-container{ width:200px;height:200px;padding:5px;} .tech-badge-overlay-avatar{ width:44px;height:44px;font-size:1.5rem;bottom:14px;left:14px;border-width:3px;} .status-indicator-dot{ width:26px;height:26px;bottom:14px;right:14px;border-width:3px;} } .dev-badge{ display:inline-flex;align-items:center;gap:0.6rem;background:rgba(16,185,129,0.08);border:1px solid rgba(16,185,129,0.25);padding:0.4rem 1.1rem;border-radius:50px;font-size:0.85rem;font-weight:600;color:#34d399;} .hero-title{ font-size:clamp(1.5rem,5.5vw,3.2rem);line-height:1.2;font-weight:800;letter-spacing:-1px;margin:0;color:var(--text-primary);white-space:normal;} .hero-subtitle{ font-size:1.1rem;color:var(--clr-cyan);font-weight:600;margin:0;line-height:1.4;} .hero-description{ font-size:1.15rem;color:var(--text-secondary);margin-top:1.5rem;margin-bottom:2rem;max-width:850px;line-height:1.7;text-align:justify;margin-left:auto;margin-right:auto;} @media (min-width:640px){ .hero-title{ font-size:3.5rem;letter-spacing:-2px;white-space:nowrap;} .hero-subtitle{ font-size:1.35rem;} } .hero-actions{ display:flex;justify-content:center;gap:1.25rem;margin-bottom:2rem;} .social-links-row{ display:flex;flex-wrap:wrap;gap:1.5rem;} .social-links-row a{ display:inline-flex;align-items:center;gap:0.5rem;color:var(--text-secondary);font-size:0.95rem;font-weight:500;} .social-links-row a:hover{ color:var(--clr-cyan);} .social-links-row a i{ color:var(--clr-cyan);} .btn{ display:inline-flex;align-items:center;gap:0.75rem;padding:0.85rem 2rem;border-radius:8px;font-weight:600;font-size:0.95rem;cursor:pointer;transition:var(--transition-smooth);} .btn-primary{ background:var(--gradient-primary);color:var(--bg-base);box-shadow:var(--glow-cyan);} .btn-primary:hover{ transform:translateY(-2px);box-shadow:0 0 35px rgba(0,242,254,0.45);} .btn-secondary{ background:rgba(255,255,255,0.03);color:var(--text-primary);border:1px solid var(--border-color);} .btn-secondary:hover{ border-color:var(--clr-cyan);background:rgba(0,242,254,0.05);transform:translateY(-2px);} .workspace-section{ background:rgba(4,6,12,0.4);border-top:1px solid rgba(255,255,255,0.02);border-bottom:1px solid rgba(255,255,255,0.02);} .workspace-grid{ display:grid;grid-template-columns:1.05fr 0.95fr;gap:3rem;} .ide-container{ background:var(--bg-surface);border:1px solid var(--border-color);border-radius:12px;width:100%;box-shadow:0 30px 60px rgba(0,0,0,0.5);overflow:hidden;display:flex;flex-direction:column;} .ide-header{ background:rgba(0,0,0,0.3);border-bottom:1px solid var(--border-color);display:flex;align-items:center;padding:0.75rem 1rem;} .window-controls{ display:flex;gap:0.4rem;margin-right:1.5rem;} .win-btn{ width:10px;height:10px;border-radius:50%;display:block;} .win-btn.close{ background-color:#ef4444;} .win-btn.minimize{ background-color:#eab308;} .win-btn.maximize{ background-color:#10b981;} .ide-tabs{ display:flex;gap:0.25rem;} .tab-btn{ background:transparent;border:none;color:var(--text-secondary);font-family:var(--font-mono);font-size:0.75rem;padding:0.4rem 0.8rem;border-radius:4px;cursor:pointer;display:flex;align-items:center;gap:0.4rem;} .tab-btn.active{ background:rgba(255,255,255,0.05);color:var(--text-primary);border-bottom:2px solid var(--clr-cyan);} .ide-editor-wrapper{ display:grid;grid-template-columns:140px 1fr;height:280px;} .ide-sidebar{ background:rgba(0,0,0,0.15);border-right:1px solid var(--border-color);padding:0.8rem;} .sidebar-title{ font-size:0.7rem;font-weight:700;color:var(--text-muted);letter-spacing:1px;margin-bottom:0.6rem;} .file-tree{ display:flex;flex-direction:column;gap:0.4rem;} .tree-item{ font-family:var(--font-mono);font-size:0.75rem;color:var(--text-secondary);cursor:pointer;display:flex;align-items:center;gap:0.4rem;padding:0.2rem 0.4rem;border-radius:4px;} .tree-item:hover,.tree-item.active{ background:rgba(255,255,255,0.04);color:var(--text-primary);} .tree-item.indent{ margin-left:0.8rem;} .text-blue{ color:#38bdf8;} .text-yellow{ color:#facc15;} .text-orange{ color:#fb923c;} .ide-content-area{ background:rgba(0,0,0,0.1);padding:1rem;display:grid;grid-template-columns:25px 1fr;gap:0.5rem;overflow-y:auto;} .code-line-numbers{ display:flex;flex-direction:column;color:var(--text-muted);font-family:var(--font-mono);font-size:0.8rem;text-align:right;user-select:none;} .code-display{ font-family:var(--font-mono);font-size:0.8rem;white-space:pre-wrap;color:var(--text-secondary);} .code-keyword{ color:#c678dd;} .code-string{ color:#98c379;} .code-variable{ color:#e06c75;} .code-comment{ color:#5c6370;font-style:italic;} .ide-footer{ background:var(--bg-surface);border-top:1px solid var(--border-color);padding:0.35rem 0.8rem;display:flex;gap:1rem;font-family:var(--font-mono);font-size:0.7rem;color:var(--text-secondary);} .footer-item{ display:flex;align-items:center;gap:0.3rem;} .ml-auto{ margin-left:auto;} .terminal-shell{ background:#020617;border:1px solid rgba(99,102,241,0.15);border-radius:10px;box-shadow:0 20px 40px rgba(0,0,0,0.6);overflow:hidden;} .shell-header{ background:#0f172a;border-bottom:1px solid rgba(255,255,255,0.05);padding:0.6rem 1.2rem;display:flex;align-items:center;gap:1.5rem;} .shell-buttons{ display:flex;gap:0.35rem;} .shell-buttons span{ width:8px;height:8px;background-color:var(--text-muted);border-radius:50%;} .shell-title{ font-family:var(--font-mono);font-size:0.75rem;color:var(--text-secondary);} .shell-body{ padding:1.5rem;height:250px;overflow-y:auto;font-family:var(--font-mono);font-size:0.85rem;display:flex;flex-direction:column;gap:0.5rem;} .shell-line{ line-height:1.5;} .shell-prompt{ color:var(--clr-cyan);margin-right:0.5rem;} .shell-input-line{ display:flex;align-items:center;} #terminalInput{ background:transparent;border:none;outline:none;color:var(--text-primary);font-family:var(--font-mono);font-size:0.85rem;flex-grow:1;} .section-header{ text-align:center;margin-bottom:4.5rem;} .section-tag{ font-family:var(--font-mono);font-size:0.85rem;color:var(--clr-cyan);margin-bottom:0.5rem;display:inline-block;} .section-title{ font-size:2.8rem;letter-spacing:-1px;margin-bottom:1rem;} .section-desc{ color:var(--text-secondary);font-size:1.1rem;max-width:600px;margin:0 auto;} .skills-category-grid{ display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:2rem;} .interactive-skill-card{ background:var(--bg-card);border:1px solid var(--border-color);padding:2.5rem 2rem;border-radius:12px;position:relative;overflow:hidden;backdrop-filter:blur(10px);transition:var(--transition-smooth);} .skills-list-tags{ display:flex;flex-wrap:wrap;gap:0.6rem;margin-top:1rem;} .skills-list-tags span{ font-size:0.85rem;font-weight:500;color:var(--text-secondary);background:rgba(255,255,255,0.03);border:1px solid var(--border-color);padding:0.4rem 0.8rem;border-radius:6px;transition:var(--transition-fast);} .skills-list-tags span:hover{ color:var(--clr-cyan);border-color:var(--clr-cyan);background:rgba(0,242,254,0.05);box-shadow:0 0 10px rgba(0,242,254,0.15);} .card-glow{ position:absolute;top:0;left:0;width:100%;height:100%;background:radial-gradient(circle at var(--x,50%) var(--y,50%),rgba(0,242,254,0.1) 0%,transparent 50%);pointer-events:none;opacity:0;transition:opacity 0.3s;} .interactive-skill-card:hover .card-glow{ opacity:1;} .interactive-skill-card:hover{ transform:translateY(-5px);border-color:var(--border-glow);box-shadow:var(--glow-cyan);} .card-icon-container{ width:54px;height:54px;border-radius:8px;background:rgba(0,242,254,0.08);color:var(--clr-cyan);display:flex;align-items:center;justify-content:center;font-size:1.6rem;margin-bottom:1.5rem;border:1px solid rgba(0,242,254,0.15);} .interactive-skill-card h3{ font-size:1.4rem;margin-bottom:1rem;color:var(--text-primary);} .skill-meter{ height:4px;background:rgba(255,255,255,0.05);border-radius:5px;margin-bottom:1.5rem;overflow:hidden;} .meter-bar{ height:100%;background:var(--gradient-primary);border-radius:5px;width:0;transition:width 1.5s cubic-bezier(0.16,1,0.3,1);} .clean-skill-list{ list-style:none;} .clean-skill-list li{ font-size:0.95rem;color:var(--text-secondary);margin-bottom:0.6rem;padding-left:1.25rem;position:relative;line-height:1.5;} .clean-skill-list li::before{ content:"•";color:var(--clr-cyan);position:absolute;left:0;font-size:1.2rem;top:-2px;} .projects-grid{ display:grid;grid-template-columns:repeat(2,1fr);gap:2.5rem;} .dev-project-card{ background:var(--bg-card);border:1px solid var(--border-color);border-radius:12px;overflow:hidden;backdrop-filter:blur(10px);transition:var(--transition-smooth);} .dev-project-card:hover{ border-color:var(--border-glow);transform:translateY(-5px);box-shadow:var(--glow-cyan);} .card-header-bar{ background:rgba(0,0,0,0.25);border-bottom:1px solid var(--border-color);padding:0.8rem 1.25rem;display:flex;align-items:center;gap:0.75rem;font-family:var(--font-mono);font-size:0.8rem;color:var(--text-secondary);} .project-title-text{ font-weight:600;color:var(--text-primary);} .project-branch{ margin-left:auto;font-size:0.75rem;background:rgba(255,255,255,0.05);padding:0.2rem 0.6rem;border-radius:4px;border:1px solid rgba(255,255,255,0.08);} .project-card-body{ padding:2rem;} .proj-date{ font-size:0.8rem;font-family:var(--font-mono);color:var(--clr-cyan);display:block;margin-bottom:0.5rem;font-weight:500;} .project-card-body h3{ font-size:1.5rem;margin-bottom:0.75rem;color:var(--text-primary);} .project-info-text{ color:var(--text-secondary);font-size:1.05rem;margin-bottom:1.5rem;line-height:1.6;} .tag-row{ display:flex;flex-wrap:wrap;gap:0.4rem;margin-bottom:1.5rem;} .tech-tag{ background:rgba(255,255,255,0.04);color:var(--text-secondary);border:1px solid rgba(255,255,255,0.05);padding:0.25rem 0.75rem;border-radius:6px;font-size:0.8rem;font-weight:500;} .highlights-list{ list-style:none;border-top:1px solid var(--border-color);padding-top:1.25rem;} .highlights-list li{ font-size:0.95rem;color:var(--text-secondary);margin-bottom:0.5rem;padding-left:1.25rem;position:relative;line-height:1.5;} .highlights-list li::before{ content:"✓";color:var(--clr-cyan);position:absolute;left:0;font-weight:700;} .dev-timeline{ max-width:800px;margin:0 auto;display:flex;flex-direction:column;gap:2.5rem;} .timeline-block{ display:grid;grid-template-columns:200px 1fr;gap:2.5rem;} .timeline-meta{ display:flex;flex-direction:column;gap:0.5rem;padding-top:0.5rem;} .time-duration{ font-family:var(--font-mono);font-size:0.9rem;color:var(--clr-cyan);font-weight:600;} .time-label{ align-self:flex-start;font-size:0.75rem;font-family:var(--font-mono);padding:0.2rem 0.6rem;border-radius:4px;font-weight:700;} .intern-label{ background:rgba(168,85,247,0.12);color:#d8b4fe;border:1px solid rgba(168,85,247,0.25);} .edu-label{ background:rgba(59,130,246,0.12);color:#93c5fd;border:1px solid rgba(59,130,246,0.25);} .timeline-info-card{ background:var(--bg-card);border:1px solid var(--border-color);padding:2rem;border-radius:12px;backdrop-filter:blur(10px);} .timeline-info-card h3{ font-size:1.4rem;margin-bottom:0.25rem;} .timeline-info-card h4{ font-size:1.1rem;color:var(--text-secondary);font-weight:600;margin-bottom:1rem;} .timeline-desc{ color:var(--text-secondary);margin-bottom:1.25rem;font-size:1.05rem;} .experience-bullets{ list-style:none;} .experience-bullets li{ font-size:0.95rem;color:var(--text-secondary);margin-bottom:0.6rem;padding-left:1.25rem;position:relative;} .experience-bullets li::before{ content:"•";color:var(--clr-purple);position:absolute;left:0;font-size:1.2rem;} .credentials-grid{ display:grid;grid-template-columns:1fr;gap:2.5rem;} @media (min-width:992px){ .credentials-grid{ grid-template-columns:1.1fr 0.9fr;gap:3.5rem;} } .creds-card-left{ background:linear-gradient(135deg,rgba(255,153,0,0.05) 0%,rgba(17,27,47,0.75) 100%);border:1px solid rgba(255,153,0,0.25);padding:3rem;border-radius:16px;position:relative;overflow:hidden;} .aws-focus-glow{ position:absolute;top:-50px;right:-50px;width:150px;height:150px;background:var(--clr-orange);filter:blur(80px);opacity:0.15;pointer-events:none;} .aws-logo-header{ display:flex;align-items:center;gap:1.5rem;margin-bottom:1.5rem;} .aws-glow-logo{ font-size:3rem;color:var(--clr-orange);filter:drop-shadow(0 0 10px rgba(255,153,0,0.4));} .aws-badge-pill{ font-family:var(--font-mono);font-size:0.75rem;background:rgba(255,153,0,0.15);color:var(--clr-orange);padding:0.2rem 0.6rem;border-radius:4px;border:1px solid rgba(255,153,0,0.3);font-weight:700;} .aws-info-text{ color:var(--text-secondary);margin-bottom:2rem;font-size:1.05rem;} .aws-cert-items{ display:flex;flex-direction:column;gap:1rem;} .cert-row{ display:flex;gap:1rem;align-items:flex-start;} .cert-row i{ color:var(--clr-orange);font-size:1.3rem;margin-top:0.2rem;} .cert-row strong{ font-size:1.05rem;display:block;color:var(--text-primary);} .cert-row span{ font-family:var(--font-mono);font-size:0.85rem;color:var(--text-secondary);} .title-with-icon{ font-size:2rem;margin-bottom:2rem;display:flex;align-items:center;gap:0.75rem;} .award-timeline-mini{ display:flex;flex-direction:column;gap:1.5rem;} .mini-award-item{ display:flex;gap:1.5rem;background:var(--bg-card);border:1px solid var(--border-color);padding:1.5rem;border-radius:10px;transition:var(--transition-fast);} .mini-award-item:hover{ border-color:rgba(234,179,8,0.4);transform:translateX(4px);} .award-year{ font-family:var(--font-mono);font-size:0.9rem;font-weight:700;color:var(--clr-yellow);} .award-details-mini strong{ display:block;font-size:1.1rem;color:var(--text-primary);} .award-details-mini span{ font-size:0.95rem;color:var(--text-secondary);} .contact-grid{ display:grid;grid-template-columns:1fr;gap:3rem;width:100%;} .direct-methods{ display:flex;flex-direction:column;gap:1.25rem;margin-top:2rem;} .method-card{ display:flex;align-items:center;gap:1.25rem;background:var(--bg-card);border:1px solid var(--border-color);padding:1.25rem 1.75rem;border-radius:12px;} .method-card:hover{ border-color:var(--clr-cyan);transform:translateX(4px);} .method-card i{ font-size:1.5rem;} .method-card span{ font-family:var(--font-mono);font-size:0.8rem;color:var(--text-muted);display:block;} .method-card strong{ font-size:1.1rem;color:var(--text-primary);} .font-cyan{ color:var(--clr-cyan);} .font-yellow{ color:var(--clr-yellow);} .font-purple{ color:var(--clr-purple);} .contact-panel-right{ background:var(--bg-card);border:1px solid var(--border-color);padding:2.5rem;border-radius:16px;backdrop-filter:blur(10px);} .dev-form{ display:flex;flex-direction:column;gap:1.25rem;} .form-row-two{ display:grid;grid-template-columns:1fr 1fr;gap:1.25rem;} .form-input-container{ display:flex;flex-direction:column;gap:0.4rem;} .form-input-container label{ font-size:0.85rem;color:var(--text-secondary);font-weight:600;} .form-input-container input,.form-input-container textarea{ background:rgba(0,0,0,0.3);border:1px solid var(--border-color);padding:0.85rem 1.2rem;border-radius:6px;color:var(--text-primary);font-family:inherit;font-size:0.95rem;transition:var(--transition-fast);} .form-input-container input:focus,.form-input-container textarea:focus{ outline:none;border-color:var(--clr-cyan);box-shadow:0 0 10px rgba(0,242,254,0.15);} .submit-btn{ border:none;justify-content:center;padding:0.95rem;font-size:1rem;} footer{ border-top:1px solid var(--border-color);background:rgba(4,6,12,0.9);padding:2.5rem 0;} .footer-layout{ display:flex;flex-direction:column;align-items:center;gap:1rem;text-align:center;} .footer-logo{ font-family:var(--font-mono);font-size:1.3rem;font-weight:700;color:var(--clr-cyan);} footer p{ color:var(--text-muted);font-size:0.9rem;max-width:600px;margin:0;text-align:center;} @media (min-width:768px){ .footer-layout{ flex-direction:row;justify-content:space-between;align-items:center;text-align:left;} footer p{ text-align:right;} } @media (max-width:1024px){ .hero-grid,.credentials-grid,.contact-grid,.workspace-grid{ grid-template-columns:1fr;gap:3.5rem;} .projects-grid{ grid-template-columns:1fr;} .hero-visual-profile{ justify-content:center;display:flex;} .timeline-block{ grid-template-columns:1fr;gap:0.5rem;} footer p{ text-align:left;} .footer-layout{ flex-direction:column;align-items:flex-start;gap:1.25rem;} } @media (max-width:768px){ .menu-toggle{ display:block;} .nav-menu{ position:fixed;top:65px;left:-100%;width:100%;height:calc(100vh - 65px);background:var(--bg-base);flex-direction:column;padding:3rem 2rem;gap:1.5rem;transition:var(--transition-smooth);border-top:1px solid var(--border-color);backdrop-filter:blur(20px);} .nav-menu.open{ left:0;} .nav-link{ font-size:1.1rem;} .hero-title{ font-size:2.8rem;} .form-row-two{ grid-template-columns:1fr;} }</style>
</head>

<body class="developer-theme">
    <!-- Floating Cyber Particles Canvas / Background -->
    <div class="interactive-bg">
        <canvas id="particlesCanvas"></canvas>
        <div class="glow-orb orb-cyan"></div>
        <div class="glow-orb orb-blue"></div>
        <div class="glow-orb orb-orange"></div>
    </div>

    <!-- Header / Navbar -->
    <header class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">
                <span class="logo-m">MHJN</span><span class="logo-text">LEYSON</span>
            </a>
            <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation Menu">
                <i class="fa-solid fa-code"></i>
            </button>
            <nav class="nav-menu" id="navMenu">
                <a href="#about" class="nav-link active"><i class="fa-solid fa-user"></i> Profile</a>
                <a href="#skills" class="nav-link"><i class="fa-solid fa-cubes"></i> Skills</a>
                <a href="#projects" class="nav-link"><i class="fa-solid fa-code-branch"></i> Projects</a>
                <a href="#experience" class="nav-link"><i class="fa-solid fa-history"></i> Experience</a>
                <a href="#MHJNLeyson-Portfolio" class="nav-link"><i class="fa-solid fa-award"></i> Certifieds</a>
                <a href="#contact" class="nav-link contact-btn">Contact Me</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero / Developer Dashboard -->
        <section id="about" class="hero-section">
            <div class="container hero-grid">
                <div class="hero-content">
                    <div class="hero-profile-header">
                        <div class="profile-avatar-container">
                            <img src="profile.jpg" alt="Mark Leyson" class="profile-avatar-img">
                            <span class="status-indicator-dot online" title="Available for Work"></span>
                            <a href="#MHJNLeyson-Portfolio" class="tech-badge-overlay-avatar"
                                title="AWS & Certifications">
                                <i class="fa-brands fa-aws"></i>
                            </a>
                        </div>
                        <div class="hero-profile-text">
                            <h1 class="hero-title">Mark Herald John N. Leyson</h1>
                            <h2 class="hero-subtitle">IT Operations Associate | Software Engineer | AWS Cloud Engineer
                            </h2>
                        </div>
                    </div>

                    <p class="hero-description">
                        Information Technology graduate with hands-on experience in designing, developing, testing,
                        deploying, and maintaining web applications using PHP, JavaScript, MySQL, HTML, and CSS.
                        Experienced in Agile development, database design, system analysis, debugging, technical
                        documentation, and software testing. Passionate about building scalable software solutions,
                        learning new technologies, and contributing to collaborative development teams. AWS Certified
                        Cloud Practitioner with strong analytical and problem-solving skills.
                    </p>

                    <div class="hero-actions">
                        <a href="#contact" class="btn btn-primary"><i class="fa-solid fa-envelope"></i> Contact Me</a>
                        <a href="#projects" class="btn btn-secondary"><i class="fa-solid fa-eye"></i> View Projects</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technical Competencies -->
        <section id="skills" class="skills-section">
            <div class="container">
                <div class="section-header">
                    <span class="section-tag">Competencies</span>
                    <h2 class="section-title">Core Technical <span class="text-gradient">Skills</span></h2>
                    <p class="section-desc">A detailed look at my cloud capabilities, database administration, and
                        software development skills.</p>
                </div>

                <div class="skills-showcase">
                    <div class="skills-category-grid">
                        <!-- Cloud -->
                        <div class="interactive-skill-card" data-tilt>
                            <div class="card-glow"></div>
                            <div class="card-icon-container">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                            </div>
                            <h3>Cloud & Infrastructure</h3>
                            <div class="skills-list-tags">
                                <span>Amazon Web Services (AWS)</span>
                                <span>Cloud Computing Fundamentals</span>
                                <span>Linux Administration</span>
                                <span>Networking Fundamentals</span>
                                <span>Application Deployment</span>
                                <span>System Troubleshooting</span>
                                <span>Database Backup and Recovery</span>
                            </div>
                        </div>

                        <!-- Databases -->
                        <div class="interactive-skill-card" data-tilt>
                            <div class="card-glow"></div>
                            <div class="card-icon-container">
                                <i class="fa-solid fa-database"></i>
                            </div>
                            <h3>Databases</h3>
                            <div class="skills-list-tags">
                                <span>MySQL</span>
                                <span>Database Design</span>
                                <span>Query Optimization</span>
                            </div>
                        </div>

                        <!-- Programming Languages -->
                        <div class="interactive-skill-card" data-tilt>
                            <div class="card-glow"></div>
                            <div class="card-icon-container">
                                <i class="fa-solid fa-laptop-code"></i>
                            </div>
                            <h3>Programming Languages</h3>
                            <div class="skills-list-tags">
                                <span>Python</span>
                                <span>JavaScript</span>
                                <span>Java</span>
                                <span>PHP</span>
                                <span>HTML and CSS</span>
                                <span>SQL</span>
                            </div>
                        </div>

                        <!-- Software Development -->
                        <div class="interactive-skill-card" data-tilt>
                            <div class="card-glow"></div>
                            <div class="card-icon-container">
                                <i class="fa-solid fa-diagram-project"></i>
                            </div>
                            <h3>Software Development</h3>
                            <div class="skills-list-tags">
                                <span>Object-Oriented Programming</span>
                                <span>REST APIs</span>
                                <span>Agile Methodology</span>
                                <span>System Design</span>
                                <span>Requirements Analysis</span>
                                <span>Software Testing & Quality Assurance</span>
                            </div>
                        </div>

                        <!-- Technical Documentation -->
                        <div class="interactive-skill-card" data-tilt>
                            <div class="card-glow"></div>
                            <div class="card-icon-container">
                                <i class="fa-solid fa-file-invoice"></i>
                            </div>
                            <h3>Technical Documentation</h3>
                            <div class="skills-list-tags">
                                <span>AI & Emerging Technologies</span>
                                <span>Generative AI Fundamentals</span>
                                <span>Prompt Engineering</span>
                                <span>Large Language Models (LLMs)</span>
                                <span>AI-Assisted Development</span>
                            </div>
                        </div>

                        <!-- Tools -->
                        <div class="interactive-skill-card" data-tilt>
                            <div class="card-glow"></div>
                            <div class="card-icon-container">
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                            </div>
                            <h3>Tools</h3>
                            <div class="skills-list-tags">
                                <span>Git</span>
                                <span>GitHub</span>
                                <span>Linux</span>
                                <span>Figma</span>
                                <span>Canva</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technical Projects -->
        <section id="projects" class="projects-section">
            <div class="container">
                <div class="section-header">
                    <span class="section-tag">Portfolio</span>
                    <h2 class="section-title">Technical <span class="text-gradient">Projects</span></h2>
                    <p class="section-desc">Key systems designed, developed, and deployed during my training.</p>
                </div>

                <div class="projects-grid">
                    <!-- Project 1 -->
                    <a href="https://github.com/mheraldjnleyson/Medical-Clinic-Record-Management-System" target="_blank"
                        rel="noopener noreferrer" class="project-link-wrapper">
                        <div class="dev-project-card" data-tilt>
                            <div class="card-header-bar">
                                <i class="fa-solid fa-shield-halved text-cyan"></i>
                                <span class="project-title-text">clinic-management-system</span>
                                <span class="project-branch"><i class="fa-solid fa-code-branch"></i> June 2026</span>
                            </div>
                            <div class="project-card-body">
                                <span class="proj-date">Software Developer Intern (On-The-Job Training)</span>
                                <h3>Medical Clinic Record Management System</h3>

                                <div class="tag-row">
                                    <span class="tech-tag">PHP</span>
                                    <span class="tech-tag">MySQL</span>
                                    <span class="tech-tag">HTML5</span>
                                    <span class="tech-tag">CSS3</span>
                                    <span class="tech-tag">JavaScript</span>
                                </div>

                                <ul class="highlights-list">
                                    <li>Designed and developed a web-based medical records system supporting daily
                                        school clinic operations.</li>
                                    <li>Implemented QR-based patient identification and Role-Based Access Control (RBAC)
                                        to improve security and access management.</li>
                                    <li>Automated BMI, stunting, and wasting computations using WHO standards, reducing
                                        manual calculations.</li>
                                    <li>Resolved application issues through technical problem solving and system testing
                                        before deployment.</li>
                                </ul>
                            </div>
                        </div>
                    </a>

                    <!-- Project 2 -->
                    <a href="https://github.com/mheraldjnleyson/Web-Based-Intranet-Inventory-and-Tracking-Management-System-"
                        target="_blank" rel="noopener noreferrer" class="project-link-wrapper">
                        <div class="dev-project-card" data-tilt>
                            <div class="card-header-bar">
                                <i class="fa-solid fa-boxes-stacked text-orange"></i>
                                <span class="project-title-text">intranet-inventory-tracker</span>
                                <span class="project-branch"><i class="fa-solid fa-code-branch"></i> Dec 2025</span>
                            </div>
                            <div class="project-card-body">
                                <span class="proj-date">Software Developer | Capstone project</span>
                                <h3>Web-Based Intranet Inventory and Tracking Management System</h3>

                                <div class="tag-row">
                                    <span class="tech-tag">PHP</span>
                                    <span class="tech-tag">JavaScript</span>
                                    <span class="tech-tag">MySQL</span>
                                    <span class="tech-tag">HTML5</span>
                                    <span class="tech-tag">CSS</span>
                                    <span class="tech-tag">Linux</span>
                                    <span class="tech-tag">Agile</span>
                                </div>

                                <ul class="highlights-list">
                                    <li>Designed and developed a web-based inventory and tracking system to improve
                                        internal record management.</li>
                                    <li>Built responsive user interfaces and interactive prototypes using Figma.</li>
                                    <li>Deployed and maintained the application in a Linux-based intranet environment.
                                    </li>
                                    <li>Collaborated with team members using Agile development practices throughout the
                                        software development lifecycle.</li>
                                    <li>Documented system requirements, testing procedures, and deployment activities.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Timeline Section -->
        <section id="experience" class="experience-section">
            <div class="container">
                <div class="section-header">
                    <span class="section-tag">History</span>
                    <h2 class="section-title">Timeline & <span class="text-gradient">Experience</span></h2>
                </div>

                <div class="dev-timeline">
                    <!-- Experience -->
                    <div class="timeline-block">
                        <div class="timeline-meta">
                            <span class="time-duration">January 2026 - May 2026</span>
                            <span class="time-label intern-label">OJT INTERNSHIP</span>
                        </div>
                        <div class="timeline-info-card">
                            <h3>Software Developer Intern (On-The-Job Training)</h3>
                            <h4>Olongapo City National High School</h4>
                            <p class="timeline-desc">June 2026 (Project Handover)</p>
                            <ul class="experience-bullets">
                                <li>Deployed and maintained the Medical Clinic Record Management System in a Linux-based
                                    local network environment.</li>
                                <li>Administered MySQL databases, including backup, restoration, and SQL query
                                    optimization.</li>
                                <li>Configured LAN connectivity and resolved application, database, and network-related
                                    issues.</li>
                                <li>Managed user accounts, Role-Based Access Control (RBAC), and system security.</li>
                                <li>Performed technical troubleshooting, preventive maintenance, and end-user support.
                                </li>
                                <li>Prepared technical documentation, deployment procedures, and user guides.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Education -->
                    <div class="timeline-block">
                        <div class="timeline-meta">
                            <span class="time-duration">GRADUATED 2026</span>
                            <span class="time-label edu-label">COLLEGE DEGREE</span>
                        </div>
                        <div class="timeline-info-card">
                            <h3>Bachelor of Science in Information Technology (BSIT)</h3>
                            <h4>Comteq Computer & Business College</h4>
                            <p class="timeline-desc">Olongapo City, Philippines</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Credentials, AWS & Awards -->
        <section id="MHJNLeyson-Portfolio" class="credentials-section">
            <div class="container">
                <div class="credentials-grid">
                    <!-- AWS Highlights -->
                    <div class="creds-card-left">
                        <div class="aws-focus-glow"></div>
                        <div class="aws-logo-header">
                            <i class="fa-brands fa-aws aws-glow-logo"></i>
                            <div>
                                <span class="aws-badge-pill">ACTIVE CERTIFIED</span>
                                <h3>AWS & Certifications</h3>
                            </div>
                        </div>
                        <div class="aws-cert-items">
                            <div class="cert-row">
                                <i class="fa-solid fa-badge-check text-cyan"></i>
                                <div>
                                    <strong>AWS Certified Cloud Practitioner (CLF-C02)</strong>
                                    <span>July 2026</span>
                                </div>
                            </div>
                            <div class="cert-row">
                                <i class="fa-solid fa-badge-check text-cyan"></i>
                                <div>
                                    <strong>AWS Cloud Practitioner Essentials</strong>
                                    <span>AWS Training and Certification | 2026</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Awards List -->
                    <div class="awards-card-right">
                        <h2 class="title-with-icon"><i class="fa-solid fa-award text-yellow"></i> Recognitions</h2>

                        <div class="award-timeline-mini">
                            <div class="mini-award-item">
                                <div class="award-year">2026</div>
                                <div class="award-details-mini">
                                    <strong>Web Designer of the Year</strong>
                                    <span>Comteq Computer & Business College</span>
                                </div>
                            </div>
                            <div class="mini-award-item">
                                <div class="award-year">2026</div>
                                <div class="award-details-mini">
                                    <strong>Outstanding Performance in On-the-Job Training (OJT)</strong>
                                    <span>Comteq Computer & Business College</span>
                                </div>
                            </div>
                            <div class="mini-award-item">
                                <div class="award-year">2026</div>
                                <div class="award-details-mini">
                                    <strong>Certificate of Recognition For Technical Excellence in Medical System
                                        Digitalization</strong>
                                    <span>Olongapo City National High School</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact-section">
            <div class="container">
                <div class="contact-grid">
                    <div class="contact-panel-left">
                        <span class="section-tag">Connect</span>
                        <h2 class="section-title">Initialize Connection</h2>
                        <p class="section-desc">Select an output channel to coordinate developer work.</p>

                        <div class="direct-methods">
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=markherald3@icloud.com"
                                target="_blank" rel="noopener noreferrer" class="method-card">
                                <i class="fa-solid fa-envelope font-cyan"></i>
                                <div>
                                    <span>Email Me (via Gmail):</span>
                                    <strong>markherald3@icloud.com</strong>
                                </div>
                            </a>
                            <a href="sms:+639947465194" class="method-card">
                                <i class="fa-solid fa-message font-yellow"></i>
                                <div>
                                    <span>Direct Message (SMS):</span>
                                    <strong>+63 994 746 5194</strong>
                                </div>
                            </a>
                            <a href="https://github.com/mheraldjnleyson" target="_blank" rel="noopener noreferrer"
                                class="method-card">
                                <i class="fa-brands fa-github font-purple"></i>
                                <div>
                                    <span>GitHub Profile:</span>
                                    <strong>github.com/mheraldjnleyson</strong>
                                </div>
                            </a>
                            <a href="https://www.linkedin.com/in/mark-herald-john-n-leyson-73a31916b/" target="_blank"
                                rel="noopener noreferrer" class="method-card">
                                <i class="fa-brands fa-linkedin font-blue"></i>
                                <div>
                                    <span>LinkedIn Profile:</span>
                                    <strong>mark-herald-leyson</strong>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container footer-layout">
            <span class="footer-logo"><span class="logo-m">MHJN</span><span class="logo-text">LEYSON</span></span>
            <p>&copy; 2026. Built with modern animations, responsive web systems, and cloud optimization.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script id="mainScript">document.addEventListener('DOMContentLoaded', () => {
    // Facebook-style developer warning
    console.log("%cStop!", "color: #ff3333; font-family: system-ui, sans-serif; font-size: 5rem; font-weight: bold; -webkit-text-stroke: 1px black;");
    console.log("%cThis is a browser feature intended for developers. Accessing this panel may expose internal system components.", "color: #cbd5e1; font-family: system-ui, sans-serif; font-size: 1.5rem; font-weight: 500;");

    // ==========================================================================
    // 1. Mobile Navigation Toggle
    // ==========================================================================
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');

    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('open');
            const icon = menuToggle.querySelector('i');
            if (navMenu.classList.contains('open')) {
                icon.className = 'fa-solid fa-xmark';
            } else {
                icon.className = 'fa-solid fa-code';
            }
        });
    }

    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navMenu.classList.contains('open')) {
                navMenu.classList.remove('open');
                menuToggle.querySelector('i').className = 'fa-solid fa-code';
            }
        });
    });

    // ==========================================================================
    // 2. Interactive Particles Canvas Background (Moving UX)
    // ==========================================================================
    const canvas = document.getElementById('particlesCanvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let particles = [];
        let mouse = { x: null, y: null, radius: 100 };

        const resizeCanvas = () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        };
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        window.addEventListener('mousemove', (e) => {
            mouse.x = e.x;
            mouse.y = e.y;
        });

        window.addEventListener('mouseleave', () => {
            mouse.x = null;
            mouse.y = null;
        });

        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2 + 1;
                this.speedX = Math.random() * 0.8 - 0.4;
                this.speedY = Math.random() * 0.8 - 0.4;
                this.color = Math.random() > 0.5 ? '#00f2fe' : '#3b82f6';
            }

            update() {
                this.x += this.speedX;
                this.y += this.speedY;

                // Bounce off borders
                if (this.x > canvas.width || this.x < 0) this.speedX = -this.speedX;
                if (this.y > canvas.height || this.y < 0) this.speedY = -this.speedY;

                // Mouse interaction physics
                if (mouse.x && mouse.y) {
                    let dx = mouse.x - this.x;
                    let dy = mouse.y - this.y;
                    let distance = Math.sqrt(dx * dx + dy * dy);
                    if (distance < mouse.radius) {
                        let force = (mouse.radius - distance) / mouse.radius;
                        let directionX = dx / distance;
                        let directionY = dy / distance;
                        this.x -= directionX * force * 2;
                        this.y -= directionY * force * 2;
                    }
                }
            }

            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fillStyle = this.color;
                ctx.fill();
            }
        }

        const initParticles = () => {
            const count = Math.min(Math.floor(canvas.width / 15), 80);
            particles = [];
            for (let i = 0; i < count; i++) {
                particles.push(new Particle());
            }
        };
        initParticles();

        const animateParticles = () => {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach(p => {
                p.update();
                p.draw();
            });

            // Connect nearby particles
            for (let a = 0; a < particles.length; a++) {
                for (let b = a; b < particles.length; b++) {
                    let dx = particles[a].x - particles[b].x;
                    let dy = particles[a].y - particles[b].y;
                    let dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < 110) {
                        ctx.strokeStyle = `rgba(0, 242, 254, ${0.15 - dist / 110})`;
                        ctx.lineWidth = 0.5;
                        ctx.beginPath();
                        ctx.moveTo(particles[a].x, particles[a].y);
                        ctx.lineTo(particles[b].x, particles[b].y);
                        ctx.stroke();
                    }
                }
            }
            requestAnimationFrame(animateParticles);
        };
        animateParticles();
    }

    // ==========================================================================
    // 3. Simulated IDE Data & Interaction
    // ==========================================================================
    const ideFiles = {
        db_connect: `<span class="code-keyword">&lt;?php</span>
<span class="code-comment">// Establish database connection to Clinic System</span>
<span class="code-variable">$host</span> = <span class="code-string">"localhost"</span>;
<span class="code-variable">$user</span> = <span class="code-string">"root"</span>;
<span class="code-variable">$pass</span> = <span class="code-string">"doctor_admin"</span>;
<span class="code-variable">$dbname</span> = <span class="code-string">"clinic_records"</span>;

<span class="code-variable">$conn</span> = <span class="code-keyword">new</span> mysqli(<span class="code-variable">$host</span>, <span class="code-variable">$user</span>, <span class="code-variable">$pass</span>, <span class="code-variable">$dbname</span>);
<span class="code-keyword">if</span> (<span class="code-variable">$conn</span>-&gt;connect_error) {
    <span class="code-keyword">die</span>(<span class="code-string">"Connection failed: "</span> . <span class="code-variable">$conn</span>-&gt;connect_error);
}
<span class="code-comment">// Role-Based Access Control (RBAC) verified</span>`,

        patient_qr: `<span class="code-comment">// QR-based Patient Identification & BMI Calculator</span>
<span class="code-keyword">function</span> <span class="code-variable">generatePatientQR</span>(patientId) {
    <span class="code-keyword">return</span> QRCode.generate({
        text: <span class="code-string">'PATIENT-' + patientId</span>,
        size: <span class="code-number">256</span>,
        errorCorrectionLevel: <span class="code-string">'H'</span>
    });
}

<span class="code-keyword">function</span> <span class="code-variable">computeBMI</span>(weight, heightCm) {
    <span class="code-keyword">const</span> heightM = heightCm / <span class="code-number">100</span>;
    <span class="code-keyword">return</span> (weight / (heightM * heightM)).toFixed(<span class="code-number">2</span>);
}`,

        aws_deploy: `<span class="code-comment">#!/bin/bash</span>
<span class="code-comment"># AWS Deployment automation for Clinic System</span>
<span class="code-keyword">echo</span> <span class="code-string">"Initializing deployment to AWS EC2 instance..."</span>
git pull origin main
systemctl restart apache2

<span class="code-keyword">echo</span> <span class="code-string">"Optimizing MySQL databases..."</span>
mysql -u root -p -e <span class="code-string">"CALL OptimizeIndexes();"</span>
<span class="code-keyword">echo</span> <span class="code-string">"Deployment successful!"</span>`
    };

    const codeDisplay = document.getElementById('codeDisplay');
    const tabBtns = document.querySelectorAll('.tab-btn');
    const sidebarTreeItems = document.querySelectorAll('.file-tree .tree-item.file');

    const switchFile = (fileName) => {
        if (!ideFiles[fileName] || !codeDisplay) return;

        // Update tabs active state
        tabBtns.forEach(btn => {
            if (btn.dataset.file === fileName) btn.classList.add('active');
            else btn.classList.remove('active');
        });

        // Update sidebar items
        sidebarTreeItems.forEach(item => {
            if (item.dataset.file === fileName) item.classList.add('active');
            else item.classList.remove('active');
        });

        // Render code
        codeDisplay.innerHTML = ideFiles[fileName];
    };

    // Set initial file
    if (codeDisplay) {
        switchFile('db_connect');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => switchFile(btn.dataset.file));
        });

        sidebarTreeItems.forEach(item => {
            item.addEventListener('click', () => switchFile(item.dataset.file));
        });
    }

    // ==========================================================================
    // 4. Hero Section Typing Effect
    // ==========================================================================
    const words = ["npm install developer-talent", "git commit -m 'ready to code'", "aws ec2 run-instances --image-id ami-leyson"];
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    const typewriter = document.getElementById('typewriter');

    const typeEffect = () => {
        if (!typewriter) return;

        const currentWord = words[wordIndex];
        if (isDeleting) {
            typewriter.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
        } else {
            typewriter.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
        }

        let speed = isDeleting ? 30 : 60;

        if (!isDeleting && charIndex === currentWord.length) {
            speed = 2000; // Pause at end of word
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
            speed = 500; // Pause before typing next
        }

        setTimeout(typeEffect, speed);
    };
    typeEffect();

    // ==========================================================================
    // 5. Interactive Console/Terminal Shell (UX moving logic)
    // ==========================================================================
    const terminalInput = document.getElementById('terminalInput');
    const terminalOutputs = document.getElementById('terminalOutputs');
    const shellBody = document.getElementById('shellBody');

    if (terminalInput && terminalOutputs) {
        terminalInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') {
                const cmd = terminalInput.value.trim().toLowerCase();
                terminalInput.value = '';

                // Add output of input command
                const promptLine = document.createElement('p');
                promptLine.className = 'shell-line';
                promptLine.innerHTML = `<span class="shell-prompt">guest@mleyson-sh:~$</span> ${cmd}`;
                terminalOutputs.appendChild(promptLine);

                // Process output response
                const responseLine = document.createElement('p');
                responseLine.className = 'shell-line';

                switch (cmd) {
                    case 'help':
                        responseLine.innerHTML = `Available commands:<br>
                        - <span class="text-yellow">about</span>: Brief summary of Mark's developer profile<br>
                        - <span class="text-yellow">skills</span>: List key competencies<br>
                        - <span class="text-yellow">projects</span>: Display major systems developed<br>
                        - <span class="text-yellow">cert</span>: View cloud certification status<br>
                        - <span class="text-yellow">clear</span>: Clear terminal logs`;
                        break;
                    case 'about':
                        responseLine.innerHTML = `Mark Herald John N. Leyson - IT Operations Associate & Software Developer.<br>
                        Specializes in full stack PHP/JS development & AWS deployments. Custom site designer and Linux administrator.`;
                        break;
                    case 'skills':
                        responseLine.innerHTML = `Languages: PHP, JS, Python, Java, SQL, CSS/HTML<br>
                        Cloud Platform: AWS Certified Practitioner, Linux Admin, System Troubleshooter<br>
                        Database: MySQL Schema Design, optimization.`;
                        break;
                    case 'projects':
                        responseLine.innerHTML = `1. Clinic Records System (PHP/JS/MySQL, QR-patient tracking)<br>
                        2. Capstone Asset Tracker (Inventory intranet, Figma workflow)`;
                        break;
                    case 'cert':
                        responseLine.innerHTML = `AWS Certified Cloud Practitioner (CLF-C02) - July 2026. Credentials verified.`;
                        break;
                    case 'clear':
                        terminalOutputs.innerHTML = '';
                        responseLine.innerHTML = 'Logs cleared. Type "help" for action items.';
                        break;
                    case '':
                        responseLine.innerHTML = '';
                        break;
                    default:
                        responseLine.innerHTML = `<span style="color: #ef4444;">Command not found: "${cmd}". Type "help" for assistance.</span>`;
                }

                if (responseLine.innerHTML) {
                    terminalOutputs.appendChild(responseLine);
                }

                // Autoscroll to bottom
                shellBody.scrollTop = shellBody.scrollHeight;
            }
        });
    }

    // ==========================================================================
    // 6. Interactive 3D Card Tilt & Mouse Glow Effect
    // ==========================================================================
    const tiltCards = document.querySelectorAll('[data-tilt]');
    tiltCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            // Disable transition while tracking mouse to avoid lag
            card.style.transition = 'none';

            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            // Set variables for CSS glow positioning
            card.style.setProperty('--x', `${x}px`);
            card.style.setProperty('--y', `${y}px`);

            // Apply slight 3D rotate tilt
            const width = rect.width;
            const height = rect.height;
            const rotateX = ((y / height) - 0.5) * -12; // tilt limit
            const rotateY = ((x / width) - 0.5) * 12;

            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-5px)`;
        });

        card.addEventListener('mouseleave', () => {
            // Smoothly ease back to original position
            card.style.transition = 'transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94), border-color 0.3s ease, box-shadow 0.3s ease';
            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg)';
        });
    });

    // ==========================================================================
    // 7. Contact Form Handler (Simulated Payload submission)
    // ==========================================================================
    const contactForm = document.getElementById('contactForm');
    const formStatus = document.getElementById('formStatus');

    if (contactForm && formStatus) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const submitBtn = contactForm.querySelector('.submit-btn');
            const origText = submitBtn.innerHTML;

            submitBtn.innerHTML = '<span>sending_payload...</span> <i class="fa-solid fa-spinner fa-spin"></i>';
            submitBtn.disabled = true;

            setTimeout(() => {
                submitBtn.innerHTML = origText;
                submitBtn.disabled = false;
                formStatus.className = 'form-status success';
                formStatus.innerHTML = '<i class="fa-solid fa-circle-check"></i> payload_delivered: Message successfully sent.';
                contactForm.reset();

                 setTimeout(() => {
                    formStatus.innerHTML = '';
                    formStatus.className = 'form-status';
                }, 5000);
            }, 1200);
        });
    }

    // ==========================================================================
    // 8. Frontend Security Measures (Disable right-click, F12, Ctrl+U, Ctrl+Shift+I)
    // ==========================================================================
    // Disable context menu (Right-Click)
    document.addEventListener('contextmenu', (e) => {
        e.preventDefault();
    });

    // Disable keyboard shortcuts for DevTools / View Source
    document.addEventListener('keydown', (e) => {
        // Disable F12
        if (e.key === 'F12' || e.keyCode === 123) {
            e.preventDefault();
            return false;
        }

        // Disable Ctrl+Shift+I (Inspect), Ctrl+Shift+J (Console), Ctrl+Shift+C (Element Select)
        if (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J' || e.key === 'C' || e.keyCode === 73 || e.keyCode === 74 || e.keyCode === 67)) {
            e.preventDefault();
            return false;
        }

        // Disable Ctrl+U (View Source)
        if (e.ctrlKey && (e.key === 'U' || e.key === 'u' || e.keyCode === 85)) {
            e.preventDefault();
            return false;
        }

        // Disable Ctrl+S (Save page)
        if (e.ctrlKey && (e.key === 'S' || e.key === 's' || e.keyCode === 83)) {
            e.preventDefault();
            return false;
        }
    });

    // Disable dragging images/assets
    document.addEventListener('dragstart', (e) => {
        if (e.target.tagName === 'IMG') {
            e.preventDefault();
        }
    });

    // Anti-DevTools Debugger loop (pauses page execution if Inspect is forced open)
    const preventInspect = () => {
        function freeze() {
            try {
                (function() {
                    const func = function() {
                        debugger;
                    };
                    func();
                })();
            } catch (err) {}
            setTimeout(freeze, 50);
        }
        freeze();
    };
    
    // Run debugger protection
    preventInspect();
});

document.getElementById("mainScript").remove();</script>
</body>

</html>