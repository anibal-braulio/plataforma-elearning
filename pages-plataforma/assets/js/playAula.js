const likeBtn = document.getElementById('likeBtn');
const likeCount = document.getElementById('likeCount');
const pipBtn = document.getElementById('pipBtn');
const video = document.getElementById('videoPlayer');
const saveBtn = document.getElementById('saveBtn');

// LIKE Toggle (salvo localmente)
if (localStorage.getItem("videoLiked") === "true") {
  likeBtn.classList.add("liked");
}

likeBtn.addEventListener("click", () => {
  let liked = localStorage.getItem("videoLiked") === "true";
  let count = parseInt(likeCount.innerText);

  if (!liked) {
    count++;
    likeBtn.classList.add("liked");
    localStorage.setItem("videoLiked", "true");
  } else {
    count--;
    likeBtn.classList.remove("liked");
    localStorage.setItem("videoLiked", "false");
  }

  likeCount.innerText = count;
});

// Picture-in-Picture
pipBtn.addEventListener("click", async () => {
  if (document.pictureInPictureElement) {
    await document.exitPictureInPicture();
  } else {
    await video.requestPictureInPicture();
  }
});

// Guardar para depois
saveBtn.addEventListener("click", () => {
  const saved = JSON.parse(localStorage.getItem("verDepois") || "[]");

  if (!saved.includes(video.src)) {
    saved.push(video.src);
    localStorage.setItem("verDepois", JSON.stringify(saved));
    alert("Vídeo guardado para assistir depois!");
  } else {
    alert("Este vídeo já está guardado.");
  }
});
