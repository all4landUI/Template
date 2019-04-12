<?php
    include_once('../head.php');
?>
    <style>
        .box_st_wrap1 {position:relative; padding:20px; border-top:2px solid #0079c4; border-left:1px solid #e0e0e0; border-right:1px solid #e0e0e0; border-bottom:1px solid #e0e0e0; overflow:hidden;}
        .box_st_wrap1 .box_line {
            position: relative;
            padding-bottom: 15px;
            background: url(../../dist/images/bu/bg_box_line.gif) repeat-x left bottom;
            background-size: 5px 1px;
        }
        .board_search li span.board_search_t {
            display: inline-block;
            width: 120px;
            font-size: 12px;
            font-weight: bold;
            color: #0f4989;
        }
        p.btn_term {
            overflow: hidden;
            margin-top: 10px;
            font-size: 12px;
            padding-left: 10px;
            line-height: 20px;
            color: #666;
            font-weight: normal;
            font-size: 12px;
            background: url(../../dist/images/bu/bu_square.gif) no-repeat 0 8px;
        }
        p.btn_term span {
            display: inline-block;
            width: 50px;
            font-weight: bold;
            color: #0958aa;
        }
        p.btn_term a {
            display: inline-block;
            width: 18px;
            height: 18px;
            font-size: 11px;
            line-height: 18px;
            text-align: center;
            border: 1px solid #e0e0e0;
        }
        .search_list{
            margin-top:25px;
            border-top:2px solid #004a8d;
        }
        .search_list dl{overflow:hidden;padding:15px 0;border-bottom:1px solid #ddd;}
        .search_list dl dt{float:left;width:30%;color:#333;}
        .search_list dl dd{float:left;width:70%;}
    </style>
    <!-- Container -->
    <article class="container">
    
        <!-- Sub Menu -->
        <section id="lnb" class="lnb">
            <?php include_once('./lnb.php');?>
        </section>
        <!-- /Sub Menu -->

        <!-- Contents -->
        <section id="content" class="content">
            <h1 class="title-sub-h1">용어사전</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>정보관리</li>
                <li>용어사전</li>
            </ol>
            <!-- /Location -->

            <div class="board_header">
            <!-- 검색영역 -->
             <fieldset class="board_search">
                <legend class="hidden">용어 키워드 검색</legend>
                    <div class="box_st_wrap1">
                        <div class="box_line">
                            <ul class="board_search">
                                <li><span class="board_search_t">용어 키워드 검색</span>
                                    <input id="searchValue" name="searchValue" class="validate[funcCall[checkInitial]] inp_type mr5" title="용어 키워드 입력" type="text" value="" size="30" maxlength="20">
                                    <button type="submit" class="bt search"></button>
                                </li>
                            </ul>
                        </div>
                        <p class="btn_term"><span>가나다</span>
                            <a href="#none" onclick="selectInitial('ㄱ');return false;">ㄱ</a>
                            <a href="#none" onclick="selectInitial('ㄴ');return false;">ㄴ</a>
                            <a href="#none" onclick="selectInitial('ㄷ');return false;">ㄷ</a>
                            <a href="#none" onclick="selectInitial('ㄹ');return false;">ㄹ</a>
                            <a href="#none" onclick="selectInitial('ㅁ');return false;">ㅁ</a>
                            <a href="#none" onclick="selectInitial('ㅂ');return false;">ㅂ</a>
                            <a href="#none" onclick="selectInitial('ㅅ');return false;">ㅅ</a>
                            <a href="#none" onclick="selectInitial('ㅇ');return false;">ㅇ</a>
                            <a href="#none" onclick="selectInitial('ㅈ');return false;">ㅈ</a>
                            <a href="#none" onclick="selectInitial('ㅊ');return false;">ㅊ</a>
                            <a href="#none" onclick="selectInitial('ㅋ');return false;">ㅋ</a>
                            <a href="#none" onclick="selectInitial('ㅌ');return false;">ㅌ</a>
                            <a href="#none" onclick="selectInitial('ㅍ');return false;">ㅍ</a>
                            <a href="#none" onclick="selectInitial('ㅎ');return false;">ㅎ</a>
                        </p>
                        <p class="btn_term"><span>ABC</span>
                            <a href="#none" onclick="selectInitial('A');return false;">A</a>
                            <a href="#none" onclick="selectInitial('B');return false;">B</a>
                            <a href="#none" onclick="selectInitial('C');return false;">C</a>
                            <a href="#none" onclick="selectInitial('D');return false;">D</a>
                            <a href="#none" onclick="selectInitial('E');return false;">E</a>
                            <a href="#none" onclick="selectInitial('F');return false;">F</a>
                            <a href="#none" onclick="selectInitial('G');return false;">G</a>
                            <a href="#none" onclick="selectInitial('H');return false;">H</a>
                            <a href="#none" onclick="selectInitial('I');return false;">I</a>
                            <a href="#none" onclick="selectInitial('J');return false;">J</a>
                            <a href="#none" onclick="selectInitial('K');return false;">K</a>
                            <a href="#none" onclick="selectInitial('L');return false;">L</a>
                            <a href="#none" onclick="selectInitial('M');return false;">M</a>
                            <a href="#none" onclick="selectInitial('N');return false;">N</a>
                            <a href="#none" onclick="selectInitial('O');return false;">O</a>
                            <a href="#none" onclick="selectInitial('P');return false;">P</a>
                            <a href="#none" onclick="selectInitial('Q');return false;">Q</a>
                            <a href="#none" onclick="selectInitial('R');return false;">R</a>
                            <a href="#none" onclick="selectInitial('S');return false;">S</a>
                            <a href="#none" onclick="selectInitial('T');return false;">T</a>
                            <a href="#none" onclick="selectInitial('U');return false;">U</a>
                            <a href="#none" onclick="selectInitial('V');return false;">V</a>
                            <a href="#none" onclick="selectInitial('W');return false;">W</a>
                            <a href="#none" onclick="selectInitial('X');return false;">X</a>
                            <a href="#none" onclick="selectInitial('Y');return false;">Y</a>
                            <a href="#none" onclick="selectInitial('Z');return false;">Z</a>
                        </p><br>

                        <div class="text-center">
                            <a href="#" class="bt">해양수산 용어 사전</a>
                            <a href="#" class="bt"> 해양수산 전문용어 표준화 홍보물</a>
                        </div>
                        

                    </div>
                </fieldset>
                <!-- //검색영역 -->
            </div>

            <div class="search_list">
                <dl>
                    <dt><a href="#">1일1회조<br>Single day tide</a></dt>
                    <dd>
                        <a href="#">B형 수면비행선박
B-Type WIG ship수면효과범위를 벗어나 고도를 일시적으로 증가시킬 수 있는 수면비행선박 으로서 국제민간항공기구에서 규정한 항공기의 최소한의 안전고도인 150m 미만의 비행고도에서 운항하는 수면비행선..</a>
                    </dd>
                </dl>
              
            </div>

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
