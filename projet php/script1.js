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
    $(document).ready(function() {
      // Quand l'utilisateur commence à remplir un champ
      $('.form').find('input, textarea').on('keyup', function (e) {
        var $this = $(this),
            label = $this.prev('label'),
            nextFieldWrap = $this.closest('.field-wrap').next('.field-wrap');
        
        // Si le champ actuel n'est pas vide, afficher le label du champ suivant
        if ($this.val() !== '') {
          nextFieldWrap.find('label').fadeIn();
        } else {
          // Optionnel: si le champ actuel est vide, cacher le label du champ suivant
          nextFieldWrap.find('label').fadeOut();
        }
      });
      
      // Gestion des onglets
      $('.tab a').on('click', function (e) {
        e.preventDefault();
    
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
    
        var target = $(this).attr('href');
    
        $('.tab-content > div').not(target).hide();
    
        $(target).show();
      });
    });
    
      
        $('.tab a').on('click', function (e) {
          e.preventDefault();
      
          $(this).parent().addClass('active');
          $(this).parent().siblings().removeClass('active');
      
          target = $(this).attr('href');
      
          $('.tab-content > div').not(target).hide();
      
          $(target).fadeIn(600);
        });
      
    (function() {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            const password = document.querySelector(".entrer_mot_de_passe").value;
            const confirmPassword = document.querySelector(".confirmez_mot_de_passe").value;
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            } 
            else if (password !== confirmPassword) {
              event.preventDefault();
              event.stopPropagation();
              document.querySelector('.confirmation').style.display = 'block';
            } else {
              document.querySelector('.confirmation').style.display = 'none';
            }
            form.classList.add('was-validated');
          }, false);
        });
      })();
      