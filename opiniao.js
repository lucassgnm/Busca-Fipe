toastr.options = {
    "positionClass": "toast-bottom-full-width",
}


document.addEventListener("DOMContentLoaded", () => {
    /* Configs */
    // Rating Initialization
    $(document).ready(function() {
        $('.rateme1').mdbRate();
    });

    $(document).ready(function() {
        $('.rateme2').mdbRate();
    });

    $(document).ready(function() {
        $('.rateme3').mdbRate();
    });

    $(document).ready(function() {
        $('.rateme4').mdbRate();
    });

    $(document).ready(function() {
        $('.rateme5').mdbRate();
    });

    $(document).ready(function() {
        $('.rateme6').mdbRate();
    });

    $(document).ready(function() {
        $('.rateme7').mdbRate();
    });

    $(document).ready(function() {
        $('.rateme8').mdbRate();
    });

    $(document).ready(function() {
        $('.rateme9').mdbRate();
    });

    $(document).ready(function() {
        $('.rateme10').mdbRate();
    });

    $(document).ready(function() {
        $('.rateme11').mdbRate();
    });

    /* Muda o aspecto do botão quando ativo */
    $('.btn-type').on('click', function() {
        $('.btn-type').removeClass('active');
        $(this).addClass('active');
    });
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

    /* Declaração de variáveis */
    const baseurl = 'https://parallelum.com.br/fipe/api/v1/';
    var elSelectMarca = document.querySelector(".select-marca");
    var elSelectModelo = document.querySelector(".select-modelo");
    var elSelectAno = document.querySelector(".select-ano");
    var opt = null;

    $(".select-marca").prop("disabled", true);
    $(".select-modelo").prop("disabled", true);
    $(".select-ano").prop("disabled", true);

    /* Select2 configs */
    $(elSelectMarca).select2({
        placeholder: "Selecione a marca"
    });
    $(elSelectModelo).select2({
        placeholder: "Selecione o modelo"
    });
    $(elSelectAno).select2({
        placeholder: "Selecione o ano"
    });
    /* Fim configs */

    /* Listeners dos botões do tipo*/
    document.querySelector("#btn-opt-motos").addEventListener("click", function(e) {
        opt = "motos";
        carregaMarcas("motos");
        $(".select-marca").prop("disabled", false);
    });

    document.querySelector("#btn-opt-carros").addEventListener("click", function(e) {
        opt = "carros";
        carregaMarcas("carros");
        $(".select-marca").prop("disabled", false);
    });

    document.querySelector("#btn-opt-caminhoes").addEventListener("click", function(e) {
        opt = "caminhoes";
        carregaMarcas("caminhoes");
        $(".select-marca").prop("disabled", false);
    });
    /* Fim listeners */

    /* Listeners dos select2 */
    $('.select-marca').on('select2:select', function(e) {
        carregaModelos(opt);
    });

    $('.select-modelo').on('select2:select', function(e) {
        carregaAnos(opt);
    });

    $('.select-ano').on('select2:select', function(e) {});
    /* Fim listeners select2 */

    function carregaMarcas(tipoveiculo) {
        $(elSelectModelo).prop("disabled", true);
        $(elSelectAno).prop("disabled", true);
        elSelectModelo.innerHTML = "";
        /* Faz requisiçãpo das marcas */
        $(elSelectAno).val(null).trigger('change');
        axios.get(baseurl + tipoveiculo + '/marcas')
            .then(response => {
                marcas = response.data;
                data = '<option value=""></option>';
                /* Corre os dados carregando em uma variavel (data) */
                for (const marca of marcas) {
                    data += `<option value="${marca.codigo}">${marca.nome}</option>`;
                }
                /* Popula os dados (data) no select */
                carregaItensSelect(elSelectMarca, data)
            });
    }

    function carregaModelos(tipoveiculo) {
        /* Limpa o select-ano */
        $(elSelectAno).val(null).trigger('change');
        $(elSelectAno).prop("disabled", true);
        elSelectAno.innerHTML = "";
        /* Ativa select-modelo */
        $(elSelectModelo).prop("disabled", false);
        /* Faz requisiçãpo dos modelos disponiveis para a marca */
        axios.get(baseurl + tipoveiculo + `/marcas/${elSelectMarca.value}/modelos`)
            .then(response => {
                modelos = response.data.modelos;
                data = '<option value=""></option>';
                /* Corre os dados carregando em uma variavel (data) */
                for (const modelo of modelos) {
                    data += `<option value="${modelo.codigo}">${modelo.nome}</option>`;
                }
                /* Popula os dados (data) no select */
                carregaItensSelect(elSelectModelo, data)
            });
    }

    function carregaAnos(tipoveiculo) {
        /* Ativa select-ano */
        $(elSelectAno).prop("disabled", false);
        /* Faz requisiçãpo dos anos disponiveis para o modelo */
        axios.get(baseurl + tipoveiculo + `/marcas/${elSelectMarca.value}/modelos/${elSelectModelo.value}/anos`)
            .then(response => {
                anos = response.data;
                data = '<option value=""></option>';
                /* Corre os dados carregando em uma variavel (data) */
                for (const ano of anos) {
                    data += `<option value="${ano.codigo}">${ano.nome.substring(0, 5) == "32000" ? "Zero KM" : ano.nome}</option>`;
                }
                /* Popula os dados (data) no select */
                carregaItensSelect(elSelectAno, data)
            });
    }

    document.querySelector('#btnEnviaAval').addEventListener('click', function() {
        toastr.success('Obrigado! Sua avaliação foi cadastrada com sucesso.')
    });
});

function carregaItensSelect(select, data) {
    select.innerHTML = data;
}