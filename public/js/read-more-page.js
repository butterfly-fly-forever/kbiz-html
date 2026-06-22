(function () {
  var CTA_SVG =
    'background-image: url("data:image/svg+xml,%3Csvg preserveAspectRatio=\'none\' viewBox=\'0 0 1920 350\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpolygon fill=\'%23a100ff\' opacity=\'0.4\' points=\'0,0 1920,0 960,300\' /%3E%3Cpolygon fill=\'%23b74bff\' opacity=\'0.6\' points=\'0,0 1920,0 960,260\' /%3E%3Cpolygon fill=\'%23d182ff\' opacity=\'0.8\' points=\'0,0 1920,0 960,220\' /%3E%3Cpolygon fill=\'%23E7AAFF\' opacity=\'1.0\' points=\'0,0 1920,0 960,180\' /%3E%3C/svg%3E")';

  function esc(str) {
    if (!str) return '';
    return String(str)
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;');
  }

  function renderIntro(config) {
    return (
      '<section class="w-full">' +
      '<div class="w-full px-8 py-12 md:px-16 md:py-16 lg:px-24" style="background: linear-gradient(90deg, #7B00AA 0%, #B800FF 100%);">' +
      '<h1 class="text-[28px] font-bold leading-tight text-white md:text-[40px] lg:text-[50px] hero-animate">' +
      esc(config.headline) +
      '</h1></div>' +
      '<div class="w-full bg-[#E8FFF3] px-8 py-10 md:px-16 md:py-12 lg:px-24">' +
      '<div class="max-w-4xl text-base leading-[1.8] text-[#0C0C0C] space-y-5 hero-animate hero-animate-delay-1">' +
      config.intro +
      '</div></div></section>'
    );
  }

  function renderBackLink(link) {
    if (!link) return '';
    return (
      '<div class="w-full bg-white border-b border-gray-100">' +
      '<div class="flex w-full">' +
      '<div class="w-[8.5%] shrink-0 bg-white"></div>' +
      '<div class="flex-1 py-6 pl-8 md:pl-10">' +
      '<a href="' +
      esc(link.href) +
      '" class="text-[#005E2C] font-bold text-sm hover:underline inline-flex items-center gap-2" data-animate>' +
      '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>' +
      esc(link.label) +
      '</a></div>' +
      '<div class="w-[8.5%] shrink-0 bg-white"></div></div></div>'
    );
  }

  function renderTitle(title, section) {
    if (!title) return '';
    var cls = section && section.titleSmall
      ? 'mb-6 text-xl font-bold text-[#0C0C0C] md:text-[22px]'
      : 'mb-6 text-3xl font-bold text-[#0C0C0C] md:text-[40px] lg:text-[46px] leading-[1.15] tracking-tight';
    return (
      '<h2 class="' + cls + '" data-animate>' +
      esc(title) +
      '</h2>'
    );
  }

  function renderTextBlock(section) {
    var bg = section.textBg === 'mint' ? 'bg-[#E8FFF3]' : 'bg-white';
    var lead = section.lead
      ? '<div class="mb-6 space-y-5 text-sm md:text-base leading-relaxed text-[#0C0C0C] opacity-90" data-animate>' +
        section.lead +
        '</div>'
      : '';
    return (
      '<div class="flex flex-col justify-start px-6 py-10 md:px-12 md:py-12 lg:px-16 lg:py-14 ' +
      bg +
      '">' +
      lead +
      renderTitle(section.title, section) +
      '<div class="space-y-5 text-sm md:text-base leading-relaxed text-[#0C0C0C] opacity-90" data-animate>' +
      section.body +
      '</div></div>'
    );
  }

  function renderFigure(section) {
    if (!section.image) return '';
    var cap = section.caption
      ? '<figcaption class="absolute bottom-0 left-0 right-0 bg-black/50 px-4 py-2 text-xs text-white">' +
        esc(section.caption) +
        '</figcaption>'
      : '';
    return (
      '<figure class="relative w-full h-[360px] md:h-full min-h-[360px] md:min-h-full overflow-hidden" data-animate>' +
      '<img src="' +
      esc(section.image) +
      '" alt="' +
      esc(section.imageAlt || '') +
      '" class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 hover:scale-105" />' +
      cap +
      '</figure>'
    );
  }

  function renderSection(section, index, isLast) {
    if (section.textOnly) {
      return (
        '<section class="w-full bg-white' +
        (isLast ? '' : ' border-b border-gray-100') +
        '">' +
        '<div class="px-6 py-12 md:px-16 md:py-20 lg:px-24 lg:py-28 max-w-4xl">' +
        renderTitle(section.title, section) +
        '<div class="space-y-5 text-sm md:text-base leading-relaxed text-[#0C0C0C] opacity-90" data-animate">' +
        section.body +
        '</div></div></section>'
      );
    }

    var imageFirst = section.imageFirst !== undefined ? section.imageFirst : index % 2 === 0;
    var border = isLast ? '' : ' border-b border-gray-100';
    var figure = renderFigure(section);
    var text = renderTextBlock(section);

    if (imageFirst) {
      return (
        '<section class="w-full bg-white' +
        border +
        '"><div class="grid grid-cols-1 md:grid-cols-2 items-stretch">' +
        figure +
        text +
        '</div></section>'
      );
    }

    return (
      '<section class="w-full bg-white' +
      border +
      '"><div class="grid grid-cols-1 md:grid-cols-2 items-stretch">' +
      text.replace('flex flex-col justify-center', 'flex flex-col justify-center order-2 md:order-1') +
      figure.replace(
        'class="relative w-full',
        'class="relative w-full order-1 md:order-2'
      ) +
      '</div></section>'
    );
  }

  function renderCTA() {
    return (
      '<section class="relative mt-[50px] flex h-[350px] w-full items-center overflow-hidden bg-[#B800FF]">' +
      '<div class="absolute inset-0 z-0" style="' +
      CTA_SVG +
      '"></div>' +
      '<div class="relative z-10 flex w-full flex-col items-center justify-center px-6 text-center md:px-10">' +
      '<h4 class="mb-8 text-2xl font-semibold text-[#3D0055] md:text-[32px] max-w-[600px] leading-tight font-sans" data-animate>' +
      'Get an estimate for your upcoming project</h4>' +
      '<a href="contact.html" class="rounded-none bg-[#B9FCD8] px-8 py-2.5 text-sm font-medium text-[#3D0055] transition-colors hover:bg-white hover:text-[#3D0055]" data-animate>' +
      'Contact</a></div></section>'
    );
  }

  function observeAnimations(root) {
    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('in');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.08, rootMargin: '0px 0px -40px 0px' }
    );
    root.querySelectorAll('[data-animate], [data-animate-scale]').forEach(function (el) {
      observer.observe(el);
    });
  }

  function render(config) {
    var html = renderIntro(config);
    html += renderBackLink(config.backLink);
    config.sections.forEach(function (section, i) {
      html += renderSection(section, i, i === config.sections.length - 1);
    });
    html += renderCTA();
    return html;
  }

  function init() {
    var config = window.READ_MORE_CONFIG;
    var mount = document.getElementById('read-more-mount');
    if (!config || !mount) return;
    mount.innerHTML = render(config);
    observeAnimations(mount);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
