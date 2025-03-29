const menuItems = document.querySelectorAll('#menu_items a');
const mainContent = document.getElementById('main-content');

// Handle menu item click
menuItems.forEach(item => {
  item.addEventListener('click', (e) => {
    e.preventDefault();
    loadContent(item.textContent);
  });
});

// Load content into main co  ntent area
function loadContent(content) {
  mainContent.innerHTML = `<h1>${content}</h1><p>Content for ${content} goes here.</p>`;
}