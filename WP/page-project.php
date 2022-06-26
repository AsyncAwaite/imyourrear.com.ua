<?php
/*
Template Name: Проект Вони не винні
*/
?>
<?php
get_header();
?>
<main>
      <div class="diveder"></div>
      <section class="section section__about about section__project">
        <div class="container  pos-r">
          <div class="row">
            <div class="col-12 col-lg-7">
              <div class="about__slider">
                <div class="swiper swiper-about">

                  <div class="swiper-wrapper">

                    <div class="swiper-slide">
                      <div class="swiper__img"><img src="<?php echo get_template_directory_uri()  . '/assets/img/project/1.png' ?>" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="swiper__img"><img src="<?php echo get_template_directory_uri()  . '/assets/img/project/2.jpg' ?>" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="swiper__img"><img src="<?php echo get_template_directory_uri()  . '/assets/img/project/3.jpg' ?>" alt=""></div>
                    </div>
              
                  </div>




                </div>
                <div class="swiper__info d-flex align-items-center">
                  <div class="counter ">
                    <span class="counter__current f-600">

                    </span>
                    <span class="counter__total">

                    </span>


                  </div>
                  <div class="swiper__nav  d-flex">

                    <button class="swiper-about__next"> <svg class="icon">
                        <use xlink:href="#arrow"></use>
                      </svg></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-5">
              <div class="about__descr">
                <h2 class="title fz-36 f-600 t-upper">	<?php pll_e('"вониневинні"'); ?> 	</h2>
                <div class="descr fz-16">
                <?php pll_e('"  «Вониневинні» – Спецпроєкт БФ «Я буду твоїм Тилом».
                  Присвячений він дітям, які постраждали внаслідок російсько-української війни. Метою Спецпроєкту є
                  допомога дітям українських військовослужбовців та забезпечення усім необхідним їх мам та самих
                  малюків.
                  <br><br>
                  Очі дитини моєї країни стали дорослими за одну добу. І я знаю, що ти, мій воїне, помстишся за кожну
                  сльозинку українських дітей. За їх покинуті домівки, за зруйноване дитинство, за зламані іграшки ногою
                  російського окупанта, який нещадно паплюжив незалежну українську землю."'); ?> 
                

                </div>
              </div>
            </div>
          </div>
          <div class="title-big f-600">UKRAINE</div>
          <ul class="pagination">
            <li class="pagination__item fz-14"><a href="<?php
											echo get_home_url();
											?>" class="pagination__link">	<?php pll_e('Головна'); ?> 	</a>
            </li>
            <li class="pagination__item active fz-14 ">
              <a href="#" class="pagination__link "><?php pll_e('Спецпроєкт «Вониневинні»'); ?> </a>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
get_footer();
?>