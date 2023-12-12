<?php
$db = '
(DESCRIPTION =
(ADDRESS_LIST=
    (ADDRESS = (PROTOCOL = TCP)(HOST = 203.249.87.57)(PORT = 1521))
)
(CONNECT_DATA =
(SID = orcl)
)
)';


$con = oci_connect("DBA2022G5", "test1234", $db, 'AL32UTF8');

if (!$con) {
    echo "Oracle 데이터베이스 접속에 실패 하였습니다.!!", "<br>";
    exit();
}
session_start();
$loged_ID = $_SESSION['UserID'];
?>
<!doctype html>

<head>
    <meta charset="UTF-8">
    <title>게시판</title>
    <link rel="stylesheet" href="view_post.css">
    <script src="https://kit.fontawesome.com/9912971766.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
    </style>
</head>
<body>
<?php
    $num = $_GET['num'];
    $sql = "SELECT * FROM POSTTABLE WHERE NUM = '$num'";
    $result = oci_parse($con,$sql);
    oci_execute($result);
    $row = oci_fetch_array($result, OCI_ASSOC + OCI_RETURN_NULLS);
    $Title = $row['TITLE'];
    $UserId = $row['USERID'];
    $Post_date = $row['POST_DATE'];
    $content = $row['CONTENT'];
    ?>
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
                <li><a href="http://software.hongik.ac.kr/a_team/a_team5/project/post/post.php">게시판보기</a></li>
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
    <div id="board_read">
        <div class="main">
            <span><b>
                <?php echo $Title; ?>
            </b></span>
        </div>
        <div class="title" id="user_info">
            <img style="width: 60px; float: left;" src="../image/profile.png" alt="">
            <div>
                <span style="font-size: 25px; margin-left: 15px;"><?php echo "@$UserId"; ?></span>
            </div>
            <span style="margin-top: 42px; margin-left: -105px; font-size: 12px; color: #B3B3B3;"><?php echo $Post_date; ?></span>
            <span style="font-size: 20px; color: #09D3FF; float: right;"><b>삭제</b></span>
            <button class="modify"><b>수정</b></button>
        </div>
        <div class="content" id="bo_content">
            <textarea disabled style="border-color: black; border-left: none; border-right: none; resize: none; width: 1054px; height: 360px; font-size: 20px; background-color: white;"><?php echo nl2br($content); ?></textarea>
        </div>
        <div class="mintag">
            <span style="font-size: 18px; color: #9C9C9C;">#tagname</span>
        </div>
        <div class="icon">
            <a style="text-decoration:none; color:black;" href="post.php">[목록으로]</a>
        </div>
        <div class="comment">
            <hr style="color: black; margin-top: 15px; margin-bottom: 30px;">
		        <?php
			        $sql1 = "SELECT * FROM COMENTTABLE where NUM = '$num' order by COMENT_DATE desc";
                $result1 = oci_parse($con, $sql1);
                oci_execute($result1);
			        while($row1 = oci_fetch_array($result1, OCI_ASSOC + OCI_RETURN_NULLS)){
                    $id = $row1['USERID'];
                    $c_content = $row1['COMENT'];
                $c_date = $row1['COMENT_DATE'];
		        ?>
		        <div>
                    <div>
                        <span style="font-size: 20px;"><b><?php echo $id;?></b></span>
                    </div>
                    <span style="margin-top: 30px; margin-left: -70px; margin-bottom: 5px; font-size: 12px; color: #B3B3B3;"><?php echo $c_date; ?></span>
                    <textarea disabled style="border-color: black; background-color: white; resize: none; border: none; width: 1000px; float: left; margin-bottom: 15px; height: 39px; font-size: 15px"><?php echo nl2br("$c_content"); ?></textarea>
		        </div>
	        <?php } ?>
	        <div>
		        <form action="http://software.hongik.ac.kr/a_team/a_team5/project/post/comment.php?num=<?php echo $num; ?>" method="post">
			        <div>
				        <textarea name="content" class="reply_content" id="re_content" style="resize: none; width: 1000px; height: 80px"></textarea>
				        <button style="height: 50px;" id="rep_bt">댓글</button>
			        </div>
		        </form>
	        </div>
        </div>
    </div>
<script type="text/javascript" src="view_post.js"></script>
</body>
</html>
