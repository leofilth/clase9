function saludo()
{
    alert("hola");
}
function eliminar(url)
{
    if(confirm("Desea eliminar?"))
    {
        window.location=url;
    }
}