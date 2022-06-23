let offset1 = 0
const sliderRow1 = document.querySelector('.horizontsecondblock')
const sliderNext1 = document.querySelector('.tophowslider-next')
const sliderPrev1 = document.querySelector('.tophowslider-prev')

sliderNext1.addEventListener('click', function () {
  offset1 = offset1 + 410
  if (offset1 > 1230) {
    offset1 = 0
  }
  sliderRow1.style.left = -offset1 + 'px'
})

sliderPrev1.addEventListener('click', function () {
  offset1 = offset1 - 410
  if (offset1 < 0) {
    offset1 = 1230
  }
  sliderRow1.style.left = -offset1 + 'px'
})

let offset2 = 0
const sliderRow2 = document.querySelector('.whatkindhorizont')
const sliderNext2 = document.querySelector('.whatkindslider-next')
const sliderPrev2 = document.querySelector('.whatkindslider-prev')

sliderNext2.addEventListener('click', function () {
  offset2 = offset2 + 410
  if (offset2 > 1230) {
    offset2 = 0
  }
  sliderRow2.style.left = -offset2 + 'px'
})

sliderPrev2.addEventListener('click', function () {
  offset2 = offset2 - 410
  if (offset2 < 0) {
    offset2 = 1230
  }
  sliderRow2.style.left = -offset2 + 'px'
})

let offset3 = 0
const sliderRow3 = document.querySelector('.bestline1')
const sliderNext3 = document.querySelector('.bestslider-next')
const sliderPrev3 = document.querySelector('.bestslider-prev')

sliderNext3.addEventListener('click', function () {
  offset3 = offset3 + 410
  if (offset3 > 1230) {
    offset3 = 0
  }
  sliderRow3.style.left = -offset3 + 'px'
})

sliderPrev3.addEventListener('click', function () {
  offset3 = offset3 - 410
  if (offset3 < 0) {
    offset3 = 1230
  }
  sliderRow3.style.left = -offset3 + 'px'
})
