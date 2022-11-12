<?php
$menu = "index";
?>
<?php include("header.php"); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/openlayers/2.11/lib/OpenLayers.js"></script>
<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-YNSG6GFCJJ"></script>
<script>
    var lat            = 47.35387; //มีการกำหนดค่าตัวแปร lat เพื่อเก็บค่า ละติจูล
    var lon            = 8.43609;  //มีการกำหนดค่าตัวแปร lon เพื่อเก็บค่า ลองติจูล
    var zoom           = 18;       //มีการกำหนดค่าตัวแปร zoom เพื่อขยายภาพตอนเริ่มในการแสดงแผนที่

    var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
    var toProjection   = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection //มีการเรียกใช้งาน แสดงแผนที่ลูกโลกบนพื้นผิวสัมผัสทรงกระบอก ( Mercator projection)

    var position       = new OpenLayers.LonLat(lon, lat).transform( fromProjection, toProjection); //ทำการเก็บค่าตัวแปร lat,long ไว้ในตัวแปร position , เพื่อไว้แสดงค่าพิกัดบนแผนที่ OpenStreetMap ตอนเริ่มต้น


    map = new OpenLayers.Map("Map"); //มีการใช้ Function OpenLayer.Map() ในการแสดงแผนที่

    var mapnik         = new OpenLayers.Layer.OSM();
    map.addLayer(mapnik);

    var markers = new OpenLayers.Layer.Markers( "Markers" );//มีการแสดงตัว Marker เข้ามาทำงาน , ต้องมีการดึง File Openlayers.js เข้ามาทำงานด้วย , ถึงจะแสดงผล
    map.addLayer(markers);
    markers.addMarker(new OpenLayers.Marker(position));

    map.setCenter(position, zoom);
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card"></i> ระบบบันทึกข้อมูลสารสนเทศ</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    
    
    
    <div class="card">
      <div class="card-header card-navy card-outline">
       
        </div>
      </div>
      <br>
      <div class="card-body p-1">
        <div class="row">
          
        </div>
      </div>
      
    </div>
    
    
    
  </div>
  <!-- /.col -->
</div>
</section>
<!-- /.content -->
<?php include('footer.php'); ?>
<script>
$(function () {
$(".datatable").DataTable();
$('#example2').DataTable({
"paging": true,
"lengthChange": false,
"searching": false,

"ordering": true,
"info": true,
"autoWidth": false,
});
});
</script>
</body>
</html>