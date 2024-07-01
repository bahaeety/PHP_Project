const subMenu = document.querySelector('.submenu');
    const subMenuBackBtn = document.querySelector('#submenu-back');
    const subMenuHandler = document.querySelector('#submenu-handler');

    subMenuHandler.addEventListener('click', () => {
        subMenu.classList.remove('translate-x-full')
    })

    subMenuBackBtn.addEventListener('click', () => {
        subMenu.classList.add('translate-x-full')
    })

    


    $(document).ready(function() {
        $('#right-arrow').click(function() {
            $('#category-container').animate({scrollLeft: '+=200'}, 800);
        });
        
        $('#left-arrow').click(function() {
            $('#category-container').animate({scrollLeft: '-=200'}, 800);
        });
    });
    
