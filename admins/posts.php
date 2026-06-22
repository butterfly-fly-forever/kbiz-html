<?php
require_once __DIR__ . '/../templates/auth.php';
$adminActivePage = 'posts';
$adminPageTitle = 'Manage Posts | K-Biz Admin';
include 'admin-header.php';
?>


  <!-- Main Content Area -->
  <main class="flex-1 flex flex-col">
    <div class="flex-1 w-full px-6 md:px-16 py-10 max-w-7xl mx-auto flex flex-col">
      
      <!-- Header Section -->
      <div class="flex items-center justify-between mb-8">
        <div>
          <h1 class="text-[34px] font-medium tracking-tight text-gray-900 font-sans">
            Posts
          </h1>
          <p class="text-xs text-gray-400 mt-1 font-sans">
            Manage your website articles and blog drafts.
          </p>
        </div>
        <a
          href="editor"
          class="bg-[#005E2C] hover:bg-[#004B23] text-white text-xs font-bold uppercase tracking-wider px-6 py-3.5 rounded-sm shadow-xs transition-all cursor-pointer font-sans"
        >
          CREATE NEW POST
        </a>
      </div>

      <!-- Main Container Card -->
      <div class="bg-white border border-slate-300 rounded-lg overflow-hidden flex-1 flex flex-col shadow-2xs">
        <div class="overflow-x-auto flex-1">
          <table class="w-full text-left border-collapse">
            <thead>
              <tr class="bg-gray-50 border-b border-slate-200">
                <th class="p-5 text-[11px] font-bold text-gray-400 tracking-wider font-sans uppercase">
                  Title
                </th>
                <th class="p-5 text-[11px] font-bold text-gray-400 tracking-wider font-sans uppercase">
                  Status
                </th>
                <th class="p-5 text-[11px] font-bold text-gray-400 tracking-wider font-sans uppercase">
                  Date Created
                </th>
                <th class="p-5 text-[11px] font-bold text-gray-400 tracking-wider font-sans uppercase text-right">
                  Actions
                </th>
              </tr>
            </thead>
            <tbody id="posts-table-body" class="divide-y divide-slate-100">
              <!-- Will be populated dynamically by JS -->
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </main>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      localStorage.setItem("kbiz_posts", JSON.stringify(<?php echo file_exists('../data/posts.json') ? file_get_contents('../data/posts.json') : '[]'; ?>));

      
      const tableBody = document.getElementById("posts-table-body");
      let posts = [];

      // Load posts
      function loadPosts() {
        const saved = localStorage.getItem("kbiz_posts");
        if (saved) {
          try {
            posts = JSON.parse(saved);
          } catch (e) {
            console.error(e);
          }
        } else {
          // PROACTIVE DATA INITIALIZATION (Seeding)
          const defaultPosts = [
            {
              id: "1",
              title: "Perspective on Traditional Market Model – Part 1: The fish market in Busan",
              content: "When tourists visit any destination, they often want to learn about the local culture, history, standard of living, and customs. Traditional markets are an indispensable part of local economy...",
              status: "published",
              createdAt: new Date(Date.now() - 3600000 * 24 * 3).toISOString(),
            },
            {
              id: "2",
              title: "Perspective on Traditional Market Model – Part 2: The hub market in Bazar",
              content: "A comprehensive look at traditional markets in the modern economy, focusing on Bazar hub market’s vital role in supplying fresh goods and supporting local micro-entrepreneurs...",
              status: "published",
              createdAt: new Date(Date.now() - 3600000 * 24 * 1.5).toISOString(),
            },
            {
              id: "3",
              title: "Traditional Markets vs Modern Supermarkets",
              content: "Analyzing consumer behavior transitions in fast-developing coastal urban cities. How traditional markets retain their competitive edge through cultural connection...",
              status: "draft",
              createdAt: new Date(Date.now() - 3600000 * 2).toISOString(),
            },
          ];
          posts = defaultPosts;
          localStorage.setItem("kbiz_posts", JSON.stringify(defaultPosts));
        }
      }

      function saveAndRender(newPosts) {
        posts = newPosts;
        localStorage.setItem("kbiz_posts", JSON.stringify(newPosts));
        fetch('../api/save_posts.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(newPosts)
        })
        .then(res => res.json())
        .then(data => {
          if (data.success) {
            renderTable();
          } else {
            alert("Lỗi lưu dữ liệu lên máy chủ.");
          }
        });
      }

      function renderTable() {
        if (posts.length === 0) {
          tableBody.innerHTML = `
            <tr>
              <td colSpan="4" class="p-16 text-center text-gray-400 italic text-sm font-light">
                No articles found. Click "Create New Post" to write your first article!
              </td>
            </tr>
          `;
          return;
        }

        tableBody.innerHTML = posts.map(function (post) {
          const formattedDate = new Date(post.createdAt).toLocaleDateString();
          const badgeClass = post.status === "published"
            ? "bg-green-50 text-green-700 border-green-200 hover:bg-green-100"
            : "bg-yellow-50 text-yellow-700 border-yellow-200 hover:bg-yellow-100";
          
          return `
            <tr
              data-id="${post.id}"
              class="hover:bg-gray-50/50 cursor-pointer transition-colors"
            >
              <td class="p-5">
                <div class="flex flex-col">
                  <span class="text-sm font-semibold text-gray-800 hover:text-[#005E2C]">
                    ${post.title}
                  </span>
                  <span class="text-xs text-gray-400 line-clamp-1 mt-1 max-w-xl">
                    ${post.content || 'No content provided.'}
                  </span>
                </div>
              </td>
              <td class="p-5">
                <button
                  data-id="${post.id}"
                  class="toggle-status-btn text-[10px] font-extrabold px-3 py-1 rounded-full uppercase border cursor-pointer transition-all ${badgeClass}"
                >
                  ${post.status}
                </button>
              </td>
              <td class="p-5 text-xs text-gray-400 font-mono">
                ${formattedDate}
              </td>
              <td class="p-5 text-right space-x-3">
                <a
                  href="editor.html?id=${post.id}"
                  class="text-xs font-semibold text-blue-600 hover:underline cursor-pointer inline-block"
                >
                  Edit
                </a>
                <button
                  data-id="${post.id}"
                  class="delete-post-btn text-xs font-semibold text-red-600 hover:underline cursor-pointer"
                >
                  Delete
                </button>
              </td>
            </tr>
          `;
        }).join("");

        // Attach listeners
        // Row click -> Edit
        document.querySelectorAll("tbody tr").forEach(function (row) {
          row.addEventListener("click", function (e) {
            // If clicking a button or link, don't trigger row navigation
            if (e.target.closest("button") || e.target.closest("a")) return;
            const id = row.getAttribute("data-id");
            window.location.href = "editor.html?id=" + id;
          });
        });

        // Toggle status click
        document.querySelectorAll(".toggle-status-btn").forEach(function (btn) {
          btn.addEventListener("click", function (e) {
            e.stopPropagation();
            const id = btn.getAttribute("data-id");
            const updated = posts.map(function (p) {
              if (p.id === id) {
                return { ...p, status: p.status === "published" ? "draft" : "published" };
              }
              return p;
            });
            saveAndRender(updated);
          });
        });

        // Delete click
        document.querySelectorAll(".delete-post-btn").forEach(function (btn) {
          btn.addEventListener("click", function (e) {
            e.stopPropagation();
            const id = btn.getAttribute("data-id");
            if (window.confirm("Are you sure you want to delete this post?")) {
              const filtered = posts.filter(function (p) { return p.id !== id; });
              saveAndRender(filtered);
            }
          });
        });
      }

      loadPosts();
      renderTable();

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
