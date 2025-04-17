var checkboxIphonesemi = document.getElementById('checkboxIphonesemi');
var checkboxIphone = document.getElementById('checkboxIphone');
var textarea = document.getElementById('exampleFormControlTextarea1');

console.log(checkboxIphone);

checkboxIphone.addEventListener('change', function() {
    if (this.checked) {
        textarea.value = "Produto Lacrado.\n IMEI: ";
    } else {
        textarea.value = "";
    }
});

checkboxIphonesemi.addEventListener('change', function() {
    if (this.checked) {
        textarea.value = "Produto Semi-Novo. \n IMEI:\n Bateria:\n Todos os testes foram devidamente realizados.";
    } else {
        textarea.value = "";
    }
});



var checkboxIphonesemi2 = document.getElementById('checkboxIphonesemi2');
var checkboxIphone2 = document.getElementById('checkboxIphone2');
var textarea2 = document.getElementById('exampleFormControlTextarea2');

checkboxIphone2.addEventListener('change', function() {
    if (this.checked) {
        textarea2.value = "Produto Lacrado.\n IMEI: ";
    } else {
        textarea2.value = "";
    }
});

checkboxIphonesemi2.addEventListener('change', function() {
    if (this.checked) {
        textarea2.value = "Produto Semi-Novo. \n IMEI:\n Bateria:\n Todos os testes foram devidamente realizados.";
    } else {
        textarea2.value = "";
    }
});