<div class="corpo">

  <div class="uk-inline">
    <button class=" back-to-top"  type="button" uk-tooltip="title: Cadastrar; pos: left"><span uk-icon="icon: users; ratio: 1.3"></span></button>
    <div class="hover" uk-dropdown="pos: top-center; animation: uk-animation-slide-bottom-small; duration: 600" >
      <!--<button class="testar uk-button-default" type="button">Hover</button>-->
      <div class="uk-inline buttonCad" >
        <button class="pessoas uk-button-default" type="button" uk-tooltip="title: Funcionários; pos: left"><span uk-icon="icon: users; ratio: 1.3"></button>
        <!--<button class="uk-button uk-button-default" type="button">Click</button>-->
        <div class="cadastro" uk-drop="pos: right-center; mode: click; offset: 10;">
          <div class="uk-card  uk-card-default">


            <div class="uk-card-body" style="padding: 10px 40px 40px 40px !important;">
               <div class=" header-cadastrar">Responsável Pelo Sistema</div>
              <form class="form" action="" uk-grid method="post" style="height: 100% !important">
                <div class="uk-width-1-1 " style="padding : 0;">
                  <input class="uk-input" name="nome_pessoas" type="text" placeholder="Responsável">
                </div>
                <div class="uk-width-1-1 " style="padding : 0; margin-top:20px;">
                  <input class="uk-input" name="telefone_pessoas" type="text" placeholder="Telefone">
                </div>
                <div class="uk-width-1-1@s " style="margin-top:20px;">
                  <button class="uk-button uk-button-primary uk-align-right@s uk-width-1-2" type="submit"> Cadastrar
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="uk-inline buttonCad">
        <button class="empresa uk-button-default" type="button" uk-tooltip="title: Empresa; pos: left"><span uk-icon="icon: home; ratio: 1.3"></button>
        <!--<button class="uk-button uk-button-default" type="button">Click</button>-->
        <div class="cadastro" uk-drop="pos: right-center; mode: click; offset: 10;">
          <div class="uk-card  uk-card-default">


            <div class="uk-card-body" style="padding: 10px 40px 40px 40px !important;">
               <div class=" header-cadastrar">Cliente</div>
              <form class="form" action="" uk-grid method="post" style="height: 100% !important">
                <div class="uk-width-1-1 " style="padding : 0;">
                  <input class="uk-input" name="nome_empresas" type="text" placeholder="Empresa">
                </div>
                <div class="uk-width-1-1 " style="padding : 0; margin-top:20px;">
                  <input class="uk-input" name="link_empresas" type="text" placeholder="Link do Sistema">
                </div>
                <div class="uk-width-1-2@s uk-grid-margin uk-first-column" style="padding : 0; margin-top:20px;">
                  <input class="uk-input" name="senha_empresas" type="password" placeholder="Senha Dev">
                </div>
                <div class="uk-width-1-2@s" style="margin-top:20px;">
                  <button class="uk-button uk-button-primary uk-align-left@s uk-width-1-1" type="submit"> Cadastrar
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="uk-flex uk-flex-center  uk-text-center" uk-grid style="">
    <?php
    $acessos = $conexao->query("select * from acesso");
    foreach ($acessos as $acesso) {
      ?>
      <div>
        <div class="uk-card uk-card-default uk-card-body ">
          <p style="font-size: 22px !important"><?php echo $acesso['nome'] ?></p><br/>
          <p class="uk-text-left" style="font-size: 16px !important">
            <b>Acesso:</b> <a href="<?php echo $acesso['link'] ?>"
                              target="_blank"><?php echo $acesso['nome'] ?></a><br/>
            <b>Login:</b>&nbsp <?php echo $acesso['login'] ?><br/>
            <b>Senha:</b>&nbsp <span><?php echo $acesso['senha'] ?></span><br/><br/>
          </p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>