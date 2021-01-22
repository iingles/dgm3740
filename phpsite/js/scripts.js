$(document).ready(function(){
    $('.carousel').slick({
        dots: true,
        arrows: false,
    })
   
    // Responsive menu button
    $('#mobileMenu').click(()=> {
        $("#mobileMenu").toggleClass("open")
        $("#topNav").toggleClass("open")
    })

    

    // Set active class on menu
    const menu = $('#topNav')
    const pageHref = window.location.pathname

    const navLinks = menu.find('a')

    for (let i = 0; i < navLinks.length; i++) {
        
        const currLink = navLinks[i]

        if ( currLink.getAttribute(`href`) === pageHref ) {
            currLink.parentNode.classList.add('active');

            if(currLink.parentNode.parentNode.parentNode.tagName === 'li') {
                currLink.parentNode.parentNode.parentNode.classList.add('active')
            }
        } else {
            currLink.parentNode.classList.remove('active')
        }
    }
    


    

     
})