let muteButton = document.getElementById('muteButton');
let video = document.getElementById('VideoBG');

muteButton.addEventListener('click', function() {
    if (video.muted) {
        video.muted = false;
    } else {
        video.muted = true;
    }
});