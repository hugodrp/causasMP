<?php
/**
 * @var \App\View\AppView $this
 * 
 */
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?= $this->Html->link('CAUSAS', ['controller' => 'Bookmarks', 'action' => 'index'], ['class' => 'navbar-brand']) ?>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <?php if(isset($current_user)): ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <?= $this->Html->link('Mi lista', ['controller' => 'Bookmarks', 'action' => 'index'], ['class' => 'nav-link']) ?>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto">
                    <?php if($current_user['role'] == 'admin'): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <?=  $this->Html->link('Listar Usuarios', ['controller' => 'Users', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                                <?=  $this->Html->link('Crear Usuario', ['controller' => 'Users', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Causas</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <?=  $this->Html->link('Listar Causas', ['controller' => 'Causas', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                                <?=  $this->Html->link('Cargar Causas', ['controller' => 'Causas', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                            </div>
                        </li>
                </ul>
                    <?php endif; ?>                
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?= $this->Html->link('Salir', ['controller' => 'Users', 'action' => 'logout']) ?>
                    </li>
                </ul>
                </ul>
            <?php else: ?>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                       <?= $this->Html->link('Registrarse', ['controller' => 'Users', 'action' => 'add']) ?>
                  </li>
                </ul>
            <?php endif; ?>
        </div>

        <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <?php if(isset($current_user)): ?>
                <ul class="nav navbar-nav">
                    <?php if($current_user['role'] == 'admin'): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <?=  $this->Html->link('Listar usuarios', ['controller' => 'Users', 'action' => 'index']) ?>
                                </li>
                                <li>
                                    <?=  $this->Html->link('Crear usuario', ['controller' => 'Users', 'action' => 'add']) ?>
                                </li>
                            </ul>
                        </li>                        
                    <?php endif; ?>
                    <li>
                        <?= $this->Html->link('Mi lista', ['controller' => 'Bookmarks', 'action' => 'index']) ?>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?= $this->Html->link('Salir', ['controller' => 'Users', 'action' => 'logout']) ?>
                    </li>
                </ul>
            <?php else: ?>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                       <?= $this->Html->link('Registrarse', ['controller' => 'Users', 'action' => 'add']) ?>
                  </li>
                </ul>
            <?php endif; ?>
        </div> -->
    </div>
</nav>
