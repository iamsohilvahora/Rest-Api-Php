<style type="text/css">
html {
  scroll-behavior: smooth !important;
}

*{
	margin: 0,
	padding: 0,
	box-sizing: border-box;
	font-family: 'Mulish', sans-serif;
}

.row{
	margin-left: 0 !important;
	margin-right: 0 !important;
}

.nav_style{
	background: #9aa0d9 !important;
}

.nav_style a{
	color: #000;
}

/************ main header *************/
.main_header{
	width: 100%;
	height: 400px;
}

.rotation img{
	animation: rot 3s linear infinite;
}

@keyframes rot{
	0%{	transform: rotate(0deg);}
	100%{transform: rotate(360deg);}
}

.left_side img{
	animation: heartbeat 5s linear infinite; 
}

@keyframes heartbeat{
	0%{
		transform: scale(0.75)
	}
	20%{
		transform: scale(1)
	}
	40%{
		transform: scale(0.75)
	}
	60%{
		transform: scale(1)
	}
	80%{
		transform: scale(0.75)
	}
	100%{
		transform: scale(1)
	}
}

/************ Corona Update *********************/

.corona_update{
	margin: 0 0 30px 0;
}

.corona_update h3{
	color: #ff7675;
}

.corona_update h1{
	font-size: 2rem;
	text-align: center;
}

/************* About Section **********************/
.sub_section{
	background: #fbfafd;
}

/************* Footer ****************/
.footer_style{
	background: #a29fb2;
}

.footer_style p{
	margin-bottom: 0 !important;
}
 
/*************** Top Button ***********************/
.scrollToTop{ 
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

.scrollToTop:hover{
    background-color: #555;
}

@media only screen(max-width: 768px){
	.main_header{
		height: 700px;
		text-align: center;
	}
	.main_header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 30px;
	}
}
</style>