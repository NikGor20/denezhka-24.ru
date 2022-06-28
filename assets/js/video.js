// Script for popup for video button

var btn = document.querySelector('.btn_video')
var close = document.querySelector('.popup_close')
var bg = document.querySelector('.close')
var body = document.getElementsByTagName('body')[0]
btn.addEventListener('click', function () {
  var popup = document.querySelector('.popup')
  popup.classList.toggle('popup__hidden')
  body.classList.add('overflow')
})
close.addEventListener('click', function () {
  var popup = document.querySelector('.popup')
  popup.classList.add('popup__hidden')
  body.classList.remove('overflow')
})
bg.addEventListener('click', function () {
  var popup = document.querySelector('.popup')
  popup.classList.add('popup__hidden')
  body.classList.remove('overflow')
})

// Script for video player

var video_block = document.querySelectorAll('.video_block')
var play = document.querySelector('.play')
var video = document.querySelector('#play_video')
var close = play.querySelector('.smartphone_close')
var bg = play.querySelector('.close')
var body = document.getElementsByTagName('body')[0]

video_block.forEach(function (iten, i, arr) {
  video_block[i].addEventListener('click', function () {
    play.classList.toggle('popup__hidden')
    video.setAttribute('src', 'feedvideo/feedback' + (i + 1) + '.mp4')
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
