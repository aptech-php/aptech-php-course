<?php include_once 'inc/header.php'?>
            <div class="grid_12">
                <!-- Example table -->
                <div class="module">
                	<h2><span>Danh sách sản phẩm</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:4%; text-align: center;">ID</th>
                                    <th>Tên hoa</th>
                                    <th style="width:20%">Mô tả</th>
                                    <th style="width:16%; text-align: center;">Hình ảnh</th>
                                    <th style="width:12%; text-align: center;">Giá bán</th>
                                    <th style="width:11%; text-align: center;">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="edit.php">Hoa Phong Lan</a></td>
                                    <td>Mô tả hoa phong lan</td>
                                    <td align="center"><img src="images/tmp/hoa1.jpg" class="hoa" /></td>
                                    <td align="right">120.000 VNĐ</td>
                                    <td align="center">
                                        <a href="edit.php">Sửa <img src="images/pencil.gif" alt="edit" /></a>
                                        <a href="#">Xóa <img src="images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">2</td>
                                    <td><a href="edit.php">Hoa Tỉ muội</a></td>
                                    <td>Mô tả Hoa Tỉ muội</td>
                                    <td align="center"><img src="images/tmp/hoa2.jpg" class="hoa" /></td>
                                    <td align="right">120.000 VNĐ</td>
                                    <td align="center">
                                        <a href="edit.php">Sửa <img src="images/pencil.gif" alt="edit" /></a>
                                        <a href="">Xóa <img src="images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">3</td>
                                    <td><a href="edit.php">Hoa Violet</a></td>
                                    <td>Mô tả Hoa kỷ niệm</td>
                                    <td align="center"><img src="images/tmp/hoa3.jpg" class="hoa" /></td>
                                    <td align="right">120.000 VNĐ</td>
                                    <td align="center">
                                        <a href="edit.php">Sửa <img src="images/pencil.gif" alt="edit" /></a>
                                        <a href="">Xóa <img src="images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">4</td>
                                    <td><a href="edit.php">Hoa thủy tiên</a></td>
                                    <td>Mô tả Hoa tình yêu</td>
                                    <td align="center"><img src="images/tmp/hoa4.jpg" class="hoa" /></td>
                                    <td align="right">120.000 VNĐ</td>
                                    <td align="center">
                                        <a href="edit.php">Sửa <img src="images/pencil.gif" alt="edit" /></a>
                                        <a href="">Xóa <img src="images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">5</td>
                                    <td><a href="edit.php">Hoa cẩm chướng</a></td>
                                    <td>Mô tả Hoa hạnh phúc</td>
                                    <td align="center"><img src="images/tmp/hoa5.jpg" class="hoa" /></td>
                                    <td align="right">120.000 VNĐ</td>
                                    <td align="center">
                                        <a href="edit.php">Sửa <img src="images/pencil.gif" alt="edit" /></a>
                                        <a href="">Xóa <img src="images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
                        </form>
                     </div> <!-- End .module-table-body -->
                </div> <!-- End .module -->
                
                
                     <div class="pagination">           
                        <div class="numbers">
                            <span>Trang:</span> 
                            <a href="#">1</a> 
                            <span>|</span> 
                            <a href="#">2</a> 
                            <span>|</span> 
                            <span class="current">3</span> 
                            <span>|</span> 
                            <a href="#">4</a> 
                            <span>|</span> 
                            <a href="#">5</a> 
                            <span>|</span> 
                            <a href="#">6</a> 
                        </div> 
                        <div style="clear: both;"></div> 
                     </div>
                
			</div> <!-- End .grid_12 -->
<?php include_once 'inc/footer.php'?> 