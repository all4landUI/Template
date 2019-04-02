<?php
    include_once('../../head.php');
?>
	
<style>
    /* List-Info */
.list-info {
    margin-bottom: 30px;
}
.list-info dt {
    position: relative;
    margin: 20px 0 5px;
    padding-left: 15px;
    color: #5b5b5b;
    font-size: 14px;
}
.list-info dt:after {
    content: '';
    position: absolute;
    top: 8px;
    left: 0px;
    width: 4px;
    height: 4px;
    background: #6a6b6d;
}
.list-info dd {
    color: #5b5b5b;
    font-size: 13px;
    line-height: 1.7em;
}
.list-info dd .list-hyphen li {
    line-height: 1em;
}
</style>
	<!-- Container -->
	<article class="container">
    
        <!-- Sub Menu -->
        <section id="lnb" class="lnb">
            <h2>회원</h2>
            <ul role="menu">
                <li class="current"><a href="">회원가입</a></li>
                <li class=""><a href="#">정보수정</a></li>
                <li class=""><a href="#">회원탈퇴</a></li>
            </ul>
        </section>
        <!-- /Sub Menu -->
            
        <section id="content" class="content">
            <h1 class="title-sub-h1">회원가입</h1>
            <h2 class="title-sub-h2">해양환경관리공단</h2>
            <div class="text-indent sp-block">
                <h3 class="title-sub-h3">해양환경측정망</h3>
                <dl class="list-info">
                    <dt>개요</dt>
                    <dd>우리나라 연안 및 근해역의 해양환경 상태와 오염원에 대한 조사를 정기적으로 실시하여 해양환경 현황을 종합적으로 파악함으로써 국가해양환경관리 및 보전정책 수립을 위한 국가 기본자료로 활용</dd>
                    <dt>주요내용</dt>
                    <dd>조사정점 및 수층 : 전국연안 417개 정점, 2개의 수층(표층, 저층)</dd>
                    <dd>조사시기 및 횟수 : 1997년 ~ 현재, 4회/년(2, 5, 8, 11월)</dd>
                    <dd>조사항목
                        <ul class="list-hyphen">
                            <li>해수 일반항목(수온, 염분 등 15개), 미량금속(Cu, Pb 등 8개)</li>
                            <li>해양생물 일반항목(클로로필-a, 총대장균군), 미량금속(Cu, Pb 등 7개)</li>
                            <li>해저 퇴적물 일반항목(입도, 강열감량, 황화물, COD), 미량금속(Cu, Pb 등 7개)</li>
                        </ul>
                    </dd>
                    <dt>자료제공</dt>
                    <dd>한국해양환경 조사연보 발간</dd>
                    <dd class="sp-block">원시자료 제공 : 국가해양환경정보통합시스템에서 관측자료 원본제공</dd>
                    <dd>
                        <div class="bt-area">
                            <a href="#" class="bt down"><i class="ico down"></i>한국해양환경 조사연보 다운로드</a>
                            <a href="#" class="bt down"><i class="ico down"></i>해양환경측정망 운영지침 다운로드</a>
                        </div>
                    </dd>
                </dl>
                
                <h3 class="title-sub-h3">해양수질자동측정망</h3>
                <dl class="list-info">
                    <dt>개요</dt>
                    <dd>연안 오염의심해역에서 수질 상시측정을 통하여 향후 해양환경 상태 측정 및 변화를 예측·예보 할 수 있는 실시간 해양수질자료로 활용</dd>
                    <dt>주요내용</dt>
                    <dd>조사정점 : 인천시화 3기(인천조력, 시화반월, 오이도), 마산 3기(마산삼귀, 마산봉암, 마산양덕), 광양 2기(광양망덕, 광양초남), 새만금(새만금), 울산(울산온산)</dd>
                    <dd>조사시기 : 2005년 ~ 현재</dd>
                    <dd>주기 : 센서(5분), 측정기(1시간)</dd>
                    <dd>조사항목
                        <ul class="list-hyphen">
                            <li>센서 : 수온, 염분, pH 등 6개</li>
                            <li>측정기 : COD, TN, TP 등 7개</li>
                        </ul>
                    </dd>
                    <dt>자료제공</dt>
                    <dd>원시자료 제공 : 국가해양환경정보통합시스템에서 관측자료 원본제공</dd>
                </dl>
                
                <h3 class="title-sub-h3">하구역 해양수질자동측정망</h3>
                <dl class="list-info">
                    <dt>개요</dt>
                    <dd>4대강 하구역에서 수질 상시측정을 통하여 향후 해양환경 상태 측정 및 변화를 예측·예보 할 수 있는 실시간 해양수질자료로 활용</dd>
                    <dt>주요내용</dt>
                    <dd>조사정점 : 낙동강하구 2기(낙동을숙, 낙동명지), 영산강하구 2기(영산영암, 영산목포), 금강하구</dd>
                    <dd>조사시기 : 2011년 ~ 현재</dd>
                    <dd>주기 : 센서(5분), 측정기(1시간)</dd>
                    <dd>조사항목
                        <ul class="list-hyphen">
                            <li>센서 : 수온, 염분, pH 등 6개</li>
                            <li>측정기 : COD, TN, TP 등 7개</li>
                        </ul>
                    </dd>
                    <dt>자료제공</dt>
                    <dd>원시자료 제공 : 국가해양환경정보통합시스템에서 관측자료 원본제공</dd>
                </dl>
                
                <h3 class="title-sub-h3">정기운항선박을 이용한 해양수질자동측정망</h3>
                <dl class="list-info">
                    <dt>개요</dt>
                    <dd>한반도 연안을 정기적으로 운항하는 선박에 수질자동측정장비를 설치하여 선박경로에 따른 해양수질변화를 조사하고 나아가 국제페리선박 데이터로 활용</dd>
                    <dt>주요내용</dt>
                    <dd>조사정점 : 동해항 ~ 인천항</dd>
                    <dd>조사시기 : 2011년 ~ 현재</dd>
                    <dd>주기 : 센서(5분), 측정기(1시간)</dd>
                    <dd>조사항목
                        <ul class="list-hyphen">
                            <li>센서 : 수온, 염분, pH 등 10개</li>
                            <li>측정기 : 암모니아, 인산염인 등 5개</li>
                        </ul>
                    </dd>
                </dl>
            </div>
            
            <h2 class="title-sub-h2">국립수산과학원</h2>
            <div class="text-indent sp-block">
                <h3 class="title-sub-h3">정선해양조사</h3>
                <dl class="list-info">
                    <dt>개요</dt>
                    <dd>조사정점 및 수층 : 25개선 207개 정점, 14개 표준 수층 </dd>
                    <dd>조사시기 및 회수 : 1961년 ~ 현재, 6회/년 (2, 4, 6, 8, 10, 12월) </dd>
                    <dd>조사항목 : 수온, 염분, 용존산소, 영양염류, 동식물 플랑크톤 등 17개 항목</dd>
                    <dt>주요내용</dt>
                    <dd>시기별, 해역별 수괴 및 해황 특성 비교 분석 </dd>
                    <dd>해역별 주요 해황 분석
                        <ul class="list-hyphen">
                            <li>동해 : 극전선, 냉수대 </li>
                            <li>서해 : 수온역전, 조석전선 </li>
                            <li>남해 : 연안전선</li>
                            <li>동중국해 : 양자강 유출수 거동</li>
                        </ul>
                    </dd>
                    <dt>자료제공</dt>
                    <dd>한국 연근해와 동중국해 해황 속보, 주보, 정보지, 연보 발간 제공 </dd>
                    <dd>원시자료 제공
                        <ul class="list-hyphen">
                            <li>자료 : 1961년부터 현재까지 년 6회 조사</li>
                            <li>항목 : 수온, 염분, 용존산소, 영양염류, 플랑크톤</li>
                            <li>자료 : 한국해양자료센터, 해양조사연보</li>
                        </ul>
                    </dd>
                </dl>
                
                <h3 class="title-sub-h3">연안정지해양조사</h3>
                <dl class="list-info">
                    <dt>개요</dt>
                    <dd>조사정점 : 전국 연안 34개소</dd>
                    <dd>조사시기 및 회수 : 1933년 ~ 현재, 1회/일 (오전 10시 관측) </dd>
                    <dd>조사항목 : 수온, 기온, 비중, 운량, 천기 등 5개 항목</dd>
                    <dt>주요내용</dt>
                    <dd>일별 전국 연안 수온 및 기상 조사 분석</dd>
                    <dt>자료제공</dt>
                    <dd>한국 연근해와 동중국해 해황 속보, 주보, 정보지, 년보 발간 제공원시</dd>
                    <dd>자료 제공
                        <ul class="list-hyphen">
                            <li>자료 : 1933년부터 현재까지 </li>
                            <li>항목 : 수온, 기온 등 </li>
                            <li>자료 : 한국해양자료센터, 해양조사연보</li>
                        </ul>
                    </dd>
                </dl>
                
                <h3 class="title-sub-h3">실시간어장환경</h3>
                <dl class="list-info">
                    <dt>개요</dt>
                    <dd>연안 양식어장 밀집해역과 이상해황에 의한 어업재해가 빈발한 해역에 실시간 어장환경정보(수온, 염문, 용존산소 등) 자동관측시스템을 구축하여 어업활동에 필요한 과학적 어장환경정보의 실시간 적시제공(웹, SMS, 메일링 서비스 등) 및 수산업 진흥을 위한 기반 자료 확보 등을 그 목적으로 함</dd>
                    <dd>실시간 어장환경정보시스템은 적조다발해역, 패류독소발생해역, 냉수대 및 고수온 발생해역, 양식어류 동사발생해역 등에서 어장환경정보를 수집하여 다음과 같은 정보에 활용하고자 함
                        <ul class="list-hyphen">
                            <li>수산피해 예방 및 대책</li>
                            <li>연안양식업 경영지원 기능 강화</li>
                            <li>어업생산성 향상</li>
                            <li>바다녹화</li>
                            <li>연안자원조성 기술개발</li>
                            <li>해양레저산업 활성화</li>
                        </ul>
                    </dd>
                    <dt>관측소 현황</dt>
                    <dd>국립수산과학원에서는 강릉, 양양, 삼척, 영덕, 기장 5개소 수하식부이에 의한 동해실시간 어장환경정보시스템과 동·서·남해의 가두리양식장 16개소, 기타지역(연구소내 집수정 등) 6개소에 설치된 실시간연안정보시스템으로 나뉘어 전체 27개소가 운영되고 있으며 각 지역의 관측정보조회 및 SMS 서비스를 제공함</dd>
                </dl>
            </div>
            
            <h2 class="title-sub-h2">국립해양조사원</h2>
            <div class="text-indent sp-block">
                <h3 class="title-sub-h3">연안정지관측</h3>
                <dl class="list-info">
                    <dt>개요</dt>
                    <dd>전지구계의 해양, 기상 등을 포괄적이고 지속적인 관측을 수행하고 있으며 인류의 안전과 복지 향상, 지구 환경보호 및 지속 가능한 발전에 활용</dd>
                    <dt>주요내용</dt>
                    <dd>조사정점 : 동해(4개), 남해(9개), 서해(10개)</dd>
                    <dd>조사시기 및 주기 : 1985년 ~ 현재, 1회/일</dd>
                    <dd>조사항목
                        <p>- 수온, 비중</p>
                    </dd>
                    <dt>자료제공</dt>
                    <dd>국립해양조사원 홈페이지</dd>
                </dl>
                
                
                <h3 class="title-sub-h3">조석관측</h3>
                <dl class="list-info">
                    <dt>개요</dt>
                    <dd>달과 태양 등 지구주위 천체의 주기적인 상호운동에 의해 발생한는 지구표면 해수면의 주기적인 승강운동 조사하여 수직기준면관리, 연안재해 방지 및 환경보존 업무에 활용</dd>
                    <dt>주요내용</dt>
                    <dd>조사정점 : 동해(5개), 남해(15개), 서해(13개)</dd>
                    <dd>조사시기 및 주기 : 1965년 ~ 현재, 1회/분</dd>
                    <dd>조사항목
                        <p>- 조위</p>
                    </dd>
                    <dt>자료제공</dt>
                    <dd>국립해양조사원 홈페이지</dd>
                </dl>
                
                <h3 class="title-sub-h3">실시간연안정보</h3>
                <dl class="list-info">
                    <dt>개요</dt>
                    <dd>전지구계의 해양, 기상 등을 포괄적이고 지속적인 관측을 수행하고 있으며 인류의 안전과 복지 향상, 지구 환경보호 및 지속 가능한 발전에 활용</dd>
                    <dt>주요내용</dt>
                    <dd>조사정점 : 동해(29개), 남해(12개), 서해(12개)</dd>
                    <dd>조사시기 및 주기 : 1998년 ~ 현재, 1회/분</dd>
                    <dd>조사항목
                        <p>- 풍속, 돌풍 등 9개</p>
                    </dd>
                    <dt>자료제공</dt>
                    <dd>국립해양조사원 홈페이지</dd>
                </dl>
            </div>
            
            <h2 class="title-sub-h2">해양경찰청</h2>
            <div class="text-indent sp-block">
                <h3 class="title-sub-h3">폐기물배출해역조사</h3>
                <dl class="list-info">
                    <dt>개요</dt>
                    <dd>폐기물 해양배출로 인해 발생되는 해양오염현황을 주기적으로 조사</dd>
                    <dt>주요내용</dt>
                    <dd>조사정점 : 동해병(14개), 동해정(8개), 서해병(15개)</dd>
                    <dd>조사시기 및 주기 : 1998년 ~ 2012년, 4회/년(2, 5, 8, 11월)</dd>
                    <dd>조사항목
                        <p>- 수온, 염분 등 24개</p>
                    </dd>
                    <dt>자료제공</dt>
                    <dd>해양경찰연구소 홈페이지</dd>
                </dl>
                
                <h3 class="title-sub-h3">해양폐기물조사</h3>
                <dl class="list-info">
                    <dt>개요</dt>
                    <dd>과거에 배출된 해양투기물 배출량을 DB화하여 폐기물 배출해역 수질조사 결과와 비교하여 모니터링</dd>
                    <dt>주요내용</dt>
                    <dd>조사정점 : 전국 10개 정점(울릉도, 덕적도, 칠발도, 거문도, 거제도, 동해, 포항, 마라도, 외연도, 신안)</dd>
                    <dd>조사시기 및 주기 : 1998년 ~ 2011년, 1회/년</dd>
                    <dd>조사항목
                        <p>- 분뇨, 가축분뇨 등 16개</p>
                    </dd>
                    <dt>자료제공</dt>
                    <dd>해양 폐기물배출 정보관리 시스템 </dd>
                </dl>
            </div>
            
            <h2 class="title-sub-h2">기상청</h2>
            <div class="text-indent sp-block">
                <h3 class="title-sub-h3">부이기상관측</h3>
                <dl class="list-info">
                    <dt>개요</dt>
                    <dd>동해, 남해, 서해의 부이에서 매시 관측된 기상자료</dd>
                    <dt>주요내용</dt>
                    <dd>조사정점 : 전국 10개 정점(울릉도, 덕적도, 칠발도, 거문도, 거제도, 동해, 포항, 마라도, 외연도, 신안)</dd>
                    <dd>조사시기 : 1996년 ~ 현재, 4회/년(2, 5, 8, 11월)</dd>
                    <dd>주기 : 1시간</dd>
                    <dd>조사항목
                        <p>- 바람상태(풍향, 풍속, Gust), 기압, 습도, 기온, 수온, 해면상태(파고, 파주기, 파향)</p>
                    </dd>
                    <dt>자료제공</dt>
                    <dd>기상청 홈페이지 국내부이 </dd>
                </dl>
            </div>
            
                    
            <!-- 별점 -->
            <div class="score-area">
                <dl>
                    <dt><i class="ico star"></i>평점주기</dt>
                    <dd class="s-score">
                        <label><input type="radio" id="" name="starScore"><span>매우만족<i class="ico star-score ea5"></i></span></label>
                        <label><input type="radio" id="" name="starScore"><span>만족<i class="ico star-score ea4"></i></span></label>
                        <label><input type="radio" id="" name="starScore"><span>보통<i class="ico star-score ea3"></i></span></label>
                        <label><input type="radio" id="" name="starScore"><span>불만족<i class="ico star-score ea2"></i></span></label>
                        <label><input type="radio" id="" name="starScore"><span>매우불만족<i class="ico star-score ea1"></i></span></label>
                    </dd>
                    <dt><i class="ico reply"></i>의견듣기</dt>
                    <dd class="s-write">
                        <form action="" method="">
                        <fieldset>
                            <legend>의견작성</legend>
                            <textarea id="" name="" rows="" cols="" class="full"></textarea>
                            <button type="submit" class="bt gray">등록하기</button>
                        </fieldset>
                        </form>
                    </dd>
                    <dd>
                        <ul class="s-list">
                            <!-- loop -->
                            <li>
                                <i class="ico star-score ea5"></i>
                                <strong>홍길동 2018/11/12. 11:31:11</strong>
                                <button type="button" class="bt default small" onclick="">수정</button>
                                <button type="button" class="bt default small">삭제</button>
                                <p>안녕하세요. 11월 해양환경측정망 업데이트 정보 감사합니다.</p>
                            </li>
                            <!-- /loop -->
                            <li>
                                <i class="ico star-score ea4"></i>
                                <strong>홍길동 2018/11/12. 11:31:11</strong>
                                <button type="button" class="bt default small" onclick="">수정</button>
                                <button type="button" class="bt default small">삭제</button>
                                <p>안녕하세요. 11월 해양환경측정망 업데이트 정보 감사합니다.</p>
                            </li>
                        </ul>
                    </dd>
                </dl>
            </div>
            <!-- /별점 -->
            
        </section>
        <!-- /Contents -->

    </article>
	<!-- /Container -->

<?php
    include_once('../../foot.php');
?>