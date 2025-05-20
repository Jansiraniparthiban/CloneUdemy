<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {
    header("location: login_page.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Build a udemy header</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
   <link rel="stylesheet" href="css/home.css">
   <script src="js/script.js"></script>
</head>
<body>
  

   
    <div id="header">
        <div id="udemy_logo">
            <a href="home_page.html" >
            <img src="https://www.udemy.com/staticx/udemy/images/v7/logo-udemy.svg" alt="Udemy" href="home_page.html"  />
            </a>
        </div>
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multilevel dropdown</title>
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            margin: 0;
            padding: 10px;
        }

        .dropdown {
            margin: 0;
            padding: 0;
            list-style: none;
            width: 100px;
            background-color: white;
        }

        .dropdown li {
            position: relative;
        }

        .dropdown li a {
            color: white;
            text-align: center;
            text-decoration: none;
            display: block;
            padding: 10px;
        }

        .dropdown li ul {
            position: absolute;
            top: 100%;
            margin: 0;
            padding: 0;
            list-style: none;
            display: none;
            line-height: normal;
            background-color: #333;
        }

        .dropdown li ul li a {
            text-align: left;
            color: black;
            font-size: 14px;
            padding: 10px;
            display: block;
            white-space: nowrap;
        }

        .dropdown li ul li a:hover {
            background-color: grey;
            color: black;
        }

        .dropdown li ul li ul {
            left: 100%;
            top: 0;
        }

        ul li:hover>a {
            background-color: grey;
            color: black; !important;
        }

        ul li:hover>ul {
            display: block;
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>
    <ul class="dropdown">
        <li><a href="#" style="color:black; margin-top: 10px; margin-left:-7px">Categories</a>
           <ul>
                <li><a href="#">Web Development<i style="transform: rotate(-90deg); text-decoration: none;"class="fas fa-caret-down"></i> </a>
                 <ul>
                    <li>
                        <li><a href="http://localhost/login-register/course_1_page.php">Java Script </a>
                       

                        </li>
                        <li><a href="">Data Science </a>
                            <ul>
                         <li style="width: 100px;color:black; background-color:white; text-align:left;display: block;font-size: 14px; padding:-5px ; margin-bottom: 50px; height:5px"><a href="http://localhost/login-register/course_2_page - Copy.php"></a>Python</li>
                         </ul>

                        </li>
                        <li><a href="https://www.udemy.com/courses/development/mobile-apps/">Mobile Development </a></li>
                    </li>

                  </ul>
                </li>
                <li><a href="#">Business <i style="transform: rotate(-90deg);"class="fas fa-caret-down"></i></a>
                <ul>
                    <li>
                        <li><a href="#">Entrepreneurship </a></li>
                        <li><a href="#">Communication</a></li>
                        <li><a href="#">Management </a></li>
                    </li>

                  </ul>

                </li>
                <li><a href="#">Design <i style="transform: rotate(-90deg);"class="fas fa-caret-down"></i> </a>
                  <ul>
                    <li>
                        <li><a href="#">Game design </a></li>
                        <li><a href="#">Graphic design </a></li>
                        <li><a href="#">3D Annimation </a></li>
                    </li>

                  </ul>

                </li>
             </ul>

          
          </ul>
</body>

</html>
        <div class="search__input">
            <span>
            <i class="fas fa-search">
                    
                </i>
            </span>
            <label ></label>
              <input list="cars">
        <datalist id="cars">
            <h1>Popular on Udemy</h1>
          <option value="Python" />






              <select >
             <option value="The Complete JavaScript Course 2023: From Zero to Expert!"><a href="http://localhost/login-register/course_1_page.php"><button>The Complete JavaScript Course 2023: From Zero to Expert!</button> </a></option>
            <option value="React - The Complete Guide (incl Hooks, React Router, Redux)" />
            <option value="Ultimate AWS Certified Solutions Architect Associate SAA-C03..." />
          </select>




        </div>
        <div class="header_text"><a href="https://rb.gy/ilnvi9"  style="text-decoration: none; color: black;">Udemy Business</a></div>
       <div class="header_text"><a href="https://www.udemy.com/teaching/?ref=teach_header" style="text-decoration:none; color:black;">Teach on Udemy</a></div>
        <a href="cart_page.html"><button id="cart"><img src="https://cdn3.iconfinder.com/data/icons/shopping-cart-19/200/457-128.png" /></button></a>
        <button id="log_in" ><a href="login_page.php" >Log In</a></button>
        <button id="sign_up"><a href="signup_page.php">Sign Up </a></button>
       <a href="https://www.udemy.com/?deal_code=UDEAFFEGNU22&utm_term=Homepage&utm_content=Textlink&utm_campaign=EverGreenNewUser22&utm_source=aff-campaign&utm_medium=udemyads&LSNPUBID=HtPvL28WFys&ranMID=47901&ranEAID=HtPvL28WFys&ranSiteID=HtPvL28WFys-jIx4B7svn1S.aXoluM4QDA"></a> <button id="globe" ><img src="https://cdn3.iconfinder.com/data/icons/media-1-3/32/Internet-Globe-Communication-128.png"/></button></a>
    </div>





    <section>
        <div id = "home-top">
            <img src="" alt="">
           
            <div class="leftbox">
                    <h1 id = "b-font">Learning that gets you</h1>
                   <p>Skills for your present (and your future). Get started with us.</p> 
                  <div id="search2">
                    <input id = "search-box" type="text" placeholder="What do you want to learn ?">
                    <a href="course_1_page.html" >
                     <img class="search-btn"  src="https://img.icons8.com/material-sharp/2x/search.png" />
                 </a>
                  </div>
                </div>
        </div>

























        <div class="course-section">
            <h1 id = "b-font" class = "marg">A broad selection of courses</h1>
            <p>Choose from 155,000 online video courses with new additions published every month</p>
            <div class="course-flex">
                <a id = "a1"  href="">Python</a>
                <a  id = "a2" href="">Excel</a>
                <a  id = "a3"href="">Web Development</a>
                <a  id = "a4" href="">Javascript</a>
                <a  id = "a5" href="">Data Science</a>
                <a  id = "a6" href="">AWS certification</a>
                <a  id = "a7" href="">Drawing</a>
            </div>
        </div>

        <div class="course-video-box">
            <h1>Grow your software development skills with JavaScript</h1>
            <div class="para">
                <p>JavaScript is one of the most ubiquitous programming languages on the planet, mostly because it's the backbone of interactive web applications. On top of that, JavaScript is a great language for beginners because it gives them a chance to write code that does something visual, which is exciting and helpful when you're just getting started as a programmer. Dynamic content is the hot topic in web development right now. Dynamic content refers to content that constantly changes and adapts to specific users whenever possible.</p>

            </div>
            <div class="video-box">
                <div class="course1">
                    <a href="course_1_page.php">
                <img src="https://img-c.udemycdn.com/course/240x135/851712_fc61_6.jpg" alt="">
                <h3 class= "course-title">The Complete JavaScript Course 2023: From Zero to Expert!
                    <br>
                   Last updated 11/2022
                </h3>
                <p id = "instructor">Jonas Schmedtmann</p>
                <p class="star">4.7Star<span class = "enrol-no">( (168,739 ratings)</span></p>
                <p class = "price-course">757,177 students</p>
               <span>(<b>$84.99</b>)</span>
                        <br>
                        <button style="background: yellow;"><b>Bestseller</b></button>
                    </a>
                </div>


                <div class="course1">
                    <a href="course_2_page.php">
                <img src="https://img-c.udemycdn.com/course/240x135/364426_2991_6.jpg" alt="">
                <h3 class= "course-title">JavaScript:Understanding the Weird Parts</h3>
                <p id = "instructor">Anthony Alicea</p>
                <p class="star">4.7 Star<span class = "enrol-no">(164281)</span></p>
                <p class = "price-course">44$</p>
                </a>
                </div>


                 <div class="course1">
                    <a href="course_3_page.php">
                <img src="https://img-c.udemycdn.com/course/240x135/1463348_52a4_2.jpg" alt="">
                <h3 class= "course-title">Modern JavaScript From The Beginning</h3>
                <p id = "instructor">Brad Traversy</p>
                <p class="star">4.7 Star<span class = "enrol-no">(858889)</span></p>
                <p class = "price-course">55$</p>
                </a>
                </div>


                 <div class="course1">
                    <a href="course_4_page.php">
                <img src="https://img-c.udemycdn.com/course/240x135/2508942_11d3_3.jpg" alt="">
                <h3 class= "course-title">JavaScript - The Complete Guide 2021</h3>
                <p id = "instructor">Maxmillian schwarzmuller,..</p>
                <p class="star">4.5 Star<span class = "enrol-no">(16266)</span></p>
                <p class = "price-course">33$</p>
                  </a>
                </div>


                 <div class="course1">
                    <a href="course_5_page.php">
                <img src="https://img-c.udemycdn.com/course/240x135/1501104_967d_13.jpg" alt="">
                <h3 class= "course-title">The Complete JavaScript Course 2021</h3>
                <p id = "instructor">Andre Neigoi</p>
                <p class="star">4.8 Star<span class = "enrol-no">(8889)</span></p>
                <p class = "price-course">99$</p>
                 </a>
                </div>
              

              </div>
            


        </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").toggle();
    $("num").toggle();
   
  });
});
</script>
</head>
<body>

