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
