<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="nav">
        <a class="my-ficture">
            <img src="image/flower.jpg">
        </a>
        <a id="id-home">HOME</a>
        <a id="id-about-me">ABOUT ME</a>
        <a id="id-experiences">EXPERIENCES</a>
        <a href="board.php" id='id-board'>BOARD</a>
    </div>
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
                        <input type="text" class="contact contact-name" placeholder="name">
                        <input type="text" class="contact contact-email" placeholder="email">
                        <input type="text" class="contact contact-num" placeholder="phone number">
                    </div>
                    <textarea class="contact" placeholder="content" rows="5" cols="57"></textarea>
                    <button class="contact contact-submit">submit</button>
                    <div>
                        <img class="contact-img" src="image/insta.png">
                        <img class="contact-img" src="image/facebook.png">
                        <img class="contact-img" src="image/skills/GitHub-Mark-120px-plus.png">
                    </div>
                </div>
            </div>
        </div>
        <div id="about-me">
            <div class="about-me-in">
                <div class="who-am-i">
                    <div class="title">WHO AM I?</div>
                    <div class="my-photo"></div>
                </div>
                <div class="skill">
                    <div class="title">SKILLS</div>
                    <div class="skills-in">
                        <div class="detail">Languages</div>
                        <div class="skills-in-item"><img src="image/skills/c.png"></div>
                        <div class="skills-in-item"><img src="image/skills/java.png"></div>
                        <div class="skills-in-item"><img src="image/skills/python.png"></div>
                        <div class="skills-in-item"><img src="image/skills/android.png"></div>
                    </div>
                    <div class="skills-in">
                        <div class="detail">Web</div>
                        <div class="skills-in-item"><img src="image/skills/html.png"></div>
                        <div class="skills-in-item"><img src="image/skills/css.png"></div>
                        <div class="skills-in-item"><img src="image/skills/javascript.png"></div>
                        <div class="skills-in-item"><img src="image/skills/php.png"></div>
                        <div class="skills-in-item"><img src="image/skills/jsp.png"></div>
                    </div>
                    <div class="skills-in">
                        <div class="detail">Framework</div>
                        <div class="skills-in-item"><img src="image/skills/flask.png"></div>
                        <div class="skills-in-item"><img src="image/skills/spring.png"></div>
                    </div>
                    <div class="skills-in">
                        <div class="detail">Database + etc</div>
                        <div class="skills-in-item"><img src="image/skills/mysql.png"></div>
                        <div class="skills-in-item"><img src="image/skills/oracledb.png"></div>
                        <div class="skills-in-item"><img src="image/skills/linux.png"></div>
                        <div class="skills-in-item"><img src="image/skills/GitHub-Mark-120px-plus.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="experiences">
            <div class="experiences-in">
                <div class="portfolio">
                    <div class="title">Project</div>
                    <div class="card portfolio-card">
                        <div class="img-in-card">
                            <img src="image/dayspirit_diary_result.png">
                        </div>
                        <div class="text-in-card">
                            <div class="title-in-card"> Dayspirit</div>
                            <div class="detail-in-card"> 감정 분석 다이어리</div>
                            <div class="lang-in-card"> Python Flask MySQL FastText</div>
                        </div>

                    </div>
                    <div class="card portfolio-card">
                        <div class="img-in-card">
                            <img src="image/costume.png">
                        </div>
                        <div class="text-in-card">
                            <div class="title-in-card">Costume Game</div>
                            <div class="detail-in-card"> 메이크업 및 코디 게임</div>
                            <div class="lang-in-card"> JAVA</div>
                        </div>
                    </div>
                    <div class="card portfolio-card">
                        <div class="img-in-card">
                            <img src="image/trax.png">
                        </div>
                        <div class="text-in-card">
                            <div class="title-in-card">TRAX Game</div>
                            <div class="detail-in-card"> 트랙스 게임</div>
                            <div class="lang-in-card"> JAVA</div>
                        </div>
                    </div>
                    <div class="card portfolio-card">
                        <div class="img-in-card">
                            <img src="image/jolup.png">
                        </div>
                        <div class="text-in-card">
                            <div class="title-in-card">Can I graduate?</div>
                            <div class="detail-in-card"> 졸업 측정 프로그램 </div>
                            <div class="lang-in-card"> Python Flask</div>
                        </div>
                    </div>
                    <div class="card portfolio-card">
                        <div class="img-in-card">
                            <img src="image/chatting.png">
                        </div>
                        <div class="text-in-card">
                            <div class="title-in-card">Multi Chatting</div>
                            <div class="detail-in-card"> Select 채팅 프로그램 </div>
                            <div class="lang-in-card">C++ winForm</div>
                        </div>
                    </div>
                    <div class="card portfolio-card">
                        <div class="img-in-card">
                            <img src="image/madang.png">
                        </div>
                        <div class="text-in-card">
                            <div class="title-in-card">Campingcar Relay</div>
                            <div class="detail-in-card"> 캠핑카 중계 프로그램 </div>
                            <div class="lang-in-card" >JAVA MySQL</div>
                        </div>
                    </div>
                </div>

                <div class="awards">
                    <div class="title">Awards / Certification / etc..</div>
                    <div class="card award-card">
                        <div class="img-in-card">
                            <img src="image/1234.png">
                        </div>
                        <div class="text-in-card">
                            <div class="title-in-card"> 창의설계경진대회</div>
                            <div class="detail-in-card"> 인기상</div>
                            <div class="lang-in-card">2020/06/19</div>
                        </div>
                    </div>
                    <div class="card award-card">
                        <div class="img-in-card">
                            <img src="image/12345.png">
                        </div>
                        <div class="text-in-card">
                            <div class="title-in-card">창의설계경진대회</div>
                            <div class="detail-in-card"> 최우수상</div>
                            <div class="lang-in-card">2020/06/19</div>
                        </div>
                    </div>
                    <div class="card award-card">
                        <div class="img-in-card">
                            <img src="image/ccna.png">
                        </div>
                        <div class="text-in-card">
                            <div class="title-in-card">CCNA</div>
                            <div class="detail-in-card">Cisco Certified Network Associate</div>
                            <div class="lang-in-card">2019/06/03~2022/06/03</div>
                        </div>
                    </div>
                    <div class="card award-card">
                        <div class="img-in-card">
                            <img src="image/dahaejwo_logo.jpg">
                        </div>
                        <div class="text-in-card">
                            <div class="title-in-card">다해줘테크</div>
                            <div class="detail-in-card">개발팀 인턴</div>
                            <div class="lang-in-card">2020/09/01~2020/12/31</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="board">

        </div>
        <script type="text/javascript" src="script.js"></script>
</body>

</html>