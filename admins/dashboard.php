<?php
require_once __DIR__ . '/../templates/auth.php';
$adminActivePage = 'dashboard';
$adminPageTitle = 'Dashboard | K-Biz Admin';
include 'admin-header.php';
?>


  <!-- Main Content Area -->
  <main class="flex-1 flex flex-col">
    <div class="flex-1 w-full px-6 md:px-16 py-10 max-w-7xl mx-auto flex flex-col">
      
      <!-- Title -->
      <h1 class="text-[34px] font-medium tracking-tight text-gray-900 mb-8 font-sans">
        Dashboard
      </h1>

      <!-- Stats Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        
        <!-- Posts Card -->
        <div class="bg-white border border-gray-150 rounded-lg p-7 shadow-xs hover:shadow-sm transition-shadow">
          <span class="text-[10px] font-bold tracking-[0.15em] text-gray-400 font-sans block">
            POSTS
          </span>
          <span id="posts-count" class="text-5xl font-light text-gray-900 block mt-2 font-sans">
            0
          </span>
          <span id="posts-published-count" class="text-[11px] text-gray-400 block mt-3 font-sans">
            0 published
          </span>
        </div>

        <!-- Messages Card -->
        <div class="bg-white border border-gray-150 rounded-lg p-7 shadow-xs hover:shadow-sm transition-shadow">
          <span class="text-[10px] font-bold tracking-[0.15em] text-gray-400 font-sans block">
            MESSAGES
          </span>
          <span id="messages-count" class="text-5xl font-light text-gray-900 block mt-2 font-sans">
            0
          </span>
          <span id="messages-unread-count" class="text-[11px] text-gray-400 block mt-3 font-sans">
            0 unread
          </span>
        </div>

        <!-- Drafts Card -->
        <div class="bg-white border border-gray-150 rounded-lg p-7 shadow-xs hover:shadow-sm transition-shadow">
          <span class="text-[10px] font-bold tracking-[0.15em] text-gray-400 font-sans block">
            DRAFTS
          </span>
          <span id="drafts-count" class="text-5xl font-light text-gray-900 block mt-2 font-sans">
            0
          </span>
        </div>

      </div>

      <!-- Recent Posts Panel -->
      <div class="bg-white border border-gray-150 rounded-lg shadow-xs hover:shadow-sm transition-shadow flex flex-col min-h-[160px]">
        <div class="flex items-center justify-between p-6 border-b border-gray-50">
          <h2 class="text-sm font-semibold text-gray-800 font-sans">
            Recent posts
          </h2>
          <a
            href="posts.php"
            class="text-xs font-bold text-black hover:underline font-sans"
          >
            View all
          </a>
        </div>

        <div class="flex-1 p-6 flex flex-col justify-center" id="recent-posts-container">
          <!-- Will be populated dynamically by JS -->
        </div>
      </div>

    </div>
  </main>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      localStorage.setItem("kbiz_posts", JSON.stringify(<?php echo file_exists('../data/posts.json') ? file_get_contents('../data/posts.json') : '[]'; ?>));
      localStorage.setItem("kbiz_messages", JSON.stringify(<?php echo file_exists('../data/messages.json') ? file_get_contents('../data/messages.json') : '[]'; ?>));
      localStorage.setItem("kbiz_settings", JSON.stringify(<?php echo file_exists('../data/settings.json') ? file_get_contents('../data/settings.json') : '{}'; ?>));

      
      // Load and calculate stats
      const posts = JSON.parse(localStorage.getItem("kbiz_posts") || "[]");
      const messages = JSON.parse(localStorage.getItem("kbiz_messages") || "[]");

      const publishedCount = posts.filter(function(p) { return p.status === "published"; }).length;
      const draftsCount = posts.filter(function(p) { return p.status === "draft"; }).length;
      const unreadCount = messages.filter(function(m) { return !m.read; }).length;

      document.getElementById("posts-count").textContent = posts.length;
      document.getElementById("posts-published-count").textContent = publishedCount + " published";
      document.getElementById("messages-count").textContent = messages.length;
      document.getElementById("messages-unread-count").textContent = unreadCount + " unread";
      document.getElementById("drafts-count").textContent = draftsCount;

      // Render recent posts (last 3)
      const recentPosts = [...posts]
        .sort(function(a, b) { return new Date(b.createdAt).getTime() - new Date(a.createdAt).getTime(); })
        .slice(0, 3);

      const recentContainer = document.getElementById("recent-posts-container");

      if (recentPosts.length === 0) {
        recentContainer.innerHTML = `
          <div class="text-center py-6 text-gray-300 text-sm italic font-light">
            No recent posts. Click "View all" to create some.
          </div>
        `;
      } else {
        recentContainer.innerHTML = `
          <div class="space-y-4">
            ${recentPosts.map(function (post) {
              const formattedDate = new Date(post.createdAt).toLocaleDateString();
              const badgeClass = post.status === "published"
                ? "bg-green-50 text-green-700 border-green-200"
                : "bg-yellow-50 text-yellow-700 border-yellow-200";
              
              return `
                <div class="flex items-center justify-between border-b border-gray-50 pb-3 last:border-0 last:pb-0">
                  <div class="flex flex-col">
                    <span class="text-sm font-semibold text-gray-800">
                      ${post.title}
                    </span>
                    <span class="text-xs text-gray-400">
                      ${formattedDate}
                    </span>
                  </div>
                  <span class="text-[10px] font-bold px-2 py-0.5 rounded-full uppercase border ${badgeClass}">
                    ${post.status}
                  </span>
                </div>
              `;
            }).join("")}
          </div>
        `;
      }

      // Language Switcher Mock
      const langEnBtn = document.getElementById("lang-en-btn");
      const langViBtn = document.getElementById("lang-vi-btn");
      langEnBtn.addEventListener("click", function() {
        langEnBtn.className = "text-[10px] font-bold px-2 py-0.5 rounded-full transition-all cursor-pointer bg-black text-white";
        langViBtn.className = "text-[10px] font-bold px-2 py-0.5 rounded-full transition-all cursor-pointer text-gray-400 hover:text-gray-600";
      });
      langViBtn.addEventListener("click", function() {
        langViBtn.className = "text-[10px] font-bold px-2 py-0.5 rounded-full transition-all cursor-pointer bg-black text-white";
        langEnBtn.className = "text-[10px] font-bold px-2 py-0.5 rounded-full transition-all cursor-pointer text-gray-400 hover:text-gray-600";
      });

    });
  </script>
</body>
</html>
