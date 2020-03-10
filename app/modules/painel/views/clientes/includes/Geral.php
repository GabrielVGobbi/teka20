<div class="row">
  <div class="col-5 col-sm-3">
    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#permissoes" role="tab" aria-controls="vert-tabs-home" aria-selected="true"><i style="margin-right: 5px;" class="ml-8 fas fa-user-lock"> </i>Permissões</a>
      <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#pagamento" role="tab" aria-controls="vert-tabs-profile" aria-selected="false"><i style="margin-right: 5px;" class="ml-8 fas fa-credit-card"></i> Pagamento</a>
    </div>
  </div>
  <div class="col-7 col-sm-9">
    <div class="tab-content" id="vert-tabs-tabContent">

      <div class="tab-pane text-left fade active show" id="permissoes" role="tabpanel" aria-labelledby="vert-tabs-home-tab">

        <div class="card">
          <div class="card-header ui-sortable-handle">
            <h3 class="card-title">
              <i class="ion ion-clipboard mr-1"></i>
              Permissões
            </h3>
          </div>
          <div class="card-body">
            <ul class="todo-list ui-sortable" data-widget="todo-list">
              <?php foreach ($permissons_all as $pma) : ?>
                <li>
                  <div class="icheck-primary d-inline ml-2">
                    <input type="checkbox" name="permissions[]" <?php echo ($this->user->hasPermissionByidSearch($pma['name'], '', $tableInfo['id_company'], $tableInfo['id_client']) ? "checked" : ""); ?> class="check" value="<?php echo $pma['id']; ?>">
                    <label for="todoCheck1"></label>
                  </div>
                  <span class="text"><?php echo $pma['name']; ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="pagamento" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
      </div>

    </div>
  </div>