console.log('arquivo externo funcionando!');


var token = '',
num_photos = 5, // maximum 20
container = document.getElementById( 'feed' ),
scrElement = document.createElement( 'script' );

window.mishaProcessResult = function( data ) {
for( x in data.data ){
    container.innerHTML += '<li><img src="' + data.data[x].images.low_resolution.url + '"></li>';
}
}

scrElement.setAttribute( 'src', 'https://api.instagram.com/v1/users/self/media/recent?access_token=' + token + '&count=' + num_photos + '&callback=mishaProcessResult' );
document.body.appendChild( scrElement );


