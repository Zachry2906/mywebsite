const scroll = document.getElementById('nav1')
window.addEventListener('scroll', fixNav)

function fixNav() {
    if (window.scrollY > scroll.offsetHeight + 150) {
        scroll.style.backgroundColor = 'transparent'
    } else {
        scroll.style.backgroundColor = 'grey'
    }
}