		<head>
			<title>Portifólio</title>
			<meta charset = "UTF-8" />
			<style>
				body{
					background-color: rgb(21,185,255);
				}	
				div{
					text-align: center;
					width: 30%;
					margin: 80px auto;
					height: 350px;
					background-color: #fff;
					font-family: tahoma;
					color: #404040;
					box-shadow: 0px 0px 10px 2px #222;	
				}
				h2{
					text-align: center;
					margin: 0;
					padding: 30px;
					width: 85%;
					border-bottom: 1px solid #cfcfcf;
				}	
				p{
					text-align: center;
				}
				input[type = link]:focus, 
				input[type = text]:focus{
					background-color: #cde5ef;
					width: 250px;
					transition: width 100s;
				}
				input[type = submit]{
					font-weight: Arial;
					font-size: 12px;
					padding: 6px;
					border-radius: 10px;
					height: 30px;
					cursor: pointer;
				}
			</style>
		</head>
		<body>
			<?php
				include("Cabecalho.php");
			?>
			<div>
				<form action = "Registrar.php" method = "post">
					<h2>Portifólio</h2>
					</br >
					</br >
					<label>
					Nome atividade: 
					</label>
					<input type = "text" name="nome" placeholder = "Nome atividade" required = "required"/>
						</br ></br >
					<label>
					Link:
					</label>
						<input type = "link" name = "links"  placeholder = "Link"/>
					
						</br ></br >
					<label for = "data" >
					Data :
					</label>
						<input type = "date" name ="data" id = "data" placeholder = "Data"/>
						</br ></br >
					<label>
					Arquivo:
						<input type = "file" name = "arquivo"/>
					</label>
						</br ></br >
					<input type = "submit" name = "enviar" value = "Enviar" />			
				</form>			
			</div>	
		</body>
</html>