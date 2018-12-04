<?php 
  //Check for submit
  if(filter_has_var(INPUT_POST, 'submit')){
    echo 'Submitted';
    //Get form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $eventtype = $_POST["event"] ;
    $date = $_POST["date"];
    $plan = $_POST["plan"] ;
    $pavillion = $_POST["pavillion"];
    $guestnum = $_POST["guestnum"];
    $guestages = $_POST["guestages"];
    $newsletter = $_POST["news"];
    $message = htmlspecialchars($_POST["message"]);

       // Check the data.
       if (empty($name) OR empty($message) OR empty($date) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
          header("Location: https://www.jardinspaloma.com/index.php?success=-1#contact");
          exit;

      } else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        //Fail

      } else {

    }
      

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="descritpion" content="Jardins Paloma é o espaço para eventos ideal, disponível para  com pavilhões, jardins, piscina, bar, e muito mais, situado na Matola, Moçambique. Faça já a sua reserva de aniversário, festa de casamento, festa de Fim de Ano, reunião, comemoração...! / Jardins Paloma is located in Matola, Mozambique, and is an events venue with beautiful pavillions, gardens, swimming pools and a bar, perfect for your birthday or wedding celebration, New Year's party, business or corporate commemmorations, and much more! Call us now, or request a quote!">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jardins Paloma, espaço para eventos na Matola, Maputo - Venue Hire in Matola, Maputo</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="vendors/normalize.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="queries.css">
    <!-- <link rel="stylesheet" href="vendors/animate.min.css"> -->
    <link rel="stylesheet" href="vendors/grid.min.css">
</head>

<body>
  <header>
      <nav id="navbar">
          <div class="row">
             <a href="#top">
               <img src="assets/img/jpcopy.png" class="logo" alt="logo">
               <img src="assets/img/jp-logo-small.png" class="logo-green" alt="">
              </a>
              <ul class="main-nav">
                  <li><a href="#info">INFO</a></li>
                  <li><a href="#galeria">GALERIA</a></li>
                  <li><a href="#blueprint">PAVILHÕES</a></li>
                  <li><a href="#plans">PLANOS</a></li>
                  <li><a href="#reservas">RESERVAS</a></li>
                  <li><a href="#contacto">CONTACTO</a></li>
                  <li id="ligueja"><a href="tel:+258846219541"><i class="fas fa-phone-volume"></i>LIGUE JÁ</a></li>
                  <li>
                      <!-- <div id="google_translate_element"></div> -->
                      <script type="text/javascript">
                        function googleTranslateElementInit() {
                          new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT, autoDisplay: false}, 'google_translate_element');
                        }
                        </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                  </li>
                  <a href="javascript:void(0);" class="icon" onclick="openMenu()">
                      <i id="menu-bars" class="fas fa-bars"></i>
                      <i id="close" class="fas fa-times"></i>
                    </a> 
                </ul>
          </div>
      </nav>
      <div id="mobile-links" class="container-links">
          <ul>
            <li><a href="#info">INFO</a></li>
            <li><a href="#galeria">GALERIA</a></li>
            <li><a href="#blueprint">PAVILHÕES</a></li>
            <li><a href="#plans">PLANOS</a></li>
            <li><a href="#reservas">RESERVAS</a></li>
            <li><a href="#contacto">CONTACTO</a></li>
          </ul>
         </div>
  </header>

  <section id="header">
      <nav class="vertical-nav">
          <ul>
              <li><a href="https://www.facebook.com/jardinspaloma/"><ion-icon name="logo-facebook"></ion-icon></a></li>
              <li><a href="https://www.instagram.com/jardinspaloma/"><ion-icon name="logo-instagram"></ion-icon></a></li>
              <li><a href="https://www.linkedin.com/company/jardins-paloma/"><ion-icon name="logo-linkedin"></ion-icon></a></li>
              <li><a href="mailto:info@jardinspaloma.com"><ion-icon name="mail"></ion-icon></a></li>
              <li><a href="tel:+258846219541"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
          </ul>
        </nav>
    <div class="container-title">
      <div class="row">
        <h1>Jardins Paloma</h1>
        <h6>O seu espaço para eventos</h6>
        <a href="#reservas" class="btn btn-full">Reserve já!</a>
        <a href="#info" class="btn btn-ghost">Saiba mais</a>
      </div>
    </div>
    <div class="container-welcome">
      <div class="row">
        <div class="col span-1-of-2 box">
          <ul>
            <li>BEM-VINDO</li>
            <li>WELCOME</li>
            <li>JARDINS PALOMA</li>
          </ul>
        </div>
        <div class="col span-2-of-2 box">
            <p>Os Jardins Paloma constituem um espaço de belíssimos jardins e pavilhões, piscinas, bar e esplanada, ao seu dispôr para qualquer evento. Localizado na Matola, Moçambique, os Jardins Paloma acolhem
            variados eventos desde casamentos, aniversários, baptizados, festas de fim de ano, celebrações, 
            comemorações, reuniões ou apresentações de empresa, entre muitos outros.</p>
        </div>
        
      </div>
    </div>
    <div class="container-availability">

    </div>
  </section>
  <!-- INTRO PICS-->
  <section id="intro-pics">
      <div class="container-intro-pics">
        <div class="gallery-showcase">
          <ul>
            <li class="col span-1-of-3 clearfix"><picture class="gallery-photo"><img src="assets/img/pavilion.jpg" alt=""></picture></li>
            <li class="col span-1-of-3 clearfix"><picture class="gallery-photo"><img src="assets/img/view.png" alt=""></picture></li>
            <li class="col span-1-of-3 clearfix"><picture class="gallery-photo"><img src="assets/img/bttrfly.jpg" alt=""></picture></li>
          </ul>
        </div>
        </div>
  </section>

