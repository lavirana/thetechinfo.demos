<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Demos by TheTechInfo</title>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

  :root {
    --bg: #0a0a0f;
    --surface: #111118;
    --card: #16161f;
    --border: rgba(255,255,255,0.07);
    --accent: #6c63ff;
    --accent2: #00d4aa;
    --accent3: #ff6b6b;
    --text: #f0f0f5;
    --muted: #888899;
    --glow: rgba(108, 99, 255, 0.3);
  }

  html { scroll-behavior: smooth; }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--bg);
    color: var(--text);
    min-height: 100vh;
    overflow-x: hidden;
  }

  /* Animated background grid */
  body::before {
    content: '';
    position: fixed;
    inset: 0;
    background-image:
      linear-gradient(rgba(108,99,255,0.04) 1px, transparent 1px),
      linear-gradient(90deg, rgba(108,99,255,0.04) 1px, transparent 1px);
    background-size: 60px 60px;
    z-index: 0;
    pointer-events: none;
  }

  /* Glowing orbs */
  body::after {
    content: '';
    position: fixed;
    top: -200px;
    left: -200px;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(108,99,255,0.12) 0%, transparent 70%);
    z-index: 0;
    pointer-events: none;
    animation: floatOrb 8s ease-in-out infinite;
  }

  @keyframes floatOrb {
    0%, 100% { transform: translate(0, 0); }
    50% { transform: translate(60px, 40px); }
  }

  .orb2 {
    position: fixed;
    bottom: -150px;
    right: -150px;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(0,212,170,0.08) 0%, transparent 70%);
    z-index: 0;
    pointer-events: none;
    animation: floatOrb 10s ease-in-out infinite reverse;
  }

  /* HEADER */
  header {
    position: relative;
    z-index: 10;
    padding: 80px 24px 60px;
    text-align: center;
    overflow: hidden;
  }

  .badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(108,99,255,0.12);
    border: 1px solid rgba(108,99,255,0.3);
    border-radius: 100px;
    padding: 6px 16px;
    font-size: 12px;
    font-weight: 500;
    color: #a89fff;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 24px;
    animation: fadeDown 0.6s ease both;
  }

  .badge::before {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--accent2);
    animation: pulse 2s infinite;
  }

  @keyframes pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(1.4); }
  }

  header h1 {
    font-family: 'Syne', sans-serif;
    font-size: clamp(2.4rem, 6vw, 4.5rem);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -0.02em;
    animation: fadeDown 0.7s ease 0.1s both;
  }

  header h1 span {
    background: linear-gradient(135deg, var(--accent), var(--accent2));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  header p {
    color: var(--muted);
    font-size: 1.1rem;
    font-weight: 300;
    margin-top: 16px;
    animation: fadeDown 0.7s ease 0.2s both;
  }

  @keyframes fadeDown {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  /* NAV */
  nav {
    display: flex;
    justify-content: center;
    gap: 12px;
    flex-wrap: wrap;
    margin-top: 36px;
    animation: fadeDown 0.7s ease 0.3s both;
    position: relative;
    z-index: 10;
  }

  nav a {
    text-decoration: none;
    font-family: 'DM Sans', sans-serif;
    font-weight: 500;
    font-size: 0.9rem;
    padding: 10px 24px;
    border-radius: 100px;
    transition: all 0.25s ease;
    cursor: pointer;
  }

  nav a.active {
    background: var(--accent);
    color: #fff;
    box-shadow: 0 0 20px var(--glow);
  }

  nav a.outline {
    background: transparent;
    border: 1px solid var(--border);
    color: var(--muted);
  }

  nav a.outline:hover {
    border-color: var(--accent);
    color: var(--text);
    background: rgba(108,99,255,0.08);
  }

  /* SEARCH */
  .search-wrap {
    max-width: 500px;
    margin: 40px auto 0;
    padding: 0 24px;
    position: relative;
    z-index: 10;
    animation: fadeDown 0.7s ease 0.4s both;
  }

  .search-wrap input {
    width: 100%;
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 100px;
    padding: 14px 24px 14px 50px;
    color: var(--text);
    font-family: 'DM Sans', sans-serif;
    font-size: 0.95rem;
    outline: none;
    transition: border-color 0.2s, box-shadow 0.2s;
  }

  .search-wrap input:focus {
    border-color: var(--accent);
    box-shadow: 0 0 0 3px rgba(108,99,255,0.15);
  }

  .search-wrap input::placeholder { color: var(--muted); }

  .search-icon {
    position: absolute;
    left: 42px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--muted);
    font-size: 1rem;
  }

  /* MAIN CONTENT */
  main {
    position: relative;
    z-index: 10;
    max-width: 1100px;
    margin: 60px auto 80px;
    padding: 0 24px;
  }

  .section-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 28px;
    animation: fadeUp 0.6s ease 0.5s both;
  }

  .section-header h2 {
    font-family: 'Syne', sans-serif;
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--muted);
    text-transform: uppercase;
    letter-spacing: 0.1em;
  }

  .count-badge {
    background: rgba(108,99,255,0.12);
    color: var(--accent);
    font-size: 0.8rem;
    font-weight: 600;
    padding: 4px 12px;
    border-radius: 100px;
    border: 1px solid rgba(108,99,255,0.2);
  }

  /* DEMOS GRID */
  .demos-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 16px;
  }

  .demo-card {
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 16px;
    padding: 24px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    color: inherit;
    display: flex;
    align-items: center;
    gap: 18px;
    animation: fadeUp 0.5s ease both;
    position: relative;
    overflow: hidden;
  }

  .demo-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(108,99,255,0.06), transparent);
    opacity: 0;
    transition: opacity 0.3s;
  }

  .demo-card:hover {
    border-color: rgba(108,99,255,0.4);
    transform: translateY(-3px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.4), 0 0 0 1px rgba(108,99,255,0.15);
  }

  .demo-card:hover::before { opacity: 1; }

  .demo-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    flex-shrink: 0;
  }

  .demo-info { flex: 1; }

  .demo-info h3 {
    font-family: 'Syne', sans-serif;
    font-size: 1rem;
    font-weight: 600;
    color: var(--text);
    line-height: 1.4;
    margin-bottom: 6px;
  }

  .demo-info .tag {
    display: inline-block;
    font-size: 0.72rem;
    font-weight: 500;
    padding: 3px 10px;
    border-radius: 100px;
    letter-spacing: 0.04em;
  }

  .demo-arrow {
    color: var(--muted);
    font-size: 1rem;
    transition: transform 0.2s, color 0.2s;
    flex-shrink: 0;
  }

  .demo-card:hover .demo-arrow {
    transform: translateX(4px);
    color: var(--accent);
  }

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  /* stagger cards */
  .demo-card:nth-child(1) { animation-delay: 0.5s; }
  .demo-card:nth-child(2) { animation-delay: 0.55s; }
  .demo-card:nth-child(3) { animation-delay: 0.60s; }
  .demo-card:nth-child(4) { animation-delay: 0.65s; }
  .demo-card:nth-child(5) { animation-delay: 0.70s; }
  .demo-card:nth-child(6) { animation-delay: 0.75s; }
  .demo-card:nth-child(7) { animation-delay: 0.80s; }
  .demo-card:nth-child(8) { animation-delay: 0.85s; }
  .demo-card:nth-child(9) { animation-delay: 0.90s; }
  .demo-card:nth-child(10) { animation-delay: 0.95s; }

  /* Color variants */
  .purple { background: rgba(108,99,255,0.12); }
  .green  { background: rgba(0,212,170,0.12); }
  .red    { background: rgba(255,107,107,0.12); }
  .blue   { background: rgba(96,165,250,0.12); }
  .orange { background: rgba(251,146,60,0.12); }
  .pink   { background: rgba(244,114,182,0.12); }

  .tag-purple { background: rgba(108,99,255,0.15); color: #a89fff; }
  .tag-green  { background: rgba(0,212,170,0.15); color: #5eead4; }
  .tag-red    { background: rgba(255,107,107,0.15); color: #fca5a5; }
  .tag-blue   { background: rgba(96,165,250,0.15); color: #93c5fd; }
  .tag-orange { background: rgba(251,146,60,0.15); color: #fdba74; }
  .tag-pink   { background: rgba(244,114,182,0.15); color: #f9a8d4; }

  /* FOOTER */
  footer {
    position: relative;
    z-index: 10;
    text-align: center;
    padding: 32px 24px 48px;
    border-top: 1px solid var(--border);
    color: var(--muted);
    font-size: 0.88rem;
  }

  footer span { color: var(--accent); }

  /* Scrollbar */
  ::-webkit-scrollbar { width: 6px; }
  ::-webkit-scrollbar-track { background: var(--bg); }
  ::-webkit-scrollbar-thumb { background: #333; border-radius: 3px; }
</style>
</head>
<body>
<div class="orb2"></div>

<header>
  <div class="badge">Live Projects</div>
  <h1>Demos by <span>TheTechInfo</span></h1>
  <p>Explore sample projects, source code & live demos</p>

  <nav>
    <a href="#" class="active">Home</a>
    <a href="#" class="outline">All Demos + Source Code</a>
    <a href="#" class="outline">Contact Us</a>
  </nav>

  <div class="search-wrap">
    <span class="search-icon">🔍</span>
    <input type="text" placeholder="Search demos..." id="searchInput" oninput="filterCards()" />
  </div>
</header>

<main>
  <div class="section-header">
    <h2>Available Demos</h2>
    <span class="count-badge" id="countBadge">7 Projects</span>
  </div>

  <div class="demos-grid" id="grid">

    <a href="#" class="demo-card">
      <div class="demo-icon purple">🔐</div>
      <div class="demo-info">
        <h3>CAPTCHA with PHP Demo</h3>
        <span class="tag tag-purple">PHP</span>
      </div>
      <div class="demo-arrow">→</div>
    </a>

    <a href="#" class="demo-card">
      <div class="demo-icon green">✅</div>
      <div class="demo-info">
        <h3>Todo App Demo</h3>
        <span class="tag tag-green">JavaScript</span>
      </div>
      <div class="demo-arrow">→</div>
    </a>

    <a href="#" class="demo-card">
      <div class="demo-icon blue">📁</div>
      <div class="demo-info">
        <h3>File Sharing & Video Streaming System in PHP</h3>
        <span class="tag tag-blue">PHP</span>
      </div>
      <div class="demo-arrow">→</div>
    </a>

    <a href="#" class="demo-card">
      <div class="demo-icon orange">🛒</div>
      <div class="demo-info">
        <h3>Simple PHP Shopping Cart Without a Database</h3>
        <span class="tag tag-orange">PHP</span>
      </div>
      <div class="demo-arrow">→</div>
    </a>

    <a href="#" class="demo-card">
      <div class="demo-icon red">📱</div>
      <div class="demo-info">
        <h3>A Dynamic QR Code Generator with PHP and VCARD Download</h3>
        <span class="tag tag-red">PHP</span>
      </div>
      <div class="demo-arrow">→</div>
    </a>

    <a href="#" class="demo-card">
      <div class="demo-icon green">📊</div>
      <div class="demo-info">
        <h3>Interactive Charts Without a Database Using JSON</h3>
        <span class="tag tag-green">JSON</span>
      </div>
      <div class="demo-arrow">→</div>
    </a>

    <a href="#" class="demo-card">
      <div class="demo-icon pink">🕷️</div>
      <div class="demo-info">
        <h3>PHP Web Scraper / RSS Feed Reader</h3>
        <span class="tag tag-pink">PHP</span>
      </div>
      <div class="demo-arrow">→</div>
    </a>

  </div>
</main>

<footer>
  Built with ❤️ by <span>TheTechInfo.net</span> — All demos include source code
</footer>

<script>
  function filterCards() {
    const query = document.getElementById('searchInput').value.toLowerCase();
    const cards = document.querySelectorAll('.demo-card');
    let visible = 0;
    cards.forEach(card => {
      const title = card.querySelector('h3').textContent.toLowerCase();
      if (title.includes(query)) {
        card.style.display = 'flex';
        visible++;
      } else {
        card.style.display = 'none';
      }
    });
    document.getElementById('countBadge').textContent = visible + ' Project' + (visible !== 1 ? 's' : '');
  }
</script>
</body>
</html>