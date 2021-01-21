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
     
})