<!--INFO SECTION-->
  <section id="info">
    <div class="row">
        <h2>Faça o seu evento</h2>
        <hr>
    </div>
    <div class="container-info">
      <div class="row">
        <h4>Ao seu dispor encontrará:</h4>
        <div class="col span-1-of-3 box">
        <ul>
          <li>
              <i><img src="data:image/png;base64,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"></i>
              <h5>Parque infantil</h5>
              <p>Apoiado pelo pavilhão infantil, o parque tem um escorrega, espaço para brincar na relva e pula-pulas (insufláveis) para completar a diversão!</p>
          </li>
          <li>
            <i><img src="data:image/png;base64,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"></i>
            <h5>Mini-zoo</h5>
            <p>No mini-zoo moram a veterana macaca Niki, uma tartaruga, coelhos, e os nossos estimados cães de guarda.</p>
          </li>
        </ul>
      </div>
      <div class="col span-1-of-3 box">
        <ul>
          <li><i><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAUoSURBVGhD7VhrTBRnFN0uSJDFUokNAkbYpfaHSS0NLymmVYO1dIlEYXdNU1L7x5qmrenTGmNb0oc0Tf1dkqYaLWUWEKQFoYmwPFQUpRXUVCXQH/JSGlicmX1QnK/3zn5jZx8K7my2hMxJTmbnfHfPvYed/WYWjQoVCwzEtDZWsOjfF8z604LFcB2Og3C00mVFEEpWxROL4RPwtAFvit5mww90OXQgJsMGGHoMmhE5IVgXLQka4FsAnPLzNusbaUloQExpGdCI920kNlMYRDCnbQIPd0DvUAYhGs1j0Kg3UCOkkiBwqUbhJRTIFxnSIEJJWq5/A8NvxKI3EbM+X9hpyKSljwzBklbk762vg09/B3oTU0o6LVUOwZL6oXcjww2yO2MJXVYE+DS/8fE+j1cAXQ4t4C90yKuZRV9FlxQDPtWjXt5mw7d0KfTwC2LWV9IlxUAvH+9DdCn08A1iL1p1zZatKz+3/vH9owUry5XQXZx6Te4d1iDjxiRiy44lXTmxPaOvJBIldOxIue+LVIPMB4s2yNS25AFblq6iO3fZ1yMFKyuU0F2cMiD3DmsQOF8cu5YaJAD+1yCu4tTmtpyYjJ7cuOdGjYkZSjhbom+We4c1iLr9BqAaJBj4BrltTHK3Zekmu3KXtcPz0qQSOrav9vplGNYgcK5uv75QgwSDRRtkojCZhR9Wg2fXxzaNFCQOKiHsWqzcO6xB1PtIAKpBgoFvEGjeasvU5V/Mi9s4bEzKV8LZktRWuXdYg8D5wt61Ehq4wxEMWxH5M59DJREHyg7/uqf8KDn+0V6vIFiH9RFW9guxUEKlfbmoA/E1VUWA9qW8hxQEvbEH9hILKaQeiQ38d1SaG+ktzuEIK0e0Vu6EhhDPvy3rp55YcWxkGnXDkZvE/to6T5DPiFZrZetRh0azS6r5DLEeAPp7oi56se9SGYfKxFp5D/SaKn2W6I8MiPUrjo/YNdWTceIbZD3SWxzDojYf7LrguiwNEF/Hjj7VxP+hq+HEEBKTqsbJSz/1OZOZcU6uR1vt97KZoTtrrbcm5ToStayqoTtYI9dXM2Ps1sp+Z2LVba96XQ07jb2X17Fjkoaz0THnRtkVd9fWDieJrP7PFBlfx5Gd51zkyXreS4+GuqIuF3m6yeGlRwLzTjvJi63+XmmNDrL9jIvE1Hp7PagHvv/ldifB2eiYcwOLy67OkL2/u4kRAm1qc5Lisy5yoN9NUD/YP0NMcI56YaeTfHB5RtSRu867yGbQt0DTty556pFv97oJ/nE225yktNtFPr/i0T/uc5NtnR6vB/XAGXAW0SuYIAuSapCFxkcJ8sYF1yW81vH6lZu8A9cp6niU61iH+u4eb/1T+B6gjsTX8jWsDaYHzkbHnBsJ9Xwv7hT4pZWb6WGnQR2Pch2/kKjH1PBkP/2yIrGxtOvAAPd1rFkKtcH0SDjJzz9ItJV7Hd8UVc3e29jmvPVqt/PGMy38BGoSNzSM/bPHNvb3C62O4SjrXUHSkxt41nLGNWDsdPwVd4JzSzq+Lux0DeEa1ki61AO9ngdPSUeua+YnsLe8B85Gx5wHqkmEluHa5aYiGVaIYDgGHkW8bmhIuPOegqPfTRDu3FeBfb46+Ni1DNvorz+kB8O14mx0ynnCKiyFAfYBO8D4Ogz6C5hvwaVI5m4ePlp4dM6mZfg3xQa1jhSo+R40GJ7thaG+wkcbzTFBB9pB0C7iGtT8qKmdXoOPJnBeigM+pMefcOwA7sOZcE2FirBBo/kXT0a3cNnM7PIAAAAASUVORK5CYII="></i>
            <h5>Piscinas</h5>
            <p>Existem duas piscinas perto do bar, uma para miúdos e outra para graúdos, apoiadas por WC feminino e masculino.</p>
          </li>
          <li><i><img src="data:image/png;base64,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"></i>
            <h5>Jardins</h5>
            <p>Cerca de 15,000 &#13217; de jardim florido, relva, e diversos tipos de árvores tropicais.</p>
          </li>
        </ul>
      </div>
      <div class="col span-1-of-3 box">
        <ul>
            <li><i><img src="data:image/png;base64,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"></i>
              <h5>Arte</h5>
              <p>Ao lado do pavilhão principal encontra-se uma escultura da artista Yana Naidenov, e batiks na sala de conferências. Acolhemos workshops ou aulas para criativos, venha dar asas 'a sua imaginação!</p>
            </li>
            <li>
                <i><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQtSURBVGhD7ZddaBxVGIYPUbRJaFIlalLIJlqC1mi1KForFuqVpUqhkN2UemFrFa+8DVWoelH0ItlpECkWixZRIaLVNl4YBW1isjOzSfqzaao0uII0lTZNU7M/M9nNef1m54vZTafFTTbsjOwDL9k9e+bkfWe+8zOiRIkS7gUQt8pI/Rty6K6I1O+YlKHquNTuvCyHa1UZ8e3hbu5GjvhekWp1AiduB3pXAHojcPIJQKtDpo0kdQoVadjMl7gPeWq1gt5yoH8l8FsT8NcGINkFzF4EptuBixRo9F6grwKyr0JaoflS9yDP+l7HCQoxuA6IfQdMPAdcfjo3iPV9sgW49g0QqoP8pXJWnm7cxEMUH0QbVsiBKhMD1UCi3zZuhuww2UGsEKlR+/vkp1R65ZDhmgs8TPGhkgpm6v/8A2TQP2/WCmN8bX+OH8ptv0IhRxrsOXOu/gUeqrjQXf3DqntceorLJytMasz+m/49N4TV78JjdpCh2h4eqrjQ8prE8Fq66wfnlaTSSUdt83NK/Uqldzi3X/8qyMGaKA+VH0F15hlFM9oKJfOrqlnZ8xCV1ps3ViycG2pO+hprOZ5ga/nRPogaRTf/PKCbKISMD8pl+hDtGcdpL3SS+iyZHi/8E7FQtJlNim6knYzlq4kjTUZKIcPHyq4P0XM3mY/cfI6cqv2ebS0OCrLPyVi+GujeN55qF5g9SvtIdohuCjb+jh3AcdXy2UFGfVvZ0uLo6sItnx0e1Y+924elqHv/z2nj5fukucuH9N77kW6rz0j+SMvxDfeRT+x9RC/QPtK/+8j6q5UvmXERQCGVfGQLHUk2Ou/sU0fnd/aIbyNbWTox0bo1JgLSydBilKjaDvlTM521nswNYp21ztIhspfOWnaIwp+EY8Lf4WQqX1k3JPVek5nZ6bNPv+qC0+9ynbEgWm6jMGEnc/mIxjiQeR8ZqW+j95EzUuP3Ecv88D0heWb1Lv6Xy0dSBNaQmamF5vLQkHVDeLjikhCBgIPB/6K/DbGjiYdxB1QeHzoYvammhX8nX+4eIJ6viAv/iJNhZ/k/5kvdx7RobaYVKO5sPFv+c1K8WMmXuRMy+ur1xudFQRMUeB13dzdk9nOnELZaXuNu7mdC7KyiyT+2MAS1fcldvENctD5OT+bf8xiFiF4V21bxz94i2rz37VjZDkyu3C3pbLaem71HR9h8+KNvx3HwhyvXuMmbWEEyL1KaMcVN3qQUxG2UgriN/12QTs2IcZM36VBnNlhBFC2Z5iZvElSNbXYQQ3KTN1HC5v7MHLHKSzUe5GZvoejGdprkM3NBFM0cU0LGWv7Z3bwFlHWqyc2Kbh6fC5AjzTAp0PuuDETGHg1q5h6aB1+QLjkGcJJmnrdCdWqmXwklG3m44kDls4U0uFTRk1KD4VgdD1uiRIllRYh/ACi5uCl4Eu0FAAAAAElFTkSuQmCC"></i>
                <h5>Bar e esplanada</h5>
                <p>Balcão e bar, com espaço de esplanada.</p>
            </li>
        </ul>
      </div>
    </div>
  </section>

