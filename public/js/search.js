$(document).ready(function() {
    $('#searchForm').submit(function(e) {
        e.preventDefault(); // Evita que el formulario se envíe normalmente

        var keyword = $('#searchInput').val().trim().toLowerCase();
        if (keyword === '') {
            // Si no se ingresa ninguna palabra clave, no se realiza la búsqueda
            return;
        }

        // Busca los elementos en la página que coincidan con la palabra clave
        var matches = $('body').find('*').filter(function() {
            return $(this).text().toLowerCase().includes(keyword);
        });

        if (matches.length > 0) {
            // Obtiene el primer elemento coincidente y desplaza la página hacia él
            var firstMatch = matches[0];
            firstMatch.scrollIntoView({ behavior: 'smooth' });
        }
    });
});