(function () {
  // ── Compute root path (works with both file:// and http://) ──────────────
  var scriptEl = document.querySelector('script[src*="shared.js"]');
  var ROOT = './';
  if (scriptEl) {
    var abs = new URL(scriptEl.getAttribute('src'), document.baseURI).href;
    ROOT = abs.replace(/public\/js\/shared\.js.*$/, '');
  }

  // ── Inject animation styles ───────────────────────────────────────────────
  var style = document.createElement('style');
  style.textContent = '\n    [data-animate] {\n      opacity: 0;\n      transform: translateY(32px);\n      transition: opacity 0.75s cubic-bezier(0.16,1,0.3,1), transform 0.75s cubic-bezier(0.16,1,0.3,1);\n    }\n    [data-animate].in { opacity: 1; transform: none; }\n    [data-animate-from="left"]  { transform: translateX(-32px); }\n    [data-animate-from="left"].in  { transform: none; }\n    [data-animate-from="right"] { transform: translateX(32px); }\n    [data-animate-from="right"].in { transform: none; }\n    [data-animate-scale] { opacity:0; transform: scale(0.94); transition: opacity 0.6s cubic-bezier(0.16,1,0.3,1), transform 0.6s cubic-bezier(0.16,1,0.3,1); }\n    [data-animate-scale].in { opacity:1; transform:none; }\n    [data-animate-delay="1"] { transition-delay: 0.08s !important; }\n    [data-animate-delay="2"] { transition-delay: 0.16s !important; }\n    [data-animate-delay="3"] { transition-delay: 0.24s !important; }\n    [data-animate-delay="4"] { transition-delay: 0.32s !important; }\n    [data-animate-delay="5"] { transition-delay: 0.40s !important; }\n\n    #site-header { transition: background 0.3s, box-shadow 0.3s, backdrop-filter 0.3s; }\n    #site-header.scrolled { background: rgba(219,253,235,0.92); backdrop-filter: blur(12px); box-shadow: 0 1px 16px rgba(0,0,0,0.08); }\n\n    .nav-link { position:relative; }\n    .nav-link::after { content:""; position:absolute; left:0; bottom:-4px; width:0; height:2px; background:#B800FF; transition: width 0.3s cubic-bezier(0.16,1,0.3,1); }\n    .nav-link:hover::after, .nav-link.active::after { width:100%; }\n\n    @keyframes heroFadeIn {\n      from { opacity:0; transform: translateY(20px); }\n      to   { opacity:1; transform: none; }\n    }\n    .hero-animate { animation: heroFadeIn 1s cubic-bezier(0.16,1,0.3,1) forwards; }\n    .hero-animate-delay-1 { animation-delay: 0.15s; opacity:0; }\n    .hero-animate-delay-2 { animation-delay: 0.3s;  opacity:0; }\n    .hero-animate-delay-3 { animation-delay: 0.45s; opacity:0; }\n  ';
  document.head.appendChild(style);

  // ── Header HTML ───────────────────────────────────────────────────────────
  var HEADER_HTML = '\n  <header id="site-header" class="sticky top-0 z-[100] w-full border-b border-white/30 bg-[#DBFDEB]">\n    <div class="flex h-[88px] w-full items-center justify-between px-6 md:px-10 lg:px-14">\n      <a href="' + ROOT + 'index.html" class="flex shrink-0 items-center">\n        <img src="' + ROOT + 'public/images/logo.png" alt="K-Biz Consulting" class="h-14 w-auto object-contain md:h-20" />\n      </a>\n      <div class="flex h-full shrink-0 items-center gap-8 md:gap-10">\n        <nav class="hidden h-full items-center gap-8 md:flex" aria-label="Primary">\n          <div class="group relative flex h-full items-center">\n            <a href="' + ROOT + 'services.html" data-nav="services" class="nav-link flex h-full items-center text-sm font-bold tracking-wide text-[#005E2C] transition-colors duration-200 hover:text-[#B800FF]">Services</a>\n            <div class="pointer-events-none absolute right-0 top-full z-[200] flex min-w-[260px] flex-col gap-4 bg-[#3D0055] px-8 py-7 opacity-0 shadow-xl transition-all duration-200 group-hover:pointer-events-auto group-hover:opacity-100">\n              <a href="' + ROOT + 'services-consulting-1.html" class="text-left text-sm font-bold text-[#E7AAFF] transition-all hover:text-white hover:underline whitespace-nowrap">Investment Consulting</a>\n              <a href="' + ROOT + 'services-consulting-2.html" class="text-left text-sm font-bold text-[#E7AAFF] transition-all hover:text-white hover:underline whitespace-nowrap">Start New Business</a>\n              <a href="' + ROOT + 'services-consulting-3.html" class="text-left text-sm font-bold text-[#E7AAFF] transition-all hover:text-white hover:underline whitespace-nowrap">Business Developing Services</a>\n            </div>\n          </div>\n          <a href="' + ROOT + 'projects.html" data-nav="projects" class="nav-link flex h-full items-center text-sm font-bold tracking-wide text-[#005E2C] transition-colors duration-200 hover:text-[#B800FF]">Projects</a>\n          <a href="' + ROOT + 'about-us.html" data-nav="about" class="nav-link flex h-full items-center text-sm font-bold tracking-wide text-[#005E2C] transition-colors duration-200 hover:text-[#B800FF]">About us</a>\n        </nav>\n        <a href="' + ROOT + 'contact.html" class="hidden md:inline-block rounded-none px-8 py-3 text-sm font-bold uppercase tracking-widest text-white bg-[#3D0055] hover:bg-[#5C2D82] transition-colors duration-200">Contact</a>\n        <button type="button" id="mobile-menu-btn" class="p-2 text-[#005E2C] md:hidden cursor-pointer" aria-label="Open menu" aria-expanded="false">\n          <svg id="menu-icon-open" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16M4 12h16M4 17h16"/></svg>\n          <svg id="menu-icon-close" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="hidden"><path d="M6 6l12 12M18 6L6 18"/></svg>\n        </button>\n      </div>\n    </div>\n    <nav id="mobile-nav" class="hidden border-t border-white/30 bg-[#DBFDEB] px-6 py-4 md:hidden" aria-label="Mobile">\n      <button type="button" id="mobile-services-btn" class="flex w-full items-center justify-between py-3 text-sm font-bold text-[#005E2C]" aria-expanded="false">\n        <span>Services</span>\n        <svg id="mobile-services-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="transition-transform"><path d="M6 9l6 6 6-6"/></svg>\n      </button>\n      <div id="mobile-services-dropdown" class="hidden mb-2 ml-3 flex flex-col gap-2 border-l-2 border-[#E7AAFF] pl-4">\n        <a href="' + ROOT + 'services-consulting-1.html" class="py-1 text-sm font-bold text-[#005E2C]">Investment Consulting</a>\n        <a href="' + ROOT + 'services-consulting-2.html" class="py-1 text-sm font-bold text-[#005E2C]">Start New Business</a>\n        <a href="' + ROOT + 'services-consulting-3.html" class="py-1 text-sm font-bold text-[#005E2C]">Business Developing Services</a>\n      </div>\n      <a href="' + ROOT + 'projects.html" class="block py-3 text-sm font-bold text-[#005E2C]">Projects</a>\n      <a href="' + ROOT + 'about-us.html" class="block py-3 text-sm font-bold text-[#005E2C]">About us</a>\n      <a href="' + ROOT + 'contact.html" class="mt-2 inline-block bg-[#3D0055] px-6 py-3 text-sm font-bold uppercase tracking-widest text-white">Contact</a>\n    </nav>\n  </header>\n  ';

  // ── Footer HTML ───────────────────────────────────────────────────────────
  var FOOTER_HTML = '\n  <footer class="relative w-full overflow-hidden bg-white py-10 px-10 md:px-16">\n    <div class="absolute inset-0 z-0 pointer-events-none" style="background: radial-gradient(circle at 10% 20%, rgba(200,100,255,0.35) 0%, transparent 50%), radial-gradient(circle at 80% 50%, rgba(200,255,200,0.35) 0%, transparent 50%), radial-gradient(circle at 90% 90%, rgba(220,150,255,0.35) 0%, transparent 50%)"></div>\n    <div class="relative z-10 w-full grid grid-cols-1 md:grid-cols-12 gap-8 items-start">\n      <div class="md:col-span-4">\n        <img src="' + ROOT + 'public/images/logo.png" alt="K-Biz Consulting" class="h-24 md:h-28 object-contain" />\n      </div>\n      <div class="md:col-span-4">\n        <h3 class="text-sm font-bold uppercase text-black mb-3 tracking-widest">Location</h3>\n        <p class="text-[15px] text-[#333] leading-relaxed">16A Le Quy Don St, Nha Trang Ward,<br/>Khanh Hoa Province</p>\n        <p class="text-xs text-[#333] tracking-widest uppercase mt-4">\xA9 K-BIZ CONSULTING</p>\n      </div>\n      <div class="md:col-span-4">\n        <h3 class="text-sm font-bold uppercase text-black mb-3 tracking-widest">Contact</h3>\n        <div class="flex flex-col text-[15px] text-[#333] space-y-2">\n          <a href="mailto:kbizconsulting16@gmail.com" class="underline hover:text-[#B800FF] transition-colors">kbizconsulting16@gmail.com</a>\n          <a href="mailto:info@kbiz.com.vn" class="underline hover:text-[#B800FF] transition-colors">info@kbiz.com.vn</a>\n          <p class="text-[#005E2C]">(0258) 3516 343</p>\n        </div>\n      </div>\n    </div>\n  </footer>\n  ';

  // ── Init (handles both deferred and inline loading) ───────────────────────
  function init() {
    var hm = document.getElementById('header-mount');
    if (hm) hm.outerHTML = HEADER_HTML;
    var fm = document.getElementById('footer-mount');
    if (fm) fm.outerHTML = FOOTER_HTML;

    // Active nav
    var path = window.location.pathname;
    var navMap = {
      services: ['services', 'consulting'],
      projects: ['projects', 'case-'],
      about: ['about-us']
    };
    Object.keys(navMap).forEach(function (key) {
      var patterns = navMap[key];
      var isActive = patterns.some(function (k) { return path.includes(k); });
      if (isActive) {
        var link = document.querySelector('[data-nav="' + key + '"]');
        if (link) {
          link.classList.remove('text-[#005E2C]', 'hover:text-[#B800FF]');
          link.classList.add('text-[#B800FF]', 'active');
        }
      }
    });

    // Header scroll shadow
    var header = document.getElementById('site-header');
    if (header) {
      window.addEventListener('scroll', function () {
        header.classList.toggle('scrolled', window.scrollY > 8);
      }, { passive: true });
    }

    // Mobile menu
    var mobileMenuBtn = document.getElementById('mobile-menu-btn');
    var mobileNav = document.getElementById('mobile-nav');
    var menuIconOpen = document.getElementById('menu-icon-open');
    var menuIconClose = document.getElementById('menu-icon-close');
    if (mobileMenuBtn) {
      var mobileOpen = false;
      mobileMenuBtn.addEventListener('click', function () {
        mobileOpen = !mobileOpen;
        mobileMenuBtn.setAttribute('aria-expanded', mobileOpen);
        mobileNav.classList.toggle('hidden', !mobileOpen);
        menuIconOpen.classList.toggle('hidden', mobileOpen);
        menuIconClose.classList.toggle('hidden', !mobileOpen);
        document.body.style.overflow = mobileOpen ? 'hidden' : '';
      });
    }
    var mobileServicesBtn = document.getElementById('mobile-services-btn');
    var mobileServicesDropdown = document.getElementById('mobile-services-dropdown');
    var mobileServicesArrow = document.getElementById('mobile-services-arrow');
    if (mobileServicesBtn) {
      var svcOpen = false;
      mobileServicesBtn.addEventListener('click', function () {
        svcOpen = !svcOpen;
        mobileServicesDropdown.classList.toggle('hidden', !svcOpen);
        mobileServicesArrow.classList.toggle('rotate-180', svcOpen);
      });
    }

    // Scroll animations
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('[data-animate], [data-animate-scale]').forEach(function (el) {
      observer.observe(el);
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
