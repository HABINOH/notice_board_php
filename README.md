# notice_board_php, manager_page
------------------
## php를 활용한 간단한 게시판 제작 (feat. HTML, bitnami)

#### < 설명 >
<pre>
모든 언어들의 기본적인 프로젝트는 게시판이다.
처음 웹 공부를 시작함에 앞서 php, HTML, SQL을 이용하여 간단한 웹 게시판을 제작한다.

해당 프로젝트 게시판의 기능은 아래와 같다.
1. 게시글 쓰기 기능
2. 게시글 목록 보여주기
3. 키워드를 통해서 게시글 조회
4. 게시글 삭제 기능
5. 게시글 수정 기능

위 기능을 동작하게끔 화면 구성하고 동작까지 확인하였다.

추후 추가적인 기능사항은 아래에 계속해서 작성한다.
(로그인, 회원가입)
</pre>
------------------
#### < Index 화면구성 >
<img src="https://user-images.githubusercontent.com/108309664/178682287-0b7fdc65-9da8-40f7-933f-1a506a3024fb.png" width="500" height="400">

------------------
#### < 글쓰기 >
<img src="https://user-images.githubusercontent.com/108309664/178683571-abdc4979-0dad-44ea-8050-1e42999c6281.png" width="300" height="270">

------------------
## php를 활용한 관리자 페이지 제작

#### < 설명 >
<pre>
기본적인 관리자 페이지를 제작해본다.

기능은 아래와 같다.
1. 미리 등록 되어있는 관리자 정보와 동일하면 로그인
2. email 형식, 비밀번호 일치 확인
3. 관리자 페이지로 바로 이동 시 유효성 검사 후 로그인 페이지로 이동
4. 관리자 페이지에서 로그아웃을 통해 세션 제거 후 로그인 페이지로 이동

( 활용방안 )
: 관리자 페이지를 게시판 페이지로 url 경로를 바꿔주고 
  게시판 화면에서 로그아웃 sumit을 추가하여 세션 제거를 해주면 된다.
</pre>
------------------
### < 로그인 화면 >
<img src="https://user-images.githubusercontent.com/108309664/178881184-995d4786-4d27-4b8a-94f5-ad46b00e8dec.png" width="300" height="200">

------------------
#### < 관리자 페이지, 로그아웃 >
<img src="https://user-images.githubusercontent.com/108309664/178881591-85505ec0-879b-4f8c-832e-188f7688226b.png" width="300" heigth="300">

------------------
## < 회원가입 >

#### < 설명 >
<pre>
회원가입 기능을 제작해본다.

기본적인 회원가입을 제작하고 이를 로그인까지 확인해본다.

기능은 아래와 같다.
1. 사용자가 입력한 정보를 escape으로 보안강화(1)
2. 단양향, 양방향을 이용해 보안강화 (2)
3. 빈곳에 입력한 값이 있으면 승인 X
4. ID, 닉네임 중복 체크
5. 회원 정보 저장

( 활용방안 )
: 회원들 데이터를 DB에 저장하고 보안을 더욱 강화시켜 게시판의 기능을 높여준다.
  회원들 개개인의 데이터를 따로 저장해보고 각자의 게시판을 가질 수 있도록 해준다.

</pre>
------------------
#### < 회원가입 >
<img src="https://user-images.githubusercontent.com/108309664/179180233-b84e8bf3-d2a0-4382-b396-855963cafcb5.png" width="200" height="200">

------------------
### Reference

Rock's Easyweb : [youtube]https://www.youtube.com/c/EasywebPublishing

즐거운 코딩 : [youtube]https://www.youtube.com/channel/UCD6S37_xu-2q3E8eej63kRA

------------------
