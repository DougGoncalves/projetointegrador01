console.log('instagram funcionando!');


var token = '32314654938.2a46ab3.4aa8b788a01a4c91a28f78472c45e3fa',
num_photos = 10, // máximo de 20 imagens
container = document.getElementById( 'feed' ),
scrElement = document.createElement( 'script' );

window.mishaProcessResult = function( data ) {
for( x in data.data ){
    container.innerHTML += '<li><img src="' + data.data[x].images.low_resolution.url + '"></li>';
}
}

scrElement.setAttribute( 'src', 'https://api.instagram.com/v1/users/self/media/recent?access_token=' + token + '&count=' + num_photos + '&callback=mishaProcessResult' );
document.body.appendChild( scrElement );

