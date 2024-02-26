<h2 class="display-2">Contato</h2>

<form action="../public/pages/forms/contato.php" method="GET" role="form">
        <div class="mb-3">
            <label for="" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" placeholder="Digite seu nome" aria-describedby="helpId"/>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">E-mail</label>
            <input type="email" name="email"  class="form-control" placeholder="Digite seu e-mail: ex. exemplo@exemplo.com" aria-describedby="helpId"/>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Assunto</label>
            <input type="text" name="subject"  class="form-control" placeholder="" aria-describedby="helpId"/>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Mensagem</label>
            <textarea name="message" class="form-control"  cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-dark" >Enviar</button>
</form>