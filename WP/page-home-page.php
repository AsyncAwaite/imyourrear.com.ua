<?php
/*
Template Name: Головна сторінка
*/
?>
<?php
get_header();
?>
<main>
      <section class="section__main-screen main-screen">
        <div class="container h-100">
          <div class="wrapper">

            <div class="row  h-100">
              <div class="col-12 col-md-5">
                <div class="main-screen__descr pos-r d-flex flex-column">
                  <h1 class="fz-40 f-600 t-upper">
                   
                    <?php pll_e('Мужня і сильна
                    на захисті твого тилу'); ?> 
                  </h1>
                  <div class="descr f-500 fz-24">     <?php pll_e('«Я буду твоїм Тилом» - благодійний фонд забезпечення української армії та реабілітації військових'); ?> 
      
                  </div>
                  <button class="btn" data-donate>	<?php pll_e('Допомогти'); ?> 	 </button>
                </div>
              </div>
              <div class="col-12 col-md-7">
                <div class="main-screen__img ">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/main-bg.png'?>" alt="">
                  </div>

                </div>

              </div>
            </div>
          </div>


        </div>

      </section>
      <section class="section section__about about">
        <div class="container  pos-r">
          <div class="row">
            <div class="col-12 col-lg-7">
              <div class="about__slider">
                <div class="swiper swiper-about">

                  <div class="swiper-wrapper">
         
                    <div class="swiper-slide">
                      <div class="swiper__img"><img src="<?php echo get_template_directory_uri() . '/assets/img/about/1.jpg' ?>" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="swiper__img"><img src="<?php echo get_template_directory_uri() . '/assets/img/about/2.jpg' ?>" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="swiper__img"><img src="<?php echo get_template_directory_uri() . '/assets/img/about/3.jpg' ?>" alt=""></div>
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
                <h2 class="title fz-36 f-600">	<?php pll_e('ПРО ПРОЕКТ'); ?> </h2>
                <div class="descr fz-16">
                <?php pll_e('                Ми стоїмо на захисті гідності, демократії та здоров’я та життя українців, тому наша мета -
                  забезпечення спроможної та сильної армії. <br>
                  Команда фонду переконана, що українська непохитна воля, сила духу, нескореність та єднання - це сильні
                  важелі для Перемоги. І поки наші воїни на передовій, ми залишаємося у тилу для забезпечення їхніх
                  потреб, прискорюючи перемогу. <br><br>

                  Ми простягаємо руку допомоги не лише військовим, а також їх сім’ям та пораненим друзям. <br>
                  Саме тому у нашого фонду є два спецпроекти : «Вониневинні» , який направлений на допомогу та
                  забезпечення дітей військовослужбовців усім необхідним та «Допомога 300», який відновляє здоров’я
                  наших воїнів за допомоги кращих лікарів та реабілітологів України.
                '); ?>
  
                </div>
                <button class="btn" data-donate>	<?php pll_e('Допомогти'); ?>  </button>
              </div>
            </div>
          </div>
          <div class="title-big f-600">UKRAINE</div>
        </div>
      </section>
    </main>
    <?php
get_footer();
?>