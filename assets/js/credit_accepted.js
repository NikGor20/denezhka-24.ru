// Script for credit_accepted

if (document.documentElement.clientWidth > 320) {
  var card = document.querySelector('.credit-accepted_card')
  var p = card.querySelector('.credit-accepted_p')
  var i = 0

  function showCard() {
    card.classList.toggle('credit-accepted_card__show')
  }

  function randomInteger(min, max) {
    // случайное число от min до (max+1)
    var rand = min + Math.random() * (max + 1 - min)
    return Math.floor(rand)
  }

  function refreshCard() {
    var a = randomInteger(1, 20)
    while (i == a) {
      a = randomInteger(1, 20)
    }
    i = a
    console.log(i)
    str = ``
    switch (i) {
      case 1:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Александр Д. из Шатуры получил займ 35&nbsp000 ₽ на 50 дн.`
        break

      case 2:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Артемий Л. из Жуковского получил займ 15&nbsp000 ₽ на 20 дн.`
        break

      case 3:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Леонид З. из Новогорода получил займ 27&nbsp000 ₽ на 35 дн.`
        break

      case 4:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Михаил Р. из Сочи получил займ 22&nbsp000 ₽ на 12 дн.`
        break

      case 5:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Светлана А. из Москвы получила займ 64&nbsp000 ₽ на 41 дн.`
        break

      case 6:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Родион В. из Зеленограда получил займ 7&nbsp000 ₽ на 12 дн.`
        break

      case 7:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Алексей Г. из Москвы получил займ 17&nbsp000 ₽ на 14 дн.`
        break

      case 8:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Алексей И. из Сочи получил займ 11&nbsp000 ₽ на 7 дн.`
        break

      case 9:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Александра А. из Жуковского получила займ 20&nbsp000 ₽ на 18 дн.`
        break

      case 10:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Елена К. из Новгорода получила займ 30&nbsp000 ₽ на 40 дн.`
        break

      case 11:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Евгения З. из Стерлитамака получила займ 40&nbsp000 ₽ на 45 дн.`
        break

      case 12:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Даниил И. из Москвы получил займ 50&nbsp000 ₽ на 31 дн.`
        break

      case 13:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Данил М. из Москвы получил займ 15&nbsp000 ₽ на 7 дн.`
        break

      case 14:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Леонид В. из Самары получил займ 25&nbsp000 ₽ на 20 дн.`
        break

      case 15:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Анастасия В. из Москвы получила займ 45&nbsp000 ₽ на 50 дн.`
        break

      case 16:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Михаил С. из Самары получил займ 65&nbsp000 ₽ на 45 дн.`
        break

      case 17:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Анна А. из Казани получила займ 55&nbsp000 ₽ на 40 дн.`
        break

      case 18:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Ксения Д. из Казани получила займ 32&nbsp000 ₽ на 30 дн.`
        break

      case 19:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Анна Г. из Екатеринбурга получила займ 15&nbsp000 ₽ на 10 дн.`
        break

      case 20:
        str = `<span class="h4_bold" style="color: #000000; font-size: 16px; font-weight: 500">
					Новый выданный займ!
				</span> <br>
				Антон Ш. из Волгограда получил займ 35&nbsp000 ₽ на 40 дн.`
        break

      default:
        break
    }
    p.innerHTML = str
  }

  setTimeout(function () {
    setInterval(refreshCard, 24000)
  }, 46000)
  setInterval(showCard, 24000)
}
