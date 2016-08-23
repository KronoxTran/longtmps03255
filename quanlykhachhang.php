﻿<title>Quan Ly Khach Hang</title>
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.css">
      <script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.js"></script>
        
    <script>
        function onSuccess(data, status)
        {
            data = $.trim(data);
            $("#notification").text(data);
        }
  
        function onError(data, status)
        {
            // handle an error
        }        
  
        $(document).ready(function() {
            $("#them").click(function(){
  
                var formData = $("#callAjaxForm").serialize();
  
                $.ajax({
                    type: "POST",
                    url: "themkhachhang.php",
                    cache: false,
                    data: formData,
                    success: onSuccess,
                    error: onError
                });
  
                return false;
            });
        });
        
        $(document).ready(function() {
            $("#capnhap").click(function(){
  
                var formData = $("#callAjaxForm").serialize();
  
                $.ajax({
                    type: "POST",
                    url: "capnhapkhachhang.php",
                    cache: false,
                    data: formData,
                    success: onSuccess,
                    error: onError
                });
  
                return false;
            });
        });
        
        $(document).ready(function() {
            $("#xoa").click(function(){
  
                var formData = $("#callAjaxForm").serialize();
  
                $.ajax({
                    type: "POST",
                    url: "xoakhachhang.php",
                    cache: false,
                    data: formData,
                    success: onSuccess,
                    error: onError
                });
  
                return false;
            });
        });
        
    </script>
  
    <!-- call ajax page -->
    <div data-role="page" class="ui-page ui-body-c ui-page-active">
        <div data-role="header" class="ui-bar-a ui-header" role="banner">
          <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Quan ly khach hang</h1>
          <a href="#" data-icon="back" data-rel="back" title="Go back">Back</a>
        </div>
  
        <div data-role="content" class="ui-content" role="main">
            <form id="callAjaxForm" style="padding:5px;">
                <div data-role="fieldcontain" class="ui-field-contain ui-body ui-br" >
                        <label for="MaKH" class="ui-input-text">Ma Khach Hang</label>
                        <input type="text" name="MaKH" id="MaKH" value="" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-c" style="margin:5px">
					
                         <label for="TenKH" class="ui-input-text">Ten Khach Hang</label>
                         <input type="text" name="TenKH" id="TenKH" value="" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-c" style="margin:5px" >

					              <label for="Email" class="ui-input-text">Email</label>
                        <input type="text" name="Email" id="Email" value="" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-c" style="margin:5px">

					              <label for="SDT" class="ui-input-text">So Dien Thoai</label>
                        <input type="text" name="SDT" id="SDT" value="" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-c" style="margin:5px">

                        <h3 id="notification"></h3>

                          
                          <div data-theme="b" class="ui-btn ui-btn-corner-all ui-shadow ui-btn-hover-b" aria-disabled="false" >
                            <table style="width:100%">
                              <tr>
                                <th>
                                  <div data-theme="b" class="ui-btn ui-btn-corner-all ui-shadow ui-btn-hover-b" aria-disabled="false">
                                    <span class="ui-btn-inner ui-btn-corner-all" id="them">
                                      <span class="ui-btn-text">Them</span>
                                    </span>
                                  </div>
                                </th>
                                <th>
                                  <div data-theme="b" class="ui-btn ui-btn-corner-all ui-shadow ui-btn-hover-b" aria-disabled="false">
                                    <span class="ui-btn-inner ui-btn-corner-all" id="xoa">
                                      <span class="ui-btn-text">Xoa</span>
                                    </span>
                                  </div>
                                </th>
                                <th>
                                  <div data-theme="b" class="ui-btn ui-btn-corner-all ui-shadow ui-btn-hover-b" aria-disabled="false">
                                    <span class="ui-btn-inner ui-btn-corner-all" id="capnhap">
                                      <span class="ui-btn-text">Cap Nhap</span>
                                    </span>
                                  </div>
                                </th>
                              </tr>
                            </table>
                            <div data-theme="b" class="ui-btn ui-btn-corner-all ui-shadow ui-btn-hover-b" aria-disabled="false">
                              <span class="ui-btn-inner ui-btn-corner-all" >
                                <a href="http://localhost/asm_inf205/showkhachhang.php" style="text-decoration:none;"><span class="ui-btn-text">Danh Sach San Pham</span></a>
                              </span>
                            </div>
							
							<div data-theme="b" class="ui-btn ui-btn-corner-all ui-shadow ui-btn-hover-b" aria-disabled="false">
                              <span class="ui-btn-inner ui-btn-corner-all" >
                                <a href="http://localhost/asm_inf205/showhoadon.php" style="text-decoration:none;"><span class="ui-btn-text">Danh Sach Hoa Don</span></a>
                              </span>
                            </div>
                          </div>
                </div>
            </form>
        </div>
  
        <div data-role="footer" class="ui-bar-a ui-footer" role="contentinfo">
            <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Longtmps03255</h1>
        </div>
    </div>
 
 
<div class="ui-loader ui-body-a ui-corner-all" style="top: 799.5px;"><span class="ui-icon ui-icon-loading spin"></span><h1>loading</h1></div>