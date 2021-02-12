function validar(validateId) {

    getById('dvAlert').innerHTML = '';

    var valid = true;

    if (getValueById('txtTitulo').length < 2) {
        appendHTMLById('dvAlert', '<div class="alert alert-warning">Título inválido. Mínimo de 2 caracteres.</div>');
        valid = false;
    }
    if (getValueById('txtSlug').length < 3) {
        appendHTMLById('dvAlert', '<div class="alert alert-warning">Slug inválido. Mínimo de 3 caracteres.</div>');
        valid = false;
    }
    if (getValueById('slCategoria') <= 0) {
        appendHTMLById('dvAlert', '<div class="alert alert-warning">Categoria inválida.</div>');
        valid = false;
    }
    if (getValueById('txtLinhaFina').length < 10) {
        appendHTMLById('dvAlert', '<div class="alert alert-warning">Linha fina inválida. Mínimo de 10 caracteres</div>');
        valid = false;
    }
    if (getValueById('txtThumb').length < 1) {
        appendHTMLById('dvAlert', '<div class="alert alert-warning">Thumb inválida. Mínimo de 1 caracter</div>');
        valid = false;
    }
    if (validateId && getValueById('txtId') <= 0) {
        appendHTMLById('dvAlert', '<div class="alert alert-warning">ID não encontrado.</div>');
        valid = false;
    }
    if (CKEDITOR.instances['textDescricao'].getData().length < 10) {
        appendHTMLById('dvAlert', '<div class="alert alert-warning">Conteúdo inválido.</div>');
        valid = false;
    }

    return valid;
}


