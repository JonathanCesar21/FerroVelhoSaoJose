let navBtn = $('.nav-item');

let empresa = $('AEmpresa');
let servicos = $('Servicos');
let institucional = $('Institucional');
let contato = $('Contato');

let scrollTo = '';

$(navBtn).click(function(){

    let btnId = $(this).attr('id');

    console.log(btnId);

    if(btnId == 'AEmpresa'){
        scrollTo = empresa;
    } else if(btnId == 'Servicos'){
        scrollTo = servicos
    }else if(btnId == 'Institucional'){
        scrollTo = institucional
    }else if(btnId == 'Contato'){
        scrollTo = contato
    }

    $([document.documentElement, document.body]). animate({
        scrollTop: $(scrollTo).offset().top - 70
        
    }, 1500);
    
});
