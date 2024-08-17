<header class="masthead bg-primary text-white text-center">
	<div class="container d-flex align-items-center flex-column">
		<!-- Masthead Avatar Image-->
		<img class="masthead-avatar mb-5" src="/portafolio-mvc//assets/img/avataaars.svg" alt="..." />
		<!-- Masthead Heading-->
		<h1 class="masthead-heading text-uppercase mb-0">
            <?php echo $datos['name'][0]['nameUser']; ?>
        </h1>
		<!-- Icon Divider-->
		<div class="divider-custom divider-light">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>
		<!-- Masthead Subheading-->
		<p class="masthead-subheading font-weight-light mb-0">
            <?php $portfolio_entries = [];?>

            <?php foreach ($datos['portfolio_entries'] as $entries): ?>
                <?php  $portfolio_entries[] = $entries['nameEntrie']; ?>
            <?php endforeach; ?>
            
            <?php echo $entries = implode(' - ', $portfolio_entries);?>
		</p>
	</div>
</header>