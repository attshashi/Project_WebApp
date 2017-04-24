<!-- Member /////about-->

<div class="about-w3-agile tab-pane fade Member_C" id="about">
    <div class="container">
        <div class="wthree_about_grids">
            <div class="wthree_about_grid_left">
                <?php
                if(isset($_SESSION["type_user"])){
                    if($_SESSION["type_user"] == "admin") {
                        ?>
                        <h3>Member</h3>
                        <a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href=".Member_C #small-dialog">ADD</a>
                        <table class="table" style="" id="">
                            <thead>
                            <tr>
                                <th width="50px">ID</th>
                                <th width="100px">ชื่อ</th>
                                <th width="100px">นามสกุล</th>
                                <th width="100px">Username</th>
                                <th width="100px">Password</th>
                                <th width="100px">เบอร์โทรศัพท์</th>
                                <th width="120px">E-mail</th>
                                <th width="120px">Type User</th>
                                <th width="120px">ยืนยันสมาชิก</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>อรรถชัย</td>
                                <td>บุญเหล็ง</td>
                                <td>user123</td>
                                <td>123456</td>
                                <td>0858253730</td>
                                <td>rap.ab1610@gmail.com</td>
                                <td>User</td>
                                <td>Access</td>
                            </tr>
                            </tbody>
                        </table>

                        <?php
                    }
                }
                ?>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="pop-up">
        <div id="small-dialog" class="mfp-hide book-form">
            <h3>Sign In </h3>
            <form action="controller/homepage.php" method="post">
                <input type="text" name="username" class="email" placeholder="Username" required=""/>
                <input type="password" name="password" class="password" placeholder="Password" required=""/>
                <div class="clearfix"></div>
                <input type="submit" value="Sign In" name="chklogin">
            </form>
        </div>
    </div>
</div>
<!-- //Member -->