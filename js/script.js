const menuButton = document.getElementById('menuButton');
const sideMenu = document.getElementById('sideMenu');

menuButton.addEventListener('click', () => {
  menuButton.classList.toggle('active');
  sideMenu.classList.toggle('open');
});
