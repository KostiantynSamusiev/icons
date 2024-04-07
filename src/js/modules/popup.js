function popup() {
    let link = $('a[href$="gallery-popup"]')[0]
    link.addEventListener('click', (e) => {
        document.getElementsByClassName('sub-menu')[0].classList.toggle('sub-menu-active')
    })

}

export default popup;