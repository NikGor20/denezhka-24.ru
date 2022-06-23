// Script for form2
var elem = document.querySelector('input[class="slider_slider3"]')

var rangeValue = function () {
  var newValue = elem.value
  var target = document.querySelector('.form_content3')
  target.innerHTML = `${newValue} ₽`
  var target3 = document.querySelector('.sum')
  target3.innerHTML = `${newValue}`
}

elem.addEventListener('input', rangeValue)

var elem2 = document.querySelector('input[class="slider_slider4"]')

var rangeValue2 = function () {
  var newValue2 = elem2.value
  var target2 = document.querySelector('.form_content4')
  target2.innerHTML = `${newValue2} дн.`
  var target4 = document.querySelector('.day')
  target4.innerHTML = `${newValue2}`
}

elem2.addEventListener('input', rangeValue2)
