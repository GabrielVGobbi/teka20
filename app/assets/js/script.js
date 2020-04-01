
$(function () {
	
	var temporiza;

    //Initialize Select2 Elements
    $('.select2').select2();

   
    
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

  $('#timepicker').datetimepicker({
    format: 'LT'
  })

  //Bootstrap Duallistbox
  $('.duallistbox').bootstrapDualListbox()

  //Colorpicker
  $('.my-colorpicker1').colorpicker()
  //color picker with addon
  $('.my-colorpicker2').colorpicker()

  $('.my-colorpicker2').on('colorpickerChange', function (event) {
    $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
  });

  $("input[data-bootstrap-switch]").each(function () {
    $(this).bootstrapSwitch('state', $(this).prop('checked'));
  });

	$("#comenty").on("input", function() {
        $("#saveding").show();
		$("#saved").hide();
		
		var id_cliente = $('#id_cliente').val()
		var id_etapa = $('#id_etapa').val()


        clearTimeout(temporiza);

        var text = $("#comenty").val();

        temporiza = setTimeout(function() {
            $.ajax({
                url: BASE_URL_PAINEL + 'ajax/saveComentyExercicioImagem',
                type: 'POST',
                data: {
                    text: text,
                    id_etapa: id_etapa,
                    id_cliente: id_cliente,
                },
                dataType: 'json',
                success: function(json) {
                    $("#saveding").hide();
                    $("#saved").show();
				},
				error: function (request, status, error) {
					toastr.error('Contate o administrador de sistema: Error CDX1203_2')
				}
            });
        }, 1500);
    });


})

function previewImagem(){
	var imagem = document.querySelector('input[name=fotos]').files[0];
	var preview = document.querySelector('img[name=preview]');
	
	var reader = new FileReader();
	
	reader.onloadend = function () {
		preview.src = reader.result;
	}
	
	if(imagem){
		reader.readAsDataURL(imagem);
	}else{
		preview.src = "";
	}
}

$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('a[href="#top"]').fadeIn();
    } else {
      $('a[href="#top"]').fadeOut();
    }
  });

  $('a[href="#top"]').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 800);
    return false;
  });
});








