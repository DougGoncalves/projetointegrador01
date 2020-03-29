console.log('arquivo externo funcionando!');


var token = '1116000235.2a46ab3.2ec29d78ab8646b79b31c5bcb2592082',
num_photos = 5, // maximum 20
container = document.getElementById( 'feed' ), // it is our <ul id="rudr_instafeed">
scrElement = document.createElement( 'script' );

window.mishaProcessResult = function( data ) {
for( x in data.data ){
    container.innerHTML += '<li><img src="' + data.data[x].images.low_resolution.url + '"></li>';
}
}

scrElement.setAttribute( 'src', 'https://api.instagram.com/v1/users/self/media/recent?access_token=' + token + '&count=' + num_photos + '&callback=mishaProcessResult' );
document.body.appendChild( scrElement );
