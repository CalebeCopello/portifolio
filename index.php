<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web portifólio e Blog do desenvolvedor Calebe Copello">
    <meta name="keywords" content="Blog,Desenvolvimento,Portifolio">
    <meta name="author" content="Calebe Copello">
    <link rel="shortcut icon" href="/imgs/favicon.ico" type="image/x-icon">
    <title>Meu portifólio</title>
    <!-- CSS -->
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body onresize="size()">
    <!-- CABEÇALHO -->
    <header>
        <img src="imgs/system-from-freepik.png" alt="Icone janela desenvolvedor, criador Freepik"  class="iconecabeca">
        <div class="titulo">
            Calebe Copello's Dev BLOG
        </div>
        <!-- MENU -->
        <menu>
            <ul>
                <li><a href="javascript:show('home')"><div class="menuAnimation"></div>Home</a></li>
                <li><a href="javascript:show('sobre')">Sobre Mim</a></li>
                <li><a href="javascript:show('post')">Meus Posts</a></li>
                <li><a href="javascript:show('projeto')">Projetos</a></li>
                <li><a href="javascript:show('contato')">Contato</a></li>
            </ul>
            <img src="/imgs/cross-from-freepik.png" alt="Icone em 'x' para fechar menu, criador Freepik" class="iconemenu" id="iconemenu" onclick="menu()">
        </menu>
        <form action="" class="tema">
            <span class="tema-tema">Tema:</span>
            <input type="radio" value="Light State Gray" class="lightStateGray" onclick="tema('lightStateGray')" checked>
            <input type="radio" value="Sage" class="sage" onclick="tema('sage')" checked>
            <input type="radio" value="Onyx" class="onyx" onclick="tema('onyx')" checked>
        </form>
    </header>
    <main>
        <!-- Conteúdo Home -->
        <section class="home" id="home">
            <h1>BEM-VINDO</h1>
            <p>Seja bem vindo ao BLOG!</p>
            <h2 class="h-guestbook">GuestBook</h2>
            <div class="recado-guestbook">
                <!-- <iframe src="/gb.php" style="width:100%; height:100%; border: 1px dashed red;;"></iframe> -->
                <?php include 'gb.php'; ?>
            </div>
            <p class="center">Deixe seu Recado.</p>
            <form action="postgb.php" method="post" class="form-guestbook">
                <div class="nome-guestbook">
                    <label for="gbnome">Nome: </label>
                    <input type="text" name="nome" id="gbnome" placeholder="(máximo de 30 letras)" minlength="3" maxlength="30" size="20">
                </div>
                <div class="email-guestbook">
                    <label for="gbemail">Email: </label>
                    <input type="email" name="email" id="gbemail" placeholder="(máximo de 50 caracteres)" maxlength="50" size="20">
                </div>
                <div class="texto-guestbook">
                    <label for="gbtexto">Recado: </label>
                    <textarea name="texto" id="gbtexto" rows="5" cols="55" placeholder="Deixe seu recado &#10;(máximo de 350 caracteres)" maxlength="350"></textarea>
                </div>
                <div class="botao-guestbook">
                    <input type="submit" value="Enviar Recado">
                </div>
            </form>
        </section>
        <!-- Conteúdo Sobre Mim -->
        <section class="sobre" id="sobre">
            <h1>SOBRE</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, nihil est tempore quis ipsum nam? Fuga ipsum qui aliquam praesentium aspernatur quis architecto. Beatae optio in assumenda, dolorum non sit!</p>
        </section>
        <!-- Conteúdo Posts -->
        <section class="post" id="post">
            <h1>POSTS</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, mollitia iusto ea ut velit minima maiores eaque, laudantium id provident deserunt voluptatibus ex at perferendis nostrum dolores atque quasi reprehenderit!</p>
            <h2>Post 1</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente illo atque dicta, porro corporis maxime perspiciatis labore tempore itaque libero animi! Ea repudiandae, ullam voluptatum harum accusamus vitae tenetur inventore!</p>
            <p><span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure tenetur iusto aspernatur porro nostrum. Tempore vitae cum repellat asperiores libero consectetur quidem corrupti ea reiciendis qui, quaerat dolorum quis tempora.</span><span>Quasi voluptatem natus nostrum odio reprehenderit dolores minus maiores eos. Non iste odit voluptatem dolores officia ullam praesentium quam, magni excepturi corrupti eligendi nesciunt architecto nostrum perspiciatis dignissimos similique libero!</span><span>Vitae accusantium nobis praesentium aut soluta exercitationem minima architecto adipisci excepturi aspernatur tenetur, dolorum quisquam alias perferendis, inventore blanditiis quia! Commodi porro, consequuntur amet quo possimus tempore ea consequatur ut?</span></p>
            <h2>Post2</h2>
            <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, nesciunt. Suscipit quidem laboriosam quos cupiditate mollitia impedit veniam in voluptatem expedita libero aperiam cum blanditiis saepe officia, ab ad aliquid.</span><span>Incidunt laudantium voluptate cupiditate veritatis a! Itaque vero veritatis vitae dicta facere temporibus eius nulla eveniet, quia ipsum enim quidem quod quas ut dolore numquam id. Nam quod ad illum?</span><span>Labore, eveniet maxime! Rem necessitatibus dolores fugit impedit, eum doloremque perferendis saepe sit quibusdam quod corporis veniam. Modi amet, illum, hic molestias inventore sed a nisi quia maxime temporibus libero.</span><span>Veritatis sint impedit quia ipsum iste. Mollitia eum, fugiat inventore, voluptate ab totam minus quae, fugit dolorum voluptas officiis molestiae consequatur eaque est aliquid ad. Incidunt sunt magnam minus tempora.</span><span>Omnis dignissimos perspiciatis iure neque amet dolores tenetur deleniti modi nostrum similique nemo repellat aperiam sed provident debitis quos minima itaque ducimus accusamus aliquam, eveniet doloremque beatae totam? Repellendus, excepturi.</span></p>
            <h2>post3</h2>
            <p><span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A omnis officiis vitae aspernatur voluptas sapiente consequuntur tempore suscipit nemo maxime earum ut enim, aliquam non quia autem! Illo, sed iure.</span><span>Ducimus hic, possimus nam temporibus odit sapiente nesciunt perferendis consequatur iste laboriosam obcaecati non illum maiores facilis voluptates atque asperiores animi. Corporis voluptatum porro cum velit nam quibusdam nobis officia.</span><span>Hic iusto possimus quisquam dolore deleniti fugit quod mollitia quas facilis, error esse quos animi impedit. Nihil aliquid saepe, soluta modi aspernatur earum itaque dignissimos sed minus quisquam animi voluptatum?</span><span>Aspernatur libero corporis saepe iusto dolores labore eius quam suscipit laborum dicta! Sed corporis animi temporibus id perferendis nihil quibusdam reiciendis, voluptatem, fugit praesentium molestias! Consequatur nemo molestiae culpa id.</span><span>Voluptate exercitationem eligendi soluta quisquam at harum modi qui perferendis vel pariatur placeat suscipit ab ratione minus sapiente nemo similique deserunt ipsa, repellendus quas iusto quod optio perspiciatis doloribus. Aspernatur?</span><span>Omnis, eaque! Officia distinctio, autem delectus quasi adipisci dolores molestias quidem recusandae sint ratione harum asperiores rerum consequuntur beatae at, non architecto inventore voluptatem earum tempora molestiae ipsum fugiat veritatis.</span><span>Non adipisci molestiae, nulla neque repellat facilis cumque, velit accusamus harum doloremque porro? Tempore dolor id veritatis quia sunt, eveniet nihil, autem tempora, harum amet quas quam similique eligendi quasi!</span><span>Praesentium omnis quibusdam error nisi, nesciunt architecto aspernatur doloremque quas! Eos vitae, animi odit, ullam saepe fugit omnis optio sunt perspiciatis expedita deleniti alias. Animi amet ullam perferendis provident officia.</span><span>Adipisci sequi perspiciatis repellendus nulla aspernatur, ipsam ullam voluptatibus. Quos, illo atque at unde magni quaerat nulla dolorum. Neque error ratione facilis autem fuga consectetur nemo ipsum debitis minus reiciendis!</span><span>Sed dolor eveniet odio minus, ad voluptatibus a vitae quos veritatis! Amet commodi perferendis nihil exercitationem, consectetur voluptate beatae rerum esse id incidunt aliquid similique, blanditiis et, ut aut laborum!</span><span>Consequatur nostrum et beatae culpa neque ex iure necessitatibus quia. Voluptatem corrupti animi repellendus eum illo neque nam possimus velit eveniet reiciendis ducimus, expedita iusto! Animi nemo unde minus quis!</span><span>Autem ex ratione animi culpa, nam, eaque quae quos nobis doloremque harum sit nemo blanditiis, eius maiores. Voluptas, excepturi recusandae! Temporibus nesciunt earum numquam pariatur eum non, voluptatem quidem aspernatur.</span></p>
        </section>
        <!-- Conteúdo Projetos -->
        <section class="projeto" id="projeto">
            <h1>PROJETOS</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, mollitia iusto ea ut velit minima maiores eaque, laudantium id provident deserunt voluptatibus ex at perferendis nostrum dolores atque quasi reprehenderit!</p>
        </section>
        <!-- Conteúdo Contato -->
        <section class="contato" id="contato">
            <h1>CONTATO</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, mollitia iusto ea ut velit minima maiores eaque, laudantium id provident deserunt voluptatibus ex at perferendis nostrum dolores atque quasi reprehenderit!</p>
        </section>
    </main>
    <footer>
        Produzido e Desenvolvido por <a href="https://github.com/CalebeCopello" target="_blank">Calebe Copello</a>.
    </footer>
    <!-- JavaScript -->
    <script src="js/script.js"></script>    
</body>
</html>