
var numeroCelularInput = document.getElementById('celular');
var mascara = new IMask(numeroCelularInput, {
    mask: '(00) 00000-0000'
});


var cpfInput = document.getElementById('cpf');
var mascaraCPF = new IMask(cpfInput, {
    mask: '000.000.000-00'
});


