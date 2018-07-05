
function validarRut(rut) {
  rut = rut.replace(/\./g, "");
  rut = rut.split("-");
  if (rut.length > 2 || rut.length < 2) {
    return false;
  } else {
    cuerpo = rut[0];
    digitoVerificador = rut[1].toLowerCase();
    if (cuerpo.length > 8 || cuerpo.length < 7 || digitoVerificador.length > 1 || digitoVerificador == "") {
      return false;
    } else {
      suma = 0;
      multiplicador = 2;
      for (i = cuerpo.length - 1; i >= 0; i--) {
        if (multiplicador > 7) multiplicador = 2;
        suma += cuerpo[i] * multiplicador;
        multiplicador++;
      }
      digitoReal = 11 - (suma % 11);
      if (digitoReal == 11) digitoReal = "0";
      if (digitoReal == 10) digitoReal = "k";
      if (digitoReal != digitoVerificador) {
        return false;
      } else {
        return true;
      }
    }
  }
}