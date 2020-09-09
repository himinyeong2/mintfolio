<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINTFOLIO</title>
    <link href="css/index_style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="header">
        <div class="card-header">
            <div class="title">Mintfolio</div>
            <div class="header-nav">
                <a href="index.php">메인</a>
                <a href="calendar.php">일기</a>
                <a href="#">소개</a>
                <a href="#">문의</a>
            </div>
        </div>
    </div>
    <div id="main">
        <div id="modal">
            <div>
                <img id="modal-detail-img" src="" alt="NO IMAGE">
            </div>
            <div id="modal-title">사진 제목</div>
            <div id="modal-detail">사진설명</div>
            <a class=modal_close_btn>닫기</a>
        </div>
        <ul class="img-columns">
            <li class="img-card">
                <img  id="id-chatting-img" src="image/chatting.png">
                <span id="id-chatting-title" class="inner-detail">멀티 채팅</span>
                <span id="id-chatting-detail" class="inner-detail">이 프로그램은 SELECT MODEL 기반 C++채팅 프로그램입니다. 클라이언트는 대화상자 기반 윈도우 프로그래밍으로 구현하였고, 서버는 콘솔기반으로, 사용자 정보를 저장하는 구조체 배열을 만들어 소켓을 관리합니다. TCP 소켓으로 통신하며, 스레드를 통하여 같은 서버와 포트로 연결되어 있는 유저가 보내는 메시지를 받고 서로 통신한다.</span>
            </li>
            <li class="img-card">
                <img id="id-jolup-img" src="image/jolup.png">
                <span id="id-jolup-title" class="inner-detail">졸업 할수 있을까?</span>
                <span id="id-jolup-detail" class="inner-detail">이 프로그램은 Flask로 만든 세종대 컴퓨터공학과 한정 졸업 예측 프로그램입니다. index페이지에서 세종대 학사정보시스템에서 제공하는 성적엑셀 파일을 input으로 넣으면 일정 학점이 모두 넘었을 경우 졸업 가능 라벨이 뜨고, 학점이 모자란 경우 어떤 영역에서 학점이 부족한지 출력됩니다.</span>
            </li>
        </ul>
        <ul class="img-columns">
            <li  class="img-card">
                <img id="id-costume-img" src="image/costume.png">
                <span id="id-costume-title" class="inner-detail">Costume Game</span>
                <span id="id-costume-detail" class="inner-detail">
                    이 프로그램은 JAVA 스윙 컴포넌트를 이용하여 아바타 객체에게 화장을 시켜주고 옷을 입혀주는 코스튬게임입니다. 메이크업 모드에서는 사용자가 원하는 색상을 클릭하면 아바타 얼굴에서의 적절한 위치에 메이크업이 됩니다. 메이크업 모드 완료 시, 옷입히기 모드가 시작되고 옷입히기 모드에서는 각 옷을 이미지 라벨로 만들고 이미지 라벨을 드래그 앤 드롭하여 아바타에게 입힐 수 있습니다. 옷입히기 까지 완료하면 사용자는 완성된 아바타의 모습을 볼 수 있습니다.
                </span>
            </li>
            <li  class="img-card">
                <img id="id-dayspirit-img" src="image/dayspirit.png">
                <span id="id-dayspirit-title" class="inner-detail">Dayspirit</span>
                <span id="id-dayspirit-detail" class="inner-detail">
                    이 프로그램은 FLASK 기반 다이어리 및 계획 작성 사이트 입니다. 사용자는 회원가입 후 로그인을 할 수 있으며, 일기와 계획을 작성할 수 있습니다. 일기와 계획을 등록하면 미리 등록되어있던 감정 키워드 및 계획 키워드와 유사도 측정을 합니다(FastText 모델 이용). 유사도 측정이 끝나면 감정분석결과가 출력되며 계획의 경우에는 계획키워드에 맞는 색상을 결과로 출력합니다. 
                </span>
            </li>
        </ul>
        <ul class="img-columns">
            
            <li class="img-card">
                <img id="id-madang-img" src="image/madang.png">
                <span id="id-madang-title" class="inner-detail">캠핑카중계프로그램</span>
                <span id="id-madang-detail" class="inner-detail">
                    이 프로그램은 JAVA와 MySQL을 연동하여 구현한 캠핑카 중계 프로그램입니다. Client모드/Manager모드로 나누어져있고 클라이언트는 캠핑카를 대여할 수 있습니다. 매니저모드에서 매니저는 캠핑카 등록 회사, 정비소가 될수 있고 캠핑카 등록회사는 본인의 캠핑카를 등록할 수 있고, 캠핑카를 등록할 수 있습니다. 정비소는 정비소를 등록할 수 있고, 캠핑카 반환 시 점검을 하고(점검 정보 저장) 수리가 필요할 시 수리를 할 수 있습니다(수리 정보 저장). 모든 매니저는 본인이 관리하는 캠핑카, 회사, 회원 등의 정보를 추가/변경/삭제 할 수 있습니다. 
                </span>
            </li>
            <li class="img-card">
                <img id="id-trax-img" src="image/trax.png">
                <span id="id-trax-title" class="inner-detail">TRAX GAME</span>
                <span id="id-trax-detail" class="inner-detail">
                    이 프로그램은 JAVA로 구현한 TRAX게임 입니다. 흑/백이 서로 공/수를 번갈아가며 게임이 진행되고 먼저 Loop를 만들거나 8칸 이상의 열린 Line을 만드는 팀이 승리합니다. 64*64 버튼 배열을 만들어 게임판을 구성하였고 이 게임의 기능에는 타일의 자동완성기능과 인공지능 기능이 있습니다. 여기서 인공지능기능이란 직접 구현해놓은 승리알고리즘을 이용하여 승리할 수 있는 지점에 타일을 위치시키는 기능입니다.
                </span>
            </li>
            <li class="img-card">
                <img id="id-mintfolio-img" src="image/mintfolio.PNG">
                <span id="id-mintfolio-title" class="inner-detail">Mintfolio</span>
                <span id="id-mintfolio-detail" class="inner-detail">
                    이 프로그램은 Mintfolio라는 저만의 사이트 입니다. 저의 포트폴리오 뿐만 아니라  소중한 하루를 기록할 수 있는 일기 기능도 있으며 저를 소개하는 모든 것이 담긴 사이트입니다! 꾸준하게 업데이트 할 예정이니 잘 지켜봐주세요!
                </span>
            </li>
        </ul>
    </div>
    <div id="footer">
    </div>
    <script type="text/javascript" src="js/index_script.js"></script>
</body>
</html>