<!--GALLERY SECTION-->
<section id="galeria">
  <div class="container">
      <div class="gallery-showcase clearfix">
          <li class="col span-1-of-4"><picture class="gallery-photo"><img src="assets/img/gallery1.jpg"></picture></li>
          <li class="col span-1-of-4"><picture class="gallery-photo"><img src="assets/img/gallery2.jpg"></picture></li>
          <li class="col span-1-of-4"><picture class="gallery-photo"><img src="assets/img/gallery3.jpg"></picture></li>
          <li class="col span-1-of-4"><picture class="gallery-photo"><img src="assets/img/gallery4.jpg" alt=""></picture></li>
        </div>
      </div>
        <div class="gallery-showcase clearfix">
          <li class="col span-1-of-4"><picture class="gallery-photo"><img src="assets/img/gallery5.jpg" alt=""></picture></li>
          <li class="col span-1-of-4"><picture class="gallery-photo"><img src="assets/img/gallery6.jpg" alt=""></picture></li>
          <li class="col span-1-of-4"><picture class="gallery-photo"><img src="assets/img/gallery7.jpg" alt=""></picture></li>
          <li class="col span-1-of-4"><picture class="gallery-photo"><img src="assets/img/gallery8.jpg" alt=""></picture></li>
        </div>
  </div>
