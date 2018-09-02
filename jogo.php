<!DOCTYPE html>
<html>
<head>
	<title>Book Game</title>
</head>
<body>

	<canvas id="game" height="600" width="800">
		
	</canvas>
	<script>
		var isGameOn = false
		var initGame;
		var velocidade;	
		var hit;
		var setTime
		var pontuacao = 0;
		var tempo = 6100;
		var img = new Image();
		img.src = "files/extfile/book.png"
		const cvs = document.getElementById('game')
		const ctx = cvs.getContext("2d")

		var bookX = 300;
		var bookY = 300;

		window.onload = telaInicial();

		function inicializar () { 

			fimDeJogo = false;
			isGameOn = true;
			/*setTime = window.setInterval(function () { 
				tempo--;

			}, 1000/60)*/
			document.addEventListener("click", client);
			initGame = setInterval(jogo, client);
		}


		function jogo () {
			ctx.clearRect(0,0, 800, 600)
			//desenhando o livro
			ctx.drawImage(img, bookX, bookY , 40, 40);


			if (hit) {
				//Calcula a nova posição X e Y do Livro
				bookX = Math.floor(Math.random() * 560)
				bookY = Math.floor(Math.random() * 560)
				hit = false;
				pontuacao += 1;
				if(pontuacao < 20){
					tempo += 500;
				} else if (pontuacao < 30) {
					tempo += 200;
				} else if (pontuacao < 50) {
					tempo += 100;
				} else {
					tempo += 50;
				}
			}

			//Colocando o placar de pontuação
			ctx.font = '25px Arial'
			ctx.fillText('Pontuação: '+ pontuacao, 0, 20)

			tempo --

			//Colocando o timer de contagem regressiva
			/*ctx.fillStyle = 'white'
			ctx.font = '25px Arial'
			ctx.fillText('Tempo Restante: '+ tempo/100, 575, 20)*/
			ctx.fillStyle = 'black'
			ctx.font = '25px Arial'
			ctx.fillText('Tempo Restante: '+ Math.floor(tempo/100), 500/*575*/, 20)




			if(Math.floor(tempo/100) <= 0 ) {
				alert('fim de jogo :(');
				inicializar();
			}

		}

		function client (evt) {
			//verificando se foi clicado no livro
			if(evt.clientX > bookX && evt.clientX < bookX + 40 && evt.clientY > bookY && evt.clientY < bookY + 40) {
				hit = true;	
			} 

		}

		function telaInicial () {
			ctx.fillStyle = 'black'
			ctx.font = '25px Sans'
			ctx.fillText('Capture o Livro', 400, 50)

			ctx.fillText('Jogar', 450, 200)
			ctx.fillText('Placar', 445, 300)

			if (!isGameOn){ 
				document.addEventListener('click', (evt) => {
					if(evt.clientX > 450 && evt.clientX < 550 && evt.clientY > 190 && evt.clientY < 220){
						inicializar();
					} else if (evt.clientX > 445 && evt.clientX < 540 && evt.clientY > 290 && evt.clientY < 320 && isGameOn == false){
						alert('exibir resultado')
					}
				});
			}
			//inicializar();
		}
	</script>
	<link rel="stylesheet" type="text/css" href="style/jogo.css">
</body>
</html>