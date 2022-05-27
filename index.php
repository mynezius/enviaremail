<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Courgette&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
    <header>
        <div id="logo">
            <img src="./imagens/info.png"/>
        </div>
        <div id="titulo">
            <h1>Curso técnico em informática</h1>
        </div>
        <div id="cimol">
            <img src="./imagens/cimol.png" />
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#disciplinas">Disciplinas</a></li>
            <li><a href="#professores">Professores</a></li>
            <li><a href="#contato">Contato</a></li>
        </ul>
    </nav>
    <main>
        <h2>Curso Técnico em Informática</h2>
        <section id="home"> 
            <div id="figs">
                <div class="imagem">
                    <img src="./imagens/img1.png" />
                </div>
                <div class="imagem">
                    <img src="./imagens/img2.png" />
                </div>
                <div class="imagem">
                    <img src="./imagens/img3.png" />
                </div>
                <div class="imagem">
                    <img src="./imagens/img4.png" />
                </div>
    
            </div>
            <div id="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam condimentum orci quam, in aliquam nisi consequat eget. Sed ex sapien, cursus sed tempor id, iaculis eget massa. Pellentesque malesuada nisi dui, sit amet feugiat tellus posuere sit amet. Nulla facilisis dapibus porttitor. Nullam vitae pellentesque risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque dolor neque, finibus at dolor in, volutpat ultrices erat.
    
                <p>Praesent vel mauris nisi. Vivamus non arcu a dui pellentesque finibus et ut diam. Etiam dapibus rhoncus urna, ut semper risus euismod nec. Nam at posuere ligula, at luctus quam. Nulla eros nisi, semper nec mattis in, facilisis et libero. Fusce tellus ante, tempor ac magna in, faucibus mattis tellus. Mauris faucibus egestas urna ac porta. Donec blandit lorem sed mattis convallis. Nulla dui sem, maximus nec mattis a, porttitor ac nisl. Suspendisse vel accumsan felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue egestas nisl, et bibendum eros viverra non. Sed vitae gravida ante.
                    
                <p>Nullam pulvinar libero vitae faucibus fringilla. Ut rutrum elementum eleifend. Proin malesuada faucibus urna, at elementum quam pharetra in. In leo nunc, mattis non enim in, facilisis imperdiet risus. Fusce dapibus molestie fermentum. Pellentesque eget sem at ante porttitor mattis. Mauris gravida ex velit, sed pretium enim luctus sed. Aliquam varius mollis dui. Nam placerat suscipit augue, nec ornare turpis aliquam non. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut tortor pellentesque, scelerisque erat non, euismod dolor. Nam sodales pulvinar lacus, eget gravida nibh volutpat dictum.
                    
                <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas nec magna nisi. Etiam posuere quis nisl ac sodales. Maecenas auctor arcu vel ligula sollicitudin, in accumsan massa placerat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec lacus tortor, porta vitae ullamcorper eget, ultrices et leo. Sed nec sodales purus. Integer suscipit sit amet metus ac tristique. Quisque pretium pharetra fringilla. Proin at tortor ut risus interdum interdum non eu est. Quisque felis ex, auctor a imperdiet nec, sodales a lacus.
            </div>
        </section>
        <section id="disciplinas">
            <h2>DISCIPLINAS</h2>
        </section>
        <section id="professores">
            <h2>PROFESSORES</h2>
        </section>
        <section id="contato">
            <h2>ENTRAR EM CONTATO PELO EMAIL</h2>
            <form action="validarEmail.php#contato" method="post">
                <div id="acessarNome">
                <label for="">Digite seu nome</label><br>
                <input type="text" name="nome" id="" placeholder="Ex: Vinicius" required><br>
                </div>

                <div id="acessarAssunto">
                <label for="">Digite o assunto</label><br>
                <input type="text" name="assunto" id="" placeholder="Ex: Informações da empresa" required><br>
                </div>

                <div id="acessarMensagem">
                <label for="">Digite a mensagem</label><br>
                <textarea name="mensagem" id="textarea" cols="30" rows="5" placeholder="Digite sua mensagem" required></textarea><br><br>
                <input type="submit" value="Enviar email" id="enviarEmail">
                </div>
            </form>
        </section>
        
    </main>
    <footer>

    </footer>
    
</body>
</html>