</section>

<!--EVENTS LIST SECTION-->
<section id="eventos">
    <h2>Eventos que acolhemos</h2>
    <hr> 
  <div class="container-eventos">
    <div class="row">
              <div class="col span-1-of-4 box">
                <ul class="events-list">
                  <li><i class="fas fa-birthday-cake"></i>Aniversários</li>
                  <li><i class="fas fa-chalkboard-teacher"></i>Apresentações</li>
                  <li><i class="fas fa-place-of-worship"></i>Baptizados</li>
              
                </ul>
              </div>
              <div class="col span-1-of-4 box">
                <ul class="events-list">
                  <li><i class="fas fa-ring"></i>Casamentos</li>
                  <li><i class="fas fa-cocktail"></i>Festa de cocktail</li>
                  <li><i class="fas fa-drum"></i>Comemorações</li>
         
                </ul>
              </div>
              <div class="col span 1-of-4 box">
              <ul class="events-list">
                  <li><i class="fab fa-black-tie"></i>Conferências</li>
                  <li><i class="fas fa-handshake"></i>Confraternizações</li>
                  <li><i class="fas fa-briefcase"></i>Congressos</li>  
              </ul>
              </div>
              <div class="col span-1-of-4 box">
                  <ul class="events-list">
                    <li><i class="fas fa-user-graduate"></i>Cursos e Workshops</li>
                    <li><i class="fas fa-palette"></i>Exposições</li>
                    <li><i class="fas fa-pen-fancy"></i>Reuniões</li>
                  </ul>
              </div>
    </div>
  </div>
