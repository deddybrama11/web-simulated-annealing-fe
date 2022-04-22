<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSubMenuModalLabel">tambah karyawan baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('menu/submenu'); ?>" method="post">


      <div class="modal-body">
        <div class="form-group">

<input type="text" class="form-control"
id="name" name="name" placeholder="Submenu name">
</div>


<div class="form-group">
<input type="text" class="form-control"
id="email" name="email" placeholder="email">
</div>
<div class="form-group">
<input type="text" class="form-control"
id="no_hp" name="no_hp" placeholder="Nomor Handphone">
</div>

<div class="form-group">
<input type="text" class="form-control"
id="image" name="image" placeholder="image">
</div>
<div class="form-group">
<input type="password" class="form-control form-control-user" id="password32"  name="password32" placeholder="Password">
<?= form_error('password32', '<small class="text-danger pl-3">', '</small>'); ?>
</div>
<div class="form-group">
<input type="password" class="form-control form-control-user" id="password42" name="password42"  placeholder="Repeat Password">
</div>
<div class="form-group">
<input type="text" class="form-control"
id="rule_id" name="rule_id" placeholder="rule_id">
</div>
<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox"
value="1" name="is_active" id="is_active" checked>
<label class="form-check-label" for="is_active">
Active?
</label>
</div>

</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
        </form>
    </div>
  </div>
</div>
