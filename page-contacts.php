<?php

/***
 *Template name: Контакты
 */
get_header(); ?>

<div class="pagetitle contactstitle">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
					<ul>
						<li><a href="<?php echo get_home_url(); ?>">Главная</a></li>
						<li><?php the_title(); ?></li>
					</ul>
				</div>
            </div>
        </div>
    </div>
</div>

<div class="page contacts contactspage">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			    <h1 data-aos="fade-up" data-aos-duration="2000"><?php the_title(); ?></h1>
				<p>Вы можете написать или позвонить нам.</p>
				<p>Мы с радостью ответим на любые ваши вопросы.</p>
			</div>
		</div>
		<div class="row">
		    <div class="col-xl-1 col-lg-1 d-xl-block d-lg-block d-none"></div>
			<div class="col-lg-4 col-md-12">
				<div class="contacts-item email" data-aos="fade-left" data-aos-duration="2000">
					<h3>Почта</h3>
					<a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
				</div>
				<div class="contacts-item phone" data-aos="fade-left" data-aos-duration="2000">
					<h3>Телефон</h3>
					<ul>
						<?php 
					        $phone1 = get_field('phone', 'option');
					        $phone2 = get_field('phone2', 'option');
					        $phone3 = get_field('phone3', 'option'); 
					        $whatsapp = get_field('whatsapp', 'option'); 
					        if($phone1){
					            echo '<li><a href="tel:'.$phone1.'">'.$phone1.' <a href="http://wa.me/'.$whatsapp.'"><img src="'.get_stylesheet_directory_uri().'/img/whatsappb.svg" alt=""></a></a></li>';
					        }
					        if($phone2){
					            echo '<li><a href="tel:'.$phone2.'">'.$phone2.' <img src="'.get_stylesheet_directory_uri().'/img/phone.svg" alt=""></a></a></li>';
					        }
					        if($phone3){
					            echo '<li><a href="tel:'.$phone3.'">'.$phone1.' <img src="'.get_stylesheet_directory_uri().'/img/phone.svg" alt=""></a></a></li>';
					        }
					   ?>
					</ul>
				</div>
				<div class="contacts-item graph" data-aos="fade-left" data-aos-duration="2000">
					<h3>Режим работы</h3>
					<div class="descr"><?php the_field('graph', 'option'); ?></div>
				</div>
				<div class="contacts-item address" data-aos="fade-left" data-aos-duration="2000"->
					<h3>Наш адрес</h3>
					<div class="descr"><a target="_blank" href="https://2gis.kg/bishkek/firm/70000001051597883/center/74.5782%2C42.8787/zoom/17.9897"><?php the_field('address', 'option'); ?></a></div>
					<!-- <div class="btn-wrap">
						<a href="" class="more">Показать на карте</a>
					</div> -->
				</div>
			</div>
			<div class="col-xl-1 col-lg-1 d-xl-block d-lg-block d-none"></div>
			<div class="col-lg-5 col-md-12">
				<form class="form-cont">
					<h3>Консультация</h3>
					<div class="success">
						<p>Спасибо за заявку!</p>
					</div>
					<div class="form-group">
						<input type="text" placeholder="Ваше имя*" name="name">
					</div>
					<div class="form-group">
						<input type="text" placeholder="Ваш номер телефона*" name="phone">
					</div>
					<div class="form-group">
						<input type="text" placeholder="Ваше электронная почта*" name="email">
					</div>

					<div class="form-group">
						<label for="">Укажите удобное для вас время</label>
						<select name="time" id="">
							<option value="09.00 - 10.00">09.00 - 10.00</option>
							<option value="10.00 - 11.00">10.00 - 11.00</option>
							<option value="11.00 - 11.00">11.00 - 12.00</option>
							<option value="12.00 - 13.00">12.00 - 13.00</option>
							<option value="13.00 - 14.00">13.00 - 14.00</option>
							<option value="14.00 - 15.00">14.00 - 15.00</option>
							<option value="15.00 - 16.00">15.00 - 16.00</option>
							<option value="16.00 - 17.00">16.00 - 17.00</option>
							<option value="17.00 - 18.00">17.00 - 18.00</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Укажите удобную для вас дату</label>
						<input type="date" placeholder="14 января 2021" name="date">
					</div>
					<button class="btn" id="send">Оставить заявку</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="map contacts-map">
				    <script src="https://maps.api.2gis.ru/2.0/loader.js"></script>
				    <div id="map" style="width: 100%; height: 400px;"></div>
                    <script>
                        DG.then(function() {
                			var map = DG.map('map', {
                				center: [42.878688, 74.578238],
                				zoom: 16
                			});
                
                			DG.marker([42.878688, 74.578238],{scrollWheelZoom: false})
                			.addTo(map)
                			.bindLabel('RELEVANCE Consulting company', {
                				static: true,
                				center: true
                			});
                		});
                    </script>
				</div>
				


<?php get_footer(); ?>