</section>


<!--DRINKS SECTION-->
<section id="drinks">

  </section>

  <!-- JARDINS PALOMA BLUEPRINT -->
<!-- <section id="blueprint">
  <h2>Blueprint</h2>
  </section> -->

<!--GALLERY2 SECTION-->
<section id="gallery2">
  <div class="container">
      <ul class="gallery-showcase">
          <li class="col span-1-of-4"><picture class="gallery-photo"><img src="assets/img/gallery9.jpg" alt=""></picture></li>
            <li class="col span-1-of-4"><picture class="gallery-photo"><img src="assets/img/gallery11.jpg" alt=""></picture></li>
            <li class="col span-1-of-4"><picture class="gallery-photo"><img src="assets/img/gallery15.jpg" id="photo-pav" alt=""></picture></li>
            <li class="col span-1-of-4"><picture class="gallery-photo"><img src="assets/img/festa.jpg" alt=""></picture></li>
            <li class="col span-1-of-4"><picture class="gallery-photo"><img src="assets/img/rabbit.jpg" alt=""></picture></li>
            <li class="col span-1-of-4"><picture class="gallery-photo"><img src="assets/img/festa2.jpg" alt=""></picture></li>
            <li class="col span-1-of-4"><picture class="gallery-photo"><img src="assets/img/flower.jpg" alt=""></picture></li>
            <li class="col span-1-of-4"><picture class="gallery-photo"><img src="assets/img/gallery10.jpg" alt=""></picture></li>
      </ul>
  </div>
    <div class="container-last">
        <h4>[]]</h4>
      </div>
  </section>

<!--PLANOS SECTION-->
<section id="plans">
  <h2>Planos de Reserva</h2>
  <hr>
  <div class="container-plans">
    <p class="box">Poderá escolher o plano correspondente ao tipo de evento que pretende, consoante o número de convidados. Os preços variam conforme o número de pavilhões que quiser reservar. Preencha o <a href="#reservas">formulário de reserva</a>, ou escolha um dos planos abaixo, e envie-nos para obter uma cotação.</p>
    <div class="row">
      <div class="col span-1-of-4 box-plan">
        <ul>
          <li><i class="fas fa-warehouse"></i><i class="far fa-sun"></i><i class="fas fa-concierge-bell"></i></li>
          <li>COMPLETO</li>
          <li>Aluguer de espaço ou sala, com decoração e catering.</li>
        </ul>
      </div>
      <div class="col span-1-of-4 box-plan">
          <ul>
            <li><i class="fas fa-warehouse"></i><i class="far fa-sun"></i></li>
            <li>SALA + DECORAÇÃO</li>
            <li>Aluguer de espaço ou sala com decoração</li>
          </ul>
      </div>
      <div class="col span-1-of-4 box-plan">
          <ul>
            <li><i class="fas fa-warehouse"></i><i class="fas fa-concierge-bell"></i></li>
            <li>SALA + CATERING</li>
            <li>Aluguer de espaço ou sala com catering</li>
          </ul>
      </div>
      <div class="col span-1-of-4 box-plan">
        <ul>
          <li><i class="fas fa-warehouse"></i></li>
          <li>SIMPLES</li>
          <li>Aluguer de espaço ou sala</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!--CAKES-->
