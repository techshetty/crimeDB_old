<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Criminal DB</title>
	<style type="text/css">
    *{
        margin:0;
        padding:0;
        transition: all 300ms linear;
        font-family: 'Dosis',sans-serif;
    }
		#holder{
			position: absolute;
			top: 50%;left: 50%; transform: translate(-50%,-50%);
			display: flex;
			flex-direction: column;
			justify-content: space-around;
			align-items: center;
			overflow-y: scroll;
			width: 80%;height: 75vh;
			border-radius: 40px;
			background-color: rgba(0, 0, 0, 0.8);
		}
		#benny{
			width: 90%;
			height: 100px;
			// border-radius: 30px;
/*			border: 1px solid red;*/
            margin: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
		}
		#benpic{
			width: 20%;
			height: 100%;
/*			border: 1px solid green;*/
             display: flex;
            justify-content: center;
            align-items: center;
		}
		#bendata{
			width: 80%;
			height: 100%;
/*			border: 1px solid blue;*/
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
           	color: #fff;
           	font-weight: bolder;

		}
		#iholder{
			width: 100px;
			height: 100px;
			border-radius: 300px;
/*			border: 1px solid  red;*/
            background-image: url('crim1.jpg');
            background-size: contain;
            background-repeat: no-repeat;
            animation: spin 800ms linear infinite;
		}
		@keyframes spin{
			0%{
				transform: rotate(0deg);
			}
			50%{
				transform: rotate(180deg);
			}
			100%{
				transform: rotate(360deg);
			}
		}
	</style>
</head>
<body>
<div id="holder">
	<div id="benny">
		<div id="benpic">
        <div id="iholder"></div>
        </div>
		<div id="bendata">BENAKA GANIGA-Murder</div>
	</div>
</div>
<script type="text/javascript">
	const cases=["murder","theft","kidnapping","bank heist","chain snatching","Mobile Theft","Pickpocketing","Scam calls","Impersonation","Mass Murder","Money Laundering","Greenlight case","Local Rowdism","Dog Hunting"]
	var i=1;
	const addBenny=(event)=>{
		var benHolder=document.querySelector("#holder");
		benHolder.innerHTML+=newCriminal("Benaka");
		benHolder.scrollTop=benHolder.scrollHeight;
		if(i==15) document.querySelector("#benny").style.color='red';
	}
	const newCriminal=(name)=>{
		var t =Math.floor(Math.random()*100)%cases.length;
		return `<div id='benny'><div id="benpic">
        <div id="iholder"></div>
        </div>
		<div id="bendata">Case ID:${i++} | ${name}-${cases[t]}</div></div>`;
	}
	setInterval(addBenny,1000);
</script>
</body>
</html>