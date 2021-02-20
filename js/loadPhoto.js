'use strict';

const title       = document.getElementsByClassName('title')[0],
      uploadInput = document.getElementById('upload'),
      confirm     = document.getElementById('confirm');

const cnv = document.getElementById('cropImage'),
      ctx = cnv.getContext('2d');

uploadInput.addEventListener('input', () => {

  const allowedTypes = ['png', 'jpeg', 'jpg'];

  let file = uploadInput.files[0],
      type = file.type.split('/', 2)[1];

    if(allowedTypes.indexOf(type) != -1) {

      const loader = new FileReader();
      loader.readAsDataURL(file);

      loader.onload = () => {

        const image = new Image();
        image.src = loader.result;

        image.onload = () => {

          title.style.display = 'none';
          confirm.removeAttribute('disabled');

          cnv.style.display = 'block';

          cnv.width  = image.width;
          cnv.height = image.height;

          ctx.drawImage(image, 0, 0, image.width, image.height);

        }

      }

    } else uploadInput.value = null;


});
