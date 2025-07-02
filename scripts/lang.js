const toggleThemeBtn = document.getElementById('theme-toggle-btn');
const toggleLangBtn = document.getElementById('lang-toggle-btn');
const elements = document.querySelectorAll('[data-en][data-fr]');

let currentLang = localStorage.getItem('lang') || 'fr';
let currentTheme = localStorage.getItem('theme') || 'dark';

function applyLanguage(lang) {
  elements.forEach(el => {
    const text = el.getAttribute(`data-${lang}`);
    const html = text.replace(/\n/g, '<br>');
    el.innerHTML = html;
  });

  toggleLangBtn.textContent = lang === 'fr' ? 'English' : 'Français';
}
function applyLanguageThemeBtn(lang, theme) {
  if (!toggleThemeBtn) return;

  if (theme === 'light') {
    toggleThemeBtn.textContent = lang === 'en' ? 'Dark theme' : 'Thème sombre';
  } else {
    toggleThemeBtn.textContent = lang === 'en' ? 'Light theme' : 'Thème lumineux';
  }
}

applyLanguage(currentLang);
applyLanguageThemeBtn(currentLang, currentTheme);

toggleLangBtn.addEventListener('click', () => {
  currentLang = currentLang === 'fr' ? 'en' : 'fr';
  currentTheme = localStorage.getItem('theme') || 'dark';
  localStorage.setItem('lang', currentLang);
  applyLanguage(currentLang);

  applyLanguageThemeBtn(currentLang, currentTheme);
});
