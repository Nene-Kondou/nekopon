
<?php get_header(); ?>

  <div class="top">
    <div class="top-content">
      <h1 class="top-title">WEB<br class="is-sp"> DESIGN<br class="is-sp"> SPECIALIST</h1>
      <p class="top-text">お客様の夢を叶えるWebサイトを制作</p>
      <div class="top-btn"><a href="<?php echo get_template_directory_uri(); ?>/contact/contact.html">CONTACT</a></div>
    </div>
  </div>
  <!-- ./top -->

  <main>
    <section class="news" id="news">
      <div class="news-title-box">
        <h3 class="news-title">NEWS</h2>
        <p class="news-title-text">お知らせ</p>
      </div>
      <div class="news-list">
        <li>
          <a href="#" class="news-item">
            <div class="news-meta">
              <p class="news-date">2030.02.01</p>
              <p class="news-tag">お知らせ</p>
            </div>
            <p class="news-text">Webデザインニュースサイト「ウェブマガジン」に取材いただきました</p>
          </a>
        </li>
        <li>
          <a href="#" class="news-item">
            <div class="news-meta">
              <p class="news-date">2030.01.25</p>
              <p class="news-tag">制作実績</p>
            </div>
            <p class="news-text">Smoothiesta様のWebサイトを制作いたしました</p>
          </a>
        </li>
        <li>
          <a href="#" class="news-item">
            <div class="news-meta">
              <p class="news-date">2030.01.20</p>
              <p class="news-tag">採用</p>
            </div>
            <p class="news-text">Webデザイナーを１名募集中です！</p>
          </a>
        </li>
      </div>
    </section>
    <!-- ./news -->

    <section class="service" id="service">
      <div class="section section-service">
        <h2 class="section-title">SERVICE</h2>
        <p class="section-text">事業内容</p>
      </div>
      <div class="service-content">
        <ul class="service-list">
          <li class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/service1.jpg" alt="">
            <p class="service-title">Webサイト制作</p>
            <p class="service-text">新規サイトの制作はもちろんサイトリニューアルやランディングページの制作も可能です。</p>
          </li>
          <li class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/service2.jpg" alt="">
            <p class="service-title">Webサイト運用</p>
            <p class="service-text">サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案をいたします。</p>
          </li>
          <li class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/service3.jpg" alt="">
            <p class="service-title">アプリ開発</p>
            <p class="service-text">スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。</p>
          </li>
        </ul>
        <div class="util-btn service-btn"><a href="<?php echo get_template_directory_uri(); ?>/service/service.html">MORE</a></div>
      </div>
    </section>
    <!-- ./service -->

    <section class="works" id="works">
      <div class="work-slider">
        <img src="<?php echo get_template_directory_uri(); ?>/img/works.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/works2.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/works3.jpg" alt="">
      </div>
      <div class="work-box">
        <div class="work-content">
          <h2 class="section-title section-work-title">WORKS</h2>
          <p class="section-text section-work-text">制作実績</p>
          <p class="work-text">様々なジャンルのWebサイト制作が可能です。<br>ご購入やお申込み数の増加などを実現します！</p>
          <div class="util-btn"><a href="<?php echo get_template_directory_uri(); ?>/works/works.html">MORE</a></div>
        </div>
      </div>
    </section>
    <!-- ./works -->

    <section class="company" id="company">
      <div class="company-box">
        <div class="company-content">
          <h2 class="section-title">COMPANY</h2>
          <p class="section-text">私たちについて</p>
          <h2 class="company-title">サイトのゴール = 夢を叶えること</h2>
          <p class="company-text">お客様の夢を叶えること。<br>
            それがWebサイトのゴールであり、私たちが目指すことです。<br>
            だからこそちゃんと成果を出すサイトを全力でお作りします。<br>
            お客様の笑顔を見たい。<br>
            夢を実現する手助けをさせてください。</p>
            <div class="util-btn"><a href="<?php echo get_template_directory_uri(); ?>/company/company.html">MORE</a></div>
        </div>
      </div>
    </section>
    <!-- ./company -->

    <section class="recruit" id="recruit">
      <div class="recruit-picture">
        <img src="<?php echo get_template_directory_uri(); ?>/img/recruit.jpg" alt="">
      </div>
      <div class="section-recruit">
        <div class="recruit-content">
          <h2 class="section-title">RECRUIT</h2>
          <p class="section-text">採用情報</p>
          <p class="recruit-text">私たちと一緒に働きませんか？</p>
          <div class="util-btn"><a href="<?php echo get_template_directory_uri(); ?>/recruit/recruit.html">MORE</a></div>
        </div>
      </div>
    </section>
    <!-- ./recruit -->

    <section class="contact" id="contact">
      <h2 class="section-title">CONTACT</h2>
      <p class="section-text">お問い合わせ</p>
      <p class="contact-text">Webサイトの制作のご依頼やお見積りなど、お気軽にご相談ください。</p>
      <div class="util-btn"><a href="<?php echo get_template_directory_uri(); ?>/contact/contact.html">MORE</a></div>
    </section>
    <!-- ./contact -->
  </main>


  <?php get_footer(); ?>