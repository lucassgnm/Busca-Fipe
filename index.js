$('.btn').on('click', function() {
    $('.btn').removeClass('active');
    $(this).addClass('active');
});

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
    /* Select2 configs */
    $('.select-marca').select2({
        placeholder: "Selecione a marca"
    });
    $('.select-modelo').select2({
        placeholder: "Selecione o modelo"
    });
    $('.select-ano').select2({
        placeholder: "Selecione o ano"
    });

    /* Declaração de variáveis */
    const baseurl = 'https://parallelum.com.br/fipe/api/v1/';
    var elSelectMarca = document.querySelector(".select-marca");
    var elSelectModelo = document.querySelector(".select-modelo");
    var elSelectAno = document.querySelector(".select-ano");
    var elTBody = document.querySelector("tbody");
    var opt = null;

    $(".select-marca").prop("disabled", true);
    $(".select-modelo").prop("disabled", true);
    $(".select-ano").prop("disabled", true);
    /* Fim configs */

    document.querySelector("#btn-opt-motos").addEventListener("click", function(e) {
        elTBody.innerHTML = "";
        $(".select-marca").prop("disabled", false);
        opt = "motos";
        carregaMarcas("motos");
    });

    document.querySelector("#btn-opt-carros").addEventListener("click", function(e) {
        elTBody.innerHTML = "";
        $(".select-marca").prop("disabled", false);
        opt = "carros";
        carregaMarcas("carros");
    });

    document.querySelector("#btn-opt-caminhoes").addEventListener("click", function(e) {
        elTBody.innerHTML = "";
        $(".select-marca").prop("disabled", false);
        opt = "caminhoes";
        carregaMarcas("caminhoes");
    });

    $('.select-marca').on('select2:select', function(e) {
        elTBody.innerHTML = "";
        carregaModelos(opt);
    });

    $('.select-modelo').on('select2:select', function(e) {
        elTBody.innerHTML = "";
        carregaAnos(opt);
    });

    $('.select-ano').on('select2:select', function(e) {
        elTBody.innerHTML = "";
        carregaTabela(opt);
    });

    function carregaMarcas(tipoveiculo) {
        $(".select-modelo").prop("disabled", true);
        $(".select-ano").prop("disabled", true);
        elSelectModelo.innerHTML = "";
        /* Faz requisiçãpo das marcas */
        $('.select-ano').val(null).trigger('change');
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
        $('.select-ano').val(null).trigger('change');
        $(".select-ano").prop("disabled", true);
        elSelectAno.innerHTML = "";
        /* Ativa select-modelo */
        $(".select-modelo").prop("disabled", false);
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
        $(".select-ano").prop("disabled", false);
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

    function carregaTabela(tipoveiculo) {
        axios.get(baseurl + tipoveiculo + `/marcas/${elSelectMarca.value}/modelos/${elSelectModelo.value}/anos/${elSelectAno.value}`)
            .then(response => {
                infos = response.data;
                data = `<tr>
                <th scope="row" style="background-color: rgba(0,0,0,0.5); color: white;">Valor</th>
                <th scope="row" class="price-property"><h5 style="font-weight: bold;">${infos.Valor}</h5></th>
            </tr>
            <tr>
                <th scope="row" style="background-color: rgba(0,0,0,0.5); color: white">Marca</th>
                <th scope="row">${infos.Marca}</th>
            </tr>
            <tr>
                <th scope="row" style="background-color: rgba(0,0,0,0.5); color: white">Modelo</th>
                <th scope="row">${infos.Modelo}</th>
            </tr>
            <tr>
                <th scope="row" style="background-color: rgba(0,0,0,0.5); color: white">Ano do modelo</th>
                <th scope="row">${infos.AnoModelo}</th>
            </tr>
            <tr>
                <th scope="row" style="background-color: rgba(0,0,0,0.5); color: white">Combustível</th>
                <th scope="row">${infos.Combustivel}</th>
            </tr>
            <tr>
                <th scope="row" style="background-color: rgba(0,0,0,0.5); color: white">Código FIPE</th>
                <th scope="row">${infos.CodigoFipe}</th>
            </tr>
            <tr>
                <th scope="row"></th>
                <th scope="row"></th>
            </tr>`;
                elTBody.innerHTML = data;
                window.location.href = "#valorsection";
            });
    }
});

function carregaItensSelect(select, data) {
    select.innerHTML = data;
}