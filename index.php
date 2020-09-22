<?php
include 'nav.php'; 
?>
<div id=content>
        <div id="home">
            <div class="home-in">
                <div class="home-first">
                    <div class="title"> LEE MINYEONG </div>
                    <div class="detail">DEVELOPER</div>
                    <div class="detail"> Department of Computer Engineering, Sejong University, Seoul, Republic of Korea
                    </div>
                </div>
                <div class=" home-second">
                    <div class="title">My CV</div>
                    <a href="#" class="attachment">png</a>
                </div>
                <div class="home-third">
                    <div class="title">Contact</div>
                    <div class="paper-plane">
                        <img src="image/paperplane.png">
                    </div>
                    <div class="detail">pre106879@naver.com</div>
                    <div class="contact-info">
                        <input id="id-contact-name" type="text" class="input-text contact-name" placeholder="name">
                        <input id="id-contact-email" type="text" class="input-text contact-email" placeholder="email">
                        <input id="id-contact-phone" type="text" class="input-text contact-num" placeholder="phone number">
                    </div>
                    <textarea id="id-contact-contents" class="input-text" placeholder="content" rows="5" cols="57" ></textarea>
                    <button id="id-send-email"class="input-text contact-submit">submit</button>
                    <div>
                        <img class="contact-img" src="image/insta.png">
                        <img class="contact-img" src="image/facebook.png">
                        <img class="contact-img" src="image/skills/GitHub-Mark-120px-plus.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/send_mail.js"></script>