<section id="cakes">
  </section>

<!--RESERVAS SECTION-->
  <section id="reservas">
    <div class="container-reservas">
      <div class="row">
        <h2>Reservas</h2>
      </div>
      <div class="container">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="contact-form">
              <div class="row">
                <?php
                      if($_GET['success'] == 1) {
                          echo "<div class=\"form-messages success\">
                          Thank you! Your message has been sent.</div>";
                      }

                      if($_GET['success'] == -1) {
                          echo "<div class=\"form-messages error\">
                          Oops! Something went wrong. Please try again.</div>";
                      }

                      ?>
              </div>
                  <div class="row">
                      <div class="col span-1-of-3">
                          <label for="name">Nome</label>
                  </div>
                      <div class="col span-2-of-3"><input type="text" name="name" id="name" placeholder="" value="<?php echo isset($_POST['name']) ? $name : '' ;?>" required></div>
                  </div>
                     
                  </div>
                  <div class="row">
                        <div class="col span-1-of-3"><label for="email">Email</label></div>
                        <div class="col span-2-of-3"><input type="email" name="email" id="email" value="<?php echo isset($_POST['email']) ? $email : '' ;?>" placeholder="" required></div>
                    </div>
                      <div class="row">
                          <div class="col span-1-of-3"><label for="event">Tipo de Evento</label></div>
                          <div class="col span-2-of-3"><input type="text" name="event" id="event" value="<?php echo $event;?>" placeholder="" required></div>
                          <span class="error"><?= $event_error ?></span>
                      </div>
                      <div class="row">
                          <div class="col span-1-of-3"><label for="date">Data do Evento</label></div>
                          <div class="col span-2-of-3"><input id="date" type="date" name="date" id="date" value="<?php echo $date;?>" placeholder="DD/MM/AAAA" required></div>
                          <span class="error"><?= $date_error ?></span>
                        </div>
                      <div class="row">
                          <div class="col span-1-of-3"> 
                            <label for="plan">Plano de reserva</label>
                          </div>
                          <div class="col span-2-of-3">
                              <select name="plan[]" value="<?php echo $plan;?>" id="plan">
                                  <option value="completo">Completo</option>
                                  <option value="pav+deco">Pavilhão + Decoração</option>
                                  <option value="pav+cat">Pavilhão + Catering</option>
                                  <option value="simples">Simples</option>
                                </select>
                          </div>
                          <span class="error"><?= $plan_error ?></span>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3"> 
                              <label for="">Pavilhões</label>
                            </div>
                            <div class="col span-2-of-3">
                                <label class="container">Principal
                                    <input type="checkbox" name ="pavillion[]" value="Principal" checked="checked">
                                  </label>
                                  <label class="container">Conferências
                                      <input type="checkbox" name ="pavillion[]" value="Conferencias" checked="checked">
                                    </label>
                                    <label class="container">Rústico
                                        <input type="checkbox" name ="pavillion[]" value="Rustico" checked="checked">
                                      </label>
                                      <label class="container">Infantil
                                          <input type="checkbox" name ="pavillion[]" value="Infantil" checked="checked">
                                        </label>
                            </div>
                            <span class="error"><?= $pavillion_error ?></span>
                          </div>
                      <div class="row"><div class="col span-1-of-3"><label for="">Número de convidados</label></div>
                        <div class="col span-2-of-3">
                            <select name="guestnum[]" value="<?php echo $guestnum;?>" id="guests">
                                <option value="Menos de 10">Menos de 10</option>
                                <option value="10-20">10-20</option>
                                <option value="30-40">30-40</option>
                                <option value="50+">+50</option>
                                <option value="100+">+100</option>
                                <option value="200+">+200</option>
                              </select>
                              <span class="error"><?= $guestnum_error ?></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col span-1-of-3"> 
                          <label for="">Idades dos convidados</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="guestages[]" value="<?php echo $guestages;?>" id="ages">
                                <option value="Menos de 10">Crianças de idade inferior a 12</option>
                                <option value="10-20">Famílias</option>
                                <option value="30-40">Idades inferiores a 18</option>
                                <option value="50+">18+</option>
                                <option value="100+">21+</option>
                                <option value="200+">Grupo empresarial</option>
                              </select>
                        </div>
                        <span class="error"><?= $guestages_error ?></span>
                      </div>
                       <div class="row">
                              <div class="col span-1-of-3"><label>Subscrever a Newsletter</label></div>
                              <div class="col span-2-of-3">
                                <ul id="radio-buttons" >
                                  <li>
                                      <input class="check-radio" type="radio" text="Sim" name="news" id="news" checked
                                      <?php if (isset($_POST['news']) && $news=="yes") echo "checked";?> value="yes">Sim</li>
                                  <li>
                                      <input class="check-radio" type="radio" name="news" id="news"
                                      <?php if (isset($_POST['news']) && $news=="no") echo "checked";?> value="no">Não</li>
                                </ul>
                                </div>
                          </div>
                          <div class="row">
                                  <div class="col span-1-of-3"><label for="message">Mensagem</label></div>
                                  <div class="col span-2-of-3"><textarea name="message" id="message" placeholder="" required><?php echo isset($_POST['message']) ? $message : '';?></textarea></div>
                                  <span class="error"><?= $message_error ?></span>
                              </div>
                              <div class="row">
                                  <div class="col span-1-of-3"><label>&nbsp;</label></div>
                                  <div class="col span-2-of-3"><input class="send-button" type="submit" value="Enviar"></div>
                                </div>
        </form>
      </div>
    </div>
  </section>

