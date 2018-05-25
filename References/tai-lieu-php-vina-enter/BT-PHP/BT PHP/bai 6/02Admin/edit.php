<?php include_once 'inc/header.php'?>
            <div class="grid_12">
            
                <div class="module">
                     <h2><span>Sửa sản phẩm</span></h2>
                        
                     <div class="module-body">
                        <form action="">
                            <p>
                                <label>Tên hoa</label>
                                <input type="text" class="input-medium" value="Hoa Phong Lan" />
                            </p>
                            
							<p>
                                <label>Hình ảnh</label>
                                <br />
                                <img src="images/tmp/hoa1.jpg" alt="" width="100px" /><br />
                                <input type="file" value="" />
                            </p>
                            
                            <p>
                                <label>Giá bán</label>
                                <input type="text" class="input-medium" value="120.000" /> VNĐ
                            </p>
                            
                            <p>
                                <label>Mô tả</label>
                                <textarea rows="7" cols="90" class="input-medium">Mô tả hoa phong lan</textarea>
                            </p>
                                
                            <fieldset>
                                <input class="submit-green" type="submit" value="Sửa" /> 
                                <input class="submit-gray" type="submit" value="Nhập lại" />
                            </fieldset>
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        		<div style="clear:both;"></div>
            </div> <!-- End .grid_12 -->
<?php include_once 'inc/footer.php'?> 