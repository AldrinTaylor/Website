// Defining Constants
const NAME_MSG = 'I\'m Aldrin Taylor';
const ROLE_MSG = 'Fintech Professional';

el = document.querySelector('hgroup h2');

var reset = function() {
    el.innerHTML = (innerWidth <= 800)?`${NAME_MSG}</br>${ROLE_MSG}`:`${NAME_MSG}: ${ROLE_MSG}.`;
}

reset();

window.onresize = reset;