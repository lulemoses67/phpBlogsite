
<?php
//this is to show the active tab for now it's about us page
    $home = false;
    $feeds = false;
    $about = "active";
?>
<?php
require('./templates/header.php');
?>
<!-- about us with categories begins  -->
            <section>
                <h4 class="_title">hultech</h4>
                <p class="details">We are a news tech website that provides you with all the lastest tech news.</p>
                <h2 class="_title">let's explore tech</h2>
                <p class="details">At hultech we are passionate about technology and science so thats why we explore tech everyday and share with the world.</p>
            </section>
            <section>
                <article class="about_us">
                    <h4 class="_title">Categories</h4>
                    <div>
                        <div>
                            <h3 class="_title"><a>Device reviews <i class="fas fa-mobile-alt"></i></a></h3>
                            <p class="details">Get all the lastest information about your favorites devices and knowing how to perform different tasks.from specs to price we got you covered</p>
                        </div>
                        <div>
                            <h3 class="_title"><a>space tech <i class="fas fa-rocket"></i></a></h3>
                            <p class="details">Get all the lastest information about our new home from earth mars and other planets</p>
                        </div>
                    </div>
                </article>
            </section>
            <!--about us with categories end  -->
            <!-- about aurthor with categories begins  -->
            <section>
                <h4 class="_title">Author</h4>
                <div class="flex-block vertical-align">
                    <div>
                        <img class="profile_pic" src="images/pp.jpg"/>
                    </div>
                    <div>
                        <h2 class="_title">lule moses</h2>
                        <p class="details"><q>Hi, I am self-taught programmer. After one year of self-study mostly using Coursera, W3S, Youtube, Github and other internet resources. I have found it easier to learn what is most important in practice. Most of my work now has been focused on full stack web development and database management. Am passionate about programming and enjoy helping others learn to program. And i have created and run hultech to provide the world all the lastest technology and science in news the universe.Since learning in programming never stops, currently am still learning new things. Thank you</q> </p>
                        <h4 class="_title">Role</h4>
                        <em class="details">CEO, Founder, Developer, Designer and Content Creator</em>
                        <h4 class="_title">follow</h4>
                        <ol class="detail-default">
                            <li><a href="#"><i class="fab fa-facebook fa-lg" color="blue"> </i></a></li>
                            <li><a href="#"><i class="fab fa-twitter fa-lg" color="skyblue"> </i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin fa-lg" color="blue"> </i></a></li>
                            <li><a href="#"><i class="fab fa-github fa-lg"> </i></a></li>
                            <li><a href="#"><i class="fa fa-envelope fa-lg" color="red"> </i></a></li>
                        </ol>
                    </div>
                </div>
            </section>
            <!-- about aurthor with categories ends  -->
            <section>
                <h4 class="_title">Our address</h4>
                <address class="details">
                    121, alongside wankulukuku<br>
                    Rubaga South, Kampala<br>
                    UGANDA<br>
                    <a href="tel:=256756150066"><i class="fa fa-phone"></i> +256 756150066</a><br/>
                    <a href="mailto::hultech@info.com"><i class="fa fa-envelope"></i> hultech@info.com</a><br/>
                </address>
            </section>
<?php
require('./templates/footer.php');
?>
