  const cursoId = 5; // exemplo
  const de_usuario = 'aluno1';
  const para_usuario = 'prof_maria';

  function carregarMensagens() {
    fetch(`listar_mensagens_privadas.php?curso_id=${cursoId}&aluno=${de_usuario}`)
      .then(res => res.json())
      .then(dados => {
        const chat = document.getElementById('chat-body');
        chat.innerHTML = '';
        dados.forEach(msg => {
          const div = document.createElement('div');
          div.className = 'message ' + (msg.de_usuario === de_usuario ? 'aluno' : 'professor');
          if (msg.tipo === 'audio') {
            div.innerHTML = `<audio controls src="uploads/${msg.conteudo}"></audio>`;
          } else {
            div.textContent = msg.conteudo;
          }
          chat.appendChild(div);
        });
        chat.scrollTop = chat.scrollHeight;
      });
  }

  function enviarMensagem() {
    const msg = document.getElementById('mensagem').value;
    if (!msg) return;
    fetch('../../backend/controllers/dados-mensagem-privada.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: `curso_id=${cursoId}&de_usuario=${de_usuario}&para_usuario=${para_usuario}&tipo=texto&conteudo=${encodeURIComponent(msg)}`
    }).then(() => {
      document.getElementById('mensagem').value = '';
      carregarMensagens();
    });
  }

  // gravação de áudio simplificada
  let gravador;
  function gravarAudio() {
    navigator.mediaDevices.getUserMedia({ audio: true }).then(stream => {
      gravador = new MediaRecorder(stream);
      let chunks = [];

      gravador.ondataavailable = e => chunks.push(e.data);
      gravador.onstop = () => {
        const blob = new Blob(chunks, { type: 'audio/webm' });
        const formData = new FormData();
        formData.append('audio', blob);
        formData.append('curso_id', cursoId);
        formData.append('de_usuario', de_usuario);
        formData.append('para_usuario', para_usuario);

        fetch('enviar_audio_privado.php', { method: 'POST', body: formData })
          .then(() => carregarMensagens());
      };

      gravador.start();
      setTimeout(() => gravador.stop(), 5000); // grava por 5 segundos
    });
  }

  carregarMensagens();
  setInterval(carregarMensagens, 5000);