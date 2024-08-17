<?php
class PortafolioModel extends Model {
    
    public function getSection()
    {
        $sections = [
            ['nameSection' => 'Portafolio', 'hrefSection' => 'portfolio'],
            ['nameSection' => 'Acerca de mí', 'hrefSection' => 'about'],
            ['nameSection' => 'Contáctame', 'hrefSection' => 'contact'],
        ];

        return $sections;
    }

    public function getName()
    {
        $name = [
            ['nameUser' => 'Oscar Castellanos'],
        ];

        return $name;
    }

    public function getPortfolioEntries() {
        $portfolio_entries = [
            ['nameEntrie' => 'Software Developer'],
            ['nameEntrie' => 'Web Designe'],
            ['nameEntrie' => 'Indie Game Developer'],
            ['nameEntrie' => 'Tech Blogger']
        ];

        return $portfolio_entries;
    }

    public function getPortfolioItem()
    {
        $portfolio_entries = [
            [
                'target' => 'portfolioModal1', 
                'nameImage' => 'Super Mario Bros', 
                'image' => 'super_mario_bro.png',
                'description' => 'Revive la magia del clásico con este remake de Super Mario Bros, desarrollado en Game Maker Studio. Esta versión moderna del icónico juego ofrece una experiencia fiel al original, con gráficos actualizados y mecánicas de juego refinadas. Además, es completamente open source y está disponible en GitHub, permitiendo a la comunidad explorar, modificar y contribuir al proyecto. ¡Descubre y forma parte de la evolución de este clásico atemporal!',
            ],
            [
                'target' => 'portfolioModal2', 
                'nameImage' => 'Hyper Ball', 
                'image' => 'truper_max_games.png',
                'description' => 'Sumérgete en la acción con Hyper Ball, un emocionante juego hyper casual desarrollado en Game Maker Studio 2. Diseñado para ofrecer una experiencia rápida y adictiva, Hyper Ball desafía tus reflejos y habilidades mientras te enfrentas a niveles llenos de ritmo y diversión. Perfecto para jugar en cualquier momento, este juego te mantendrá entretenido con su jugabilidad sencilla pero cautivadora. ¡Descárgalo y prueba tu destreza en esta experiencia única!',
            ],
            [
                'target' => 'portfolioModal3', 
                'nameImage' => 'QR Code Generator', 
                'image' => 'qr_code.png',
                'description' => 'Descubre QR Code, una app desarrollada con React Native que combina escaneo y generación de códigos QR en una sola herramienta. Con una interfaz intuitiva, puedes escanear códigos QR rápidamente y generar tus propios códigos personalizados con facilidad. Ideal para usuarios que necesitan una solución práctica y eficiente para gestionar códigos QR en su día a día. ¡Descárgala y simplifica tu interacción con códigos QR!',
            ],
            [
                'target' => 'portfolioModal4', 
                'nameImage' => 'Plantilla DaisyUI', 
                'image' => 'plantilla_daisyUI.png',
                'description' => 'Transforma tu proyecto de comercio electrónico con la Plantilla Open Source - DaisyUI. Desarrollada utilizando DaisyUI, esta plantilla moderna y flexible ofrece un diseño atractivo y funcional, ideal para tiendas en línea. Aprovecha las capacidades de personalización de DaisyUI para adaptar la plantilla a tus necesidades específicas, y comienza a construir tu tienda con una base sólida y elegante. ¡Disponible de forma gratuita para que puedas explorar, modificar y lanzar tu ecommerce con facilidad!',
            ],
            [
                'target' => 'portfolioModal5', 
                'nameImage' => 'Online Ordering Delivery', 
                'image' => 'online-ordering-delivery-comp.png',
                'description' => 'Simplifica la experiencia culinaria con App Restaurante, una solución intuitiva para la gestión de restaurantes. Desarrollada para ofrecer una experiencia fluida, esta app permite a los usuarios explorar menús, hacer pedidos en línea, y realizar reservas con facilidad. Con una interfaz amigable y funciones prácticas, App Restaurante ayuda a mejorar la eficiencia del servicio y la satisfacción del cliente. Ideal para restaurantes que buscan modernizar su operación y ofrecer un servicio excepcional.',
            ],
            [
                'target' => 'portfolioModal6', 
                'nameImage' => 'POS', 
                'image' => 'POS.png',
                'description' => 'Optimiza la gestión de tu negocio con el Sistema de Ventas - Control de Inventario. Este potente sistema ofrece una solución integral para administrar ventas y controlar inventarios de manera eficiente. Con funciones avanzadas para seguimiento de productos, gestión de stock, y análisis de ventas, te ayudará a mantener el control total sobre tu inventario y mejorar la toma de decisiones. Diseñado para facilitar operaciones y mejorar la precisión en la gestión, este sistema es esencial para cualquier negocio que busque una administración eficaz y simplificada.',
            ],
            [
                'target' => 'portfolioModal7', 
                'nameImage' => 'Recetario Medico', 
                'image' => 'receetario_medico.png',
                'description' => 'Transforma la gestión de prescripciones con Recetario Médico, una aplicación robusta desarrollada en Laravel. Esta plataforma permite a médicos y profesionales de la salud gestionar, almacenar y emitir recetas de manera segura y eficiente. Con una interfaz intuitiva y características avanzadas para la administración de pacientes y recetas, Recetario Médico facilita la organización y el seguimiento de tratamientos, mejorando la eficiencia y la precisión en la práctica médica. Ideal para clínicas y consultorios que buscan una solución moderna y confiable para el manejo de recetas.',
            ],
            [
                'target' => 'portfolioModal8', 
                'nameImage' => 'Cubix', 
                'image' => 'cubix.png',
                'description' => '¡Pon a prueba tu mente con Cubix! Este desafiante juego de plataformas y rompecabezas te lleva a un mundo donde cada movimiento cuenta. Debes elegir cuidadosamente la rotación del juego para avanzar hacia el objetivo, ¡porque una decisión errónea podría ser fatal! Con niveles que desafían tu habilidad para resolver rompecabezas y una jugabilidad adictiva, Cubix ofrece una experiencia única para aquellos que buscan un reto mental emocionante. Desarrollado por TruperMax Games, es la prueba definitiva para tu ingenio y estrategia.',
            ],
            [
                'target' => 'portfolioModal9', 
                'nameImage' => 'Start Movie', 
                'image' => 'start_movie.jpg',
                'description' => 'Lleva tu proyecto de entretenimiento al siguiente nivel con la Plantilla Open Source - App Películas. Esta plantilla moderna y versátil, desarrollada para facilitar la creación de aplicaciones de películas, ofrece un diseño atractivo y funcional que incluye características como navegación por géneros, reseñas de películas, y recomendaciones personalizadas. Aprovecha la flexibilidad del código abierto para adaptar la plantilla a tus necesidades específicas y lanzar una app de películas que cautive a tus usuarios. ¡Disponible gratuitamente para que puedas personalizarla y ponerla en marcha rápidamente!',
            ],
        ];

        return $portfolio_entries;
    }

    public function getAboutSectionButton()
    {
        $about_buttons = [
            [
                'nameButton' => 'Ver mi repositorio', 
                'url' => 'https://github.com/OscarCastellanos01',
                'icon' => 'fab fa-github',
            ],
            [
                'nameButton' => 'Ver mi canal de YouTube', 
                'url' => 'https://www.youtube.com/@TruperMax',
                'icon' => 'fab fa-fw fa-youtube',
            ],
            [
                'nameButton' => 'Ver mi perfil en Itch.io', 
                'url' => 'https://trupermax.itch.io/',
                'icon' => 'fas fa-gamepad',
            ],
            [
                'nameButton' => 'Ver mis apps en Google Play', 
                'url' => 'https://play.google.com/store/apps/developer?id=TruperMax&hl=es_419',
                'icon' => 'fas fa-play',
            ],
        ];

        return $about_buttons;
    }
}
