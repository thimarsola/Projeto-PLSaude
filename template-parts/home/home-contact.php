<section id="contato" class="contact py-10">
    <div class="container">
        <!-- header -->
         <header class="contact__header t-center mb-9">
             <h2>Você gostaria de <span class="clr-primary-500">Conversar?</span></h2>
         </header>
        <!-- end of header -->

        <!-- content -->
         <div class="contact__content bg-primary-500 p-10">
            <!-- form -->
             <div class="contact__content__form">
                 <form id="form" method="post" enctype="multipart/form-data" class="grid clr-white-500">

                     <!-- group -->
                      <div class="contact__content__form__group">
                          <label for="name" class="pl-4 mb-1">Nome</label>
                          <input type="text" name="name" placeholder="Seu nome" id="name" required>
                      </div>
                     <!-- end of group -->

                     <!-- group -->
                      <div class="contact__content__form__group">
                          <label for="mail" class="pl-4 mb-1">E-mail</label>
                          <input type="email" name="mail" placeholder="Seu e-mail" id="mail" required>
                      </div>
                     <!-- end of group -->

                     <!-- group -->
                      <div class="contact__content__form__group">
                          <label for="company" class="pl-4 mb-1">Empresa</label>
                          <input type="text" name="company" placeholder="Nome da empresa" id="company" required>
                      </div>
                     <!-- end of group -->

                     <!-- group -->
                      <div class="contact__content__form__group">
                          <label for="cnpj" class="pl-4 mb-1">CNPJ</label>
                          <input type="text" name="cnpj" placeholder="CNPJ da empresa" id="cnpj" required>
                      </div>
                     <!-- end of group -->

                     <!-- group -->
                      <div class="contact__content__form__group">
                          <label for="phone" class="pl-4 mb-1">Telefone</label>
                          <input type="text" name="phone" placeholder="Telefone da empresa" id="phone" required>
                      </div>
                     <!-- end of group -->

                     <!-- group -->
                      <div class="contact__content__form__group">
                          <label for="address" class="pl-4 mb-1">Endereço</label>
                          <input type="text" name="address" placeholder="Endereço da empresa" id="address" required>
                      </div>
                     <!-- end of group -->

                     <!-- group -->
                      <div class="contact__content__form__group">
                          <label for="message" class="pl-4 mb-1">Mensagem</label>
                          <textarea name="message" id="message" cols="50" rows="3" placeholder="Escreva sua mensagem"></textarea>
                      </div>
                     <!-- end of group -->

                     <!-- status -->
                      <div class="contact__content__form__status d-none">
                          <div class="contact__content__form__status--loading">
                              <img src="<?= image('spinner.svg') ?>" alt="Carregando" loading="lazy">
                          </div>
                      </div>
                     <!-- end of status -->

                     <!-- button -->
                      <div class="contact__content__form__button t-center">
                          <button id="button-contact" class="btn btn-outline-white-500" type="submit" name="submit" value="submit">
                              <i class="icon-send mr-1"></i>
                              Enviar
                          </button>
                      </div>
                     <!-- end of button -->

                 </form>
             </div> 
            <!-- end of form -->
         </div>
        <!-- end of content -->
    </div>
</section>