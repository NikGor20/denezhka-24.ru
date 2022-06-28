// Script for video player for catalog

var card_video = document.querySelectorAll('.card_video')
var play = document.querySelector('.play')
var video = document.querySelector('#play_video')
var close = play.querySelector('.smartphone_close')
var bg = play.querySelector('.close')
var body = document.getElementsByTagName('body')[0]

card_video.forEach(function (iten, i, arr) {
  card_video[i].addEventListener('click', function () {
    play.classList.toggle('popup__hidden')
    video.setAttribute('src', 'feedvideo/consultant' + (i + 1) + '.mp4')
    video.play()
    body.classList.add('overflow')
  })
})

close.addEventListener('click', function () {
  video.pause()
  play.classList.add('popup__hidden')
  body.classList.remove('overflow')
})

bg.addEventListener('click', function () {
  video.pause()
  play.classList.add('popup__hidden')
  body.classList.remove('overflow')
})
