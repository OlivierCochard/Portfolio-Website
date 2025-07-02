const toggleLangBtn = document.getElementById('lang-toggle-btn');
const elements = document.querySelectorAll('[data-en][data-fr]');

let currentLang = localStorage.getItem('lang') || 'fr';

function applyLanguage(lang) {
  elements.forEach(el => {
    const text = el.getAttribute(`data-${lang}`);
    const html = text.replace(/\n/g, '<br>');
    el.innerHTML = html;
  });
  toggleLangBtn.textContent = lang === 'fr' ? 'English' : 'Français';
}

applyLanguage(currentLang);

toggleLangBtn.addEventListener('click', () => {
  currentLang = currentLang === 'fr' ? 'en' : 'fr';
  localStorage.setItem('lang', currentLang);
  applyLanguage(currentLang);
});
