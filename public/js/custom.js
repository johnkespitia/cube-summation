

function validateT(returnVal) {
    if (jQuery('#t').val() != '' && jQuery('#t').val() != undefined
            && !isNaN(jQuery('#t').val()) && jQuery('#t').val() >= 1 && jQuery('#t').val() <= 50) {
        return true;
    }
    else {
        if (returnVal == 'alert') {
            jQuery('#t').focus();
            jQuery('#t').val('');
            alert('Número de casos de prueba inválido, debe estar entre 1 y 50');
            return false;
        } else if (returnVal == 'return') {
            return false;
        }
    }
}

function validateN(returnVal) {
    if (jQuery('#n').val() != '' && jQuery('#n').val() != undefined
            && !isNaN(jQuery('#n').val()) && jQuery('#n').val() >= 1 && jQuery('#n').val() <= 100) {
        return true;
    }
    else {
        if (returnVal == 'alert') {
            jQuery('#n').focus();
            jQuery('#n').val('');
            alert('Dimensión de la matriz inválida, debe estar entre 1 y 100');
            return false;
        } else if (returnVal == 'return') {
            return false;
        }
    }
}

function validateM(returnVal) {
    if (jQuery('#m').val() != '' && jQuery('#m').val() != undefined
            && !isNaN(jQuery('#m').val()) && jQuery('#m').val() >= 1 && jQuery('#m').val() <= 1000) {
        return true;
    }
    else {
        if (returnVal == 'alert') {
            jQuery('#m').focus();
            jQuery('#m').val('');
            alert('Número de operaciones inválido, debe estar entre 1 y 100');
            return false;
        } else if (returnVal == 'return') {
            return false;
        }
    }
}

function setParams() {
    if (validateT('return') && validateN('return') && validateM('return')) {
        jQuery.get('index.php', {view: 'set-n', n: jQuery('#n').val()}, function (e) {
            alert(e.message + ' ' + e.return);
            jQuery('#logger').css('display', 'block');
            showTestCase();
        });
        jQuery('#n').attr('readonly', true);
        jQuery('#t').attr('readonly', true);
        jQuery('#m').attr('readonly', true);
        jQuery('#but1').css('display', 'none');
    } else {
        alert("Ingrese los valores de inicialización T,N,M ");
    }
}
var contadorT = 1;
function showTestCase() {
    if (contadorT <= jQuery('#t').val()) {
        jQuery('#logger').html(jQuery('#logger').html() + "\n<div id='Caso_" + contadorT + "'></div>");
        jQuery('#Caso_' + contadorT).load('index.php?view=test-form&tryNo=' + contadorT, function (e) {

        });
    }

}
function validateUpdate() {
    if (
            jQuery('#ux').val() != undefined && !isNaN(jQuery('#ux').val()) && jQuery('#ux').val() >= 1 && jQuery('#ux').val() <= jQuery('#n').val()
            && jQuery('#uy').val() != undefined && !isNaN(jQuery('#uy').val()) && jQuery('#uy').val() >= 1 && jQuery('#uy').val() <= jQuery('#n').val()
            && jQuery('#uz').val() != undefined && !isNaN(jQuery('#uz').val()) && jQuery('#uz').val() >= 1 && jQuery('#uz').val() <= jQuery('#n').val()
            && jQuery('#uw').val() != undefined && !isNaN(jQuery('#uw').val())
            ) {
        return true;
    }
    else {
        return false;
    }
}

function validateQuery() {
    if (
            jQuery('#x1').val() != undefined && !isNaN(jQuery('#x1').val()) && jQuery('#x1').val() >= 1 && jQuery('#x1').val() <= jQuery('#x2').val()
            && jQuery('#y1').val() != undefined && !isNaN(jQuery('#y1').val()) && jQuery('#y1').val() >= 1 && jQuery('#y1').val() <= jQuery('#y2').val()
            && jQuery('#z1').val() != undefined && !isNaN(jQuery('#z1').val()) && jQuery('#z1').val() >= 1 && jQuery('#z1').val() <= jQuery('#z2').val()
            && jQuery('#x2').val() != undefined && !isNaN(jQuery('#x2').val()) && jQuery('#x2').val() >= 1 && jQuery('#x2').val() <= jQuery('#n').val()
            && jQuery('#y2').val() != undefined && !isNaN(jQuery('#y2').val()) && jQuery('#y2').val() >= 1 && jQuery('#y2').val() <= jQuery('#n').val()
            && jQuery('#z2').val() != undefined && !isNaN(jQuery('#z2').val()) && jQuery('#z2').val() >= 1 && jQuery('#z2').val() <= jQuery('#n').val()
            ) {
        return true;
    }
    else {
        return false;
    }
}

function operate() {
    var txtt = '';
    if (validateQuery() && validateUpdate()) {
        jQuery.post('index.php?view=update', {
            x: jQuery('#ux').val(),
            y: jQuery('#uy').val(),
            z: jQuery('#uz').val(),
            w: jQuery('#uw').val()
        }, function (e) {
            jQuery('#Caso_' + contadorT).html(txtt + "<br/>" + e.return);
        });
        jQuery.post('index.php?view=query', {
            x1: jQuery('#x1').val(),
            y1: jQuery('#y1').val(),
            z1: jQuery('#z1').val(),
            x2: jQuery('#x2').val(),
            y2: jQuery('#y2').val(),
            z2: jQuery('#z2').val()
        }, function (e) {
            console.log(e.return);
            jQuery('#Caso_' + contadorT).html(txtt + "<br/>" + e.return);
        });
        txtt = jQuery('#Caso_' + contadorT).html('');
    } else {
        alert('Complete los datos');
    }
}

function reiniciarTest() {
    jQuery.get('index.php', {view: 'restart'}, function (e) {
        alert(e.message + ' ' + e.return);
        location.reload();
    });

}