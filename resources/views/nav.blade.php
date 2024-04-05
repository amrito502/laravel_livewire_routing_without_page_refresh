<style>
    *{
        margin: 0;
        padding: 0;
        scroll-behavior: smooth;
    }
nav{
    background: #000;
}
.wrap{
    width: 90%;
}
ul{
display: flex;
justify-content: center;
align-items: center;
width: 100%;
padding: 20px;
}
ul>li{

}
ul>li>a{
font-size: 30px;
text-decoration: none;
margin-right: 20px;
color: #c7c1c1;
transition: .4s;
}
ul>li>a:hover{
color: #9ae620;
}
</style>
<nav>
   <div class="wrap">
    <ul>
        <li><a href="{{ url('/') }}" wire:navigate>Home</a></li>
        <li><a href="{{ url('/about') }}" wire:navigate>About</a></li>
        <li><a href="{{ url('/contact') }}" wire:navigate>Contact</a></li>
    </ul>
   </div>
</nav>
