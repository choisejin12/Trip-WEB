<div align=center>

# ✈DayTravel : 여행지 추천 및 정보 제공 웹사이트

</br>
💡 **Motivation** : 여행 시 여행지 정보와 지역별 추천 코스를 찾아야 하는 번거로움을 해결하기 위해 제작을 기획 함.

</div>

## 사이트 : 


## 주요 기능과 로직

- **회원가입 및 로그인** : 회원가입 및 로그인 기능을 수행 
- **마이페이지** : 여행타입 수정 기능 및 개인정보 수정 기능 수행
- **게시판글 및 댓글** : 게시글 작성 및 댓글 작성 기능 수행
- **게시판 검색** : 태그 , 지역별 검색 기능 수행
- **테마 여행** : 테마 여행 별 여행지 추천
- **여행지 추천** : 회원정보에 맞게 여행지를 추천 해줌
- **DB** : Oracle Database에 새로 생기는 데이터 저장
- **배포** : Oracle 학교서버 도메인에 연동


## DB Suggestion

**functional**
</br>: 회원만 배너 확인 가능
</br>: 회원만 포스트 및 리뷰가능
</br>: 게시글 작성 댓글 기능
</br>: 아이디 중복 불가능
</br>: 비밀번호 db에 암호화
</br>: 회원정보 수정 삭제 가능


**Non functional**
</br>: DB에 한글 입력 불가
</br>: UI 설계



## DB Composition
</br>



**🙋‍♀️ 회원 (UserTable)**
- **PRIMARY KEY (UserID ) REFERENCES**
- **FOREIGN KEY (Num) PostTable(Num) ON DELETE SET NULL;**

| 이름 | 아이디 | 비밀번호 | 성별 | 핸드폰번호 | 생년월일 |
|--|--|--|--|--|--|
| UserName | UserID | UserPassword | UserSex | UserPhoneNumber | UserDate |
|VARCHAR2(30) NOT NULL| VARCHAR2(50) NOT NULL | VARCHAR2(255) NOT NULL | VARCHAR2(10) NOT NULL | VARCHAR2(50)  NOT NULL | DATE NOT NULL |



| 여행테마 | 여행목적 | 여행인원 | 자녀동반 | 반려동물 | 숫자 |
|--|--|--|--|--|--|
| UserThema | UserPurpose | UserNumberPeople | UserFamilyType | UserAnimal | Num |
|VARCHAR2(25) | VARCHAR2(50)| VARCHAR2(50) |  VARCHAR2(50) |  VARCHAR2(50) |  VARCHAR2(50) |

</br>

-----------------------------------------------------------------------------------------------------


**🎫 게시판 (PostTable)**
- **PRIMARY KEY (Num )**
- **FOREIGN KEY (Comment_Date) REFERENCES ComentTable(Comment_Date) ON DELETE SET NULL;**
  
| 제목 | 내용 | 숫자 | 작성일 | 회원아이디 | 댓글작성일 |
|--|--|--|--|--|--|
| Title | Content | Num | Post_Date | UserID | Comment_Date |
|VARCHAR2(50) NOT NULL| VARCHAR2(150) NOT NULL | VARCHAR2(50) NOT NULL | VARCHAR2(50) NOT NULL | VARCHAR2(20)  NOT NULL | VARCHAR2(20) NOT NULL |

</br>


-----------------------------------------------------------------------------------------------------


**🗺 지역 (RegionTable)**

| 지역이름 | 숫자 |
|--|--|
| RegionTitle | Num |
|VARCHAR2(50) NOT NULL| VARCHAR2(50) NOT NULL |

</br>


-----------------------------------------------------------------------------------------------------


**✔ 태그 (TagTable)**

| 태그 | 숫자 |
|--|--|
| TagTitle | Num |
|VARCHAR2(50) NOT NULL| VARCHAR2(50) |

</br>


-----------------------------------------------------------------------------------------------------


**💬댓글 (ComentTable)**
- **PRIMARY KEY (Coment_Date )**
- **FOREIGN KEY (Num) REFERENCES PostTable(Num) ON DELETE SET NULL;**

| 댓글내용 | 댓글작성일 | 회원아이디 | 숫자 |
|--|--|--|--|
| Coment | Coment_Date | UserID | Num |
|VARCHAR2(100) NOT NULL| VARCHAR2(20) NOT NULL |  VARCHAR2(20) NOT NULL |  VARCHAR2(50) |

</br>

-----------------------------------------------------------------------------------------------------


<div align=center>
  
**테이블간의 관계**

REGION : POST = 1 : N

POST : TAG = M:N

POST : COMMENT = 1:N

USER : COMMENT = 1:N

USER : POST = 1:N

</div>


## ER Diagram
![image](https://github.com/choisejin12/Trip-WEB/assets/76937151/84dd5d0d-9e74-4d52-9474-9e4d5003de10)


## DB Connect Logic

👩**User**
- **회원가입 구현** : 체크카운터를 따로 두어서 아이디가 DB에 있는 아이디랑 겹칠 경우, "아이디 중복입니다" 출력 후 다시 회원가입 창으로 리턴
- **회원정보 변경** : 바꾸려는 비밀번호가 DB암호화 되어있는 비밀번호(복호화시킴)비교해서 중복검사 후 UPDATE로 교체 작업
- **회원 탈퇴** : 회원정보 창에서 회원탈퇴 클릭시 DELETE로 DB에서 삭제
- **회원 정보 수정** : 마이페이지 창에서 여행타입 수정 시 Session으로 회원아이디 받아온 후 update문을 실행하여 db에 저장함

👩**Board**
- **게시글 조회** : 검색 조건에 따라 게시물 출력함. 모든 게시글 날짜 정보기준 내림차순 조회함. 검색어와 태그 타이틀이 동일한 Num을 이용하여 조회함
- **게시글 작성** : 태그 개수에 따라 for문으로 여러 개 입력할 지, 하나 만 입력할지 설정함. 여러개가 입력 됐을 시 공백을 기준으로 입력 값을 분리하고 입력함


## 문제점

1. 관계 설정의 어려움
2. 유효성 검사에 대한 알고리즘
3. 추가 기능의 대한 고민

**Other ..**
회원정보 입력 시 그와 관련한 기능들
: 예를 들어 태그를 인스타그램 해시태그와 연관 지어 크롤링으로 가져오면 가능하지 않을까?
추천 여행을 나타낼 수 있지 않을까.. 실시간 통신으로 ajax기능을 이용하여 채팅기능을 활성화 시키면 좋았을 것 같다


## 기술 스택

- FrontEnd
  - JavaScript , HTML , CSS 
- BackEnd
  - PhP , Oracle , SQL
 
## 개발 기간

- 2022/10/01 ~ 2022/12/12

## 기획 & 설계

🌱 [디자인](https://www.figma.com/file/Guz5FYGZcSHOSoljgGjLcO/%EB%8D%B0%EC%9D%B4%ED%84%B0%EB%B2%A0%EC%9D%B4%EC%8A%A4-%ED%8C%80%ED%94%84%EB%A1%9C%EC%A0%9D%ED%8A%B8?type=design&node-id=1%3A516&mode=design&t=FLEYgBi19vwGmHO3-1)

