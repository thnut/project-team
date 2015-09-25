<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Isan Public</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
    </head>
    <body>

        <div class="navbar-wrapper">
            <div class="container">           
                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Isan Maps</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bus <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">407 พัฒนา</a></li>
                                        <li><a href="#">นครชัยแอร์</a></li>
                                        <li><a href="#">รุ่งประเสริฐทัวร์</a></li>
                                        <li><a href="#">ชาญทัวร์</a></li>
                                        <li><a href="#">สหพันธุ์ร้อยเอ็ด</a></li>
                                        <li><a href="#">อีสานทัวร์</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Van<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">บริษัทภูเขียว</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li class="dropdown-header">Nav header</li>
                                        <li><a href="#">Separated link</a></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Table Times <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li class="dropdown-header">Nav header</li>
                                        <li><a href="#">Separated link</a></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>


        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="img/dscf6629_tonemapped.jpg" alt="First slide" >
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>สถานีขนส่งจังหวัดขอนแก่น ที่ 3</h3>
                            <p>สถานีขนส่งประจำจังหวัดขอนแก่นที่ 3 เป็นสถานีขนส่งประจำจังหวัดขอนแก่นที่มีรถสายทั่วประเทศที่ผ่านเข้ามาหรือมีผู้โดยสารที่มีจุดมุ่งหมายเดียวกัน</p>
                            <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="img/2-copy1.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>สถานีขนส่งจังหวัดเชียงใหม่</h3>
                            <p>สถานีขนส่งประจำจังหวัดเชียงใหม่ เป็นสถานีขนส่งประจำจังหวัดเขียงใหม่ที่มีรถสายทั่วประเทศที่ผ่านเข้ามาหรือมีผู้โดยสารที่มีจุดมุ่งหมายเดียวกัน</p>
                            <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
                        </div>
                    </div>
                </div>

            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- /.carousel -->




        <!-- Marketing messaging and featurettes
         ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->

            <div class="col-lg-12">
                <div class="notice notice-info">
                    Bus 
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4">
                    <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>407 พัฒนา</h2>
                    <p>บริษัท 407 พัฒนา คือ บริษัทรถทัวร์ที่ให้บริการในเขตภาคอีสาน</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="img/ref25b.jpg" alt="Generic placeholder image" width="160" height="140">
                    <h2>นครชัยแอร์</h2>
                    <p>ให้บริการรถโดยสารประจำทางที่ยอดเยี่ยมมีมาตรฐาน ตรงตามความต้องการของผู้ใช้บริการด้วยระบบการบริหารงานที่มีธรรมาภิบาล</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="img/chantour_logo.gif" alt="Generic placeholder image" width="140" height="140">
                    <h2>ชาญทัวร์</h2>
                    <p>รกิจเดินรถโดยสารดั้งเดิมของชาวขอนแก่น ตลอดกว่า 34 ปี ที่ชาญทัวร์เดินรถโดยสารประจำทางขนส่งผู้โดยสารในหลากหลายเส้นทางของจังหวัดภาคอีสาน กับกรุงเทพมหานคร</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div>
            <div class="row">

                <div class="col-lg-4">
                    <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>รุ่งประเสริฐทัวร์</h2>
                    <p>บริษัท 407 พัฒนา คือ บริษัทรถทัวร์ที่ให้บริการในเขตภาคอีสาน</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>สหพันธ์ร้อยเอ็ดทัวร์</h2>
                    <p>ให้บริการรถโดยสารประจำทางที่ยอดเยี่ยมมีมาตรฐาน ตรงตามความต้องการของผู้ใช้บริการด้วยระบบการบริหารงานที่มีธรรมาภิบาล</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>อีสานทัวร์</h2>
                    <p>รกิจเดินรถโดยสารดั้งเดิมของชาวขอนแก่น ตลอดกว่า 34 ปี ที่ชาญทัวร์เดินรถโดยสารประจำทางขนส่งผู้โดยสารในหลากหลายเส้นทางของจังหวัดภาคอีสาน กับกรุงเทพมหานคร</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->

            <hr class="featurette-divider">

            <div class="notice notice-info">
                Van
            </div>


            <div class="row">
                <div class="col-lg-4">
                    <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>บริษัทภูเขียว</h2>
                    <p>บริษัทภูเขียว คือ บริษัทรถตู้ขนส่งสาธารณะที่มีเส้นทางเดิน ขอนแก่น - ภูเขียว ที่ให้บริการในเขตภาคอีสาน</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>สหพันธ์ร้อยเอ็ดทัวร์</h2>
                    <p>ให้บริการรถโดยสารประจำทางที่ยอดเยี่ยมมีมาตรฐาน ตรงตามความต้องการของผู้ใช้บริการด้วยระบบการบริหารงานที่มีธรรมาภิบาล</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>อีสานทัวร์</h2>
                    <p>รกิจเดินรถโดยสารดั้งเดิมของชาวขอนแก่น ตลอดกว่า 34 ปี ที่ชาญทัวร์เดินรถโดยสารประจำทางขนส่งผู้โดยสารในหลากหลายเส้นทางของจังหวัดภาคอีสาน กับกรุงเทพมหานคร</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div>
        </div><!-- /.container -->  

        <hr class="featurette-divider">
        <div class="clearfix"></div>

        <section id="test">

            Features
        </section>
        <div class="clearfix"></div>




        <div class="container">

            <ul class="timeline">
                <li>
                    <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">ค้นหาตำแหน่งปัจจุบันของคุณ. </h4>
                            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
                        </div>
                        <div class="timeline-body">
                            <div class="row featurette">

                                <center> <img class="" src="img/red-marker.png" alt="รายชื่อสถานีขนส่งภาคตะวันออกเฉียงเหนือ" width="50px" height="50px"></center>

                                <p class="lead">ระบบจะระบุตำแหน่งปัจจุบันของคุณว่าตอนนี้คุณอยู่ที่ไหน</p>
                                <center><a class="btn btn-lg btn-info" href="#" role="button">Searh Me</a></center>


                                ตำแหน่งของฉัน:
                                <div id="geo_data"></div>
                                <div id="map_canvas"> </div>

                                <script type="text/javascript">
                                    var initialLocation;
                                    var bangkok = new google.maps.LatLng(13.755716, 100.501589);
                                    function initialize() {
                                        var myOptions = {
                                            zoom: 15,
                                            //center: latlng,
                                            mapTypeControl: false,
                                            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                                            mapTypeId: google.maps.MapTypeId.ROADMAP
                                        };
                                        var map = new google.maps.Map(document.getElementById("map_canvas"),
                                                myOptions);

                                        // detect geolocation lat/lng
                                        if (navigator.geolocation) {
                                            navigator.geolocation.getCurrentPosition(function (location) {
                                                var location = location.coords;
                                                $("#geo_data").html('lat: ' + location.latitude + '<br />long: ' + location.longitude);
                                                initialLocation = new google.maps.LatLng(location.latitude, location.longitude);
                                                map.setCenter(initialLocation);
                                                setMarker(initialLocation);
                                            }, function () {
                                                handleNoGeolocation();
                                            });
                                        } else {
                                            handleNoGeolocation();
                                        }

                                        // no geolocation
                                        function handleNoGeolocation() {
                                            map.setCenter(bangkok);
                                            setMarker(bangkok);
                                            $("#geo_data").html('lat: 13.755716<br />long: 100.501589');
                                        }

                                        // set marker
                                        function setMarker(initialName) {
                                            var marker = new google.maps.Marker({
                                                draggable: true,
                                                position: initialName,
                                                map: map,
                                                title: "คุณอยู่ที่นี่."
                                            });
                                            google.maps.event.addListener(marker, 'dragend', function (event) {
                                                $("#geo_data").html('lat: ' + marker.getPosition().lat() + '<br />long: ' + marker.getPosition().lng());
                                            });
                                        }
                                    }

                                    $(document).ready(function () {
                                        initialize();
                                    });
                                </script>

                            </div>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">เช็คราคาตั๋วเดินทาง.</h4>
                        </div>
                        <div class="timeline-body">
                            <div class="row featurette">

                                <img class="logo" src="img/bus-ticket-icon.png" alt="ticket-logo" width="250px" height="250px" >
                                <h2 class="featurette-heading">เช็คราคาตั๋วเดินทาง. <span class="text-muted"></span></h2>
                                <p class="lead">คุณสามารถเช็คราคาตั๋วเดินไปยังจุดปลายทางที่คุณต้องการจะเดินทาง</p>


                                <div class="heading-location">
                                    สถานีต้นทาง
                                </div>
                                <select class="form-control">
                                    <option>สถานีขนส่งจังหวัดขอนแก่น</option>
                                    <option>สถานีขนส่งอำเภอบ้านไผ่</option>
                                    <option>สถานีขนส่งอำเภอเมืองพล</option>
                                    <option>สถานีขนส่งนครราชสีมา</option>
                                    <option>สถานีขนส่งหมอชิต</option>
                                    <option>สถานีขนส่งหนองคาย</option>
                                    <option>สถานีขนส่งสกลนคร</option>
                                    <option>สถานีขนส่งร้อยเอ็ด</option>
                                    <option>สถานีขนส่งสุรินทร์</option>
                                    <option>สถานีขนส่งยโสธร</option>
                                </select>
                                <div class="heading-location">
                                    สถานีปลายทาง
                                </div>
                                <select class="form-control">
                                    <option>สถานีขนส่งจังหวัดขอนแก่น</option>
                                    <option>สถานีขนส่งอำเภอบ้านไผ่</option>
                                    <option>สถานีขนส่งอำเภอเมืองพล</option>
                                    <option>สถานีขนส่งนครราชสีมา</option>
                                    <option>สถานีขนส่งหมอชิต</option>
                                    <option>สถานีขนส่งหนองคาย</option>
                                    <option>สถานีขนส่งสกลนคร</option>
                                    <option>สถานีขนส่งร้อยเอ็ด</option>
                                    <option>สถานีขนส่งสุรินทร์</option>
                                    <option>สถานีขนส่งยโสธร</option>
                                </select>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                        Bus
                                    </label>
                                    <label>
                                        <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                        Van
                                    </label>
                                </div>
                                <input type="text" class="form-control" placeholder="Price" value="50 $" > 
                            </div>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                            <hr>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


        <!-- START THE FEATURETTES 
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
                <center> <img class="" src="img/red-marker.png" alt="รายชื่อสถานีขนส่งภาคตะวันออกเฉียงเหนือ" width="150px" height="250px"></center>
                <h2 class="featurette-heading">ค้นหาตำแหน่งปัจจุบันของคุณ. 
                    <span class="text-muted"></span></h2>
                <p class="lead">ระบบจะระบุตำแหน่งปัจจุบันของคุณว่าตอนนี้คุณอยู่ที่ไหน</p>
                <center><a class="btn btn-lg btn-info" href="#" role="button">Searh Me</a></center>
            </div>
            <div class="col-md-5 col-md-pull-7">
                ตำแหน่งของฉัน:
                <div id="geo_data"></div>
                <div id="map_canvas"> </div>

                <script type="text/javascript">
                    var initialLocation;
                    var bangkok = new google.maps.LatLng(13.755716, 100.501589);
                    function initialize() {
                        var myOptions = {
                            zoom: 15,
                            //center: latlng,
                            mapTypeControl: false,
                            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        var map = new google.maps.Map(document.getElementById("map_canvas"),
                                myOptions);

                        // detect geolocation lat/lng
                        if (navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition(function (location) {
                                var location = location.coords;
                                $("#geo_data").html('lat: ' + location.latitude + '<br />long: ' + location.longitude);
                                initialLocation = new google.maps.LatLng(location.latitude, location.longitude);
                                map.setCenter(initialLocation);
                                setMarker(initialLocation);
                            }, function () {
                                handleNoGeolocation();
                            });
                        } else {
                            handleNoGeolocation();
                        }

                        // no geolocation
                        function handleNoGeolocation() {
                            map.setCenter(bangkok);
                            setMarker(bangkok);
                            $("#geo_data").html('lat: 13.755716<br />long: 100.501589');
                        }

                        // set marker
                        function setMarker(initialName) {
                            var marker = new google.maps.Marker({
                                draggable: true,
                                position: initialName,
                                map: map,
                                title: "คุณอยู่ที่นี่."
                            });
                            google.maps.event.addListener(marker, 'dragend', function (event) {
                                $("#geo_data").html('lat: ' + marker.getPosition().lat() + '<br />long: ' + marker.getPosition().lng());
                            });
                        }
                    }

                    $(document).ready(function () {
                        initialize();
                    });
                </script>
            </div>








        </div>

        <hr class="featurette-divider">
        <section class="row featurette">
            <div class="col-md-8">
                <h2 class="featurette-heading">
                    ค้นหาสถานีที่ใกล้ที่สุด.
                    <span class="text-muted"></span></h2>
                <p class="lead">คุณสามารถค้นหาสถานีขนส่งสาธารณะที่ใกล้ตัวคุณที่สุด.</p>
            </div>
            <div class="col-md-4">
                <select class="selectpicker">
                    <option>สถานีขนส่งจังหวัดขอนแก่น</option>
                    <option data-subtext="Heinz">Ketchup</option>
                    <option>สถานีขนส่งจังหวัดขอนแก่น</option>
                </select>
            </div>
        </section>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
                <img class="logo" src="img/bus-ticket-icon.png" alt="ticket-logo" width="250px" height="250px" >
                <h2 class="featurette-heading">เช็คราคาตั๋วเดินทาง. <span class="text-muted"></span></h2>
                <p class="lead">คุณสามารถเช็คราคาตั๋วเดินไปยังจุดปลายทางที่คุณต้องการจะเดินทาง</p>
            </div>
            <div class="col-md-5 col-md-pull-7">
                <div class="heading-location">
                    สถานีต้นทาง
                </div>
                <select class="form-control">
                    <option>สถานีขนส่งจังหวัดขอนแก่น</option>
                    <option>สถานีขนส่งอำเภอบ้านไผ่</option>
                    <option>สถานีขนส่งอำเภอเมืองพล</option>
                    <option>สถานีขนส่งนครราชสีมา</option>
                    <option>สถานีขนส่งหมอชิต</option>
                    <option>สถานีขนส่งหนองคาย</option>
                    <option>สถานีขนส่งสกลนคร</option>
                    <option>สถานีขนส่งร้อยเอ็ด</option>
                    <option>สถานีขนส่งสุรินทร์</option>
                    <option>สถานีขนส่งยโสธร</option>
                </select>
                <div class="heading-location">
                    สถานีปลายทาง
                </div>
                <select class="form-control">
                    <option>สถานีขนส่งจังหวัดขอนแก่น</option>
                    <option>สถานีขนส่งอำเภอบ้านไผ่</option>
                    <option>สถานีขนส่งอำเภอเมืองพล</option>
                    <option>สถานีขนส่งนครราชสีมา</option>
                    <option>สถานีขนส่งหมอชิต</option>
                    <option>สถานีขนส่งหนองคาย</option>
                    <option>สถานีขนส่งสกลนคร</option>
                    <option>สถานีขนส่งร้อยเอ็ด</option>
                    <option>สถานีขนส่งสุรินทร์</option>
                    <option>สถานีขนส่งยโสธร</option>
                </select>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                        Bus
                    </label>
                    <label>
                        <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                        Van
                    </label>
                </div>
                <input type="text" class="form-control" placeholder="Price" value="50 $" > 
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 ">
                <img class="logo" src="img/Bus-icon.jpg" alt="bus-station" width="250px;" height="250px;">
                <h2 class="featurette-heading">รายชื่อสถานีขนส่งสาธารณะ. <span class="text-muted"></span></h2>
                <p class="lead">รายชื่อสถานีขนส่งในเขตภาคตะวันออกเฉียงเหนือ.</p>
            </div>
            <div class="col-md-5 ">
                <div class="heading-location">
                    สถานีต้นทาง - ปลายทาง
                </div>
                <select class="form-control " multiple="" style="height: 200px;">
                    <option>สถานีขนส่งจังหวัดขอนแก่น</option>
                    <option>สถานีขนส่งอำเภอบ้านไผ่</option>
                    <option>สถานีขนส่งอำเภอเมืองพล</option>
                    <option>สถานีขนส่งนครราชสีมา</option>
                    <option>สถานีขนส่งหมอชิต</option>
                    <option>สถานีขนส่งหนองคาย</option>
                    <option>สถานีขนส่งสกลนคร</option>
                    <option>สถานีขนส่งร้อยเอ็ด</option>
                    <option>สถานีขนส่งสุรินทร์</option>
                    <option>สถานีขนส่งยโสธร</option>
                </select>
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->


        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>




        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
