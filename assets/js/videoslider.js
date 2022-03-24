let offset = 0
const sliderRow = document.querySelector('.eighth_video')
const sliderNext = document.querySelector('.slider-next')
const sliderPrev = document.querySelector('.slider-prev')

sliderNext.addEventListener('click', function () {
  offset = offset + 328
  if (offset > 1948) {
    offset = 0
  }
  sliderRow.style.left = -offset + 'px'
})

sliderPrev.addEventListener('click', function () {
  offset = offset - 328
  if (offset < 0) {
    offset = 1948
  }
  sliderRow.style.left = -offset + 'px'
})