<section id="map-section">
    <div id="map">

      </div>
</section>
  <section id="contacto">
    <div class="container">
      <div class="row">
        <h2></h2>
      </div>
    </div>
  </section>

<!--FOOTER-->
  <footer>
    <div class="row">
      <div class="col span-1-of-4">
          <img src="assets/img/jp.png" id="official-logo">
      </div>
      <div class="col span-2-of-4">
          <ul class="socialmedia-list">
              <li><a href="https://www.facebook.com/palomajardins.matola"><ion-icon name="logo-facebook"></ion-icon></a></li>
              <li><a href="https://www.instagram.com/jardinspaloma/"><ion-icon name="logo-instagram"></ion-icon></a></li>
              <li><a href="https://www.linkedin.com/company/jardins-paloma/"><ion-icon name="logo-linkedin"></ion-icon></a></li>
              <li><a href="mailto:info@jardinspaloma.com"><ion-icon name="mail"></ion-icon></a></li>
            </ul>
      </div>
      <div class="col span-3-of-4">
          <ul class="contact-list">
              <li><i class="fas fa-map-marker-alt"></i>Rua Maganja da Costa, Matola, Moçambique</li>
              <li><i class="far fa-envelope"></i>Geral: <a href="mailto:info@jardinspaloma.com">info@jardinspaloma.com</a></li>
              <li><i class="far fa-envelope"></i>Reservas: <a href="mailto:ec@jardinspaloma.co.mz">ec@jardinspaloma.co.mz</a></li>
              <li><i class="fas fa-phone"></i><a href="tel:258-*******">+258 *******</a></li>
            </ul>
      </div>
      <div class="col span-4-of-4">

          <div class="row">
             
          </div>
      </div>
    </div>
  
   
    
    <p>Jardins Paloma &copy; 2018 • Designed and coded by <a href="http://fomalhaut.nl">Fomalhaut</a></p>
    <!-- <a href="https://icons8.com">Icon pack by Icons8</a> -->
  </footer>


  <script src="assets/js/script.js"></script>
  <script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWcaUioI2rJdO4aL1xHYuNdCMHT5l4l7Q&callback=initMap">
  </script>
</body>
</html>
