'use strict';

const menu      = document.getElementById('menu'),
      openMenu  = document.getElementById('open-nav'),
      closeMenu = document.getElementById('close-nav');

const passType  = document.getElementById('pass-type'),
      passStart = document.getElementById('pass-start'),
      passEnd   = document.getElementById('pass-end');

passType.addEventListener('change', e => {

  if(passType.value == 'temp') {
    passStart.removeAttribute('hidden');
    passEnd.removeAttribute('hidden');

    passStart.setAttribute('required', '');
    passEnd.setAttribute('required', '');

  } else if (passType.value == 'const') {
    passStart.setAttribute('hidden', '');
    passEnd.setAttribute('hidden', '');

    passStart.removeAttribute('required');
    passEnd.removeAttribute('required');
  }

});

passStart.addEventListener('change', evt => {
  passEnd.setAttribute('min', passStart.value);
});

passEnd.addEventListener('change', evt => {
  passStart.setAttribute('max', passEnd.value);
});

closeMenu.addEventListener('click', evt => {
  menu.style.transform = 'translateX(0)';
  openMenu.style.display = 'block';
});

openMenu.addEventListener('click', evt => {
  menu.style.transform = 'translateX(-300px)';
  openMenu.style.display = 'none';
});
