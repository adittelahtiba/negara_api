function pencarian() {

    $('#daftar-film').html(`<h1>loading...</h1>`);

    $.ajax({
        url: ' http://omdbapi.com/',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': '6928eede',
            's': $('#search').val()
        },
        success: (result) => {
            $('#daftar-film').html(``);
            console.log(result);
            if (result.Response == "True") {
                let movies = result.Search;
                $.each(movies, (i, movie) => {
                    $('#daftar-film').append(`<div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="${movie.Poster}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">${movie.Title}</h5>
                            <p class="card-text">${movie.Type} - ${movie.Year}</p>
                            <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>`);
                });
            } else {
                $('#daftar-film').append(`<h1>${result.Error}</h1>`);
            }
        }
    });

}

$('#search-button').on('click', () => {
    pencarian();
});
$('#search').on('keyup', (e) => {
    if (e.keyCode === 13) {
        pencarian();
    }
});