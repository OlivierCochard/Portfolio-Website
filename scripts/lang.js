const toggleThemeBtn = document.getElementById('theme-toggle-btn');
const toggleLangBtn = document.getElementById('lang-toggle-btn');
const elements = document.querySelectorAll('[data-en][data-fr]');
let currentLang = localStorage.getItem('lang') || 'fr';
let currentTheme = localStorage.getItem('theme') || 'dark';

function applyLanguage(lang) {
  elements.forEach(el => {
    const text = el.getAttribute(`data-${lang}`);
    if (text.includes('\n')) {
      el.innerHTML = text.replace(/\n/g, '<br>');
    } else {
      el.textContent = text;
    }
  });

  if (toggleLangBtn) {
    toggleLangBtn.textContent = lang === 'fr' ? 'English' : 'Français';
  }

  applyLanguageThemeBtn(lang, currentTheme);
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

if (toggleLangBtn) {
  toggleLangBtn.addEventListener('click', () => {
    currentLang = currentLang === 'fr' ? 'en' : 'fr';
    localStorage.setItem('lang', currentLang);
    applyLanguage(currentLang);
  });
}
