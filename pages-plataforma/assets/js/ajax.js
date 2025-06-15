$('#form-curso').on('submit', function (e) {
  e.preventDefault();

  // Mostra spin wheel
  $('#box-spin').fadeIn();

  let formData = new FormData(this);
  formData.append('salvar', true);

  $.ajax({
    url: '../../backend/controllers/dados-cad-curso.php',
    type: 'POST',
    data: formData,
    contentType: false,
    processData: false,

    success: function (res) {
      $('#box-spin').fadeOut(); // Oculta spin wheel
      $('#resultado').html('<strong>' + res + '</strong>');
      previewVideos();
    },

    error: function () {
      $('#box-spin').fadeOut(); // Oculta spin wheel
      $('#resultado').html('<span style="color:red">Erro ao enviar dados.</span>');
    }
  });
});
