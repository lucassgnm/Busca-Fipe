/* Muda o aspecto do botão quando ativo */
$('.btn').on('click', function() {
    $('.btn').removeClass('active');
    $(this).addClass('active');
});

document.addEventListener("DOMContentLoaded", () => {
    $.post("listaopinioes/run", function(data) {
        data = JSON.parse(data);

        html = "";
        for (dt of data) {
            html += `<div class="col-lg-5 mx-auto mt-5">
                        <!-- List group-->
                        <ul class="list-group shadow">
                            <!-- list group item-->
                            <li class="list-group-item">
                                <!-- Custom content-->
                                <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                    <div class="media-body order-2 order-lg-1">
                                        <h5 class="mt-0 font-weight-bold mb-2">${ dt.marca } ${ dt.modelo } ${ dt.ano } </h5>
                                        <p class="font-italic text-muted mb-0 small">Pros: ${ dt.ptspositivos }</p>
                                        <p class="font-italic text-muted mb-0 small">Contras: ${ dt.ptsnegativos }</p>
                                        <p class="font-italic text-muted mb-0 small">Defeitos apresentados: ${ dt.defapr }</p>
                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                            <ul class="list-inline small">
                                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li> ${dt.notageral}
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End -->
                                </div>
                            </li>
                            <!-- End -->
                        </ul>
                        <!-- End -->
                    </div>`;
        }
        document.getElementById("listaCarrosTable").innerHTML = html;
    });

});