const toggleHamburger = document.getElementsByClassName('toggle-hamburger')[0]

const navbarLinks = document.getElementsByClassName('navBarLinks')[0]

toggleHamburger.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
})
