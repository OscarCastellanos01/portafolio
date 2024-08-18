<?php require_once APP . '/views/layouts/head.php' ?>

<!-- Navigation-->
<?php require_once APP .'/views/layouts/navigation.php' ?>

<!-- Masthead-->
<?php require_once APP .'/views/layouts/header.php' ?>

<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
	<div class="container">
		<!-- Portfolio Section Heading-->
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portafolio</h2>
		<!-- Icon Divider-->
		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>
		<!-- Portfolio Grid Items-->
		<div class="row justify-content-center">
			<!-- Portfolio Items-->
			<?php foreach ($datos['portfolio_items'] as $item): ?>
			<div class="col-md-6 col-lg-4 mb-5">
				<div 
					class="portfolio-item mx-auto" 
					data-bs-toggle="modal" 
					data-bs-target="#<?php echo $item['target'];?>"
				>
					<div 
						class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100"
					>
						<div 
							class="portfolio-item-caption-content text-center text-white">
							<i class="fas fa-plus fa-3x"></i>
						</div>
					</div>
					<img 
						class="img-fluid" 
						src="<?php echo ASSET; ?>/img/portfolio/<?php echo $item['image'];?>" 
						alt="<?php echo $item['nameImage'];?>" 
					/>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		</div>
	</div>
</section>

<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
	<div class="container">
		<!-- About Section Heading-->
		<h2 class="page-section-heading text-center text-uppercase text-white">Acerca de mí</h2>
		<!-- Icon Divider-->
		<div class="divider-custom divider-light">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>
		<!-- About Section Content-->
		<div class="row">
			<div class="col-lg-4 ms-auto"><p class="lead">¡Hola! Soy un desarrollador de software apasionado por crear soluciones tecnológicas que marcan la diferencia. Con experiencia en lenguajes como JavaScript, Python, PHP y Java, me especializo en el desarrollo de aplicaciones web y móviles, siempre enfocado en la eficiencia, escalabilidad y una excelente experiencia de usuario.</p></div>
			<div class="col-lg-4 me-auto"><p class="lead">Además de mi trabajo como programador, soy un blogger entusiasta, compartiendo conocimientos y recursos sobre programación, nuevas tecnologías y mejores prácticas en desarrollo de software. Creo firmemente en la educación continua y disfruto ayudando a otros a mejorar sus habilidades a través de tutoriales, guías y artículos detallados.</p></div>
		</div>
		<!-- About Section Buttons-->
		<div class="text-center mt-4">
			<?php foreach ($datos['about_buttons'] as $button): ?>
			<a 
				class="btn btn-xl btn-outline-light" 
				href="<?php echo $button['url'];?>" 
				target="_blank"
			>
				<i class="<?php echo $button['icon'];?>"></i>
				<?php echo $button['nameButton'];?>
			</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Contact Section-->
<section class="page-section" id="contact">
	<div class="container">
		<!-- Contact Section Heading-->
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contáctame</h2>
		<!-- Icon Divider-->
		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>
		<!-- Contact Section Form-->
		<div class="row justify-content-center">
			<div class="col-lg-8 col-xl-7">
				<form 
					id="contactForm" 
					action="https://formsubmit.co/ocastellanosc@miumg.edu.gt" 
					method="POST"
				>
					<!-- Name input-->
					<div class="form-floating mb-3">
						<input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." required />
						<label for="name">Nombre completo</label>
						<div class="invalid-feedback" data-sb-feedback="name:required">El nombre es requerido.</div>
					</div>
					<!-- Email address input-->
					<div class="form-floating mb-3">
						<input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" data-sb-validations="required,email" required/>
						<label for="email">Correo</label>
						<div class="invalid-feedback" data-sb-feedback="email:required">El correo es requirido.</div>
						<div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
					</div>
					<!-- Phone number input-->
					<div class="form-floating mb-3">
						<input class="form-control" id="tel" name="tel" placeholder="(502) 456-7890" data-sb-validations="required" required/>
						<label for="tel">Número de teléfono</label>
						<div class="invalid-feedback" data-sb-feedback="phone:required">El número de teléfono es requerido.</div>
					</div>
					<!-- Message input-->
					<div class="form-floating mb-3">
						<textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required" required></textarea>
						<label for="message">Mensaje</label>
						<div class="invalid-feedback" data-sb-feedback="message:required">El mensaje es requerido.</div>
					</div>
					<!-- Submit success message-->
					<!---->
					<!-- This is what your users will see when the form-->
					<!-- has successfully submitted-->
					<div class="d-none" id="submitSuccessMessage">
						<div class="text-center mb-3">
							<div class="fw-bolder">Envío del formulario exitoso!</div>
						</div>
					</div>
					<!-- Submit error message-->
					<!---->
					<!-- This is what your users will see when there is-->
					<!-- an error submitting the form-->
					<div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error al enviar mensaje!</div></div>

					<!-- formsubmit -->
						<input type="hidden" name="_template" value="table">
					<!-- end forsubmit -->

					<!-- Submit Button-->
					<button class="btn btn-primary btn-xl" id="submitButton" type="submit">Enviar</button>

					<!-- formsubmit -->
					<input type="hidden" name="_next" value="http://localhost/portafolio-mvc/portafolio/index#contact">
					<input type="hidden" name="_captcha" value="false">
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Footer-->
<footer class="footer text-center">
	<div class="container">
		<div class="row">
			<!-- Footer Location-->
			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4">Dirección</h4>
				<p class="lead mb-0">
					2215 John Daniel Drive
					<br />
					Clark, MO 65243
				</p>
			</div>
			<!-- Footer Social Icons-->
			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="text-uppercase mb-4">Sitios</h4>
				<?php foreach ($datos['about_buttons'] as $button): ?>
				<a 
					class="btn btn-outline-light btn-social mx-1" 
					href="<?php echo $button['url'];?>" 
					target="_blank"
				>
					<i class="<?php echo $button['icon'];?>"></i>
				</a>
				<?php endforeach; ?>
			</div>
			<!-- Footer About Text-->
			<div class="col-lg-4">
				<h4 class="text-uppercase mb-4">About Freelancer</h4>
				<p class="lead mb-0">
					Freelance is a free to use, MIT licensed.
				</p>
			</div>
		</div>
	</div>
</footer>

<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
	<div class="container"><small>Copyright &copy; Oscar Castellanos <?php echo date('Y');?></small></div>
</div>

<!-- Portfolio Modals-->
 <?php require_once APP . '/views/layouts/modalPortafolio.php' ?>

<!-- Portfolio Modal 1-->
<?php require_once APP . '/views/layouts/footer.php' ?>