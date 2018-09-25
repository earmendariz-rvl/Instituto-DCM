<?php include '../head.php'; ?>
<?php include '../header.php'; ?>

<div class="page-content-wrapper ">
  <div class="content ">
    <div class="jumbotron" data-pages="parallax">
      <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
        <div class="inner">
          <ul class="breadcrumb">
            <li>
              <p>DCM</p>
            </li>
            <li><a href="<?php echo $URL; ?>web/roles/" class="active">Roles</a>
            </li>
            <li><a href="<?php echo $URL; ?>web/roles/index.php" class="active">Lista de Roles</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid container-fixed-lg bg-white">
      <div class="panel panel-transparent">
        <div class="panel-heading">
          <div class="panel-title">Lista de Roles de Usuario</div>
          <div class="btn-group pull-right m-b-10">
            <button type="button" class="btn btn-success" id="btnNuevoRol"><i class="fa fa-plus"></i> Agregar Nuevo Rol</button>
          </div>
        </div>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-hover table-condensed" id="clTableRoles">
            <thead>
              <tr>
                <th style="width:30%">Clave</th>
                <th style="width:30%">Nombre</th>
                <th style="width:10%">Activo</th>
                <th style="width:30%">Accion</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade stick-up" id="datosRol" tabindex="-1" role="dialog"  data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog" >
      <div class="modal-content">
        <div class="modal-header clearfix text-left">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <i class="pg-close fs-14"></i>
          </button>
          <h5>Registro de <span class="semi-bold">Roles</span></h5>
        </div>
        <div class="modal-body">
          <input type="hidden" id="idRol" value="0">
          <form id="form-roles" role="form" action="" method="POST">
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Clave</label>
                  <input type="text" class="form-control" id="txtClaveRol" required>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" class="form-control" id="txtNombreRol" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div>
                <input type="checkbox" value="1" id="chkActivoRol">
                <label for="checkbox1">Activo</label>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6"></div>
              <div class="col-sm-3">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              </div>
              <div class="col-sm-3">
                <button  type="submit" class="btn btn-success" >Guardar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php include '../footer.php'; ?>
  <script type="text/javascript" src="../../assets/assets/js/tables.js"></script>
  <script type="text/javascript" src="../../api/js/util.js"></script>
  <script type="text/javascript" src="../../api/js/roles.js"></script>

