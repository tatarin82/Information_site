// alert ('4281517');
const ButtonMenu = document.querySelector('.header_menu');
// const MenuList = document.querySelector('.header_list');
ButtonMenu.addEventListener('click',(e)=>{
// ButtonMenu.onclick = function() {
    // console.log('menu click!');
    // MenuList.style.flex = 'column';
    document.querySelector('header').classList.toggle('open');
});