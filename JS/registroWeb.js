function mostrar() {
    let cliente = document.getElementById('cliente');
    let prove = document.getElementById('prove');
    let tipo = document.getElementById('type');
    let mapa = document.getElementById('mapa');
    let valor = tipo.value;
    if (valor == "Proveedor") {
        prove.style.display = "flex";
        cliente.style.display = "none";
        mapa.style.display = "flex";
    } else {
        prove.style.display = "none";
        cliente.style.display = "flex";
        mapa.style.display = "none";
    }
    tipo.value = "sele"
}

function mostrar2() {
    let cliente = document.getElementById('cliente');
    let prove = document.getElementById('prove');
    let tipo = document.getElementById('type2');
    let mapa = document.getElementById('mapa');
    let valor = tipo.value;
    if (valor == "Proveedor") {
        prove.style.display = "flex";
        cliente.style.display = "none";
        mapa.style.display = "flex";
    } if (valor == "Cliente") {
        prove.style.display = "none";
        cliente.style.display = "flex";
        mapa.style.display = "none";

    }
    tipo.value = "sele"
}
function forms() {
    let cliente = document.getElementById('cliente');
    let prove = document.getElementById('prove');
    prove.style.display = "none";
}