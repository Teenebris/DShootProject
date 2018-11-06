<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('websiteModule.css') ?>
    <?= $this->Html->css('jhosestz.css') ?>
    <?= $this->Html->css('main.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
  <!-- Cookies Box -->
  <div id="cookiesEU-box" class="ww_cookie_info ww_cookie_info_none">
   <div class="cookiesEU-inner">
    <div class="cookiesEU-text">
    Strona korzysta z plików cookies. Możesz określić warunki przechowywania lub dostępu do plików cookies w Twojej przeglądarce.
    </div>
   <a href="#" class="cookiesEU-close">Rozumiem</a>
   </div>
  </div>

<div id="body">
 <div id="header">
  <div class="header-image"></div>
  <div class="header-menu">
   <span>Strzelnica</span>
   <?= $this->Html->link('Strona główna',['controller' => 'Events', 'action' => 'display', '_full' => true]); ?>
   <?= $this->Html->link('Logowanie',['controller' => 'Users', 'action' => 'login', '_full' => true]); ?>
   <?= $this->Html->link('Rejestracja',['controller' => 'Users', 'action' => 'add', '_full' => true]); ?>
   <a href="#">Regulamin</a>
  </div>
  <div class="header-title">
   <p style="font-size: 65px; text-align: center; line-height: 78px; opacity: 0.99;">
    <strong>
     <span style="opacity: 0.99; color:#ffffff;">Nie masz jeszcze konta?</span>
    </strong>
   </p>
  </div>
  <div class="header-button" style="">
   <a target="_self" href="/rejestracja" class="ww_button_link">
    <p>Zarejestruj się</p>
   </a>
  </div>
 </div>

 <!-- Main module -->
 <?= $this->Flash->render() ?>
 <div id="container">
  <?= $this->fetch('content') ?>
 </div>

  <div class="contact-container">
   <div class="contact">
    <span> Kontakt </span>
    <div class="line"></div>
    <div class="contact-text contact-Table" style="width: 100%;">
     <div class="contact-TableBody">
      <div class="contact-TableRow">
       <div class="contact-TableCell">&nbsp;<img src="img/domek.png"/></div>
       <div class="contact-TableCell">&nbsp;<img src="img/koperta.png"/></div>
       <div class="contact-TableCell">&nbsp;<img src="img/telefon.png"/></div>
      </div>
      <div class="contact-TableRow">
       <div class="contact-TableCell">&nbsp;<span>ul. Nadbystrzycka 38D <br/>20-618 Lublin <br/>Polska</span></div>
       <div class="contact-TableCell">&nbsp;<span style="color: #ffffff;">strzelnica@lublin.pl</span></div>
       <div class="contact-TableCell">&nbsp;<span style="color: #ffffff;">+48 123 456 789</span></div>
      </div>
     </div>
    </div>
   </div>
  </div>

  <!-- Footer -->
  <div id="footer">
   <div class="footer-text">
    <p style="font-size: 15px; text-align: center; line-height: 18px;">
     <span style="color:#ffffff;">Nam delenit fuisset dissentiunt eu, mel ei rebum voluptatum appellantur, cu ipsum nostrud recusabo nec.</span>
    </p>
   </div>
   <div class="footer-icon">
     <a target="_blank" href="http://facebook.com/">
       <img src="img/facebook-logo.png"/>
     </a>
     <a target="_blank" href="http://instagram.com/">
       <img src="img/instagram-logo.png"/>
     </a>
     <a target="_blank" href="https://twitter.com/">
       <img src="img/twitter-logo.png"/>
     </a>
     <a target="_blank" href="https://plus.google.com/">
       <img src="img/google-plus-logo.png"/>
     </a>
   </div>
   <div class="footer-bottom">• Strzelnica © 2018 • </div>
  </div>
 </div>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
<script src="./js/jquery.cookie.js"></script>
<script src="./js/jquery.cookiepolicy.js"></script>
<script src="./js/main.js"></script>

</body>
</html>
