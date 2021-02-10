<div class="container-fluid">
    <div class="row h-100">
        <div class="col-12 my-auto">
            <div class="row main text-center">
                <div class="col-sm-12 col-md-5">
                    <img src="/img/logo.png" class="mx-auto d-block img-fluid">
                    <img src="/img/globe.png" class="mx-auto d-block img-fluid">
                    <span class="dvleft d-none d-lg-block"></span>
                </div>
                <div class="col-sm-12 col-md-7 p-2">
                    <?= $this->Flash->render() ?>
                    <p class="site-construcao poppins-light text-uppercase">Site em construção</p>
                    <p class="lulo-clean text2">Unimos consumidores conscientes a empreendedores éticos!</p>
                    <p class="poppins-light text3">Estamos contruindo uma plataforma diferente de tudo que você já viu.<br>Um novo ecossistema de impacto positivo onde você fará diferente encontrando seus iguais.</p>

                    <div style="max-width: 500px; margin:50px auto auto auto;">
                        <p class="poppins-light text-left">Junte-se a nós!<br>Deixe seus dados e receba o aviso do nosso lançamento.</p>

                        <?= $this->Form->create($newsletter) ?>
                        <div class="form-group">
                            <?= $this->form->input('name', ['class' => 'form-control bgroxo', 'style' => 'max-width: 460px', 'required', 'placeholder' => __("Nome") . ':']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->form->input('email', ['class' => 'form-control bgroxo', 'style' => 'max-width: 460px', 'required', 'placeholder' => __("Email") . ':', 'type' => 'email']) ?>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-dark float-left">Enviar</button>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>