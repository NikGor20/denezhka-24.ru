// Script for form1
var elem3 = document.querySelector('input[class="slider"]')

var rangeValue3 = function () {
  var newValue3 = elem3.value
  var target5 = document.querySelector('.form_content')
  target5.innerHTML = `${newValue3} ₽`
  var target6 = document.querySelector('.sum1')
  target6.innerHTML = `${newValue3}`
  var target9 = document.querySelector('.form_content1_1')
  target9.innerHTML = `${newValue3} ₽`
}

elem3.addEventListener('input', rangeValue3)

var elem4 = document.querySelector('input[class="slider_slider2"]')

var rangeValue4 = function () {
  var newValue4 = elem4.value
  var target7 = document.querySelector('.form_content2')
  target7.innerHTML = `${newValue4} дн.`
  var target8 = document.querySelector('.day1')
  target8.innerHTML = `${newValue4}`
  var target10 = document.querySelector('.form_content2_2')
  target10.innerHTML = `${newValue4} дн.`
}

elem4.addEventListener('input', rangeValue4)
