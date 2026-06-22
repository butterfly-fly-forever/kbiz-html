<?php
$activePage = 'projects';
$pageTitle = 'Perspective on Traditional Market Model – Part 2: The market in Vietnam | K-Biz Consulting';
include 'templates/header.php';
?>
    <main class="w-full bg-white flex flex-col items-center">
      <div id="read-more-mount"></div>
    </main>
    <script>
      window.READ_MORE_CONFIG = {
        categoryTitle: "CASE STUDIES",
        headline: "Perspective on Traditional Market Model – Part 2: The market in Vietnam",
        intro: "How do Vietnam's traditional fish markets compare to Busan's? A look at the challenges, neglect, and untapped potential of local markets in Khánh Hòa.",
        backLink: { href: "projects", label: "Back to Projects" },
        sections: [
          {
            lead: "<p>Following <a href=\"case-busan\" class=\"text-[#B800FF] hover:underline font-medium\">Part 1's look at Busan's fish market</a>, Part 2 turns to Vietnam's traditional markets — particularly those in <strong>Nha Trang and Khánh Hòa</strong> — and examines the gap between what they could be and what they currently are. The contrast is not merely aesthetic; it reflects decades of differing priorities in public infrastructure investment.</p>",
            title: "The Neglect of Traditional Markets in Vietnam",
            body: "<p>Vietnamese fish markets are largely characterized as <strong>temporary trading spaces</strong> receiving minimal long-term investment. Makeshift, patched-up canopies have remained unchanged — day after day, year after year, for decades. Despite these infrastructure limitations, these stalls provide fresh, affordable products daily to millions of households across the country.</p><p>The piece observes a troubling pattern: <strong>successful individuals educated through these community resources</strong> — children who grew up shopping at these markets, entrepreneurs whose early capital came from vendor families — rarely reinvest in market improvements. Meanwhile, traditional markets face competitive pressure from modern supermarkets while simultaneously experiencing steady physical deterioration.</p>",
            image: "public/images/market-dam-nhatrang.jpg",
            imageAlt: "Dam Market, Nha Trang",
            caption: "Dam Market, Nha Trang"
          },
          {
            title: "Difficulty in Managing and Reorganizing Market Stalls",
            body: "<p>Statistics indicate that approximately <strong>60–70% of tier-2 market stalls</strong> lack permanent structures, primarily selling fresh food items. Field surveys reveal that 99% of vendors selling vegetables, meat, and fish operate consistently in the same familiar spots for extended periods — a testament to the deep community roots of these markets.</p><p>This stability is both a strength and a challenge: <strong>vendors resist reorganization</strong> because their loyal customers know exactly where to find them. A customer who has bought fish from the same stall for fifteen years will not easily adapt to a new floor plan, and vendors know this. Any redevelopment plan must work with this social fabric, not against it. Forced relocations without genuine consultation have historically failed, driving vendors to informal street trading instead.</p>",
            image: "public/images/market-vietnam-vendors.jpg",
            imageAlt: "Traditional market vendors, Khánh Hòa",
            caption: "Traditional market vendors, Khánh Hòa"
          },
          {
            body: "<p>Traditional markets are not just economic spaces — they are <strong>cultural institutions</strong>. Preserving them while improving their infrastructure requires political will, sustained investment, and a genuine respect for the vendors and communities who depend on them. The Busan model offers not a template to copy, but a proof of concept: that investment in traditional markets is not wasted — it is returned many times over in community wellbeing, food security, and civic pride.</p>",
            image: "public/images/market-vietnam-stalls.jpg",
            imageAlt: "Market stalls, Khánh Hòa Province",
            caption: "Market stalls, Khánh Hòa Province"
          }
        ]
      };
    </script>
    <script src="public/js/read-more-page.js" defer></script>
<?php include 'templates/footer.php'; ?>
