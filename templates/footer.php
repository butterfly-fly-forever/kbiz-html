    <!-- Footer -->
    <footer class="relative w-full overflow-hidden bg-white py-10 px-10 md:px-16">
      <div class="absolute inset-0 z-0 pointer-events-none" style="background: radial-gradient(circle at 10% 20%, rgba(200,100,255,0.35) 0%, transparent 50%), radial-gradient(circle at 80% 50%, rgba(200,255,200,0.35) 0%, transparent 50%), radial-gradient(circle at 90% 90%, rgba(220,150,255,0.35) 0%, transparent 50%)"></div>
      <div class="relative z-10 w-full grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
        <div class="md:col-span-4">
          <img src="public/images/logo.png" alt="K-Biz Consulting" class="h-24 md:h-28 object-contain" />
        </div>
        <div class="md:col-span-4">
          <h3 class="text-sm font-bold uppercase text-black mb-3 tracking-widest">Location</h3>
          <p class="text-[15px] text-[#333] leading-relaxed">16A Le Quy Don St, Nha Trang Ward,<br/>Khanh Hoa Province</p>
          <div class="flex items-center gap-4 mt-4">
            <span class="text-xs text-[#333] tracking-widest uppercase">© K-BIZ CONSULTING</span>
            <a href="admins/dashboard" class="text-[10px] font-bold text-gray-400 hover:text-green-600 transition-colors uppercase tracking-widest">Admin Portal</a>
          </div>
        </div>
        <div class="md:col-span-4">
          <h3 class="text-sm font-bold uppercase text-black mb-3 tracking-widest">Contact</h3>
          <div class="flex flex-col text-[15px] text-[#333] space-y-2">
            <a href="mailto:<?php echo htmlspecialchars($siteSettings['email']); ?>" class="underline hover:text-[#B800FF] transition-colors"><?php echo htmlspecialchars($siteSettings['email']); ?></a>
            <a href="mailto:info@kbiz.com.vn" class="underline hover:text-[#B800FF] transition-colors">info@kbiz.com.vn</a>
            <p class="text-[#005E2C]"><?php echo htmlspecialchars($siteSettings['phone']); ?></p>
          </div>
        </div>
      </div>
    </footer>

  </div>
</body>
</html>
