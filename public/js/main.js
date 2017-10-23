$(document).ready(() => {new Clipboard('#btn');
    $('#btn').click(() => new Noty({type: 'alert',
    text: 'copied successfully!',
    closeWith: ['click', 'button'],
    timeout: 2000}).show());
});