
const imageLoader = document.getElementById('imageLoader');
imageLoader.addEventListener('change', handleImage, false);

function handleImageUpload() {
  const image = document.getElementById('upload').files[0];

  const reader = new FileReader();

  reader.onload = function (e) {
    document.getElementById('display-image').src = e.target.result;
  };

  reader.readAsDataURL(image);
}