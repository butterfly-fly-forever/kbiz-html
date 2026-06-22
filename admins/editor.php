<?php
require_once __DIR__ . '/../templates/auth.php';
$adminActivePage = 'editor';
$adminPageTitle = 'Article Editor | K-Biz Admin';
include 'admin-header.php';
?>


  <!-- Editor Main Layout -->
  <div class="flex-1 w-full flex min-h-0 bg-[#F8F9FA] h-[calc(100vh-80px)] overflow-hidden">
    
    <!-- Hidden Native Color Inputs -->
    <input type="color" id="text-color-picker" class="hidden" />
    <input type="color" id="highlight-color-picker" class="hidden" />

    <!-- Left Side: Text Canvas -->
    <div class="flex-1 p-6 md:p-8 overflow-y-auto flex flex-col gap-6 max-w-4xl mx-auto w-full">
      
      <!-- Borderless Title Input -->
      <input
        type="text"
        id="article-title"
        placeholder="Title"
        class="w-full text-4xl font-medium tracking-tight text-gray-400 focus:text-gray-900 border-none outline-none bg-transparent pb-2 font-sans shrink-0 placeholder-gray-300"
      />

      <!-- WYSIWYG Editor Toolbar -->
      <div class="bg-[#F9FAFB] border border-gray-200 rounded-t-lg px-4 py-2.5 flex items-center justify-between shrink-0 shadow-2xs gap-4 flex-wrap">
        <div class="flex items-center gap-2 text-xs font-semibold text-gray-600 font-sans flex-wrap">
          
          <!-- Paragraph Select -->
          <div class="flex items-center gap-1 cursor-pointer hover:text-gray-800 relative min-w-[90px]">
            <select
              id="format-block-select"
              class="bg-transparent hover:text-gray-800 outline-none border-none cursor-pointer pr-4 py-0.5 appearance-none font-sans font-semibold text-xs w-full"
            >
              <option value="p">Paragraph</option>
              <option value="h1">Heading 1</option>
              <option value="h2">Heading 2</option>
              <option value="h3">Heading 3</option>
            </select>
            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="pointer-events-none absolute right-0">
              <path d="M6 9l6 6 6-6" />
            </svg>
          </div>

          <!-- Font Select -->
          <div class="flex items-center gap-1 cursor-pointer hover:text-gray-800 relative min-w-[70px] pl-2 border-l border-gray-200">
            <select
              id="font-name-select"
              class="bg-transparent hover:text-gray-800 outline-none border-none cursor-pointer pr-4 py-0.5 appearance-none font-sans font-semibold text-xs w-full"
            >
              <option value="Montserrat, sans-serif">Font</option>
              <option value="Inter, sans-serif">Inter</option>
              <option value="Arial, sans-serif">Arial</option>
              <option value="Georgia, serif">Georgia</option>
              <option value="Courier New, monospace">Courier</option>
            </select>
            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="pointer-events-none absolute right-0">
              <path d="M6 9l6 6 6-6" />
            </svg>
          </div>

          <!-- Size Select -->
          <div class="flex items-center gap-1 cursor-pointer hover:text-gray-800 relative min-w-[65px] pl-2 border-l border-gray-200">
            <select
              id="font-size-select"
              class="bg-transparent hover:text-gray-800 outline-none border-none cursor-pointer pr-4 py-0.5 appearance-none font-sans font-semibold text-xs w-full"
            >
              <option value="3">Size</option>
              <option value="2">Small</option>
              <option value="3">Normal</option>
              <option value="5">Large</option>
              <option value="7">Huge</option>
            </select>
            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="pointer-events-none absolute right-0">
              <path d="M6 9l6 6 6-6" />
            </svg>
          </div>

          <div class="w-[1px] h-4 bg-gray-200"></div>

          <!-- Formatting Cluster -->
          <div class="flex items-center gap-1 bg-white border border-gray-150 rounded px-1 py-0.5 shadow-2xs">
            <button type="button" id="bold-btn" class="hover:bg-gray-100 rounded p-1 cursor-pointer text-gray-500 hover:text-gray-800 transition-colors" title="Bold">
              <i data-lucide="bold" class="w-3.5 h-3.5"></i>
            </button>
            <button type="button" id="italic-btn" class="hover:bg-gray-100 rounded p-1 cursor-pointer text-gray-500 hover:text-gray-800 transition-colors" title="Italic">
              <i data-lucide="italic" class="w-3.5 h-3.5"></i>
            </button>
            <button type="button" id="underline-btn" class="hover:bg-gray-100 rounded p-1 cursor-pointer text-gray-500 hover:text-gray-800 transition-colors" title="Underline">
              <i data-lucide="underline" class="w-3.5 h-3.5"></i>
            </button>
            <button type="button" id="strike-btn" class="hover:bg-gray-100 rounded p-1 cursor-pointer text-gray-500 hover:text-gray-800 transition-colors" title="Strikethrough">
              <i data-lucide="strikethrough" class="w-3.5 h-3.5"></i>
            </button>
          </div>

          <!-- Alignments Cluster -->
          <div class="flex items-center gap-1 bg-white border border-gray-150 rounded px-1 py-0.5 shadow-2xs">
            <button type="button" id="align-left-btn" class="hover:bg-gray-100 rounded p-1 cursor-pointer text-gray-500 hover:text-gray-800 transition-colors" title="Align Left">
              <i data-lucide="align-left" class="w-3.5 h-3.5"></i>
            </button>
            <button type="button" id="align-center-btn" class="hover:bg-gray-100 rounded p-1 cursor-pointer text-gray-500 hover:text-gray-800 transition-colors" title="Align Center">
              <i data-lucide="align-center" class="w-3.5 h-3.5"></i>
            </button>
            <button type="button" id="align-right-btn" class="hover:bg-gray-100 rounded p-1 cursor-pointer text-gray-500 hover:text-gray-800 transition-colors" title="Align Right">
              <i data-lucide="align-right" class="w-3.5 h-3.5"></i>
            </button>
            <button type="button" id="align-justify-btn" class="hover:bg-gray-100 rounded p-1 cursor-pointer text-gray-500 hover:text-gray-800 transition-colors" title="Justify">
              <i data-lucide="align-justify" class="w-3.5 h-3.5"></i>
            </button>
          </div>

          <!-- Lists & Blockquote -->
          <div class="flex items-center gap-1 bg-white border border-gray-150 rounded px-1 py-0.5 shadow-2xs">
            <button type="button" id="bullet-list-btn" class="hover:bg-gray-100 rounded p-1 cursor-pointer text-gray-500 hover:text-gray-800 transition-colors" title="Bulleted List">
              <i data-lucide="list" class="w-3.5 h-3.5"></i>
            </button>
            <button type="button" id="number-list-btn" class="hover:bg-gray-100 rounded p-1 cursor-pointer text-gray-500 hover:text-gray-800 transition-colors" title="Numbered List">
              <i data-lucide="list-ordered" class="w-3.5 h-3.5"></i>
            </button>
            <button type="button" id="blockquote-btn" class="hover:bg-gray-100 rounded p-1 cursor-pointer text-gray-500 hover:text-gray-800 transition-colors" title="Blockquote">
              <i data-lucide="quote" class="w-3 h-3"></i>
            </button>
          </div>

          <!-- Hyperlinks -->
          <div class="flex items-center gap-1 bg-white border border-gray-150 rounded px-1 py-0.5 shadow-2xs">
            <button type="button" id="link-btn" class="hover:bg-gray-100 rounded p-1 cursor-pointer text-gray-500 hover:text-gray-800 transition-colors" title="Insert Hyperlink">
              <i data-lucide="link" class="w-3.5 h-3.5"></i>
            </button>
            <button type="button" id="unlink-btn" class="hover:bg-gray-100 rounded p-1 cursor-pointer text-gray-500 hover:text-gray-800 transition-colors" title="Remove Hyperlink">
              <i data-lucide="link-2-off" class="w-3.5 h-3.5"></i>
            </button>
          </div>

          <!-- Undo / Redo -->
          <div class="flex items-center gap-1 bg-white border border-gray-150 rounded px-1 py-0.5 shadow-2xs">
            <button type="button" id="undo-btn" class="hover:bg-gray-100 rounded p-1 cursor-pointer text-gray-500 hover:text-gray-800 transition-colors" title="Undo">
              <i data-lucide="undo" class="w-3.5 h-3.5"></i>
            </button>
            <button type="button" id="redo-btn" class="hover:bg-gray-100 rounded p-1 cursor-pointer text-gray-500 hover:text-gray-800 transition-colors" title="Redo">
              <i data-lucide="redo" class="w-3.5 h-3.5"></i>
            </button>
          </div>

          <div class="w-[1px] h-4 bg-gray-200"></div>

          <!-- Text Color Swatch -->
          <button
            type="button"
            id="text-color-btn"
            class="w-5 h-5 bg-[#0C0C0C] rounded-xs border border-gray-300 cursor-pointer shadow-2xs hover:scale-105 transition-transform"
            title="Text Color"
          ></button>

          <!-- Highlight Color Swatch -->
          <button
            type="button"
            id="highlight-color-btn"
            class="w-5 h-5 bg-[#D4E2FC] rounded-xs border border-gray-300 cursor-pointer shadow-2xs hover:scale-105 transition-transform"
            title="Highlight Color"
          ></button>

        </div>

        <!-- Toolbar Right Actions -->
        <div class="flex items-center gap-4 text-xs font-semibold text-gray-600 font-sans ml-auto">
          <button
            type="button"
            id="insert-table-btn"
            class="hover:text-black cursor-pointer hover:underline flex items-center gap-1 bg-white border border-gray-200 rounded px-2.5 py-1 shadow-2xs hover:bg-gray-50 transition-colors"
          >
            <i data-lucide="table" class="w-3 h-3 text-gray-500"></i>
            <span>Table</span>
          </button>
          <button
            type="button"
            id="clear-canvas-btn"
            class="hover:text-black cursor-pointer hover:underline flex items-center gap-1 bg-white border border-gray-200 rounded px-2.5 py-1 shadow-2xs hover:bg-gray-50 transition-colors"
          >
            <i data-lucide="trash-2" class="w-3 h-3 text-red-500"></i>
            <span>Clear</span>
          </button>
        </div>
      </div>

      <!-- Writing Canvas -->
      <div class="flex-1 min-h-[400px] flex flex-col bg-white border border-gray-200 border-t-0 rounded-b-lg shadow-sm">
        <div
          id="editor-canvas"
          contenteditable="true"
          class="flex-1 w-full p-8 md:p-10 outline-none text-sm text-gray-800 leading-relaxed font-sans min-h-[400px] bg-transparent rounded-b-lg prose max-w-none focus:ring-0"
          style="min-height: 400px;"
        ></div>
      </div>

      <!-- Metadata stats -->
      <div class="flex items-center justify-between text-[11px] text-gray-400 font-sans font-medium shrink-0 pb-4 select-none">
        <span>
          <span id="word-count">0</span> words - <span id="reading-time">1</span> min read
        </span>
        <span class="italic">
          Markdown paste safe • Ctrl+B / Ctrl+I / Ctrl+K shortcuts
        </span>
      </div>

    </div>

    <!-- Right Sidebar -->
    <aside class="w-80 border-l border-gray-200 bg-white flex flex-col min-h-0 shrink-0">
      <!-- Actions header -->
      <div class="p-5 border-b border-gray-100 flex items-center justify-between bg-gray-50 shrink-0">
        <a
          href="posts"
          class="text-xs font-bold text-gray-500 hover:text-gray-800 transition-colors uppercase tracking-wider flex items-center gap-1 cursor-pointer"
        >
          &larr; Cancel
        </a>
        <button
          id="save-post-btn"
          class="bg-[#005E2C] hover:bg-[#004B23] text-white text-xs font-bold uppercase tracking-wider px-5 py-2.5 rounded-sm shadow-xs transition-all cursor-pointer"
        >
          Save Post
        </button>
      </div>

      <!-- Form details -->
      <div class="flex-1 overflow-y-auto p-5 space-y-6">
        
        <!-- Slug Input -->
        <label class="flex flex-col gap-1.5">
          <span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">
            Slug
          </span>
          <input
            type="text"
            id="article-slug"
            placeholder="e.g. market-busan-study"
            class="w-full border border-gray-200 rounded px-3 py-2 text-xs text-gray-700 outline-none focus:border-green-600 bg-white font-mono"
          />
        </label>

        <!-- Language Dropdown -->
        <label class="flex flex-col gap-1.5">
          <span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">
            Language
          </span>
          <select
            id="article-lang"
            class="w-full border border-gray-200 rounded px-3 py-2 text-xs text-gray-700 outline-none focus:border-green-600 bg-white"
          >
            <option value="English">English</option>
            <option value="Vietnamese">Vietnamese</option>
          </select>
        </label>

        <!-- Author Input -->
        <label class="flex flex-col gap-1.5">
          <span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">
            Author
          </span>
          <input
            type="text"
            id="article-author"
            value="K-Biz editorial"
            class="w-full border border-gray-200 rounded px-3 py-2 text-xs text-gray-700 outline-none focus:border-green-600 bg-white"
          />
        </label>

        <!-- Cover Image Input -->
        <div class="flex flex-col gap-1.5">
          <span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">
            Cover image
          </span>
          <div class="flex gap-2">
            <input
              type="text"
              id="article-cover"
              placeholder="/uploads/... or full URL"
              class="flex-1 border border-gray-200 rounded px-3 py-2 text-xs text-gray-700 outline-none focus:border-green-600 bg-white"
            />
            <button
              type="button"
              id="mock-upload-btn"
              class="border border-gray-200 hover:bg-gray-50 text-xs font-semibold px-3 py-2 rounded shrink-0 cursor-pointer"
            >
              Upload
            </button>
          </div>
          <div id="cover-preview-container" class="hidden mt-2 aspect-video w-full rounded border border-gray-100 overflow-hidden bg-gray-50">
            <img id="cover-preview-img" src="" alt="Cover Preview" class="w-full h-full object-cover" />
          </div>
        </div>

        <!-- Excerpt Textarea -->
        <label class="flex flex-col gap-1.5">
          <span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">
            Excerpt
          </span>
          <textarea
            rows="3"
            id="article-excerpt"
            placeholder="A short description of this article to display on cards..."
            class="w-full border border-gray-200 rounded px-3 py-2 text-xs text-gray-700 outline-none focus:border-green-600 bg-white resize-none"
          ></textarea>
        </label>

        <!-- Tags Input -->
        <label class="flex flex-col gap-1.5">
          <span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">
            Tags (comma-separated)
          </span>
          <input
            type="text"
            id="article-tags"
            placeholder="Investment, Advisory, Market"
            class="w-full border border-gray-200 rounded px-3 py-2 text-xs text-gray-700 outline-none focus:border-green-600 bg-white"
          />
        </label>

        <!-- Status Toggle -->
        <div class="flex flex-col gap-2">
          <span class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">
            Status
          </span>
          <div class="inline-flex rounded-md bg-gray-100 p-1 w-full">
            <button
              type="button"
              id="status-draft-btn"
              class="flex-1 text-center py-2 text-xs font-bold rounded-md uppercase tracking-wider transition-all cursor-pointer bg-[#3D0055] text-white shadow-xs"
            >
              Draft
            </button>
            <button
              type="button"
              id="status-published-btn"
              class="flex-1 text-center py-2 text-xs font-bold rounded-md uppercase tracking-wider transition-all cursor-pointer text-gray-500 hover:text-gray-800"
            >
              Published
            </button>
          </div>
        </div>

      </div>
    </aside>

  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      localStorage.setItem("kbiz_posts", JSON.stringify(<?php echo file_exists('../data/posts.json') ? file_get_contents('../data/posts.json') : '[]'; ?>));

      // Initialize Lucide Icons
      lucide.createIcons();

      const titleInput = document.getElementById("article-title");
      const slugInput = document.getElementById("article-slug");
      const langInput = document.getElementById("article-lang");
      const authorInput = document.getElementById("article-author");
      const coverInput = document.getElementById("article-cover");
      const excerptInput = document.getElementById("article-excerpt");
      const tagsInput = document.getElementById("article-tags");
      
      const statusDraftBtn = document.getElementById("status-draft-btn");
      const statusPublishedBtn = document.getElementById("status-published-btn");

      const editorCanvas = document.getElementById("editor-canvas");
      const wordCountEl = document.getElementById("word-count");
      const readingTimeEl = document.getElementById("reading-time");
      
      const textColorPicker = document.getElementById("text-color-picker");
      const highlightColorPicker = document.getElementById("highlight-color-picker");

      const coverPreviewContainer = document.getElementById("cover-preview-container");
      const coverPreviewImg = document.getElementById("cover-preview-img");

      let currentStatus = "draft";
      let posts = [];

      // Query editing ID
      const urlParams = new URLSearchParams(window.location.search);
      const editingId = urlParams.get("id");

      // Load posts
      const saved = localStorage.getItem("kbiz_posts");
      if (saved) {
        try {
          posts = JSON.parse(saved);
        } catch (e) {
          console.error(e);
        }
      }

      // If editing mode, load article details
      if (editingId) {
        const post = posts.find(function(p) { return p.id === editingId; });
        if (post) {
          titleInput.value = post.title || "";
          editorCanvas.innerHTML = post.content || "";
          slugInput.value = post.slug || "";
          langInput.value = post.lang || "English";
          authorInput.value = post.author || "K-Biz editorial";
          coverInput.value = post.coverImage || "";
          excerptInput.value = post.excerpt || "";
          tagsInput.value = post.tags || "";
          currentStatus = post.status || "draft";
          
          updateStatusToggleUI();
          updateCoverPreview();
          calculateStats();
        }
      }

      // Title change listener -> auto slug
      titleInput.addEventListener("input", function() {
        const val = titleInput.value;
        const generatedSlug = val
          .toLowerCase()
          .trim()
          .normalize("NFD")
          .replace(/[\u0300-\u036f]/g, "")
          .replace(/[^a-z0-9\s-]/g, "")
          .replace(/[\s_]+/g, "-")
          .replace(/-+/g, "-")
          .replace(/^-+|-+$/g, "");
        slugInput.value = generatedSlug;
      });

      // Canvas input listener
      editorCanvas.addEventListener("input", calculateStats);

      function calculateStats() {
        const text = editorCanvas.textContent.trim();
        const wordCount = text ? text.split(/\s+/).length : 0;
        const readingTime = Math.max(1, Math.ceil(wordCount / 200));

        wordCountEl.textContent = wordCount;
        readingTimeEl.textContent = readingTime;
      }

      // Cover preview update
      coverInput.addEventListener("input", updateCoverPreview);

      function updateCoverPreview() {
        const val = coverInput.value.trim();
        if (val) {
          coverPreviewImg.src = val;
          coverPreviewContainer.classList.remove("hidden");
        } else {
          coverPreviewContainer.classList.add("hidden");
        }
      }

      // Mock cover upload
      document.getElementById("mock-upload-btn").addEventListener("click", function() {
        const randomImages = [
          "../public/images/blog-busan.jpg",
          "../public/images/blog-chodam.jpg",
          "../public/images/blog-supermarket.jpg",
          "../public/images/hero-nhatrang.jpg",
        ];
        const randomIndex = Math.floor(Math.random() * randomImages.length);
        coverInput.value = randomImages[randomIndex];
        updateCoverPreview();
      });

      // Toggle status buttons
      statusDraftBtn.addEventListener("click", function() {
        currentStatus = "draft";
        updateStatusToggleUI();
      });

      statusPublishedBtn.addEventListener("click", function() {
        currentStatus = "published";
        updateStatusToggleUI();
      });

      function updateStatusToggleUI() {
        if (currentStatus === "draft") {
          statusDraftBtn.className = "flex-1 text-center py-2 text-xs font-bold rounded-md uppercase tracking-wider transition-all cursor-pointer bg-[#3D0055] text-white shadow-xs";
          statusPublishedBtn.className = "flex-1 text-center py-2 text-xs font-bold rounded-md uppercase tracking-wider transition-all cursor-pointer text-gray-500 hover:text-gray-800";
        } else {
          statusPublishedBtn.className = "flex-1 text-center py-2 text-xs font-bold rounded-md uppercase tracking-wider transition-all cursor-pointer bg-[#3D0055] text-white shadow-xs";
          statusDraftBtn.className = "flex-1 text-center py-2 text-xs font-bold rounded-md uppercase tracking-wider transition-all cursor-pointer text-gray-500 hover:text-gray-800";
        }
      }

      // Format Command Executors
      function executeCommand(command, value = "") {
        document.execCommand(command, false, value);
        calculateStats();
      }

      document.getElementById("bold-btn").addEventListener("click", function() { executeCommand("bold"); });
      document.getElementById("italic-btn").addEventListener("click", function() { executeCommand("italic"); });
      document.getElementById("underline-btn").addEventListener("click", function() { executeCommand("underline"); });
      document.getElementById("strike-btn").addEventListener("click", function() { executeCommand("strikeThrough"); });
      
      document.getElementById("align-left-btn").addEventListener("click", function() { executeCommand("justifyLeft"); });
      document.getElementById("align-center-btn").addEventListener("click", function() { executeCommand("justifyCenter"); });
      document.getElementById("align-right-btn").addEventListener("click", function() { executeCommand("justifyRight"); });
      document.getElementById("align-justify-btn").addEventListener("click", function() { executeCommand("justifyFull"); });

      document.getElementById("bullet-list-btn").addEventListener("click", function() { executeCommand("insertUnorderedList"); });
      document.getElementById("number-list-btn").addEventListener("click", function() { executeCommand("insertOrderedList"); });
      document.getElementById("blockquote-btn").addEventListener("click", function() { executeCommand("formatBlock", "blockquote"); });

      document.getElementById("link-btn").addEventListener("click", function() {
        const url = prompt("Enter URL:");
        if (url) executeCommand("createLink", url);
      });
      document.getElementById("unlink-btn").addEventListener("click", function() { executeCommand("unlink"); });
      
      document.getElementById("undo-btn").addEventListener("click", function() { executeCommand("undo"); });
      document.getElementById("redo-btn").addEventListener("click", function() { executeCommand("redo"); });

      // Native picker triggers
      const textColorBtn = document.getElementById("text-color-btn");
      const highlightColorBtn = document.getElementById("highlight-color-btn");

      textColorBtn.addEventListener("click", function() { textColorPicker.click(); });
      highlightColorBtn.addEventListener("click", function() { highlightColorPicker.click(); });

      textColorPicker.addEventListener("input", function() {
        executeCommand("foreColor", textColorPicker.value);
        textColorBtn.style.backgroundColor = textColorPicker.value;
      });

      highlightColorPicker.addEventListener("input", function() {
        executeCommand("hiliteColor", highlightColorPicker.value);
        highlightColorBtn.style.backgroundColor = highlightColorPicker.value;
      });

      // Paragraph format dropdown
      document.getElementById("format-block-select").addEventListener("change", function(e) {
        executeCommand("formatBlock", e.target.value);
      });

      // Font Family dropdown
      document.getElementById("font-name-select").addEventListener("change", function(e) {
        executeCommand("fontName", e.target.value);
      });

      // Font Size dropdown
      document.getElementById("font-size-select").addEventListener("change", function(e) {
        executeCommand("fontSize", e.target.value);
      });

      // Insert table
      document.getElementById("insert-table-btn").addEventListener("click", function() {
        const tableHTML = `
          <table class="w-full border-collapse border border-gray-200 my-4 text-xs">
            <tr class="bg-gray-50">
              <th class="border border-gray-200 p-2 font-bold text-gray-700">Header 1</th>
              <th class="border border-gray-200 p-2 font-bold text-gray-700">Header 2</th>
            </tr>
            <tr>
              <td class="border border-gray-200 p-2 text-gray-600">Cell 1</td>
              <td class="border border-gray-200 p-2 text-gray-600">Cell 2</td>
            </tr>
          </table>
        `;
        executeCommand("insertHTML", tableHTML);
      });

      // Clear editor
      document.getElementById("clear-canvas-btn").addEventListener("click", function() {
        if (window.confirm("Clear all written content?")) {
          editorCanvas.innerHTML = "";
          calculateStats();
        }
      });

      // Save Post Click
      document.getElementById("save-post-btn").addEventListener("click", function() {
        const title = titleInput.value.trim();
        if (!title) {
          alert("Please provide an article title!");
          return;
        }

        let updatedPosts = [];
        
        if (editingId) {
          updatedPosts = posts.map(function (p) {
            if (p.id === editingId) {
              return {
                ...p,
                title: title,
                content: editorCanvas.innerHTML,
                slug: slugInput.value.trim(),
                lang: langInput.value,
                author: authorInput.value.trim(),
                coverImage: coverInput.value.trim(),
                excerpt: excerptInput.value.trim(),
                tags: tagsInput.value.trim(),
                status: currentStatus,
                createdAt: p.createdAt || new Date().toISOString()
              };
            }
            return p;
          });
        } else {
          const newPost = {
            id: Date.now().toString(),
            title: title,
            content: editorCanvas.innerHTML,
            slug: slugInput.value.trim(),
            lang: langInput.value,
            author: authorInput.value.trim(),
            coverImage: coverInput.value.trim(),
            excerpt: excerptInput.value.trim(),
            tags: tagsInput.value.trim(),
            status: currentStatus,
            createdAt: new Date().toISOString()
          };
          updatedPosts = [newPost, ...posts];
        }

        localStorage.setItem("kbiz_posts", JSON.stringify(updatedPosts));
        fetch('../api/save_posts.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(updatedPosts)
        })
        .then(res => res.json())
        .then(data => {
          if (data.success) {
            window.location.href = "posts";
          } else {
            alert("Lỗi lưu bài viết lên máy chủ.");
          }
        })
        .catch(err => {
          console.error(err);
          alert("Lỗi kết nối.");
        });
      });

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
