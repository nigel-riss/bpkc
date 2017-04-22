<?php
    /*
        Template Name: Home Page
    */
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>
        <?php bloginfo('name') ?>
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>
    <header class="site-header">

        <div class="search-n-lang">
            <div class="menu-icon">
                <div class="menu-icon__middle"></div>
            </div>
            <div class="search"></div>
            <div class="language"></div>
        </div>

        <div class="logo">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png">
        </div>

        <nav class="main-nav">
            <?php
                $args = array(
                    'theme_location'    => 'primary',
                    'container'         => '',
                    'menu_class'        => 'main-nav__menu'
                );

                wp_nav_menu($args);
            ?>
        </nav>

        <div class="hero">
            <h1 class="hero__title"><span class="hero__welcome">Добро пожаловать в</span> <br> Балтийский проектно-консалтинговый центр</h1>
            <p class="hero__text">Основными направлениями нашей работы являются: проектирование, поставка, монтаж и мониторинг систем, обеспечивающих
                объекты энергией и комфортным микроклиматом.</p><a class="button" href="about.html">Подробнее</a>
        </div>
    </header>
    <section class="services">
        <h2 class="services__title">Направления работы</h2>
        <div class="services__wrapper">
            <article class="service-item">
                <div class="service-item__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/project.svg" alt="Проектирование и консалтинг"></div>
                <h3 class="service-item__title">Проектирование и консалтинг</h3>
                <p class="service-item__text">Оказание услуг по сопровождению проектов в сфере:</p>
            </article><a class="service-link" href="#">Переработка отходов</a><a class="service-link" href="#">Возобновляемые источники энергии</a>
            <a
                class="service-link" href="#">Водоочистка</a><a class="service-link" href="#">Повышение энергоэффективности</a>
        </div>
        <div class="services__wrapper">
            <article class="service-item">
                <div class="service-item__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/inter.svg" alt="Международная деятельность"></div>
                <h3 class="service-item__title">Международная деятельность</h3>
                <p class="service-item__text">Участие в международных проектах, организация профильных мероприятий</p>
            </article><a class="service-link" href="#">Наши проекты</a>
        </div>
        <div class="services__wrapper">
            <article class="service-item">
                <div class="service-item__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/ecology.svg" alt="Экология"></div>
                <h3 class="service-item__title">Экология</h3>
                <p class="service-item__text">Программы и проекты по охране окружающей среды </p>
            </article>
        </div><a class="services__all" href="#">Все направления</a>
    </section>
    <section class="news">
        <header class="news__header">
            <h2 class="news__title">Новости</h2>
            <p class="news__subtitle">Актуальные новости развития энергосберегающих технологий и объектов использующих возобновляемые источники
                электроэнергии</p>
        </header><a class="news__link" href="#">Все новости</a>
        <div class="news__wrapper">
            <article class="news-item">
                <div class="news-item__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/news/photo1.jpg"></div>
                <div class="news-item__text-wrapper">
                    <header class="news-item__header">
                        <div class="news-item__day">01</div>
                        <div class="news-item__date">марта, 2017</div>
                    </header>
                    <div class="news-item__content">
                        <h3 class="news-item__title">Профессиональный монтаж</h3>
                        <div class="news-item__text">Все тонкости и секреты установки солнечных панелей в нашей статье, их которой немало нового смогут
                            узнать даже опытные электрики.</div>
                    </div><a class="news-item__more" href="#">Читать далее</a>
                </div>
            </article>
            <article class="news-item">
                <div class="news-item__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/news/photo2.jpg"></div>
                <div class="news-item__text-wrapper">
                    <header class="news-item__header">
                        <div class="news-item__day">07</div>
                        <div class="news-item__date">марта, 2017</div>
                    </header>
                    <div class="news-item__content">
                        <h3 class="news-item__title">Профессиональный монтаж</h3>
                        <div class="news-item__text">Все тонкости и секреты установки солнечных панелей в нашей статье, их которой немало нового смогут
                            узнать даже опытные электрики.</div>
                    </div><a class="news-item__more" href="#">Читать далее</a>
                </div>
            </article>
            <article class="news-item">
                <div class="news-item__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/news/photo3.jpg"></div>
                <div class="news-item__text-wrapper">
                    <header class="news-item__header">
                        <div class="news-item__day">26</div>
                        <div class="news-item__date">марта, 2017</div>
                    </header>
                    <div class="news-item__content">
                        <h3 class="news-item__title">Профессиональный монтаж</h3>
                        <div class="news-item__text">Все тонкости и секреты установки солнечных панелей в нашей статье, их которой немало нового смогут
                            узнать даже опытные электрики. </div>
                    </div><a class="news-item__more" href="#">Читать далее</a>
                </div>
            </article>
        </div>
    </section>
    <section class="museum">
        <div class="museum__wrapper">
            <h2 class="museum__title">Музей Балтийского Моря</h2>
        </div>
        <div class="museum__hero museum-hero">
            <div class="museum__wrapper">
                <div class="museum-hero__header">
                    <h2 class="museum-hero__title">Baltic Sea Museum</h2>
                    <p class="museum-hero__text">Проект, реализуемый в рамках Баренцево-Балтийской программы «Человек и Море» при поддержке «Коалиции
                        Чистая Балтика»</p><a class="museum-hero__link" href="#">О проекте</a>
                </div>
                <article class="news-item news-item--museum">
                    <div class="news-item__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/news/photo3.jpg"></div>
                    <div class="news-item__text-wrapper">
                        <header class="news-item__header">
                            <div class="news-item__day">26</div>
                            <div class="news-item__date">марта, 2017</div>
                        </header>
                        <div class="news-item__content">
                            <h3 class="news-item__title">Профессиональный монтаж</h3>
                            <div class="news-item__text">Все тонкости и секреты установки солнечных панелей в нашей статье, их которой немало нового
                                смогут узнать даже опытные электрики. </div>
                        </div><a class="news-item__more" href="#">Читать далее</a>
                    </div>
                </article>
            </div>
        </div>
        <div class="museum__news">
            <article class="news-simple">
                <div class="news-simple__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/news/photo1.jpg"></div>
                <div class="news-simple__text">Все тонкости и секреты установки солнечных панелей в нашей статье, их которой немало нового смогут узнать
                    даже опытные электрики.</div>
            </article>
            <article class="news-simple">
                <div class="news-simple__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/news/photo2.jpg"></div>
                <div class="news-simple__text">Все тонкости и секреты установки солнечных панелей в нашей статье, их которой немало нового смогут узнать
                    даже опытные электрики.</div>
            </article>
            <article class="news-simple">
                <div class="news-simple__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/news/photo3.jpg"></div>
                <div class="news-simple__text">Все тонкости и секреты установки солнечных панелей в нашей статье, их которой немало нового смогут узнать
                    даже опытные электрики.</div>
            </article>
        </div>
    </section>

<?php 
    get_footer();
?>