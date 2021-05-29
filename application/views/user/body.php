<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5" style="padding-right: 0px; padding-left: 0px;" id="divLeft">
                <div class="center">
                    <div class=" box-center" style="vertical-align: top !important;">
                        <table width="100%">
                            <tr>
                                <td>
                                    <h1>
                                        <img src="<?= base_url() ?>public/images/icon-libol.png" width="40"
                                            height="35" /><a href="#" target="_blank" style="color: #ff6400">CSDL Tài
                                            liệu </a>
                                    </h1>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="thongketailieu">
                                        <ul>
                                            <li>Tổng số ấn phẩm đơn bản:
                                                <span id="lblTotalSingleItemsValue" class="lbLabel"
                                                    class="orange-text"><b>236.731</b></span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                Tổng số xếp giá:
                                                <span id="lblTotalCopyNumberItemsValue" class="lbLabel"
                                                    class="orange-text"><b>637.701</b></span>
                                            </li>
                                            <li>Tổng số ấn phẩm định kỳ:
                                                <span id="lblTotalSerialItemsValue" class="lbLabel"
                                                    class="orange-text"><b>5.317</b></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;


                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="heading-box-tailieu">
                                        <tr>
                                            <td>
                                                <h2>
                                                    <img src="<?= base_url() ?>public/images/icon-heading-center.png"
                                                        style="width: 18px; height: 16px;" />Tài liệu mới
                                                </h2>
                                            </td>
                                            <td>
                                                <div class="read-more">
                                                    <a id="lblViewDetail" class="lbLinkFunction"
                                                        href="javascript:__doPostBack(&#39;lblViewDetail&#39;,&#39;&#39;)">Xem
                                                        thêm</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="lbGrid" cellspacing="0" rules="all" border="1" id="dgrNewItems"
                                        style="border-collapse:collapse;">
                                        <tr class="lbGridHeader">
                                            <td style="width:3%;">STT</td>
                                            <td style="width:97%;">Nhan đề</td>
                                        </tr>

                                        <?php $i = 1; foreach ($book as $row)
                                     { ?>
                                        <tr class="lbGridCell">
                                            <td align="right"><?php echo $i++ ?></td>
                                            <td><A
                                                    Href="WShowDetail.aspx?intItemID=244183"><?php echo $row -> tensach ?></A>
                                            </td>
                                        </tr> <?php } ?>

                                        <tr class="lbGridCell">
                                            <td align="right">1</td>
                                            <td><A Href="WShowDetail.aspx?intItemID=244183"> Cha con và Tổ quốc: Tập
                                                    truyện/ Vũ
                                                    Tuyết Mây</A></td>
                                        </tr>

                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="heading-box-tailieu">
                                        <tr>
                                            <td>
                                                <h2>
                                                    <img src="<?= base_url() ?>public/images/icon-heading-center.png"
                                                        style="width: 18px; height: 16px;" />Tài liệu được mượn nhiều
                                                    nhất
                                                </h2>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="lbGrid" cellspacing="0" rules="all" border="1" id="dgrStatisticTop"
                                        style="border-collapse:collapse;">
                                        <tr class="lbGridHeader">
                                            <td style="width:3%;">STT</td>
                                            <td style="width:97%;">Nhan đề</td>
                                        </tr>
                                        <?php $i = 1; foreach ($countbk as $row)
                                     { ?>
                                        <tr class="lbGridCell">
                                            <td align="right"><?php echo $i++ ?></td>
                                            <td><A Href="WShowDetail.aspx?intItemID=244183"><?php echo $row -> tensach ?>
                                                    (<B>
                                                        <Font color="CC0000"><?php echo $row -> ss ?></Font>
                                                    </B>)</A></td>
                                        </tr> <?php } ?>
                                        <tr class="lbGridAlterCell">
                                            <td align="right">2</td>
                                            <td><A Href="WShowDetail.aspx?intItemID=233264"> Mắt biếc: Truyện dài/
                                                    Nguyễn Nhật
                                                    Ánh</A> (<B>
                                                    <Font color="CC0000">62</Font>
                                                </B>)</td>
                                        </tr>

                                    </table>
                            </tr>

                        </table>
                        </td>
                        </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-5 SetBorder" style="padding-right: 0px; padding-left: 0px; height: auto;" id="divCenter">
                <table width="100%">
                    <tbody>
                        <tr>
                            <td valign="top" style="vertical-align: top !important;" class="center">
                                <div class="box-center">

                                    <table width="100%">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h1>
                                                        <img src="<?= base_url() ?>public/images/icon-libol.png"
                                                            width="40" height="35">
                                                        <a href="#" target="_blank" style="color: #ff6400">CSDL Tài liệu
                                                            </a>
                                                    </h1>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="thongketailieu">
                                                        <ul>
                                                            <li>Tổng số tài liệu số: <span class="orange-text">
                                                                    <span id="lblEdataCount"
                                                                        class="lbLabel">3.964</span></span>
                                                            </li>
                                                            <li style="display: none;">Tổng số tệp tin điện tử: <span
                                                                    class="orange-text">
                                                                    <span id="lblEdataDetailsCount"
                                                                        class="lbLabel">1.034</span></span></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="heading-box-tailieu" style="margin-bottom: 10px;">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h2>
                                                                        <img src="<?= base_url() ?>public/images/icon-heading-center.png"
                                                                            style="width: 18px; height: 16px;">Bộ sưu
                                                                        tập tài liệu
                                                                    </h2>
                                                                </td>
                                                                <td>
                                                                    <div class="read-more">
                                                                        <a id="ucTvsBoSuuTapTaiLieu_linkViewMore"
                                                                            class="lbLinkFunction"
                                                                            href="javascript:__doPostBack('ucTvsBoSuuTapTaiLieu$linkViewMore','')">Xem
                                                                            thêm</a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="content-box-tailieu  row display-flex">
                                                        <?php foreach($loai as $row){?>
                                                        <div class="col-md-4" style="height: 160px">
                                                            <p class="product-img">
                                                                <a href="<?= base_url() ?>index.php/User/user/chitietLoai/<?= $row->id_loai ?>">
                                                                    <img id="ucTvsBoSuuTapTaiLieu_rptEdata_ctl00_imgBook"
                                                                        title="<?= $row->loaisach ?>"
                                                                        src="<?= $row->img ?>"
                                                                        style="border-width:0px;height: 90px; width: 80px; border-width: 0px; ">
                                                                </a>
                                                            </p>
                                                            <p class="title-product">
                                                                <a href="wpSearchListEdataGroup.aspx?Id=1">
                                                                    <span
                                                                        id="ucTvsBoSuuTapTaiLieu_rptEdata_ctl00_lblTitle"
                                                                        title="<?= $row->loaisach ?>"><?= $row->loaisach ?></span>

                                                                </a>
                                                            </p>
                                                        </div>
                                                        <?php
                                            }?>
                                                        <div class="col-md-4" style="height: 160px">
                                                            <p class="product-img">
                                                                <a href="wpSearchListEdataGroup.aspx?Id=5">
                                                                    <img id="ucTvsBoSuuTapTaiLieu_rptEdata_ctl04_imgBook"
                                                                        title="Báo - Tạp Chí"
                                                                        src="wpViewImageUpload.ashx?Type=CAT_EDATA_COLLECTION&amp;Id=5"
                                                                        style="border-width:0px;height: 90px; width: 80px; border-width: 0px; ">
                                                                </a>
                                                            </p>
                                                            <p class="title-product">
                                                                <a href="wpSearchListEdataGroup.aspx?Id=5">
                                                                    <span
                                                                        id="ucTvsBoSuuTapTaiLieu_rptEdata_ctl04_lblTitle"
                                                                        title="Báo - Tạp Chí">Báo - Tạp Chí</span>

                                                                </a>
                                                            </p>
                                                        </div>

                                                        <div class="clear">
                                                        </div>
                                                    </div>


                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"
                style="padding-right: 0px; padding-left: 0px; background-color: rgb(202, 238, 255); height: auto;"
                id="divRight">
                <table width="100%" id="tblRight">
                    <tbody>
                        <tr>
                            <td valign="top" style="vertical-align: top !important;">
                                <div class="box-col-right">
                                    <h3>Tìm kiếm:
                                    </h3>
                                    <table width="100%">
                                        <tbody>
                                            <tr>
                                                <td width="75%" align="left">
                                                    <input name="txtSearch" type="text" value="Gõ điều kiện tìm kiếm"
                                                        id="txtSearch" class="lbTextBox"
                                                        onclick="document.forms[0].txtSearch.value='';"
                                                        style="width: 100%;">
                                                </td>

                                                <td width="25%" align="right">
                                                    <a onclick="if(CheckSearch(' Chưa nhập điều kiện tìm kiếm ')){  return(true);} else return false;"
                                                        id="imgSearch" class="lbButton"
                                                        href="javascript:__doPostBack('imgSearch','')"
                                                        style="font-size:8pt;">Tìm
                                                        kiếm</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <ul>
                                                        <li>
                                                            <span class="lbRadio"><input id="optItemInLibrary"
                                                                    type="radio" name="Search" value="optItemInLibrary"
                                                                    checked="checked"><label for="optItemInLibrary">Sách
                                                                    trong thư viện</label></span>
                                                        </li>
                                                        <li>
                                                            <span class="lbRadio"><input id="optItemILL" type="radio"
                                                                    name="Search" value="optItemILL"><label
                                                                    for="optItemILL">Ấn phẩm điện
                                                                    tử</label></span>
                                                        </li>
                                                        <li style="display: none;">
                                                            <span class="lbRadio"><input id="optItemVinaseek"
                                                                    type="radio" name="Search"
                                                                    value="optItemVinaseek"><label
                                                                    for="optItemVinaseek">Vina seek</label></span>
                                                        </li>
                                                        <li style="display: none;">
                                                            <span class="lbRadio"><input id="optItemGoogle" type="radio"
                                                                    name="Search" value="optItemGoogle"><label
                                                                    for="optItemGoogle">Google</label></span>
                                                        </li>
                                                    </ul>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="divPatron" class="box-col-right">
                                    <h3>
                                        <span id="lblPatronPage">Trang bạn đọc</span>
                                    </h3>
                                    <table width="100%">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span id="lblCardNumber">Số thẻ:</span>
                                                </td>
                                                <td>
                                                    <input name="txtCardNumber" type="text" maxlength="50"
                                                        id="txtCardNumber" class="lbTextBox" style="width: 96%;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="3px"></td>
                                            </tr>
                                            <tr>
                                                <td nowrap="nowrap">
                                                    <span id="lblPassword">Mật khẩu:</span>
                                                </td>
                                                <td>
                                                    <input name="txtPassword" type="password" id="txtPassword"
                                                        class="lbTextBox" style="width: 96%;">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="6px"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <a onclick="return(SubmitToPatronPage('Số thẻ là bắt buộc'));"
                                                        id="btnPatronLogon" class="lbButton"
                                                        href="javascript:__doPostBack('btnPatronLogon','')">Đăng
                                                        nhập</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="6px"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="text-align: center;">
                                                    <a id="hrfSetPassword" class="lbLinkfunction"
                                                        href="WActivePersonalPage.aspx">Đặt mật khẩu</a>
                                                    &nbsp;|&nbsp;
                                                    <a id="hrfForgotPassword" class="lbLinkfunction"
                                                        href="WForgotPassword.aspx">Quên mật khẩu</a>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="box-col-right">
                                    <h3>Lịch làm việc: <span style="color: #FF0;">
                                            <span id="lblCurrentmonth" class="lbLabel" style="color:#FFFFDD;">
                                                <b>5</b></span><b>/</b>&nbsp;<a id="hrfCurrentyear"
                                                class="lbLinkFuntion"
                                                onclick="javascript:location.href='WWorkSchedule.aspx?LocationID=';return(false);"
                                                href="WWorkSchedule.aspx" style="color:White;"> <b>2021</b></a></span>
                                    </h3>
                                    <table width="100%">
                                        <tbody>
                                            <tr class="heading-calendar calendar-align">
                                                <td class="calendar-padding">
                                                    <span style="color: #F00;">CN</span>
                                                </td>
                                                <td>Hai
                                                </td>
                                                <td>Ba
                                                </td>
                                                <td>Tư
                                                </td>
                                                <td>Năm
                                                </td>
                                                <td>Sáu
                                                </td>
                                                <td>Bảy
                                                </td>
                                            </tr>
                                            <tr class="calendar-align">
                                                <td class="calendar-padding" colspan="7">
                                                    <span id="lblViewCalendar" class="lbLabel60"
                                                        style="display:inline-block;width:100%;">Vùng hiển thị
                                                        lịch</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="box-col-right">
                                    <div id="kho" style="height: 34px">
                                        <span id="lblLocation" class="lbLabel" style="color:White;">Kho:</span>&nbsp;
                                        <select name="ddlLocation"
                                            onchange="javascript:setTimeout('__doPostBack(\'ddlLocation\',\'\')', 0)"
                                            id="ddlLocation" class="lbDropDownList" style="float: right; width: 80%">

                                        </select>
                                        <input name="hdLocation" type="hidden" id="hdLocation">
                                    </div>
                                    <div class="tailieu">
                                        <p>
                                            <a id="hrfZ3950" class="lbLinkfunction"
                                                href="Z3950/WZ3950Client.aspx">Z39.50</a>
                                        </p>
                                        <p>
                                            Tìm tài liệu trong các thư viện trực tuyến
                                        </p>
                                    </div>
                                    <div class="tailieu">
                                        <p>
                                            <a id="hrfILL" class="lbLinkfunction" href="ILL/WILLIndex.aspx">ILL</a>
                                        </p>
                                        <p>
                                            Mượn tài liệu ở các thư viện khác
                                        </p>
                                    </div>
                                    <div class="tailieu">
                                        <p>
                                            <a id="hrfFeedBack" class="lbLinkfunction" href="WFeedBack.aspx">Góp ý</a>
                                        </p>
                                        <p>
                                            Đóng góp ý kiến cho thư viện
                                        </p>
                                    </div>
                                    <div class="tailieu">
                                        <h3>
                                            <span id="Label2" class="lbLabel" style="color:White;"><b>Thống kê truy
                                                    cập</b>
                                            </span>
                                        </h3>
                                    </div>
                                    <div align="center">
                                        <p>
                                            <span id="lblThongKeLuotTruyCap" class="lbLabel"
                                                style="font-size:16pt;font-weight:bold;">713.517</span>
                                        </p>
                                    </div>
                                    <div class="tailieu" align="center">
                                        <p>
                                            <select name="ddlMonth"
                                                onchange="javascript:setTimeout('__doPostBack(\'ddlMonth\',\'\')', 0)"
                                                id="ddlMonth" class="lbDropDownList">
                                                <option value="1">Tháng 1</option>
                                                <option value="2">Tháng 2</option>
                                                <option value="3">Tháng 3</option>
                                                <option value="4">Tháng 4</option>
                                                <option selected="selected" value="5">Tháng 5</option>
                                                <option value="6">Tháng 6</option>
                                                <option value="7">Tháng 7</option>
                                                <option value="8">Tháng 8</option>
                                                <option value="9">Tháng 9</option>
                                                <option value="10">Tháng 10</option>
                                                <option value="11">Tháng 11</option>
                                                <option value="12">Tháng 12</option>

                                            </select>
                                            <select name="ddlYear"
                                                onchange="javascript:setTimeout('__doPostBack(\'ddlYear\',\'\')', 0)"
                                                id="ddlYear" class="lbDropDownList">
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option selected="selected" value="2021">2021</option>

                                            </select>:
                                            <span id="lblThongKeLuotTruyCapChiTiet" class="lbLabel"
                                                style="font-weight:bold;">21.678</span>
                                        </p>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>