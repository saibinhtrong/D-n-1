
const power = location.href;
const menuItem = document.querySelectorAll('a');
const menuLength = menuItem.length
for (let i = 0; i < menuItem.length; i++) {
    if (menuItem[i].href === power) {
        menuItem[i].className = 'active'; // add
    } else {
        menuItem[i].className = ''; // xóa
    }
}