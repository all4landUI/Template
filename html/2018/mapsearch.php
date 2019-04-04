<?php
    include_once('../../head.php');
?>

	<!-- Container -->
	<article class="container">
    
        <!-- Sub Menu -->
        <section id="lnb" class="lnb">
            <h2>지도관리</h2>
            <ul role="menu">
                <li class="current"><a href="">지도 검색</a></li>
            </ul>
        </section>
        <!-- /Sub Menu -->
            
        <section id="content" class="content">
            <h1 class="title-sub-h1">지도 검색</h1>

            <!-- Search : Start -->
            <div class="searchbox">             
                <form>
                <fieldset>
                    <legend>목록 검색</legend>
                    <table>
                        <caption class="blind">상세검색</caption>
                        <colgroup>
                            <col style="width:70px;">
                            <col style="width:auto;">
                            <col style="width:70px;">
                            <col style="width:150px;">
                            <col style="width:70px;">
                            <col style="width:250px;">
                            <col style="width:70px;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <!-- 시군구 -->
                                <th scope="row" ><label for="s-addr">시군구</label></th>
                                <td colspna="4">
                                    <select id="s-addr" name="s-addr-sido" title="시">
                                        <option value="">전라남도</option>
                                    </select>
                                    <select id="s-addr2" name="s-addr-gungu" title="군">
                                        <option value="">신안군</option>
                                    </select>
                                    <select id="s-addr3" name="s-addr-dongmyeon" title="구">
                                        <option value="">비금면</option>
                                    </select>
                                </td>
                                <!-- /시군구 -->
                            </tr>
                            <tr>
                                <!-- 관리번호 -->
                                <th scope="row"><label for="s-ad-num">관리번호</label></th>
                                <td><input type="text" id="s-ad-num" name="" value="" class="full"></td>
                                <!-- /관리번호 -->

                                <!-- 도서명 -->
                                <th scope="row"><label for="s-doseo">도서명</label></th>
                                <td><input type="text" id="s-doseo" name="" value="" class="full"></td>
                                <!-- /도서명 -->
                                
                                <td><button type="botton" class="bt search">검색</button></td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
                </form> 
            </div>
            <!-- /Search -->

            <div class="map-container">
                    <div class="map-control">
                        <button type="button" class="map-view c-list mobile" aria-edit-div="map-list"><i class="fa fa-list"></i><span class="blind">리스트</span></button>
                    </div>
                    
                    <!-- 바로맵 -->
                    <div id="map1" style="width:100%;height:100%;" class="olMap">
                        <!-- 지도 컨트롤 -->
                        <div id="toolbar" style="">
                            <ul id="tool_swich" class="map-control">
                                <button type="button" class="c-location" onclick=""><i class="ico location"></i><span class="blind">내위치</span></button>
                                <button type="button" class="c-zoom-in" onclick="javascript:map1.zoomIn();"><i class="fa fa-plus"></i><span class="blind">확대</span></button>
                                <button type="button" class="c-zoom-out" onclick="javascript:map1.zoomOut();"><i class="fa fa-minus"></i><span class="blind">축소</span></button>
                                <!--<li name="measure_distance" title="거리"><a href="javascript:map1._mapControl('measure_distance');" style="text-decoration:none;padding:0 0 0 0;margin:0 0 0 0;"><img src="/emap/images/tool_off_05.png" border="0"></a></li>
                                <li name="measure_area" title="면적"><a href="javascript:map1._mapControl('measure_area');" style="text-decoration:none;padding:0 0 0 0;margin:0 0 0 0;"><img src="/emap/images/tool_off_06.png" border="0"></a></li>
                                <li name="deleteLayer" title="초기화"><a href="javascript:map1._mapControl();" style="text-decoration:none;padding:0 0 0 0;margin:0 0 0 0;"><img src="/emap/images/tool_off_04.png" border="0"></a></li>-->
                            </ul>
                        </div>
                        <!-- /지도 컨트롤 -->
                        
                        <button type="button" class="c-spot" aria-edit-div="layer-info" style="position:absolute; z-index: 999; top: 30%; left: 30%;"><i class="ico spot"></i><span class="blind">위치</span></button>
                        
                        <div id="OpenLayers_Map_24_OpenLayers_ViewPort" class="olMapViewport olControlDragPanActive olControlZoomBoxActive olControlPinchZoomActive olControlNavigationActive" style="position: relative; overflow: hidden; width: 100%; height: 100%;"><div id="OpenLayers_Map_24_OpenLayers_Container" style="position: absolute; z-index: 749; left: 0px; top: 0px;"><div id="OpenLayers_Layer_NgiiEMap_2" dir="ltr" class="olLayerDiv olLayerGrid" style="position: absolute; width: 100%; height: 100%; z-index: 100;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/2/59.png" style="visibility: inherit; opacity: 1; position: absolute; left: 268px; top: 310px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/2/60.png" style="visibility: inherit; opacity: 1; position: absolute; left: 268px; top: 54px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/1/59.png" style="visibility: inherit; opacity: 1; position: absolute; left: 12px; top: 310px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/1/60.png" style="visibility: inherit; opacity: 1; position: absolute; left: 12px; top: 54px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/3/59.png" style="visibility: inherit; opacity: 1; position: absolute; left: 524px; top: 310px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/3/60.png" style="visibility: inherit; opacity: 1; position: absolute; left: 524px; top: 54px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/2/58.png" style="visibility: inherit; opacity: 1; position: absolute; left: 268px; top: 566px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/1/58.png" style="visibility: inherit; opacity: 1; position: absolute; left: 12px; top: 566px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/2/61.png" style="visibility: inherit; opacity: 1; position: absolute; left: 268px; top: -202px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/3/58.png" style="visibility: inherit; opacity: 1; position: absolute; left: 524px; top: 566px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/1/61.png" style="visibility: inherit; opacity: 1; position: absolute; left: 12px; top: -202px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/0/59.png" style="visibility: inherit; opacity: 1; position: absolute; left: -244px; top: 310px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/0/60.png" style="visibility: inherit; opacity: 1; position: absolute; left: -244px; top: 54px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/3/61.png" style="visibility: inherit; opacity: 1; position: absolute; left: 524px; top: -202px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/4/59.png" style="visibility: inherit; opacity: 1; position: absolute; left: 780px; top: 310px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/0/58.png" style="visibility: inherit; opacity: 1; position: absolute; left: -244px; top: 566px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/4/60.png" style="visibility: inherit; opacity: 1; position: absolute; left: 780px; top: 54px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/2/57.png" style="visibility: inherit; opacity: 1; position: absolute; left: 268px; top: 822px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/0/61.png" style="visibility: inherit; opacity: 1; position: absolute; left: -244px; top: -202px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/1/57.png" style="visibility: inherit; opacity: 1; position: absolute; left: 12px; top: 822px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/4/58.png" style="visibility: inherit; opacity: 1; position: absolute; left: 780px; top: 566px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/3/57.png" style="visibility: inherit; opacity: 1; position: absolute; left: 524px; top: 822px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/2/62.png" style="visibility: inherit; opacity: 1; position: absolute; left: 268px; top: -458px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/4/61.png" style="visibility: inherit; opacity: 1; position: absolute; left: 780px; top: -202px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/1/62.png" style="visibility: inherit; opacity: 1; position: absolute; left: 12px; top: -458px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/3/62.png" style="visibility: inherit; opacity: 1; position: absolute; left: 524px; top: -458px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/0/57.png" style="visibility: inherit; opacity: 1; position: absolute; left: -244px; top: 822px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/4/57.png" style="visibility: inherit; opacity: 1; position: absolute; left: 780px; top: 822px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/0/62.png" style="visibility: inherit; opacity: 1; position: absolute; left: -244px; top: -458px; width: 256px; height: 256px;"><img class="olTileImage" src="http://map.ngii.go.kr/proxys//proxy/proxyTile.jsp?apikey=04trYP9_xwLAfALjwZ-B8g&amp;URL=http://210.117.198.62:8081/2015_map/korean_map_tile/L06/4/62.png" style="visibility: inherit; opacity: 1; position: absolute; left: 780px; top: -458px; width: 256px; height: 256px;"></div><div id="OpenLayers_Layer_NgiiEMap_4" dir="ltr" class="olLayerDiv olLayerGrid" style="position: absolute; width: 100%; height: 100%; z-index: 105; display: none;"></div><div id="OpenLayers_Layer_NgiiEMap_6" dir="ltr" class="olLayerDiv olLayerGrid" style="position: absolute; width: 100%; height: 100%; z-index: 110; display: none;"></div><div id="OpenLayers_Layer_NgiiEMap_8" dir="ltr" class="olLayerDiv olLayerGrid" style="position: absolute; width: 100%; height: 100%; z-index: 115; display: none;"></div><div id="OpenLayers_Layer_NgiiEMap_10" dir="ltr" class="olLayerDiv olLayerGrid" style="position: absolute; width: 100%; height: 100%; z-index: 120; display: none;"></div><div id="OpenLayers_Layer_NgiiEMap_12" dir="ltr" class="olLayerDiv olLayerGrid" style="position: absolute; width: 100%; height: 100%; z-index: 125; display: none;"></div><div id="OpenLayers_Layer_NgiiEMap_14" dir="ltr" class="olLayerDiv olLayerGrid" style="position: absolute; width: 100%; height: 100%; z-index: 130; display: none;"></div><div id="OpenLayers_Layer_NgiiEMap_16" dir="ltr" class="olLayerDiv olLayerGrid" style="position: absolute; width: 100%; height: 100%; z-index: 135; display: none;"></div><div id="OpenLayers_Layer_NgiiEMap_18" dir="ltr" class="olLayerDiv olLayerGrid" style="position: absolute; width: 100%; height: 100%; z-index: 140; display: none;"></div><div id="OpenLayers_Layer_WMTS_20" dir="ltr" class="olLayerDiv olLayerGrid" style="position: absolute; width: 100%; height: 100%; z-index: 145; display: none;"></div><div id="OpenLayers_Layer_NgiiAirMap_22" dir="ltr" class="olLayerDiv olLayerGrid" style="position: absolute; width: 100%; height: 100%; z-index: 150; display: none;"></div></div><div id="OpenLayers_Control_Attribution_139" class="olControlAttribution olControlNoSelect" unselectable="on" style="position: absolute; z-index: 1002;"></div><div id="OpenLayers_Control_Measure_146" class="olControlMeasure olControlNoSelect" unselectable="on" style="position: absolute; z-index: 1003;"></div><div id="OpenLayers_Control_Measure_148" class="olControlMeasure olControlNoSelect" unselectable="on" style="position: absolute; z-index: 1004;"></div></div>
                        
                    </div>
                    <!-- /바로맵 -->
                </div>
                <!-- /Map -->
                
                <!-- Map List -->
                <div class="map-list">

                    <!-- Mobile - Map List Header -->
                    <hgroup class="mobile">
                        <div class="map-control">                           
                            <button type="button" class="map-view c-map mobile" aria-edit-div="map-container"><i class="fa fa-map-o"></i><i class="fa fa-map-marker"></i><span class="blind">지도</span></button>
                            <button type="button" class="c-search open-search" aria-edit-div="searchbox"><i class="fa fa-search"></i><span class="blind">상세검색</span></button>
                        </div>
                        <h1>전라남도 > 신안군 > 비금면</h1>
                    </hgroup>
                    <!-- /Mobile - Map List Header -->

                    <!-- 조사대상 무인도서 목록 -->
                    <p class="count">총 <em>17</em>건이 있습니다.</p>
                    <div class="table-horizontal hover">
                        <table>
                            <caption class="blind">조사대상 무인도서 목록</caption>
                            <colgroup>
                                <col style="width:150px;">
                                <col style="width:auto">
                                <col style="width:180px;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th scope="col">관리번호</th>
                                    <th scope="col">행정구역</th>
                                    <th scope="col">조사대상 도서명</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="current">
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>장구섬(구분시리3)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.htmllist.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /조사대상 무인도서 목록 -->
                </div>
                <!-- /Map List -->

        </section>
        <!-- /Contents -->        
    </article>
	<!-- /Container -->

<?php
    include_once('../../foot.php');
?>