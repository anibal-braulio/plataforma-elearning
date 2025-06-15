const video = document.getElementById('videoApresentacao');
const botaoAudio = document.getElementById('toggleAudio');

botaoAudio.addEventListener('click', () => {
  video.muted = !video.muted;

  if (video.muted) {
    botaoAudio.textContent = '🔇 Som';
  } else {
    botaoAudio.textContent = '🔊 Som';
  }
});
 function checkScrollReveal() {
      $('.box-c article').each(function() {
        let boxTop = $(this).offset().top;
        let scrollBottom = $(window).scrollTop() + $(window).height();

        if (boxTop < scrollBottom - 100) {
          $(this).addClass('reveal');
        }
      });
    }

    $(document).ready(function() {
      checkScrollReveal(); // verifica ao carregar
      $(window).on('scroll', function() {
        checkScrollReveal(); // verifica ao rolar
      });
    });