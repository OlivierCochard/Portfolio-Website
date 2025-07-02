const darkTheme = {
  '--backgroundColor': '#1A1A19',
  '--textColor': '#F6FCDF',
  '--secondColor': '#859F3D',
  '--thirdColor': '#31511E',
  '--formColor': '#2e2e2d',
  '--cursor': "url('../images/cursor.png') 12 12, auto",
};

const lightTheme = {
  '--backgroundColor': '#F6FCDF',
  '--textColor': '#1A1A19',
  '--secondColor': '#c2a24c',
  '--thirdColor': '#8a6436',
  '--formColor': '#e0e6cc',
  '--cursor': "url('../images/cursor-light.png') 12 12, auto",
};

function applyTheme(themeObj, themeName) {
  for (const [prop, value] of Object.entries(themeObj)) {
    document.documentElement.style.setProperty(prop, value);
  }

  updateCv(themeName, localStorage.getItem('lang') || 'fr');
  updateImages(themeName);
  updateButton(themeName);
}

function loadTheme() {
  const savedTheme = localStorage.getItem('theme') || 'dark';
  const themeObj = savedTheme === 'light' ? lightTheme : darkTheme;
  applyTheme(themeObj, savedTheme);
}

function toggleTheme() {
  const currentTheme = localStorage.getItem('theme') || 'dark';
  const newTheme = currentTheme === 'light' ? 'dark' : 'light';
  const themeObj = newTheme === 'light' ? lightTheme : darkTheme;

  localStorage.setItem('theme', newTheme);
  applyTheme(themeObj, newTheme);
}

function updateButton(theme) {
  const btn = document.getElementById('theme-toggle-btn');
  if (!btn) return;

  const lang = document.documentElement.lang || 'fr';
  if (theme === 'light') {
    btn.textContent = lang === 'en' ? 'Dark theme' : 'Thème sombre';
  } else {
    btn.textContent = lang === 'en' ? 'Light theme' : 'Thème lumineux';
  }
}

function updateCv(theme, lang){
  let link = "";
  if (theme === 'dark'){
    if (lang === 'fr'){
      link = "assets/cv-cochard-olivier-fr-dark.pdf";
    }
    else {
      link = "assets/cv-cochard-olivier-en-dark.pdf";
    }
  }
  else {
    if (lang === 'fr'){
      link = "assets/cv-cochard-olivier-fr-light.pdf";
    }
    else {
      link = "assets/cv-cochard-olivier-en-light.pdf";
    }
  }

  const cv = document.getElementById('cv');
  const cv_view = document.getElementById('cv-view');
  const cv_download = document.getElementById('cv-download');
  if (cv) cv.src = link;
  if (cv_view) cv_view.href = link;
  if (cv_download) cv_download.href = link;
}

function updateImages(theme) {
  const images = [
    { selector: '#profile-img', light: 'images/meRemake-light.png', dark: 'images/meRemake.png' },
    { selector: '#github-img', light: 'images/githubLogo-light.png', dark: 'images/githubLogo.png' },
    { selector: '#itch-img', light: 'images/itchLogo-light.png', dark: 'images/itchLogo.png' },
    { selector: '#phone-img', light: 'images/phoneLogo-light.png', dark: 'images/phoneLogo.png' },
    { selector: '#email-img', light: 'images/emailLogo-light.png', dark: 'images/emailLogo.png' },
    { selector: '#star-img', light: 'images/emptyStars-light.png', dark: 'images/emptyStars.png' },
    { selector: '#code-img', light: 'images/codeLogo-light.png', dark: 'images/codeLogo.png' },
    { selector: '#group-img', light: 'images/groupLogo-light.png', dark: 'images/groupLogo.png' },
    { selector: '#info-img', light: 'images/infoLogo-light.png', dark: 'images/infoLogo.png' },
    { selector: '#person-img', light: 'images/personLogo-light.png', dark: 'images/personLogo.png' },
    { selector: '#time-img', light: 'images/timeLogo-light.png', dark: 'images/timeLogo.png' },
    { selector: '#unity-img', light: 'images/unityLogo-light.png', dark: 'images/unityLogo.png' },
    { selector: '#filledStar-img', light: 'images/filledStars-light.png', dark: 'images/filledStars.png' },
  ];

  images.forEach(({ selector, light, dark }) => {
    const img = document.querySelector(selector);
    if (img) img.src = theme === 'light' ? light : dark;
  });

  const stars = document.querySelectorAll('.star-img');
  stars.forEach(img => {
    img.src = theme === 'light' ? 'images/emptyStars-light.png' : 'images/emptyStars.png';
  });

  filledStars = document.querySelectorAll('.filledStar-img');
  filledStars.forEach(img => {
    img.src = theme === 'light' ? 'images/filledStars-light.png' : 'images/filledStars.png';
  });
}

window.addEventListener('DOMContentLoaded', () => {
  loadTheme();

  const btn = document.getElementById('theme-toggle-btn');
  if (btn) {
    btn.addEventListener('click', toggleTheme);
  }
});
