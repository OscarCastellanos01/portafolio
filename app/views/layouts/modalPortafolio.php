<?php foreach ($datos['portfolio_items'] as $section): ?>

<div class="portfolio-modal modal fade" id="<?php echo $section['target'];?>" tabindex="-1" aria-labelledby="<?php echo $section['target'];?>" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
			<div class="modal-body text-center pb-5">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<!-- Portfolio Modal - Title-->
							<h2 
                                class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                <?php echo $section['nameImage']?>
                            </h2>
							<!-- Icon Divider-->
							<div class="divider-custom">
								<div class="divider-custom-line"></div>
								<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
								<div class="divider-custom-line"></div>
							</div>
							<!-- Portfolio Modal - Image-->
							<img 
                                class="img-fluid rounded mb-5" 
                                src="<?php echo ASSET; ?>/img/portfolio/<?php echo $section['image'];?>" 
                                alt="<?php echo $section['nameImage'];?>" 
                            />
							<!-- Portfolio Modal - Text-->
							<p class="mb-4">
                                <?php echo $section['description'];?>
                            </p>
							<button class="btn btn-primary" data-bs-dismiss="modal">
								<i class="fas fa-xmark fa-fw"></i>
								Cerrar ventana
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php endforeach; ?>