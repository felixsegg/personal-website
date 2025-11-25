function initMenu() {
  const menuButton = document.getElementById('menuButton');
  const sideMenu = document.getElementById('sideMenu');

  if (menuButton && sideMenu) {
    menuButton.addEventListener('click', () => {
      menuButton.classList.toggle('active');
      sideMenu.classList.toggle('open');
    });
  }
}

document.addEventListener('DOMContentLoaded', initMenu);