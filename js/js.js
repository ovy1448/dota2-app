const icon = document.querySelector('#user_button');
const login = document.querySelector('#login_form');

Popper.createPopper(icon, login);

Popper.createPopper(icon, login, {
  modifiers: [
    {
      name: 'offset',
      options: {
        offset: [0, 8],
      },
    },
  ],
});

document.getElementById('user_button').addEventListener('click', function(){
  var form = document.getElementById('login_form');
  if(form.style.visibility !== 'visible'){
    form.style.visibility = 'visible';
  } else {
    form.style.visibility = 'hidden';
  }
})


