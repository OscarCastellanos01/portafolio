<?php

class PortafolioController extends Controller
{
	public function index()
	{
		$portafolioModel = $this->model('PortafolioModel');

		$sections = $portafolioModel->getSection();
		$name = $portafolioModel->getName();
		$portfolio_entries = $portafolioModel->getPortfolioEntries();
		$portfolio_items = $portafolioModel->getPortfolioItem();
		$about_buttons = $portafolioModel->getAboutSectionButton();

		$this->view('portafolio/index', [
			'title' => 'Portafolio - Oscar Castellanos',
			'portfolio_entries' => $portfolio_entries,
			'name' => $name,
			'sections' => $sections,
			'portfolio_items' => $portfolio_items,
			'about_buttons' => $about_buttons
		]);
	}
}