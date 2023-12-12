<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginmain.css">
    <title>DayTravel홈페이지</title>
    <script src="https://kit.fontawesome.com/9912971766.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
    </style>
</head>

<body>

    <div class="nav_container">
        <div class="search_nav">
            <ul>
                <li><a href="http://software.hongik.ac.kr/a_team/a_team5/project/login/loginmain.php">DayTravel</a></li>
                <li class="mainsearch">
                    <form id="mainsearch" action="/">
                        <input type="text" name="mainsearch" placeholder="메인 검색">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </li>
                <li>
                    <i class="fas fa-user-circle"></i>
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-bell"></i>
                    <i class="fas fa-bars"></i>
                </li>
            </ul>
        </div>



        <div class="nav">
        <ul>
                <li><i class="fas fa-bars" style="margin-right: 10px;"></i>카테고리</li>
                <li><a href="http://software.hongik.ac.kr/a_team/a_team5/project/post/post.php">지역별보기</a></li>
                <li><a href="http://software.hongik.ac.kr/a_team/a_team5/project/recommand/recommend.html">추천여행지</a></li>
                <ul class="menu">
                    <li style="margin-left: -140px; margin-right: 100px;">테마여행
                      <ul class="depth" style="margin-left: 0px; margin-top: 5px;">
                        <li style="width: 160px"><a href="http://software.hongik.ac.kr/a_team/a_team5/project/tema/tema_date.html">데이트</a></li>
                        <li style="width: 160px"><a href="http://software.hongik.ac.kr/a_team/a_team5/project/tema/tema_family.html">가족여행</a></li>
                        <li style="width: 160px"><a href="http://software.hongik.ac.kr/a_team/a_team5/project/tema/tema_onchen.html">온천</a></li>
                        <li style="width: 160px"><a href="http://software.hongik.ac.kr/a_team/a_team5/project/tema/tema_moutain.html">산</a></li>
                        <li style="width: 160px"><a href="http://software.hongik.ac.kr/a_team/a_team5/project/tema/tema_sports.html">스포츠</a></li>
                      </ul>
                    </li>
                </ul>  
                <li> <a href="http://software.hongik.ac.kr/a_team/a_team5/project/tema/tag.html">오늘의태그</a>
                    </li>
                <li> <a href="http://software.hongik.ac.kr/a_team/a_team5/project/mypage/view_radio.php">마이페이지</a>
                </li>
            </ul>

            <ul>
                <div class="link">
                    <a href="http://software.hongik.ac.kr/a_team/a_team5/project/mypage/view_radio.php">마이페이지</a>
                    <a href="http://software.hongik.ac.kr/a_team/a_team5/project/login/info.php">회원정보수정</a>
                    <a href="http://software.hongik.ac.kr/a_team/a_team5/project/login/logout.php">로그아웃</a>
                </div>
            </ul>
        </div>
    </div>

    <div class="main-container">
        <div class="main-img">
            <img src="mainimg.png" alt="">
        </div>

        

        <div class="main-status">
            <div class="main-list">
                <div class="item n1">
                    <div class="bg">
                    </div>
                    <div class="status_text">
                        <strong>0.0 C <span style="margin-left: 40px">맑음</span></strong>
                    </div>
                </div>
                <div class="item n2">
                    <div class="bg">
                        <div class="title">조석예보</div>
                    </div>
                    <div class="status_text">
                        <div class="high">
                            <span> 15:08</span>
                            <strong>789cm<em>고</em></strong>
                        </div>
                        <div class="low">
                            <span> 21:25</span>
                            <strong>158cm<em>저</em></strong>
                        </div>

                    </div>
                </div>
                <div class="item n3 level2">
                    <div class="bg">
                        <div class="title">
                            선재도 바다갈라짐
                        </div>
                        <div class="text">
                            09:00~12:46
                        </div>
                    </div>
                    <div class="status_text">
                        <strong>목섬에 <p>갈수 없어요</p></strong>
                    </div>
                </div>
                <div class="item n4 level2">
                    <div class="bg">
                        <div class="title">
                            영흥도 출조 상태
                        </div>
                        <div class="text">
                            나쁨
                        </div>
                    </div>
                    <div class="status_text">
                        <strong>출조상태 <p>나쁨</p></strong>
                    </div>
                </div>
                <div class="item n5 level1">
                    <div class="bg">
                        <div class="title">여객선예매</div>
                    </div>
                    <div class="status_text">
                        <strong>백령도까지 <p>정상운항</p></strong>
                    </div>
                </div>
            </div>

        </div>

        <div class="main-popular">
            <h2 class="section_title">요즘인기! 인천투어</h2>
            <ul class="list">
                <li class="item">
                    <div class="photo">
                        <img src="viewImg.jpg" alt="">
                    </div>
                    <div class="subject">
                        <a href="#" class="link">배 타고 들어가는 섬 둘레길 트레킹</a>
                    </div>
                    <div class="tag">
                        # 배타고이동 # 걷기좋은길 # 둘레길 # 트레킹코스 # 캠핑 # 백패킹 # 자전거라이딩
                    </div>
                </li>
                <li class="item">
                    <div class="photo">
                        <img src="viewImg (1).jpg" alt="">
                    </div>
                    <div class="subject">
                        <a href="#" class="link">인천 개항기를 품은 전시관'박문관 산책</a>
                    </div>
                    <div class="tag">
                        # 시간여행&nbsp;
                        # 개항장거리&nbsp;
                        # 이국적인&nbsp;
                        # 전시관&nbsp;
                        # 박물관&nbsp;
                        # 아이와함께&nbsp;
                    </div>
                </li>
                <li class="item">
                    <div class="photo">
                        <img src="viewImg (2).jpg" alt="">
                    </div>
                    <div class="subject">
                        <a href="#" class="link">카라반에서의 이색 캠핑 체험</a>
                    </div>
                    <div class="tag">
                        # 카라반 # 이색캠핑 # 바다뷰포인트 # 포레스트카라반 # 자바카라반 # 스파인카라반
                    </div>
                </li>
                <li class="item">
                    <div class="photo">
                        <img src="viewImg (3).jpg" alt="">
                    </div>
                    <div class="subject">
                        <a href="#" class="link">신이 허락한 '할랄', 인천의 무슬림 음식점</a>
                    </div>
                    <div class="tag">
                        # 할랄음식 # 무슬림음식점 # 이국의맛 # 미식여행 # 양갈비요리 # 인도요리
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>