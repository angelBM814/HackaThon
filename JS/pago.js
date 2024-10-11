function ticket() {
    nTarg = document.getElementById("nTarg").value;
    fecha = document.getElementById("fecha").value;
    n_p = document.getElementById("name2").value;
    codigo = document.getElementById("codSeg").value;
    document.getElementById('tarj_N').innerHTML = nTarg;
    document.getElementById('tarj_N2').innerHTML = nTarg;
    document.getElementById('tarj_Fecha').innerHTML = fecha;
    document.getElementById('tarj_Fecha2').innerHTML = fecha;
    document.getElementById('dueño1').innerHTML = n_p;
    document.getElementById('dueño2').innerHTML = n_p;
    document.getElementById('cvv').innerHTML = codigo;

    document.getElementById('bOfert').append(" " + bOferta + "%");
    document.getElementById('env').append(" $" + env);
    document.getElementById('pagTotal').append(" $" + total);
}