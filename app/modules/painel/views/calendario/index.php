<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Calendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= BASE_URL ?>app/assets/css/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="<?= BASE_URL ?>app/assets/css/AdminLTE/plugins/fullcalendar/main.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>app/assets/css/AdminLTE/plugins/fullcalendar-daygrid/main.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>app/assets/css/AdminLTE/plugins/fullcalendar-timegrid/main.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>app/assets/css/AdminLTE/plugins/fullcalendar-bootstrap/main.min.css">
    <link href="<?php echo BASE_URL; ?>node_modules/toastr/build/toastr.min.css" rel="stylesheet" type="text/css" />
    <script>
        var BASE_URL_PAINEL = '<?php echo BASE_URL_PAINEL; ?>';
    </script>
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BASE_URL ?>app/assets/css/AdminLTE/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="sticky-top mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Eventos Prontos</h4>
                                </div>
                                <div class="card-body">
                                    <!-- the events -->
                                    <div id="external-events">
                                        <div class="external-event bg-success"> Reunião</div>

                                        <div class="checkbox">
                                            <label for="drop-remove">
                                                <input type="checkbox" id="drop-remove">
                                                remover depois de pronto
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Novo Evento</h3>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                        <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                                        <ul class="fc-color-picker" id="color-chooser">
                                            <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                                            <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                                            <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                                            <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                                            <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- /btn-group -->
                                    <div class="input-group">
                                        <input id="new-event" type="text" class="form-control" placeholder="Titulo">

                                        <div class="input-group-append">
                                            <button id="add-new-event" type="button" class="btn btn-primary">+</button>
                                        </div>
                                        <!-- /btn-group -->
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card card-primary">
                            <div class="card-body p-0">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">Cadastrar Evento</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="proc_cad_evento.php">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" placeholder="Titulo do Evento">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Cor</label>
                            <div class="col-sm-10">
                                <select name="color" class="form-control" id="color">
                                    <option value="">Selecione</option>
                                    <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                                    <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                                    <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                                    <option style="color:#8B4513;" value="#8B4513">Marrom</option>
                                    <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                                    <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                                    <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                                    <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                                    <option style="color:#228B22;" value="#228B22">Verde</option>
                                    <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Data Inicial</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="start" id="start" onKeyPress="DataHora(event, this)">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Data Final</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="end" id="end" onKeyPress="DataHora(event, this)">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="123" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center">Dados do Evento</h4>
                </div>
                <div class="modal-body">
                    <div class="visualizar">
                        <dl class="dl-horizontal">
                            <dt>ID do Evento</dt>
                            <dd id="id"></dd>
                            <dt>Titulo do Evento</dt>
                            <dd id="title"></dd>
                            <dt>Inicio do Evento</dt>
                            <dd id="start"></dd>
                            <dt>Fim do Evento</dt>
                            <dd id="end"></dd>
                        </dl>
                        <button class="btn btn-canc-vis btn-warning">Editar</button>
                    </div>
                    <div class="form">
                        <form class="form-horizontal" method="POST" action="proc_edit_evento.php">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Titulo do Evento">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Cor</label>
                                <div class="col-sm-10">
                                    <select name="color" class="form-control" id="color">
                                        <option value="">Selecione</option>
                                        <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                                        <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                                        <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                                        <option style="color:#8B4513;" value="#8B4513">Marrom</option>
                                        <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                                        <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                                        <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                                        <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                                        <option style="color:#228B22;" value="#228B22">Verde</option>
                                        <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Data Inicial</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="start" id="start" onKeyPress="DataHora(event, this)">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Data Final</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="end" id="end" onKeyPress="DataHora(event, this)">
                                </div>
                            </div>
                            <input type="hidden" class="form-control" name="id" id="id">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="button" class="btn btn-canc-edit btn-primary">Cancelar</button>
                                    <button type="submit" class="btn btn-warning">Salvar Alterações</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="visualizar" aria-modal="true">
        <div class="modal-dialog modal-lg">
            <form id="formActionEvento" method="POST">

                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Evento</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="visualizar">
                            <dl class="dl-horizontal">
                                <dt>ID do Evento</dt>
                                <dd id="id"></dd>
                                <dt>Titulo do Evento</dt>
                                <dd id="title"></dd>
                                <dt>Inicio do Evento</dt>
                                <dd id="start"></dd>
                                <dt>Fim do Evento</dt>
                                <dd id="end"></dd>
                            </dl>
                        </div>

                        <div class="card-body formEdit" style="display:none">
                            <div class="form-group">
                                <label for="">Nome do Evento</label>
                                <input type="text" class="form-control" id="" placeholder="Nome do evento">
                            </div>
                            <div class="form-group">
                                <label for="">Data</label>
                                <input type="text" class="form-control" id="" placeholder="Data do evento">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <div class="btn btn-canc-vis btn-warning">Editar</div>
                        <div type="buttonActionEvento" class="btn btn-primary">Salvar</div>
                    </div>
                </div>
            </form>

        </div>
    </div>



    <script src="<?= BASE_URL ?>app/assets/css/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <script src="<?= BASE_URL ?>app/assets/css/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL ?>app/assets/css/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?= BASE_URL ?>app/assets/css/AdminLTE/dist/js/adminlte.min.js"></script>
    <script src="<?= BASE_URL ?>app/assets/css/AdminLTE/dist/js/demo.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="<?= BASE_URL ?>app/assets/css/AdminLTE/plugins/fullcalendar/main.min.js"></script>
    <script src="<?= BASE_URL ?>app/assets/css/AdminLTE/plugins/fullcalendar-daygrid/main.min.js"></script>
    <script src="<?= BASE_URL ?>app/assets/css/AdminLTE/plugins/fullcalendar-timegrid/main.min.js"></script>
    <script src="<?= BASE_URL ?>app/assets/css/AdminLTE/plugins/fullcalendar-interaction/main.min.js"></script>
    <script src="<?= BASE_URL ?>app/assets/css/AdminLTE/plugins/fullcalendar-bootstrap/main.min.js"></script>
    <script src="<?php echo BASE_URL; ?>node_modules/toastr/build/toastr.min.js"></script>

    <script>
        $(function() {

            $('#datepicker').datepicker({
                autoclose: true
            })

            $('.btn-canc-vis').on("click", function() {
                $('.formEdit').slideToggle();
                $('.visualizar').slideToggle();
            });
            $('.btn-canc-edit').on("click", function() {
                $('.visualizar').slideToggle();
                $('.formEdit').slideToggle();
            });

            /* initialize the external events
             -----------------------------------------------------------------*/
            function ini_events(ele) {
                ele.each(function() {

                    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                    // it doesn't need to have a start or end
                    var eventObject = {
                        title: $.trim($(this).text()) // use the element's text as the event title
                    }

                    // store the Event Object in the DOM element so we can get to it later
                    $(this).data('eventObject', eventObject)

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                        zIndex: 1070,
                        revert: true, // will cause the event to go back to its
                        revertDuration: 0 //  original position after the drag
                    })

                })
            }

            ini_events($('#external-events div.external-event'))

            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date()
            var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear()

            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendarInteraction.Draggable;

            var containerEl = document.getElementById('external-events');
            var checkbox = document.getElementById('drop-remove');
            var calendarEl = document.getElementById('calendar');

            // initialize the external events
            // -----------------------------------------------------------------

            new Draggable(containerEl, {
                itemSelector: '.external-event',
                eventData: function(eventEl) {
                    return {
                        title: eventEl.innerText,
                        backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                        borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                        textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
                    };

                },

            });

            var calendar = new Calendar(calendarEl, {
                plugins: ['bootstrap', 'interaction', 'dayGrid', 'timeGrid'],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                locale: 'pt-br',
                events: BASE_URL_PAINEL + "calendario/getCalendarioALL",
                editable: true,
                droppable: true,
                drop: function(info) {
                    if (checkbox.checked) {
                        info.draggedEl.parentNode.removeChild(info.draggedEl);
                    }

                    var start = moment(info.dateStr).format();
                    var title = info.draggedEl.innerText;

                    actionEvent(title, start);

                },
                eventClick: function(event) {
                    console.log(event);
                    $('#visualizar #id').text(event.event.id);
                    $('#visualizar #id').val(event.event.id);
                    $('#visualizar #title').text(event.event.title);
                    $('#visualizar #title').val(event.event.title);
                    $('#visualizar #start').text(moment(event.event.start).format('DD/MM/YYYY HH:mm:ss'));
                    $('#visualizar #start').val(moment(event.event.start).format('DD/MM/YYYY HH:mm:ss'));
                    $('#visualizar #end').text(moment(event.event.end).format('DD/MM/YYYY HH:mm:ss'));
                    $('#visualizar #end').val(moment(event.event.end).format('DD/MM/YYYY HH:mm:ss'));
                    $('#visualizar #color').val(event.event.color);
                    $('#visualizar').modal('show');
                    $('.formEdit').hide();
                    $('.visualizar').show();


                    return false;

                },
                select: function(start, end) {
                    $('#cadastrar #start').val(moment(start).format('DD/MM/YYYY HH:mm:ss'));
                    $('#cadastrar #end').val(moment(end).format('DD/MM/YYYY HH:mm:ss'));
                    $('#cadastrar').modal('show');
                },
                eventDrop: function(event, delta, revertFunc) {
                    var start = moment(event.event.start).format();
                    var end = moment(event.event.end).format();
                    actionEvent(event.event.title, start, end, event.event.id);

                },
            });

            calendar.render();
            // $('#calendar').fullCalendar()

            /* ADDING EVENTS */
            var currColor = '#3c8dbc' //Red by default
            //Color chooser button
            var colorChooser = $('#color-chooser-btn')
            $('#color-chooser > li > a').click(function(e) {
                e.preventDefault()
                //Save color
                currColor = $(this).css('color')
                //Add color effect to button
                $('#add-new-event').css({
                    'background-color': currColor,
                    'border-color': currColor
                })
            })
            $('#add-new-event').click(function(e) {
                e.preventDefault()
                //Get value and make sure it is not null
                var val = $('#new-event').val()
                if (val.length == 0) {
                    return
                }

                //Create events
                var event = $('<div />')
                event.css({
                    'background-color': currColor,
                    'border-color': currColor,
                    'color': '#fff'
                }).addClass('external-event')
                event.html(val)
                $('#external-events').prepend(event)

                //Add draggable funtionality
                ini_events(event)

                //Remove event from text input
                $('#new-event').val('')
            })
        });

        function actionEvent(title, start, end, id = 0) {

            if (id == 0) {
                var data = 'title=' + title + '&start=' + start + '&end=' + start;
            } else {
                var data = 'title=' + title + '&start=' + start + '&end=' + end + '&id=' + id;
            }

            $.ajax({
                url: BASE_URL_PAINEL + "calendario/actionEvent",
                data: data,
                type: 'POST',
                success: function(json) {
                    toastr.success('salvo com successo');

                },
            });
        }
    </script>