<button style="inline-size: 200px; margin-left:80px"><b>Featured topics by category<b></button>
<br>
<br>

<p style="margin-left:80px"><b>Development</b></p>
<br>
<p style="color:blue; text-decoration:underline;margin-left:80px"><b>Python</b></p>
<br>
<p style="color:grey; text-decoration:underline; margin-left:80px"><b>34,354,994 students</b></p>

<p style="color:blue; text-decoration:underline; margin-top:25px;margin-left:80px"><b>Web Development</b></p>
<br>
<p style="color:grey; text-decoration:underline;margin-left:80px"><b>11,415,615 students</b></p>

<p style="color:blue; text-decoration:underline; margin-top: 25px;margin-left:80px"><b>Machine Learning</b></p>
<br>
<p style="color:grey; text-decoration:underline;margin-left:80px"><b>7,070,015 students</b></p>
<p>
<button style="height: 40px; width: 150px; margin-top: 20px; margin-left: 70px;"><b>Explore more topics</b></button></p>
<br>
<br>
<br>
<br>

        <div class="thpara">
            <div>
                <img src="https://cdn3.iconfinder.com/data/icons/movie-video/512/Icon_6-128.png" alt="">
                <span>Learn in-demand skills with over 155000 video courses</span>
            </div>
            <div>
                <img src="https://cdn0.iconfinder.com/data/icons/multimedia-solid-30px/30/star_rate_favorite_bookmark-128.png" alt="">
                <span>Choose courses taught by real-world experts</span>
            </div>
            <div>
                <img src="https://cdn2.iconfinder.com/data/icons/picons-basic-3/57/basic3-154_infinity-128.png" alt="">
                <span>Learn at your own pace, with lifetime access on mobile and desktop</span>
            </div>

        </div>

        <div class="instructor-box">
            <div class="img-box">
                <img src="https://s.udemycdn.com/home/non-student-cta/instructor-1x-v3.jpg" alt="">
            </div>
            <div class = "content">
                <h1>Become an Instructor</h1>
                <p>Instructors from all around the world millions of students on Udemy.We provide the tools and skills to teach what you love.</p>

            </div>
        </div>

        <div class="trusted">
            <h1>Trusted by companies of all sizes</h1>
            <div class = "flex-image">
               
                    <img src="https://s.udemycdn.com/partner-logos/v4/apple-dark.svg" alt="">
                    <img src="https://s.udemycdn.com/partner-logos/v4/box-dark.svg" alt="">
                    <img src="https://s.udemycdn.com/partner-logos/v4/volkswagen-dark.svg" alt="">
                    <img src="https://s.udemycdn.com/partner-logos/v4/netflix-dark.svg" alt="">
                    <img src="https://s.udemycdn.com/partner-logos/v4/eventbrite-dark.svg" alt="">

              
               
            </div>
        </div>

        <div class="business-box">
           
            <div class = "content">
                <img src="https://www.udemy.com/staticx/udemy/images/v7/logo-ub.svg" alt="">
                <p>Get unlimited access to 6,000+ of Udemy’s top courses for your team. Learn and improve skills across business, tech, design, and more.

                </p>

            </div>
            <div class="img-box">
                <img src="https://s.udemycdn.com/home/non-student-cta/ub-1x-v3.jpg" alt="">
            </div>
           
          
            
        </div>

        <div class="transform">
            <div class="img-box">
                <img src="https://s.udemycdn.com/home/non-student-cta/transform-1x-v3.jpg" alt="">
            </div>
            <div class = "content">
                <h1>Transform your life through education</h1>
                <p>Learners around the world are launching new careers, advancing in their fields, and enriching their lives.</p>

            </div>

        </div>
    </secion>
