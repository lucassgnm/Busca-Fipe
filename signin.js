toastr.options = {
    "positionClass": "toast-bottom-full-width",
}

document.addEventListener("DOMContentLoaded", () => {
    /* Configs */
    /* Adicionar padding top para mostrar o conteúdo atrás da barra de navegação */
    $('body').css('padding-top', $('.navbar').outerHeight() + 'px')

    /* Detectar rolagem para cima ou para baixo */
    if ($('.smart-scroll').length > 0) { /* Verifica se o elemento existe */
        var last_scroll_top = 0;
        $(window).on('scroll', function() {
            scroll_top = $(this).scrollTop();
            if (scroll_top < last_scroll_top) {
                $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
            } else {
                $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
            }
            last_scroll_top = scroll_top;
        });
    }
});

$(document).ready(function() {

    var current_fs, next_fs, previous_fs;

    // No BACK button on first screen
    if ($(".show").hasClass("first-screen")) {
        $(".prev").css({ 'display': 'none' });
    }

    var permitidoemail = false;
    var permitidosenha = false;
    var permitidopais = false;

    document.querySelector('#btn-email').addEventListener('click', function() {
        validacaoEmail(document.querySelector('#email'));
    })

    document.querySelector('#btn-senha').addEventListener('click', function() {
        validacaoSenha(document.querySelector('#pwd'));
    })


    // Next button
    $(".next-button1").click(function() {
        if (permitidoemail == true) {
            current_fs = $(this).parent().parent();
            next_fs = $(this).parent().parent().next();

            $(".prev").css({ 'display': 'block' });

            $(current_fs).removeClass("show");
            $(next_fs).addClass("show");

            $("#progressbar li").eq($(".card2").index(next_fs)).addClass("active");

            current_fs.animate({}, {
                step: function() {

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });

                    next_fs.css({
                        'display': 'block'
                    });
                }
            });
        }
    });

    $(".next-button2").click(function() {
        if (permitidosenha == true) {
            current_fs = $(this).parent().parent();
            next_fs = $(this).parent().parent().next();

            $(".prev").css({ 'display': 'block' });

            $(current_fs).removeClass("show");
            $(next_fs).addClass("show");

            $("#progressbar li").eq($(".card2").index(next_fs)).addClass("active");

            current_fs.animate({}, {
                step: function() {

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });

                    next_fs.css({
                        'display': 'block'
                    });
                }
            });
        }
    });

    $(".next-button3").click(function() {

        current_fs = $(this).parent().parent();
        next_fs = $(this).parent().parent().next();

        $(".prev").css({ 'display': 'block' });

        $(current_fs).removeClass("show");
        $(next_fs).addClass("show");

        $("#progressbar li").eq($(".card2").index(next_fs)).addClass("active");

        current_fs.animate({}, {
            step: function() {

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });

                next_fs.css({
                    'display': 'block'
                });
            }
        });
    });

    // Previous button
    $(".prev").click(function() {

        current_fs = $(".show");
        previous_fs = $(".show").prev();

        $(current_fs).removeClass("show");
        $(previous_fs).addClass("show");

        $(".prev").css({ 'display': 'block' });

        if ($(".show").hasClass("first-screen")) {
            $(".prev").css({ 'display': 'none' });
        }

        $("#progressbar li").eq($(".card2").index(current_fs)).removeClass("active");

        current_fs.animate({}, {
            step: function() {

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });

                previous_fs.css({
                    'display': 'block'
                });
            }
        });
    });

    function validacaoEmail(field) {
        usuario = field.value.substring(0, field.value.indexOf("@"));
        dominio = field.value.substring(field.value.indexOf("@") + 1, field.value.length);

        if ((usuario.length >= 1) &&
            (dominio.length >= 3) &&
            (usuario.search("@") == -1) &&
            (dominio.search("@") == -1) &&
            (usuario.search(" ") == -1) &&
            (dominio.search(" ") == -1) &&
            (dominio.search(".") != -1) &&
            (dominio.indexOf(".") >= 1) &&
            (dominio.lastIndexOf(".") < dominio.length - 1)) {
            permitidoemail = true;
        } else {
            permitidoemail = false;
            toastr.error("E-mail inválido");
        }
    }

    function validacaoSenha(field) {
        regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

        if (regex.test(field.value)) {
            permitidosenha = true;
        } else {
            permitidosenha = false;
            toastr.error("Senha inválida");
        }
    }
});