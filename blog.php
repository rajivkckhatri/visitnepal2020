<?php include ('index/header.php'); ?>

<style>
    .blog-img{
    width: 50%;
    height: 250px;}
.p-t-20{
    background: #CEF5EF ;}
</style>

<?php  

if (isset($_POST['submit-search']) && isset($_GET[''])) {
$title = mysqli_real_escape_string($data, $_GET['title']);
$discription = mysqli_real_escape_string($data, $_GET['discription']);

$sql = "SELECT * FROM searchbar WHERE title= '$title' AND discription= '$discription'";
$result = mysqli_query ($data, $sql);
$queryResuslts = mysqli_num_rows($result);


if ($queryResuslts > 0) {
while ($row = mysqli_fetch_assoc($result)){

    echo "<div class ='searchbar-box'>
    
    <p>" .$row['title']."<p>
    <p>" .$row['discription']."<p>
    <p>" .$row['link']."<p>

    <?div>";
    }
}
}

?>
      <section
       class="p-t-20 p-b-40">
        <div class="container">
            <div data-animate-delay="100" data-animate="fadeInLeft">
                <div class="heading-text heading-line text-center">
                    <h2 class="text-info">Latest Articles</h2>
                </div>
            </div>
            <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                                 <div class="post-item border">
    <div class="post-item-wrap">
        <div class="post-image">
            <a href="gallery.php">
                <img alt="Kathmandu city" src="img/packages/kathmando.jpg" class="blog-img">
            </a>
            
        </div>
        <div class="post-item-description">
            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>&nbsp;>&nbsp;1 months ago</span>

            <h2><a href="#">Kathmandu city</a></h2>
            <p>Swoymbunath temple, Boudhanath temple, Basantapur Darbar Square, Pashupatinath Temple are most famous sites listed under the UNESCO World Heritage Site.</p>
            <a href="kathmandu3.php" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
</div>                              
<div class="post-item border">
    <div class="post-item-wrap">
        <div class="post-image">
            <a href="gallery.php">
                <img alt="Pokhara" src="img/packages/27.jpg" class="blog-img">
            </a>
            
        </div>
        <div class="post-item-description">
            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>&nbsp;>&nbsp;2 months ago</span>

            <h2><a href="#">Pokhara City</a></h2>
            <p>Mountain Gear, Walk Around the Lake, World Peace Pagoda, Adventure Activities, Sarangkot Viewpoint, Trekking the Himalayas.</p>
            <a href="pokhara3.php" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
</div> 
                                 <div class="post-item border">
    <div class="post-item-wrap">
        <div class="post-image">
            <a href="gallery.php">
                <img alt="Mountain Flights." src="img/packages/16.jpg" class="blog-img">
            </a>
            
        </div>
        <div class="post-item-description">
            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>&nbsp;>&nbsp;1 months ago</span>

            <h2><a href="#">Mountain Flights</a></h2>
            <p>Taking a mountain flight is one of the most exhilarating things you can do in Nepal. Easily arranged,you can go eye-to-eye world&#039;s highest peaks within minutes</p>
            <a href="everest3.php" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
</div>                                 <div class="post-item border">
    <div class="post-item-wrap">
        <div class="post-image">
            <a href="gallery.php">
                <img alt="Far West Nepal." src="img/packages/17.jpg" class="blog-img">
            </a>
            
        </div>
        <div class="post-item-description">
            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>&nbsp;>&nbsp;2 months ago</span>

            <h2><a href="#">Far West Nepal</a></h2>
            <p>The sight of a white-turbaned Dhami, a shaman, with silver bangles on his arms and gold rings in his ears, will indicate just how far west you are of the modern world.</p>
            <a href="westnepal3.php" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
</div>                                 <div class="post-item border">
    <div class="post-item-wrap">
        <div class="post-image">
            <a href="gallery.php">
                <img alt="Dolpa." src="img/packages/39.jpg" class="blog-img">
            </a>
            
        </div>
        <div class="post-item-description">
            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>&nbsp;>&nbsp;3 months ago</span>

            <h2><a href="dolpa3.php">Dolpa</a></h2>
            <p>Until recently, what little the outside world knew of Dolpa was gleaned from artistic and spiritual accounts from early visitors. Peter Matthiessen’s meditative book .</p>
            <a href="dolpa3.php" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
</div>                                 <div class="post-item border">
    <div class="post-item-wrap">
        <div class="post-image">
            <a href="gallery.php">
                <img alt="Everest Base Camp." src="img/packages/15.jpg" class="blog-img">
            </a>
            
        </div>
        <div class="post-item-description">
            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>4 months ago</span>

            <h2><a href="#">Everest Base Camp</a></h2>
            <p>Everest Base Camp is the gateway to the tallest peak of the World, Mount Everest. The base camp is situated at the height of 5,380 the base camp provides a thrilling experience.</p>
            <a href="mounteverest3.php" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
</div>                           
</div>
</div>
</section>

<?php include ('index/footer.php'); ?>