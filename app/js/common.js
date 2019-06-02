
var delay_popup = 2000;
var msg_pop = document.getElementById('msg_pop');
setTimeout("document.getElementById('msg_pop').style.display='block';document.getElementById('msg_pop').className += 'fadeIn';", delay_popup);    


$(function() {
	$(document).ready(function() {

        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                items: 7,
                dots: false,
                nav: true,
                navText: false
            });
        });

        function setBigImage(foto) {
            $("#adpdp14").attr('href', $(foto).parent('.it').children('a').attr('href'));
            document.getElementById("dp14").src = foto.src;
          }

        (function($) {
          'use strict';
          $.countdown.regionalOptions.ru = {
            labels: ['Лет','Месяцев','Недель','Дней','Часов','Минут','Секунд'],
            labels1: ['Год','Месяц','Неделя','День','Час','Минута','Секунда'],
            labels2: ['Года','Месяца','Недели','Дня','Часа','Минуты','Секунды'],
            compactLabels: ['л','м','н','д'],
            compactLabels1: ['г','м','н','д'],
            whichLabels: function(amount) {
              var units = amount % 10;
              var tens = Math.floor((amount % 100) / 10);
              return (amount === 1 ? 1 : (units >= 2 && units <= 4 && tens !== 1 ? 2 :
                (units === 1 && tens !== 1 ? 1 : 0)));
            },
            digits: ['0','1','2','3','4','5','6','7','8','9'],
            timeSeparator: ':',
            isRTL: false
          };
          $.countdown.setDefaults($.countdown.regionalOptions.ru);
        })(jQuery);

        $(function () {
          $('#defaultCountdown').countdown({until: new Date(2018, 12-1, 1, 22)});
        });


				$(".btn-dark").click(function() {
					$(".modal").addClass("active");
				});
				$(".modal-close").click(function() {
					$(".modal").removeClass("active");
				});
				$(document).click(function (e) {
					if ($(e.target).closest(".modal").length === 0 && $(e.target).closest(".btn-dark").length === 0) {
						$(".modal").removeClass("active");
					}
					e.stopPropagation();
				});
        ajaxForm();
        amountPrice();
        initSelect();
        function ajaxForm() {
            $('#query-form').submit(function(e) {
                $.ajax({
                    type: "post",
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    dataType: "json",
                    beforeSend: function() {
                        $(".form_message").empty();
                    },
                    success: function(json) {
                        if (json['error']) {
                            $(".form_message").append(json['error']);
                        }
                        if (json['success']) {
                            $(".form_message").append(json['success']);
                            $('#query-form').trigger('reset');
                        }
                    }
                });
                //отмена действия по умолчанию для кнопки submit
                e.preventDefault();
            });
        }
        
    function amountPrice() {
            var Place = $('.place-select');
            var Tarif = $('.tarif-select');
            var price = $('#card_price');
            var finalPrice = $('.final-price__number').html();

            var groupID = parseInt(Place.find('option:selected').attr('data-id'));
            var cardID = parseInt(Tarif.find('option:selected').attr('value'));
            var amount = Tarif.find('option:selected').attr('data-price_' + groupID );
            Place.change(function() {
                    groupID = parseInt(Place.find('option:selected').attr('data-id'));
                    amount = Tarif.find('option:selected').attr('data-price_' + groupID );
                    
                    if(amount !== undefined) {
                        $('.final-price__number').html(amount);
                        price.attr('value', amount);
                    }
                });
            Tarif.change(function() {
                cardID = parseInt(Tarif.find('option:selected').attr('data-id'));
                amount = Tarif.find('option:selected').attr('data-price_' + groupID );
                if(amount !== undefined) {
                    $('.final-price__number').html(amount);
                    price.attr('value', amount);
                }
            });
            if(amount !== undefined) {
                $('.final-price__number').html(amount);
                price.attr('value', amount);
            }
        }
	    $('#fullpage').fullpage({
	    	verticalCentered: false,
            scrollOverflow: true,
            normalScrollElements: '.fifth-content__list',
            anchors: ['section1', 'section2', 'section3', 'section4', 'section5', 'section6']
	    });

        function initSelect() {
            $("#phone_input").mask("+7 (999) 999-99-99");
        }
    	$("#phone_input").mask("+7 999 999-99-99");
	});




});


