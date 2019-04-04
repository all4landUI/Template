<?php
    include_once('../../head.php');
?>
    
    <!-- Container -->
    <article class="container">
    
        <!-- Sub Menu -->
        <section id="lnb" class="lnb">
            <?php include_once('./lnb.php');?>         
        </section>
        <!-- /Sub Menu -->

        <!-- Contents -->
        <section id="content" class="content">
            <h1 class="title-sub-h1">자주하는 질문</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>게시판관리</li>
                <li>자주하는 질문</li>
            </ol>
            <!-- /Location -->

            <!-- Info Box -->
            <div class="box-info">
                <strong class="thumb"><img src="../../../images/thumb/img_info_faq.png" alt="자주묻는 질문 안내"></strong>
                <p>문의하시기 전에 유사 질문에 대한 답을 확인하실 수 있습니다.<br>
                원하시는 답변을 못찾으셧을 경우에는 Q&amp;A 게시판에 문의하여 주시기 바랍니다.</p>
            </div>
            <!-- /Info Box -->
            
            <!-- Search -->
            <div class="search-form">
                <form action="" class="float-right">
                    <fieldset>
                        <legend>리스트 검색</legend>
                        <label for="s-type" class="blind">검색 구분</label>
                        <select id="s-type" name="w-type">
                            <option value="">제목</option>
                            <option value="">서비스 구분</option>
                            <option value="">담당부서</option>
                        </select>

                        <label for="s-input" class="blind">검색어 입력</label>
                        <input type="text" id="s-input" name="s-input" value="">
                        <button type="button" class="bt">검색</button> 
                    </fieldset>
                </form>

                <p class="count float-left">총 100건의 글이 있습니다. (<em>1</em>/10페이지)</p>
            </div>
            <!-- /Search -->

            <!-- 공지사항 목록 -->
            <div class="table-list type-faq accordion">
                <table class="table-horizontal">
                    <colgroup>
                        <col style="width:150px;">
                        <col>
                    </colgroup>
                    <caption class="blind">공지사항 목록</caption>
                    <thead>
                        <tr>
                            <th scope="col">번호</th>
                            <th scope="col">제목</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="subject">
                                <a class="a-toggle">2018년도 12월 해양환경측정망 업데이트</a>
                                <div class="a-content">
                                    안녕하십니까!
                                    해양환경정보 포털에 관심과 애정을 가져주셔서 감사 드립니다.
                                    GRS80이란 1979년 12월 IUGG/IGA 총회에서 제정한 지구타원체이며,WGS84 타원체는 미국에서 군사 및 GPS 운영으로 채택한 것입니다.
                                    GRS80 타원체는 국제학술단체에서 정의한 것으로서 여러나라에서 지도제작 및 측지측량용으로 널리 사용하고 있습니다.
                                    우리나라에서도 GRS80 타원체를 사용하는 세계측지계를 도입하여 지도제작, 측지측량 등 많은 공공분야에서 활용하고 있습니다.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="subject">
                                <a class="a-toggle">2018년도 12월 해양환경측정망 업데이트</a>
                                <div class="a-content">
                                    안녕하십니까!
                                    해양환경정보 포털에 관심과 애정을 가져주셔서 감사 드립니다.
                                    GRS80이란 1979년 12월 IUGG/IGA 총회에서 제정한 지구타원체이며,WGS84 타원체는 미국에서 군사 및 GPS 운영으로 채택한 것입니다.
                                    GRS80 타원체는 국제학술단체에서 정의한 것으로서 여러나라에서 지도제작 및 측지측량용으로 널리 사용하고 있습니다.
                                    우리나라에서도 GRS80 타원체를 사용하는 세계측지계를 도입하여 지도제작, 측지측량 등 많은 공공분야에서 활용하고 있습니다.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="subject">
                                <a class="a-toggle">2018년도 12월 해양환경측정망 업데이트</a>
                                <div class="a-content">
                                    안녕하십니까!
                                    해양환경정보 포털에 관심과 애정을 가져주셔서 감사 드립니다.
                                    GRS80이란 1979년 12월 IUGG/IGA 총회에서 제정한 지구타원체이며,WGS84 타원체는 미국에서 군사 및 GPS 운영으로 채택한 것입니다.
                                    GRS80 타원체는 국제학술단체에서 정의한 것으로서 여러나라에서 지도제작 및 측지측량용으로 널리 사용하고 있습니다.
                                    우리나라에서도 GRS80 타원체를 사용하는 세계측지계를 도입하여 지도제작, 측지측량 등 많은 공공분야에서 활용하고 있습니다.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="subject">
                                <a class="a-toggle">2018년도 12월 해양환경측정망 업데이트</a>
                                <div class="a-content">
                                    안녕하십니까!
                                    해양환경정보 포털에 관심과 애정을 가져주셔서 감사 드립니다.
                                    GRS80이란 1979년 12월 IUGG/IGA 총회에서 제정한 지구타원체이며,WGS84 타원체는 미국에서 군사 및 GPS 운영으로 채택한 것입니다.
                                    GRS80 타원체는 국제학술단체에서 정의한 것으로서 여러나라에서 지도제작 및 측지측량용으로 널리 사용하고 있습니다.
                                    우리나라에서도 GRS80 타원체를 사용하는 세계측지계를 도입하여 지도제작, 측지측량 등 많은 공공분야에서 활용하고 있습니다.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="subject">
                                <a class="a-toggle">2018년도 12월 해양환경측정망 업데이트</a>
                                <div class="a-content">
                                    안녕하십니까!
                                    해양환경정보 포털에 관심과 애정을 가져주셔서 감사 드립니다.
                                    GRS80이란 1979년 12월 IUGG/IGA 총회에서 제정한 지구타원체이며,WGS84 타원체는 미국에서 군사 및 GPS 운영으로 채택한 것입니다.
                                    GRS80 타원체는 국제학술단체에서 정의한 것으로서 여러나라에서 지도제작 및 측지측량용으로 널리 사용하고 있습니다.
                                    우리나라에서도 GRS80 타원체를 사용하는 세계측지계를 도입하여 지도제작, 측지측량 등 많은 공공분야에서 활용하고 있습니다.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="subject">
                                <a class="a-toggle">2018년도 12월 해양환경측정망 업데이트</a>
                                <div class="a-content">
                                    안녕하십니까!
                                    해양환경정보 포털에 관심과 애정을 가져주셔서 감사 드립니다.
                                    GRS80이란 1979년 12월 IUGG/IGA 총회에서 제정한 지구타원체이며,WGS84 타원체는 미국에서 군사 및 GPS 운영으로 채택한 것입니다.
                                    GRS80 타원체는 국제학술단체에서 정의한 것으로서 여러나라에서 지도제작 및 측지측량용으로 널리 사용하고 있습니다.
                                    우리나라에서도 GRS80 타원체를 사용하는 세계측지계를 도입하여 지도제작, 측지측량 등 많은 공공분야에서 활용하고 있습니다.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="subject">
                                <a class="a-toggle">2018년도 12월 해양환경측정망 업데이트</a>
                                <div class="a-content">
                                    안녕하십니까!
                                    해양환경정보 포털에 관심과 애정을 가져주셔서 감사 드립니다.
                                    GRS80이란 1979년 12월 IUGG/IGA 총회에서 제정한 지구타원체이며,WGS84 타원체는 미국에서 군사 및 GPS 운영으로 채택한 것입니다.
                                    GRS80 타원체는 국제학술단체에서 정의한 것으로서 여러나라에서 지도제작 및 측지측량용으로 널리 사용하고 있습니다.
                                    우리나라에서도 GRS80 타원체를 사용하는 세계측지계를 도입하여 지도제작, 측지측량 등 많은 공공분야에서 활용하고 있습니다.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="subject">
                                <a class="a-toggle">2018년도 12월 해양환경측정망 업데이트</a>
                                <div class="a-content">
                                    안녕하십니까!
                                    해양환경정보 포털에 관심과 애정을 가져주셔서 감사 드립니다.
                                    GRS80이란 1979년 12월 IUGG/IGA 총회에서 제정한 지구타원체이며,WGS84 타원체는 미국에서 군사 및 GPS 운영으로 채택한 것입니다.
                                    GRS80 타원체는 국제학술단체에서 정의한 것으로서 여러나라에서 지도제작 및 측지측량용으로 널리 사용하고 있습니다.
                                    우리나라에서도 GRS80 타원체를 사용하는 세계측지계를 도입하여 지도제작, 측지측량 등 많은 공공분야에서 활용하고 있습니다.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="subject">
                                <a class="a-toggle">2018년도 12월 해양환경측정망 업데이트</a>
                                <div class="a-content">
                                    안녕하십니까!
                                    해양환경정보 포털에 관심과 애정을 가져주셔서 감사 드립니다.
                                    GRS80이란 1979년 12월 IUGG/IGA 총회에서 제정한 지구타원체이며,WGS84 타원체는 미국에서 군사 및 GPS 운영으로 채택한 것입니다.
                                    GRS80 타원체는 국제학술단체에서 정의한 것으로서 여러나라에서 지도제작 및 측지측량용으로 널리 사용하고 있습니다.
                                    우리나라에서도 GRS80 타원체를 사용하는 세계측지계를 도입하여 지도제작, 측지측량 등 많은 공공분야에서 활용하고 있습니다.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="subject">
                                <a class="a-toggle">2018년도 12월 해양환경측정망 업데이트</a>
                                <div class="a-content">
                                    안녕하십니까!
                                    해양환경정보 포털에 관심과 애정을 가져주셔서 감사 드립니다.
                                    GRS80이란 1979년 12월 IUGG/IGA 총회에서 제정한 지구타원체이며,WGS84 타원체는 미국에서 군사 및 GPS 운영으로 채택한 것입니다.
                                    GRS80 타원체는 국제학술단체에서 정의한 것으로서 여러나라에서 지도제작 및 측지측량용으로 널리 사용하고 있습니다.
                                    우리나라에서도 GRS80 타원체를 사용하는 세계측지계를 도입하여 지도제작, 측지측량 등 많은 공공분야에서 활용하고 있습니다.
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /공지사항 목록 -->

            <!-- pagination //-->
            <div class="pagination">
                <button type="button" class="prev">이전</button>  
                <div>
                    <button type="button" class="current">1</button>
                    <button type="button">2</button>
                    <button type="button">3</button>
                    <button type="button">4</button>
                    <button type="button">5</button>
                </div>
                <button type="button" class="next">다음</button>
            </div>
            <!--// pagination -->

        </section>
        <!-- /Contents -->

    </article>
    <!-- /Container -->

    <!-- Footer -->
    <footer>
        <div class="inner">
            <p class="f-logo">올포랜드 로고</p>
            <ul>
                <li><a href="#"><em>개인정보 처리방침</em></a></li>
                <li><a href="#">저작권정책</a></li>
                <li><a href="#">이메일무단수집거부</a></li>
            </ul>
            <address>서울특별시 금천구 가산디지털1로 145</address>
            <span>TEL : 02 - 855 - 5724</span>
            <span>FAX : 02 - 857 - 5746</span>
            <small>© ALLFORLAND, All rights reserved.</small>

            <select title="관련기관 바로가기" class="family-site">
                <option value="">관련기관목록</option>
            </select>
        </div>
    </footer>
    <!-- /Footer -->  

</body>
</php>