<div>
        <div id="footer">
            <div class="final-flex">
            <div class="footer-link">
                <div><p>Udemy Business</p></div>
                <div><p>Careers</p></div>
                <div><p>Terms</p></div>
                <div><p>Teach on Udemy</p></div>
                <div><p>Blog</p></div>
                <div><p>Privacy policy</p></div>
                <div><p>Get the App</p></div>
                <div><p>Help and support</p></div>
                <div><p>Sitemap</p></div>
                <div><p>About us</p></div>
                <div><p>Affiliate</p></div>
                <div><p>Contact us</p></div>


            </div>
            <!-- <div class= "glob">
                <button id="globe1"><img src="https://cdn0.iconfinder.com/data/icons/mobile-apps-settings-linear-white-with-black-backg/2048/439_-_Browser-256.png"/> 
                    <span>English</span>

                 </button>
                <div class="clear"></div>
            </div> -->
        </div>
        <div class="logo-img">

                
            <img src="https://www.udemy.com/staticx/udemy/images/v7/logo-udemy-inverted.svg" alt="">
            <div > © 2023 Udemy, Inc</div>
            </div>


        </div>

</div>

</body>
</html>
<script>



   


    

    
    // a1.addEventListener("mouseover", changeBackground)
    // a1.addEventListener("mouseout", changeBackground1)
    // a2.addEventListener("mouseover", changeBackground)
    // a3.addEventListener("mouseover", changeBackground)
    // a4.addEventListener("mouseover", changeBackground)
    // a5.addEventListener("mouseover", changeBackground)
    // a6.addEventListener("mouseover", changeBackground)
    // a7.addEventListener("mouseover", changeBackground)
   




 

</script>