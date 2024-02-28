<!DOCTYPE HTML>
<html>
        <head>
            <style>
                *{
    margin: 0;
    padding: 0;
    outline: 0;
}
.container{
    width: 80%;
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    overflow: auto;
}
.contact-nav{
    background-color: #424242;
    padding: 5px 10px;
    color: #fafafa;
}
 
.nav img{
    height: 100px;
}
.nav ul{
    float: right;
    padding-top: 45px;
}
.nav ul li{
    display: inline-block;
    margin-right: 15px;
}
.nav ul li a{
    font-size: 1.2rem;
    text-transform: uppercase;
    text-decoration: none;
    color: #212121;
    transition: .4;
}
.nav ul li a:hover{
    color: #3e7a7e;
}
 
.header{
    position: relative;
    width: 100%;
    height: 600px;
    background-image: url("https://images.squarespace-cdn.com/content/v1/57825361440243db4a4b7830/1612699327609-5R4233NDJ4CNF269F32Z/maxresdefault.jpg?format=2500w");
    background-size: cover;
    background-position: center;
}
.header .search{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    background-color: #fff;
    
    border-radius: 4px;
}
.header .search input{
    padding: 15px 10px;
    border: none;
    width: 500px;
    font-size: 1.1rem;
}
.header .search button{
    padding: 17px 6px;
    border: none;
  width: 100px;
    border-radius: 0 4px 4px 0;
    background-color: #8ed1d5;
    color: #fafafa;
    font-size: 1.2rem;
    transition: .4s;
}
.header .search button:hover{
    background-color: #3e7a7e;
}
 
.footer{
    padding: 51px;
    background-color: #3e7a7e;
}
.footer p{
    text-align: center;
    
}

.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 50px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}

            </style>
        </head>
 
        <body sr>
              <div class="nav">
                <div class="container">
                    <img src="https://cdn.vectorstock.com/i/preview-1x/35/82/bus-transportation-vector-43243582.jpg" class="logo">
                    
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">services</a></li>
                        <li><a href="#">about us </a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <center><h3 class="animate-charcter"> SELAMAT DATANG DI JAWI TRAVEL</h3></center>
    </div>
  </div>
</div>

            <div class="header">
                <div class="search">
                    <input type="text" placeholder="search your destination">
                    <button>Search</button>
</div>
            </div>  
            
            <div class="footer">
                <p>copyright &copy; All rights reserved to JawiTravel x Takumi Travel</p>
            </div>
        </body>
    <script src="tab.js"></script>
</html>