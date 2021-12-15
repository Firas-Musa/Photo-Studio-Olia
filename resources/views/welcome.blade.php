<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

        <!-- Styles -->
        <!-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style> -->

        <!-- <style>
            body {
                font-family: 'roboto', sans-serif;
            }
        </style> -->
        
        <link href="/css/moonbase2.css" rel="stylesheet" />
        <!-- <link href="/css/moonbase3.css" rel="stylesheet" /> -->
        <link href="/css/moonbase.css" rel="stylesheet" />
    </head>
 
    <body> 

            <div class="wrapper">
           
		<!-- <div class="qwerty"></div> -->
		<header class="header">
			<div class="conteiner">
				<div class="header_body">
					<a href="#" class="header_logo">
						<img loading="lazy" src="images/LOGO.png">
					</a>
					<div class="header_burger">
						<span></span>
					</div>
					<nav class="header_menu">
						<ul class="header_list">
							<li>
								<a href="#" class="header_link">ГОЛОВНА</a>
							</li>
							<li>
								<a  href="#промене" class="header_link">ПРО МЕНЕ</a>
							</li>
							<li>
								<a href="#фото" class="header_link">ФОТО</a>
							</li>
							<li>
								<a href="#контакти" class="header_link">КОНТАКТИ</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!--------------------------------------------------------------------- CONTENT --------------------------------------------------------------------->
		<div class="content">
			<!-- <div class="conteiner"> -->
				<div class="content_text">
					<!-- <img class="main_photo" src="images/Head_photo.png"> -->
						<div class="Photo_with_Olia">
							<!-- <img loading="lazy" class="Photo_Olia" src="images/Photo with Olia.png"> -->
							<div class="Photo_with_Olia_in">Photo with</div>
							<div class="Photo_with_Olia_in">Olia</div>
						</div>
							<div class="Замовити">
									<button class="button1" type="button" name="Замовити зйомку" value="">
										<a href="#popup"><img class="but" src="images/Кнопка.png"></a>
										
									</button>
									<!-- ПОПАП ЗАМОВИТИ -->
									<div id="popup" class="popup">
										<a href="#header" class="popup_area"></a>
										<div class="popup_body">
											<div class="popup_content">
												<a href="#header" class="popup_close">X</a>
												<div class="popup_title">Замовити зйомку</div>
												<div class="залиште_дані">Залиште свої дані і я зв’яжуся з Вами протягом 30 хв </div>
												<div class="popup_text">
													<form action="#" method="get">
														<div class="Імя">
															<input placeholder="Ім'я*" type="text" name="name">
														</div>
														<div class="Телефон">
															<input placeholder="Телефон*" type="tel" name="tel">
														</div>
														<button class="Кнопка_в_форме" type="submit">Замовити</button>
														<div class="lock">
															<img loading="lazy" class="lock" src="images/lock.png">
															Ваші данні ніколи не  будуть предані третім особам
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<!-- ПОПАП ЗАМОВИТИ -->
						</div>
					<div class="social">
						<a href="https://www.instagram.com/">
							<img loading="lazy" src="images/inst.png">
						</a>
						<a href="https://twitter.com/?lang=ru">
							<img loading="lazy" src="images/twitter.png">
						</a>
						<a href="https://www.facebook.com/">
							<img loading="lazy" src="images/facebook.png">
						</a>
					</div>
				</div>
			<!-- </div> -->
			
		</div>
	</div>
	<div class="shering">
	<a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
	</div>

	<a name="промене" href=""></a>
	<div class="Про_мене">
		<img src="images/Line 1.png">
		<span>ПРО МЕНЕ</span>
		<img src="images/Line 1.png">
	</div>
	
	<div
	 class="Про_мене_content">
		<div class="Привіт_мене_звати_Оля">
			<h1>ПРИВІТ, <!-- <br> --> МЕНЕ ЗВАТИ <!-- <br> --> ОЛЯ!</h1>
			
			<span class="text_from_Olia">Фотографія завжди була моїм захопленням. Це своєрідним релаксації,
										 можливість зупинити мить та спіймати момент.
										Згодом я зрозуміла, що хочу присвятити цій справі весь свій час.</span>
		</div>

		
			<img loading="lazy" class="r_sidebar" src="images/IMG_84371.jpeg">
		
	</div>

	<div class="Про_мене">
		<img src="images/Line 1.png">
		<span>ФОТО</span>
		<img src="images/Line 1.png">
	</div>

	<div class="спогади">
		<h2>Фото - це спогади.</h2>
	</div>

	<div class="текст_спогади">Переглядаючи знімки, ми одразу пригадуємо ті емоції, які відчули тоді, тому це прекрасна згадка, яка залишається у вигляді ілюстрації.</div>

	<div class="Моя_Галерея">
		<h3>Моя Галерея</h3>
	</div>

	<!------------- SLIDER ------------->
	<div class="slider_block">

	<button id="slider-left" onclick="sliderLeft()" class="button_left">
		<img loading="lazy" src="images/left.png">
	</button>
	<div id="slider">
		<div id="polosa">
			<ul class="sll">
							@foreach ($categories as $category)
							<li>
								<div class="slider_item">
									<a href="{{ url('/category/news') }}" class="sl">{{ $category['title'] }}</a>
								</div>
							</li>
							@endforeach
						</ul>
		</div>
	</div>
		<button id="slider-right" onclick="sliderLeft()" class="button_right">
			<img loading="lazy" src="images/right.png">
		</button>

	</div>
	
	<!------------- SLIDER ------------->
	<a name="фото" href=""></a>

	<div class="container">
		<div class="galery_items">
			<div class="item item_big"><a href="images/IMG_5.png" data-lightbox="test"><img loading="lazy" src="images/IMG_5.png" alt="no-image"></a></div>
			<div class="item item_1"><a href="images/IMG_1.png" data-lightbox="test"><img loading="lazy" src="images/IMG_1.png" alt="no-image"></a></div>
			<div class="item item_2"><a href="images/IMG_2.png" data-lightbox="test"><img loading="lazy" src="images/IMG_2.png" alt="no-image"></a></div>
			<div class="item item_3"><a href="images/IMG_3.png" data-lightbox="test"><img loading="lazy" src="images/IMG_3.png" alt="no-image"></a></div>
			<div class="item item_4"><a href="images/IMG_4.png" data-lightbox="test"><img loading="lazy" src="images/IMG_4.png" alt="no-image"></a></div>
			
			<div class="item item_big"><a href="images/IMG_6.png" data-lightbox="test"><img loading="lazy" src="images/IMG_6.png" alt="no-image"></a></div>
			<div class="item item_big"><a href="images/IMG_7.png" data-lightbox="test"><img loading="lazy" src="images/IMG_7.png" alt="no-image"></a></div>
			<div class="item item_8"><a href="images/IMG_9.png" data-lightbox="test"><img loading="lazy" src="images/IMG_9.png" alt="no-image"></a></div>
			<div class="item item_8"><a href="images/IMG_10.png" data-lightbox="test"><img loading="lazy" src="images/IMG_10.png" alt="no-image"></a></div>
			<!-- <div class="item item_8"><a href="images/IMG_11.png" data-lightbox="test"><img loading="lazy" src="images/IMG_11.png" alt="no-image"></a></div> -->
		</div>
	</div>

	<!------------- FOOTER ------------->
	<footer>
		<img loading="lazy" class="footer_line" src="images/Line 4.png">
		<img class="footer_contact" loading="lazy" src="images/контакти.png">



<div class="footer_logo_soc_email_conteiner">
		<a href="#" class="header_logo">
			<img loading="lazy" src="images/LOGO.png">
		</a>


		<div class="social_footer">
						<a href="https://www.instagram.com/">
							<img loading="lazy" src="images/inst.png">
						</a>
						<a href="https://twitter.com/?lang=ru">
							<img loading="lazy" src="images/twitter.png">
						</a>
						<a href="https://www.facebook.com/">
							<img loading="lazy" src="images/facebook.png">
						</a>
					</div>
					<a name="контакти" href=""></a>
		<div class="email">
			<a class="tel" href="mailto:olia@gmail.com">E-MAIL: </a><br>
			<a class="tel" href="https://www.google.com.ua/maps/@49.217536,28.4557312,13z?hl=ru">Vinnytsia City</a><br>
			<a class="tel" href="tel:+380632625554">TEL:</a>
		</div>
</div>

	<img loading="lazy" class="footer_line" src="images/Line 4.png">
	</footer>
        </div>

        <script src="/js/moonbase.js"></script>
        <script src="/js/moonbase2.js"></script>
        
    </body>
</html>
